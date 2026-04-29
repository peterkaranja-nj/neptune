<x-app-layout>
    <section class="w-full px-4 py-16 mx-auto max-w-7xl">
        <div class="text-center">
            <div class="mb-8">
                <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
                <h2 class="text-3xl font-semibold text-gray-600 mb-4">Page Not Found</h2>
                <p class="text-lg text-gray-500 mb-8">
                    Sorry, the page you're looking for doesn't exist or may have been moved.
                </p>
            </div>

            <!-- Helpful Links -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">Corporate Services</h3>
                    <ul class="text-left space-y-2">
                        <li><a href="/corporate/ibc-formation" class="text-blue-600 hover:text-blue-800">IBC Formation</a></li>
                        <li><a href="/corporate/bank-account-opening" class="text-blue-600 hover:text-blue-800">Bank Account Opening</a></li>
                        <li><a href="/corporate/trust-and-foundation-registration" class="text-blue-600 hover:text-blue-800">Trust Registration</a></li>
                    </ul>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">Licensing Services</h3>
                    <ul class="text-left space-y-2">
                        <li><a href="/licensing/brokerage-forex" class="text-blue-600 hover:text-blue-800">Forex License</a></li>
                        <li><a href="/licensing/digital-assets" class="text-blue-600 hover:text-blue-800">Crypto License</a></li>
                        <li><a href="/licensing/gaming-and-gambling" class="text-blue-600 hover:text-blue-800">Gaming License</a></li>
                    </ul>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">Popular Pages</h3>
                    <ul class="text-left space-y-2">
                        <li><a href="/blog" class="text-blue-600 hover:text-blue-800">Blog</a></li>
                        <li><a href="/about" class="text-blue-600 hover:text-blue-800">About Us</a></li>
                        <li><a href="/contact" class="text-blue-600 hover:text-blue-800">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Search Box -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-4">Search Our Website</h3>
                <div class="max-w-md mx-auto">
                    <input type="text" placeholder="Search for services, blog posts..."
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           onkeypress="handleSearch(event)">
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-x-4">
                <a href="/" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                    Return Home
                </a>
                <a href="/contact" class="inline-block bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                    Contact Support
                </a>
            </div>
        </div>
    </section>

    <script>
        function handleSearch(event) {
            if (event.key === 'Enter') {
                const query = event.target.value.toLowerCase();

                // Simple search redirect logic
                if (query.includes('forex') || query.includes('brokerage')) {
                    window.location.href = '/licensing/brokerage-forex';
                } else if (query.includes('crypto') || query.includes('digital')) {
                    window.location.href = '/licensing/digital-assets';
                } else if (query.includes('ibc') || query.includes('formation')) {
                    window.location.href = '/corporate/ibc-formation';
                } else if (query.includes('blog')) {
                    window.location.href = '/blog';
                } else if (query.includes('contact')) {
                    window.location.href = '/contact';
                } else {
                    // Default to Google site search
                    window.open(`https://www.google.com/search?q=site:neptunecorporate.com ${query}`, '_blank');
                }
            }
        }
    </script>
</x-app-layout>