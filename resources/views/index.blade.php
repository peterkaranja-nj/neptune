

<x-app-layout>
    
<head>
    <title>@yield('meta_title', 'Neptune Corporate Best Business Setup and Offshore Services')</title>
    <meta name="description" content="@yield('meta_description', 'Corporate solutions including IBC, LLC, registered agent, nominee services & virtual offices for global entrepreneurs and investors.')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
</head>
    <main>
        <div class="">
            <div class="bg-image relative isolate px-6 pt-4 lg:px-8">
                <div class="max-w-2xl py-32 sm:py-48 lg:py-40">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-left">
                        <div class="relative rounded-full px-3 py-1 text-xs leading-6 bg-white text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Elevate your financial horizon with us.
                            <a href="/about">
                                <span class="text-white bg-yellow-600 cursor-pointer rounded-lg px-2 py-0.5">
                                    Read more
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="text-left">
                        <h1 id="slider-text" class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                            Grow your <span class="text-yellow-600">wealth</span> with a
                            trusted advisor
                        </h1>
                        <p class="mt-6 text-sm text-white">
                            Neptune Fiduciaries offers expert financial advisory and offshore management solutions
                            tailored to your unique needs. We navigate the complexities of wealth management, ensuring
                            your financial voyage is smooth sailing.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="relative isolate overflow-hidden bg-gray-100 py-8 sm:py-20">
            <div class="mx-auto px-6 lg:px-8">
                <div class="lg:mx-0">
                    <h2 class="text-2xl font-bold tracking-tight text-purple-900 sm:text-4xl">
                        Our Global <span class="text-yellow-600">Services</span>
                    </h2>
                    <p class="mt-6 text-xs text-gray-800">
                        Neptune Fiduciaries offers a comprehensive range of services
                        tailored to meet the diverse needs of our clients. Our dedicated
                        team of experts provides personalized solutions in areas such as
                        wealth management, estate planning, corporate structuring, and trust
                        administration. With a commitment to excellence and a focus on
                        client satisfaction, we deliver strategic guidance and support to
                        individuals, families, and businesses seeking to optimize their
                        financial affairs and achieve their long-term objectives.
                    </p>
                </div>
                <div class="flex flex-col md:flex-row gap-4 p-4">
                    <div class="w-full">
                        <div class="flex flex-col h-full p-4 rounded-xl bg-white text-gray-700 shadow-md overflow-hidden">
                            <div class="flex items-center justify-center w-full h-60">
                                <img src="images/company-2.png" alt="Company Formation Image" class="w-full h-60 object-cover rounded-lg" />
                            </div>
                            <div class="flex flex-col flex-grow mt-4">
                                <h3 class="font-semibold text-sm text-purple-800">
                                    Offshore Company Formation
                                </h3>
                                <p class="mb-4 text-xs leading-relaxed text-gray-700">
                                    Expert advice on the acquisition of an offshore company. With services in over 60 jurisdictions, you can trust Neptune
                                    Fiduciaries to take care of all your company formation needs, from paperwork to legal requirements.
                                </p>
                              <div class="flex justify-end">
                                  <a href="/about" class="w-[6.5rem] text-center bg-yellow-600 hover:bg-purple-800 text-white py-1 px-2 rounded-lg text-xs">
                                      Read More
                                  </a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col h-full p-4 rounded-xl bg-white text-gray-700 shadow-md overflow-hidden">
                            <div class="flex items-center justify-center w-full h-60">
                                <img src="images/nep-2.jpg" alt="Global Licensing" class="w-full h-60 object-cover rounded-lg" />
                            </div>
                            <div class="flex flex-col flex-grow mt-4">
                                <h3 class="font-semibold text-sm text-purple-800">Licensing</h3>
                                <p class="mb-4 text-xs leading-relaxed text-gray-700">
                                    Our extensive array of licensing opportunities across various sectors, ranging from financial services to the dynamic realm of Forex, Cryptocurrencies, Gambling, EMI, PSP, SVF, DLT, MSO
                                </p>
                               <div class="flex justify-end">
                                   <a href="/about" class="w-[6.5rem] text-center bg-yellow-600 hover:bg-purple-800 text-white py-1 px-2 rounded-lg text-xs">
                                       Read More
                                   </a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col h-full p-4 rounded-xl bg-white text-gray-700 shadow-md overflow-hidden">
                            <div class="flex items-center justify-center w-full h-60">
                                <img src="images/nep-3.jpg" alt="Payment Solutions" class="w-full h-60 object-cover rounded-lg" />
                            </div>
                            <div class="flex flex-col flex-grow mt-4">
                                <h3 class="font-semibold text-sm text-purple-800">
                                    Bank Account Opening
                                </h3>
                                <p class="mb-4 text-xs leading-relaxed text-gray-700">
                                    Open a bank account in over 20 countries and manage it online with Neptune Fiduciaries. Apply now for flexible and secure online banking services.
                                </p>
                             <div class="flex justify-end">
                                 <a href="/about" class="w-[6.5rem] text-center bg-yellow-600 hover:bg-purple-800 text-white py-1 px-2 rounded-lg text-xs">
                                     Read More
                                 </a>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 py-4 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div class="hidden lg:flex p-4 lg:justify-center">
                <img class="flex-shrink-0 object-cover xl:w-full xl:h-[24rem] rounded-md" src="{{ asset('images/about-2.jpg') }}" alt="Our Focus Image" />

            </div>
            <div class="order-none md:order-2 p-4">
           <h2 class="text-2xl font-bold tracking-tight text-center text-purple-800 sm:text-4xl sm:text-left">
             Our <span class="text-yellow-600">Focus</span>
           </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left text-xs">
                    We focus on delivering business solutions to diverse clientele ranging from Multinational
                    Corporates, HNWIs, Fund Operators, Professional Firms and Private Clients.</p>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left text-xs">
                    Under the impetus of a growing international clientele, we have expanded our offering from corporate
                    and fund administration to a wider spectrum of services linked to technology, outsourcing, private
                    wealth management and corporate finance advisory amongst others.</p>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left text-xs">
                    We are part of a global network of fiduciary and corporate service providers and have a presence in
                    many jurisdictions through our international network of partners.
                </p>
            </div>
        </div>

        <section class="bg-white">
            <div class="container px-6 py-10 mx-auto">
         <h2 class="text-2xl font-bold tracking-tight text-center text-purple-800 sm:text-4xl sm:text-left md:leading-tight">
           Why Choose <span class="text-yellow-600">Us</span>
         </h2>
                <p class="mt-5 text-base text-center text-gray-600 sm:text-left text-xs">
                    We focus on delivering business solutions to diverse clientele ranging from Multinational
                    Corporates, HNWIs, Fund Operators, Professional Firms and Private Clients.</p>


                <div class="mt-8 xl:mt-12 lg:flex lg:items-center">
                    <div class="grid w-full grid-cols-2 gap-8 lg:w-1/2 xl:gap-16 md:grid-cols-3">
                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>

                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                28+
                            </span>

                            <p class="text-gray-900 text-xs">
                                Employees and legal experts
                            </p>
                        </div>

                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                3
                            </span>

                            <p class="text-gray-900 text-xs">
                                Offices around the world
                            </p>
                        </div>

                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                </svg>
                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                29
                            </span>

                            <p class="text-gray-900 text-xs">
                                Companies incorporated
                            </p>
                        </div>

                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10.991h1.999v5.021H7V10.99zm4.5 0h2v5.021h-2V10.99zm4.5 0h2v5.021h-2V10.99zm-7.515 7.511a.5.5 0 110-1 .5.5 0 010 1zm0-9.511a.5.5 0 110-1 .5.5 0 010 1zm7.516 9.511a.5.5 0 110-1 .5.5 0 010 1zm0-9.511a.5.5 0 110-1 .5.5 0 010 1zm-8.515 9.011H19V10a2 2 0 00-2-2H7a2 2 0 00-2 2v7H3.499a.5.5 0 010-1H4V9.001c0-.551.449-1 1-1h14c.552 0 1 .449 1 1V17h.5a.5.5 0 010 1h-1v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-1H5.5a.5.5 0 010-1H6v-1a1 1 0 011-1.009z" />
                                </svg>

                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                150+
                            </span>

                            <p class="text-gray-900 text-xs">
                                Banks are connected to our software
                            </p>
                        </div>
                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16v4m0-4a4 4 0 0 1-4-4V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v6a4 4 0 0 1-4 4z"></path>
                                </svg>

                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                Online
                            </span>

                            <p class="text-gray-900 text-xs">
                                Manage everything online
                            </p>
                        </div>
                        <div class="space-y-3">
                            <span class="inline-block p-3 rounded-xl text-white bg-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6s2-2 2-4M12 6s2 2 2 4m-8 2c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 2s2-2 2-4M4 10s2 2 2 4m14 0s2 2 2 4M6 12s-2-2-2-4m14 0s-2 2-2 4M9 19a7.006 7.006 0 0 1 3-5.744M15 19a7.006 7.006 0 0 0-3-5.744M12 19a7.006 7.006 0 0 1-3-5.744M12 19v2M12 21a2 2 0 1 1 0-4v4z" />
                                </svg>

                            </span>

                            <span class="text-xl font-semibold text-gray-700 capitalize block">
                                30+
                            </span>

                            <p class="text-gray-900 text-xs">
                                Jurisdiction we have incorporated in
                            </p>
                        </div>
                    </div>

                    <div class="hidden lg:flex lg:w-1/2 lg:justify-center">
                        <img class="w-[28rem] h-[28rem] flex-shrink-0 object-cover xl:w-[34rem] xl:h-[34rem] rounded-md" src="images/about-1.jpg" alt="Why Choose Us Image" />
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="mx-auto max-w-screen-xl rounded-xl bg-color px-2 py-16 lg:flex lg:items-center">
                <div class="mx-auto max-w-xl text-center">
                    <h2 class="text-2xl font-extrabold sm:text-4xl text-white">
                        Navigate your financial future
                        <strong class="font-extrabold text-gray-400 sm:block">
                            with confidence.
                        </strong>
                    </h2>

                    <p class="mt-4 sm:text-xs/relaxed text-white">
                        We empower you to reach new heights in financial success. Our team
                        of experienced professionals provides tailored strategies and
                        unwavering support to help you elevate your financial journey. Trust
                        Neptune Fiduciaries to guide you towards a brighter and more
                        prosperous future.
                    </p>

                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-gray-800 shadow hover:bg-gray-200 focus:outline-none focus:ring sm:w-auto" href="/contact">
                            Contact Us
                        </a>

                        <a class="block w-full rounded px-12 py-3 text-sm font-bold text-gray-600 shadow hover:text-white focus:outline-none focus:ring sm:w-auto" href="/about">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 py-4 px-4 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div class="order-none md:order-2">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-3xl">
                    <span class="text-yellow-600">Transform</span> your financial landscape
                </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-xs">
                    Explore a range of options designed to optimize your financial infrastructure and pave the way for
                    seamless operations.
                </p>
            </div>
            <div class="hidden lg:flex p-4 lg:justify-center">
                <img class="flex-shrink-0 object-cover xl:w-full xl:h-[24rem] rounded-md" src="{{ asset('images/about-4.jpg') }}" alt="Hero image" />

            </div>

        </div>

        <a href="https://wa.me/254721441544" target="_blank" class="fixed bottom-4 right-32">
            <button class="bg-green-500 text-white px-2 py-1 rounded-full hover:bg-green-600 flex items-center w-14 h-14 justify-center">
                <i class="bx bxl-whatsapp text-3xl"></i>
            </button>
        </a>
    </main>

</x-app-layout>
<script>
    let images = [{
            src: "images/bg-neptune.jpg",
            text: "Grow your <span class='text-yellow-600'>wealth</span> with a trusted advisor"
        },
        {
            src: "images/bg-neptune2.jpg",
            text: "Navigate the <span class='text-yellow-600'>complexities</span> of wealth management"
        }
    ];

    let currentImageIndex = 0;
    let sliderText = document.getElementById("slider-text");

    function changeImageAndText() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        sliderText.innerHTML = images[currentImageIndex].text;
        document.querySelector('.bg-image').style.backgroundImage = `url(${images[currentImageIndex].src})`;
    }

    setInterval(changeImageAndText, 5000);
</script>


<style scoped>
    .bg-image {
        background-image: url("images/bg-neptune.jpg");
        background-size: cover;
        background-position: center;
    }

    .bg-color {
        background-color: #D69e2e;

    }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>