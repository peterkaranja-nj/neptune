<header class="bg-white sticky top-0 z-50 shadow-sm">
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
        <div class="hidden lg:flex lg:gap-x-6 lg:justify-end lg:items-center">
            <a href="/" class="text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200">Home</a>
            <a href="/about" class="text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200">About Us</a>

            <!-- Offshore Company Registration -->
            <div class="relative" id="corporate-wrapper">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200" aria-expanded="false">
                    Offshore Company Registration
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="corporateMenu" class="dropdown-panel hidden absolute -left-8 top-full mt-2 z-10 w-72 rounded-2xl bg-white shadow-xl ring-1 ring-gray-900/5 overflow-hidden">
                    <div class="p-4">
                        <div class="border-b border-yellow-500 mb-3"></div>
                        <div class="flex flex-col gap-0.5">
                            <a href="{{ route('corporate.ibc-formation') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>IBC Formation</a>
                            <a href="{{ route('corporate.registered-agent-services') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Registered Agent Services</a>
                            <a href="{{ route('corporate.trust-and-foundation-registration') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Trust and Foundation Registration</a>
                            <a href="{{ route('corporate.nominee-director-and-shareholder-access') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Nominee Director and Shareholder Access</a>
                            <a href="{{ route('corporate.bank-account-opening') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Bank Account Opening</a>
                            <a href="{{ route('corporate.accounting-and-auditing') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Accounting and Auditing Services</a>
                            <a href="{{ route('corporate.legal-opinions-of-distiction') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Legal Opinions of Distinctions</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Licensing -->
            <div class="relative" id="licensing-wrapper">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200" aria-expanded="false">
                    Global Licensing
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="licensingMenu" class="dropdown-panel hidden absolute -left-8 top-full mt-2 z-10 w-72 rounded-2xl bg-white shadow-xl ring-1 ring-gray-900/5 overflow-hidden">
                    <div class="p-4">
                        <div class="border-b border-yellow-500 mb-3"></div>
                        <div class="flex flex-col gap-0.5">
                            <a href="{{ route('licensing.brokerage-forex') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Brokerage/Forex</a>
                            <a href="{{ route('licensing.gaming-and-gambling') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Gambling & Gaming</a>
                            <a href="{{ route('licensing.insurance') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Insurance</a>
                            <a href="{{ route('licensing.banking') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Banking</a>
                            <a href="{{ route('licensing.digital-assets') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Cryptocurrencies and Digital Assets</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Services -->
            <div class="relative" id="services-wrapper">
                <button type="button" class="flex items-center gap-x-1 text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200" aria-expanded="false">
                    Other Services
                    <svg class="h-3 w-3 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="servicesMenu" class="dropdown-panel hidden absolute -left-8 top-full mt-2 z-10 w-72 rounded-2xl bg-white shadow-xl ring-1 ring-gray-900/5 overflow-hidden">
                    <div class="p-4">
                        <div class="border-b border-yellow-500 mb-3"></div>
                        <div class="flex flex-col gap-0.5 max-h-72 overflow-y-auto pr-1">
                            <a href="{{ route('other-services.aircraft-and-shipping-registration') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Aircraft and Shipping Registration</a>
                            <a href="{{ route('other-services.assets-and-investments-advisory') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Assets And Investment Advisory</a>
                            <a href="{{ route('other-services.credit-and-bond-institutions') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Credit and Bond Institutions</a>
                            <a href="{{ route('other-services.data-reporting') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Data Reporting</a>
                            <a href="{{ route('other-services.electronic-and-money-services-business') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Electronic and Money Services Businesses</a>
                            <a href="{{ route('other-services.investment-funds') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Investments and Funds</a>
                            <a href="{{ route('other-services.limited-liability-companies') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Limited Liability Companies</a>
                            <a href="{{ route('other-services.pension-services') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Pension Services</a>
                            <a href="{{ route('other-services.trademark-registration') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Trademark Registration</a>
                            <a href="{{ route('other-services.trust-services') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Trust Services</a>
                            <a href="{{ route('other-services.virtual-office-services') }}" class="flex items-center gap-2.5 text-xs text-gray-700 font-medium px-3 py-2 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-150">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span>Virtual Office Services</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/jurisdictions" class="text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200">Jurisdictions</a>
            <a href="/blog" class="text-xs font-semibold leading-6 text-gray-900 hover:text-yellow-600 transition-colors duration-200">Blog</a>
            <a href="/contact" class="text-xs bg-yellow-600 hover:bg-yellow-700 px-4 py-2 font-semibold rounded-lg text-white transition-colors duration-200 shadow-sm hover:shadow-md">Contact Us</a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mainMenu" class="lg:hidden hidden" role="dialog" aria-modal="true">
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
                            <button type="button" onclick="toggleSubMenu('disclosure-1')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Offshore Company Registration
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="mt-2 space-y-2" id="disclosure-1" style="display: none;">
                                <a href="{{ route('corporate.ibc-formation') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">International Business Offshore Company Registration (IBCF)</a>
                                <a href="{{ route('corporate.registered-agent-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Registered Agent Services</a>
                                <a href="{{ route('corporate.trust-and-foundation-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Trust and Foundation Registration</a>
                                <a href="{{ route('corporate.nominee-director-and-shareholder-access') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Nominee Director and Shareholder Access</a>
                                <a href="{{ route('corporate.bank-account-opening') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Bank Account Opening</a>
                                <a href="{{ route('corporate.accounting-and-auditing') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Accounting and Auditing Services</a>
                                <a href="{{ route('corporate.legal-opinions-of-distiction') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Legal Opinions of Distinctions</a>
                            </div>
                        </div>
                        <div class="-mx-3">
                            <button type="button" onclick="toggleSubMenu('disclosure-2')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Global Licensing
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="mt-2 space-y-2" id="disclosure-2" style="display: none;">
                                <a href="{{ route('licensing.brokerage-forex') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Brokerage/Forex</a>
                                <a href="{{ route('licensing.gaming-and-gambling') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Gambling & Gaming</a>
                                <a href="{{ route('licensing.insurance') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Insurance</a>
                                <a href="{{ route('licensing.banking') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Banking</a>
                                <a href="{{ route('licensing.digital-assets') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Cryptocurrencies and Digital Assets</a>
                            </div>
                        </div>
                        <div class="-mx-3">
                            <button type="button" onclick="toggleSubMenu('disclosure-3')" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Other Services
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="mt-2 space-y-2" id="disclosure-3" style="display: none;">
                                <a href="{{ route('other-services.aircraft-and-shipping-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Aircraft and Shipping Registration</a>
                                <a href="{{ route('other-services.assets-and-investments-advisory') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Assets And Investment Advisory</a>
                                <a href="{{ route('other-services.credit-and-bond-institutions') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Credit and Bond Institutions</a>
                                <a href="{{ route('other-services.data-reporting') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Data Reporting</a>
                                <a href="{{ route('other-services.electronic-and-money-services-business') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Electronic and Money Services Businesses</a>
                                <a href="{{ route('other-services.investment-funds') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Investments and Funds</a>
                                <a href="{{ route('other-services.limited-liability-companies') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Limited Liability Companies</a>
                                <a href="{{ route('other-services.pension-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Pension Services</a>
                                <a href="{{ route('other-services.trademark-registration') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Trademark Registration</a>
                                <a href="{{ route('other-services.trust-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Trust Services</a>
                                <a href="{{ route('other-services.virtual-office-services') }}" class="block rounded-lg py-2 pl-6 pr-3 text-xs font-semibold leading-7 text-gray-900 hover:bg-gray-50">Virtual Office Services</a>
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

<style>
    body, p, div, h4, a, button {
        font-size: 15px !important;
        line-height: 1.6 !important;
    }

    @keyframes dropdownIn {
        from { opacity: 0; transform: translateY(-8px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    @keyframes dropdownOut {
        from { opacity: 1; transform: translateY(0); }
        to   { opacity: 0; transform: translateY(-8px); }
    }

    .dropdown-opening {
        animation: dropdownIn 0.18s ease forwards;
    }

    .dropdown-closing {
        animation: dropdownOut 0.15s ease forwards;
    }
</style>

<script>
    const menuConfig = [
        { wrapperId: 'corporate-wrapper', menuId: 'corporateMenu' },
        { wrapperId: 'licensing-wrapper', menuId: 'licensingMenu' },
        { wrapperId: 'services-wrapper',  menuId: 'servicesMenu'  },
    ];

    function openDropdown(menu) {
        menuConfig.forEach(cfg => {
            const m = document.getElementById(cfg.menuId);
            if (m !== menu && !m.classList.contains('hidden')) {
                closeDropdown(m);
            }
        });
        menu.classList.remove('hidden', 'dropdown-closing');
        void menu.offsetWidth;
        menu.classList.add('dropdown-opening');
    }

    function closeDropdown(menu) {
        if (menu.classList.contains('hidden')) return;
        menu.classList.remove('dropdown-opening');
        menu.classList.add('dropdown-closing');
        setTimeout(() => {
            menu.classList.add('hidden');
            menu.classList.remove('dropdown-closing');
        }, 150);
    }

    document.addEventListener('DOMContentLoaded', function () {
        menuConfig.forEach(function ({ wrapperId, menuId }) {
            const wrapper = document.getElementById(wrapperId);
            const menu    = document.getElementById(menuId);
            if (!wrapper || !menu) return;

            let closeTimer = null;

            wrapper.addEventListener('mouseenter', function () {
                clearTimeout(closeTimer);
                openDropdown(menu);
            });

            wrapper.addEventListener('mouseleave', function () {
                closeTimer = setTimeout(function () { closeDropdown(menu); }, 150);
            });

            menu.addEventListener('mouseenter', function () {
                clearTimeout(closeTimer);
            });

            menu.addEventListener('mouseleave', function () {
                closeTimer = setTimeout(function () { closeDropdown(menu); }, 150);
            });
        });

        document.addEventListener('click', function (e) {
            menuConfig.forEach(function ({ wrapperId, menuId }) {
                const wrapper = document.getElementById(wrapperId);
                if (wrapper && !wrapper.contains(e.target)) {
                    closeDropdown(document.getElementById(menuId));
                }
            });
        });
    });

    function toggleSubMenu(menuId) {
        var menu = document.getElementById(menuId);
        var isVisible = menu.style.display === 'block';
        menu.style.display = isVisible ? 'none' : 'block';
    }

    function toggleHeader(mainMenu) {
        document.getElementById(mainMenu).classList.toggle('hidden');
    }
</script>
