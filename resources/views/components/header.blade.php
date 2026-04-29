<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-10 w-auto" src="/images/neptune-3.png" alt="Company Logo">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" onclick="toggleHeader('mainMenu')" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-6 lg:justify-end">
            <a href="/" class="text-xs font-semibold leading-6 text-gray-900">Home</a>
            <a href="/about" class="text-xs font-semibold leading-6 text-gray-900">About Us</a>

            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900" aria-expanded="false" onclick="toggleMenu('corporateMenu')">
                    Offshore Company Registration
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Flyout menu -->
                <div id="corporateMenu" class="hidden absolute -left-8 top-full z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" onmouseleave="hideMenu('corporateMenu')">
                    <div class="p-2 border-t border-yellow-600">
                        <div class="group relative flex items-center gap-x-4 px-2 rounded-lg text-xs font-bold leading-6">
                            <div class="flex flex-col">
                                <a href="{{ route('corporate.ibc-formation') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    IBC Formation
                                </a>
                                <a href="{{ route('corporate.registered-agent-services') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Registered Agent Services
                                </a>
                                <a href="{{ route('corporate.trust-and-foundation-registration') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Trust and Foundation Registration
                                </a>
                                <a href="{{ route('corporate.nominee-director-and-shareholder-access') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Nominee Director and Shareholder Access
                                </a>
                                <a href="{{ route('corporate.bank-account-opening') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Bank Account Opening
                                </a>
                                <a href="{{ route('corporate.accounting-and-auditing') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Accounting and Auditing Services
                                </a>
                                <a href="{{ route('corporate.legal-opinions-of-distiction') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Legal Opinions of Distinctions
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900" aria-expanded="false" onclick="toggleMenu('licensingMenu')">
                    Global Licensing
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="licensingMenu" class="hidden absolute -left-8 top-full z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" onmouseleave="hideMenu('licensingMenu')">
                    <div class="p-2 border-t border-yellow-600">
                        <div class="group relative flex items-center gap-x-4 px-2 rounded-lg text-xs font-bold leading-6">
                            <div class="flex flex-col">
                                <a href="{{ route('licensing.brokerage-forex') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Brokerage/Forex
                                </a>
                                <a href="{{ route('licensing.gaming-and-gambling') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Gambling & Gaming
                                </a>
                                <a href="{{ route('licensing.insurance') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Insurance
                                </a>
                                <a href="{{ route('licensing.banking') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Banking
                                </a>
                                <a href="{{ route('licensing.digital-assets') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Cryptocurrencies and Digital Assets
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900" aria-expanded="false" onclick="toggleMenu('servicesMenu')">
                    Other Services
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="servicesMenu" class="hidden absolute -left-8 top-full z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" onmouseleave="hideMenu('servicesMenu')">
                    <div class="p-2 border-t border-yellow-600">
                        <div class="group relative flex items-center gap-x-4 px-2 rounded-lg text-xs font-bold leading-6">
                            <div class="flex flex-col">
                                <a href="{{ route('other-services.aircraft-and-shipping-registration') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Aircraft and Shipping Registration
                                </a>
                                <a href="{{ route('other-services.assets-and-investments-advisory') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Assets And Investment Advisory
                                </a>
                                <a href="{{ route('other-services.credit-and-bond-institutions') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Credit and Bond Institutions
                                </a>
                                <a href="{{ route('other-services.data-reporting') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Data Reporting
                                </a>
                                <a href="{{ route('other-services.electronic-and-money-services-business') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Electronic and Money Services Businesses
                                </a>
                                <a href="{{ route('other-services.investment-funds') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Investments and Funds
                                </a>
                                <a href="{{ route('other-services.limited-liability-companies') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Limited Liability Companies
                                </a>
                                <a href="{{ route('other-services.pension-services') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Pension Services
                                </a>
                                <a href="{{ route('other-services.trademark-registration') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Trademark Registration
                                </a>
                                <a href="{{ route('other-services.trust-services') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Trust Services
                                </a>
                                <a href="{{ route('other-services.virtual-office-services') }}" class="text-gray-800 hover:text-white hover:bg-yellow-600 rounded-full px-1">
                                    Virtual Office Services
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <a href="/jurisdictions" class="text-xs font-semibold leading-6 text-gray-900">Jurisdictions</a>
            <a href="/blog" class="text-xs font-semibold leading-6 text-gray-900">Blog</a>
            <a href="/contact" class="text-xs bg-yellow-600 px-2 font-semibold rounded-md leading-6 text-white">Contact Us</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mainMenu" class="lg:hidden hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="/images/neptune-3.png" alt="Company Logo">
                </a>
                <button type="button" onclick="toggleHeader('mainMenu')" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">About</a>
                        <div class="-mx-3">
                            <button type="button" onclick="toggleSubMenu('disclosure-1')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                Offshore Company Registration

                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-1" style="display: none;">
                                <a href="{{ route('corporate.ibc-formation') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    International Business Offshore Company Registration (IBCF)
                                </a>
                                <a href="{{ route('corporate.registered-agent-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Registered Agent Services
                                </a>
                                <a href="{{ route('corporate.trust-and-foundation-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Trust and Foundation Registration
                                </a>
                                <a href="{{ route('corporate.nominee-director-and-shareholder-access') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Nominee Director and Shareholder Access
                                </a>
                                <a href="{{ route('corporate.bank-account-opening') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Bank Account Opening
                                </a>
                                <a href="{{ route('corporate.accounting-and-auditing') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Accounting and Auditing Services
                                </a>
                                <a href="{{ route('corporate.legal-opinions-of-distiction') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Legal Opinions of Distinctions
                                </a>
                            </div>
                        </div>
                        <div class="-mx-3">
                            <button type="button" onclick="toggleSubMenu('disclosure-2')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                Global Licensing

                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-2" style="display: none;">


                                <a href="{{ route('licensing.brokerage-forex') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Brokerage/Forex
                                </a>
                                <a href="{{ route('licensing.gaming-and-gambling') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Gambling & Gaming
                                </a>
                                <a href="{{ route('licensing.insurance') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Insurance
                                </a>
                                <a href="{{ route('licensing.banking') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Banking
                                </a>
                                <a href="{{ route('licensing.digital-assets') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Cryptocurrencies and Digital Assets
                                </a>


                            </div>


                        </div>
                        <div class="-mx-3">
                            <button type="button" onclick="toggleSubMenu('disclosure-3')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                Other Services

                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-3" style="display: none;">
                                <a href="{{ route('other-services.aircraft-and-shipping-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Aircraft and Shipping Registration
                                </a>
                                <a href="{{ route('other-services.assets-and-investments-advisory') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Assets And Investment Advisory
                                </a>
                                <a href="{{ route('other-services.credit-and-bond-institutions') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Credit and Bond Institutions
                                </a>
                                <a href="{{ route('other-services.data-reporting') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Data Reporting
                                </a>
                                <a href="{{ route('other-services.electronic-and-money-services-business') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Electronic and Money Services Businesses
                                </a>
                                <a href="{{ route('other-services.investment-funds') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Investments and Funds
                                </a>
                                <a href="{{ route('other-services.limited-liability-companies') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Limited Liability Companies
                                </a>
                                <a href="{{ route('other-services.pension-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Pension Services
                                </a>
                                <a href="{{ route('other-services.trademark-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Trademark Registration
                                </a>
                                <a href="{{ route('other-services.trust-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Trust Services
                                </a>
                                <a href="{{ route('other-services.virtual-office-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Virtual Office Services
                                </a>
                            </div>
                        </div>
                        <a href="/jurisdictions" class="-mx-3 block rounded-lg px-3 py-2 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Jurisdictions</a>
                        <a href="/blog" class="-mx-3 block rounded-lg px-3 py-2 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
                        <a href="/contact" class="-mx-3 block rounded-lg px-3 py-2 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style scoped>

 body, p, div, h4, a, button {
    font-size: 15px !important;
    line-height: 1.6 !important; /* or use 18px if you prefer fixed values */
  }
 
  
</style>

<script>
    // FIX: Close ALL other dropdowns before opening a new one
    const allMenus = ['corporateMenu', 'licensingMenu', 'servicesMenu'];

    function toggleMenu(menuId) {
        allMenus.forEach(function(id) {
            if (id !== menuId) {
                document.getElementById(id).classList.add('hidden');
            }
        });
        document.getElementById(menuId).classList.toggle('hidden');
    }

    function hideMenu(menuId) {
        document.getElementById(menuId).classList.add('hidden');
    }

    function toggleSubMenu(menuId) {
        var menu = document.getElementById(menuId);
        var isVisible = menu.style.display === 'block';
        menu.style.display = isVisible ? 'none' : 'block';
    }

    function toggleHeader(mainMenu) {
        document.getElementById(mainMenu).classList.toggle('hidden');
    }

    // FIX: Open on hover, close when mouse leaves
    document.addEventListener('DOMContentLoaded', function () {
        allMenus.forEach(function(menuId) {
            var menu = document.getElementById(menuId);
            if (!menu) return;
            var parent = menu.closest('.relative');
            if (!parent) return;

            parent.addEventListener('mouseenter', function () {
                // Close all others first
                allMenus.forEach(function(id) {
                    if (id !== menuId) {
                        document.getElementById(id).classList.add('hidden');
                    }
                });
                menu.classList.remove('hidden');
            });

            parent.addEventListener('mouseleave', function () {
                menu.classList.add('hidden');
            });
        });
    });
</script>