@props([
    'metaDescription' => null,
    'canonical' => null,
    'title' => 'Neptune Fiduciaries – Corporate & Offshore Solutions',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{--  FIX 1: Only ONE <head> tag in the entire document --}}
<head>
    <meta charset="utf-8">

    {{--  FIX 2: <title> is strictly inside <head> --}}
    <title>{{ $title }}</title>

    {{--  FIX 3: <link rel="canonical"> is strictly inside <head> --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{--  FIX 4: <meta name="description"> is strictly inside <head> --}}
    <meta name="description" content="{{ $metaDescription ?? 'Neptune Fiduciaries offers expert offshore company registration, global licensing, bank account opening and fiduciary services across 60+ jurisdictions.' }}">

    <meta name="google-site-verification" content="TitWIrqQqebVuwq5ZpJJ6OoMa3RTMUexbJNoE63pcdY" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msvalidate.01" content="D85C8534F9EDB7D73B287ED7371FA58B" />

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6RZ8C4MF1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T6RZ8C4MF1');
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/mark-svg.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/mark-svg.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">

    <!-- Schema JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfessionalService",
          "@id": "https://neptunecorporate.com/#organization",
          "name": "Neptune Fiduciaries",
          "url": "https://neptunecorporate.com/",
          "logo": "https://neptunecorporate.com/images/neptune-3.png",
          "image": "https://neptunecorporate.com/images/bg-neptune.jpg",
          "description": "Corporate solutions including IBC, LLC, registered agent, nominee services & virtual offices for global entrepreneurs and investors.",
          "telephone": "+254 721 441 544",
          "email": "info@neptunecorporate.com",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Delta Corner Annex, Ring Rd Westlands",
            "addressLocality": "Nairobi",
            "postalCode": "00800",
            "addressCountry": "KE"
          },
          "sameAs": [
            "https://www.linkedin.com/company/neptune-fiduciaries-group/"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://neptunecorporate.com/#website",
          "url": "https://neptunecorporate.com/",
          "name": "Neptune Fiduciaries",
          "publisher": { "@id": "https://neptunecorporate.com/#organization" }
        }
      ]
    }
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }

        .preloader {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: #ffffff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .preloader img {
            animation: spin 3s linear infinite;
        }
        .loaded { display: none; }
    </style>
</head>

<body>
    <div class="preloader" id="preloader">
        <img src="{{ asset('images/mark-svg.png') }}" alt="Company Logo" class="w-12 h-12">
    </div>

    <div class="loaded" id="loaded">
        @include('components.header')

        <main>
            {{ $slot }}
        </main>

        <!-- Tawk.to Chat -->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/662377ffa0c6737bd12e75a1/1hrt8pgb1';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
        </script>

        @include('components.footer')
    </div>

    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.display = 'none';
            const loaded = document.getElementById('loaded');
            loaded.style.opacity = '0';
            loaded.style.display = 'block';
            loaded.style.transition = 'opacity 0.55s ease';
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    loaded.style.opacity = '1';
                });
            });
        });
    </script>
</body>

</html>