<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class SitemapController extends Controller
{
    private $baseUrl = 'https://neptunecorporate.com';

    public function index()
    {
        $cacheKey = 'sitemap_xml_cache';
        $cacheMinutes = 60; // Cache for 1 hour

        $xml = Cache::remember($cacheKey, $cacheMinutes, function () {
            $routes = $this->getAllRoutes();
            
            $xml = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

            foreach ($routes as $route) {
                $xml .= '<url>';
                $xml .= '<loc>' . htmlspecialchars($route['url']) . '</loc>';
                $xml .= '<lastmod>' . $route['lastmod'] . '</lastmod>';
                $xml .= '<changefreq>' . $route['changefreq'] . '</changefreq>';
                $xml .= '<priority>' . $route['priority'] . '</priority>';
                $xml .= '</url>';
            }

            $xml .= '</urlset>';
            
            return $xml;
        });

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    private function getAllRoutes()
    {
        $routes = [];
        
        // Get all registered routes from Laravel
        $laravelRoutes = Route::getRoutes();
        
        foreach ($laravelRoutes as $route) {
            $methods = $route->methods();
            $uri = $route->uri();
            
            // Skip non-GET routes and routes with parameters
            if (!in_array('GET', $methods) || str_contains($uri, '{')) {
                continue;
            }
            
            // Skip API, admin, and utility routes
            if (str_starts_with($uri, 'api/') || 
                str_starts_with($uri, 'admin/') || 
                str_contains($uri, 'sitemap') ||
                str_contains($uri, 'robots') ||
                str_contains($uri, '_debugbar') ||
                $uri === 'sanctum/csrf-cookie') {
                continue;
            }

            $url = $this->baseUrl . '/' . ltrim($uri, '/');
            if ($uri === '/') {
                $url = $this->baseUrl;
            }

            $priority = $this->calculatePriority($uri);
            $changefreq = $this->calculateChangeFreq($uri);
            $lastmod = $this->getLastModified($uri);

            $routes[] = [
                'url' => $url,
                'lastmod' => $lastmod,
                'changefreq' => $changefreq,
                'priority' => $priority
            ];
        }

        // Add any additional blog posts discovered from view files
        $blogRoutes = $this->discoverBlogPosts();
        $routes = array_merge($routes, $blogRoutes);

        // Remove duplicates based on URL
        $uniqueRoutes = [];
        $seenUrls = [];
        
        foreach ($routes as $route) {
            if (!in_array($route['url'], $seenUrls)) {
                $uniqueRoutes[] = $route;
                $seenUrls[] = $route['url'];
            }
        }

        // Sort by priority (highest first) and then by URL
        usort($uniqueRoutes, function($a, $b) {
            $priorityCompare = $b['priority'] <=> $a['priority'];
            if ($priorityCompare === 0) {
                return $a['url'] <=> $b['url'];
            }
            return $priorityCompare;
        });

        return $uniqueRoutes;
    }

    private function discoverBlogPosts()
    {
        $blogRoutes = [];
        $blogViewsPath = resource_path('views/blog');
        
        if (!File::exists($blogViewsPath)) {
            return $blogRoutes;
        }

        $blogFiles = File::files($blogViewsPath);
        
        foreach ($blogFiles as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }
            
            $fileName = $file->getFilenameWithoutExtension();
            
            // Remove .blade if present
            if (str_ends_with($fileName, '.blade')) {
                $fileName = substr($fileName, 0, -6);
            }
            
            $url = $this->baseUrl . '/blog/' . $fileName;
            $lastmod = Carbon::createFromTimestamp($file->getMTime())->toAtomString();
            
            $blogRoutes[] = [
                'url' => $url,
                'lastmod' => $lastmod,
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ];
        }
        
        return $blogRoutes;
    }

    private function calculatePriority($uri)
    {
        // Homepage gets highest priority
        if ($uri === '/' || $uri === '') {
            return '1.0';
        }
        
        // Main sections get high priority
        if (in_array($uri, ['blog', 'about', 'contact', 'jurisdictions'])) {
            return '0.9';
        }
        
        // Service pages get high priority
        if (str_starts_with($uri, 'corporate/') || str_starts_with($uri, 'licensing/')) {
            return '0.8';
        }
        
        // About pages
        if (str_starts_with($uri, 'about/')) {
            return '0.7';
        }
        
        // Other services
        if (str_starts_with($uri, 'other-services/')) {
            return '0.7';
        }
        
        // Blog posts
        if (str_starts_with($uri, 'blog/')) {
            return '0.6';
        }
        
        return '0.5';
    }

    private function calculateChangeFreq($uri)
    {
        // Homepage changes frequently
        if ($uri === '/' || $uri === '') {
            return 'daily';
        }
        
        // Blog section changes weekly
        if ($uri === 'blog') {
            return 'weekly';
        }
        
        // Blog posts change monthly
        if (str_starts_with($uri, 'blog/')) {
            return 'monthly';
        }
        
        // Main sections change weekly
        if (in_array($uri, ['about', 'contact', 'jurisdictions'])) {
            return 'weekly';
        }
        
        // Service pages change monthly
        return 'monthly';
    }

    private function getLastModified($uri)
    {
        // Try to get last modification time from view file
        $viewPaths = [
            resource_path("views/{$uri}.blade.php"),
            resource_path("views/{$uri}/index.blade.php"),
        ];
        
        foreach ($viewPaths as $path) {
            if (File::exists($path)) {
                return Carbon::createFromTimestamp(File::lastModified($path))->toAtomString();
            }
        }
        
        // For blog posts, check the blog view file
        if (str_starts_with($uri, 'blog/')) {
            $blogFile = str_replace('blog/', '', $uri);
            $blogPath = resource_path("views/blog/{$blogFile}.blade.php");
            
            if (File::exists($blogPath)) {
                return Carbon::createFromTimestamp(File::lastModified($blogPath))->toAtomString();
            }
        }
        
        // Default to current time for pages without files
        return Carbon::now()->toAtomString();
    }

    public function clearCache()
    {
        Cache::forget('sitemap_xml_cache');
        return response()->json(['message' => 'Sitemap cache cleared successfully']);
    }
}