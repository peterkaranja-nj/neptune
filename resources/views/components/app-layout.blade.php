@props([
    'metaDescription' => null,
    'canonical' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="TitWIrqQqebVuwq5ZpJJ6OoMa3RTMUexbJNoE63pcdY" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T6RZ8C4MF1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T6RZ8C4MF1');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msvalidate.01" content="D85C8534F9EDB7D73B287ED7371FA58B" />

    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
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
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Corporate & Fiduciary Services",
            "itemListElement": [
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Offshore Company Registration", "url": "https://neptunecorporate.com/offshore-company-registration/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Registered Agent Services", "url": "https://neptunecorporate.com/registered-agent-services/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Trust & Foundation Registration", "url": "https://neptunecorporate.com/trust-and-foundation-registration/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Nominee Director Access", "url": "https://neptunecorporate.com/nominee-director-and-shareholder-access/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bank Account Opening", "url": "https://neptunecorporate.com/bank-account-opening/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Accounting & Auditing Services", "url": "https://neptunecorporate.com/accounting-and-auditing-services/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Legal Opinions", "url": "https://neptunecorporate.com/legal-opinions-of-distinctions/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Brokerage / Forex Licensing", "url": "https://neptunecorporate.com/brokerage-forex/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Gambling & Gaming License", "url": "https://neptunecorporate.com/gambling-and-gaming/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Insurance License", "url": "https://neptunecorporate.com/insurance/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Banking License", "url": "https://neptunecorporate.com/banking/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Cryptocurrencies & Digital Assets Licensing", "url": "https://neptunecorporate.com/cryptocurrencies-and-digital-assets/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Trademark Registration", "url": "https://neptunecorporate.com/trademark-registration/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Virtual Office Services", "url": "https://neptunecorporate.com/virtual-office-services/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Assets & Investment Advisory", "url": "https://neptunecorporate.com/assets-and-investment-advisory/" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Pension Services", "url": "https://neptunecorporate.com/pension-services/" } }
            ]
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://neptunecorporate.com/#website",
          "url": "https://neptunecorporate.com/",
          "name": "Neptune Fiduciaries",
          "publisher": { "@id": "https://neptunecorporate.com/#organization" },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://neptunecorporate.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Add animation to rotate the logo */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .preloader img {
            /* Apply animation to the logo */
            animation: spin 3s linear infinite;
            /* Adjust the duration as needed */
        }

        .loaded {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <!-- Replace the SVG with your logo image -->
        <img src="{{ asset('images/mark-svg.png') }}" alt="Company Logo" class="w-12 h-12"> <!-- Adjust the size as needed -->
    </div>

    <div class="loaded" id="loaded">
        @include('components.header')

        <main class="">
            {{ $slot }}
        </main>

        <!--Start of Tawk.to Script-->
       <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
        <!--End of Tawk.to Script-->
        @include('components.footer')
    </div>

    <script>
        window.addEventListener('load', function() {
            var preloader = document.getElementById('preloader');
            var loaded = document.getElementById('loaded');

            preloader.style.display = 'none';
            loaded.style.display = 'block';
        });
    </script>

</body>

</html>
