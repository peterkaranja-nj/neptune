<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearSitemapCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the sitemap cache to force regeneration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::forget('sitemap_xml_cache');

        $this->info('Sitemap cache cleared successfully.');
        $this->info('The sitemap will be regenerated on the next request.');

        return Command::SUCCESS;
    }
}
