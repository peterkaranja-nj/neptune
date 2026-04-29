<x-app-layout
    title="@yield('meta_title', 'Gaming and Gambling License Solutions for Your Enterprise')"
    metaDescription="@yield('meta_description', 'Comprehensive gaming and gambling licensing services, providing expert advice to establish legal, compliant, and fully operational entertainment businesses.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Gaming And Gambling
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600">Gaming And Gambling</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex flex-col max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
            <div class="flex-start items-center py-5 md:w-1/3 md:pb-20 md:pt-10 md:pr-10">
                <div class="text-left border border-gray-400 px-2 py-3 rounded-lg" id="itemList">
                </div>
            </div>
            <div class="flex py-5 md:w-full md:pb-20 md:pt-10 md:pr-10">
                <div id="selectedContent" class="text-left px-2 py-3 rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
    </main>

    <a href="https://wa.me/254721441544" target="_blank" class="fixed bottom-4 right-32">
        <button class="bg-green-500 text-white px-2 py-1 rounded-full hover:bg-green-600 flex items-center w-14 h-14 justify-center">
            <i class="bx bxl-whatsapp text-3xl"></i>
        </button>
    </a>
</x-app-layout>

<script>
    const itemContents = {
        "Malta Gaming License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Malta Gaming License
    </p>
    <p class="text-xs mb-4">
        The Malta Gaming Authority (MGA) was established to oversee all forms of gaming activities in Malta, including remote gaming operations. In April 2004, the Regulations were introduced, making Malta the first EU member state to regulate remote gaming.
    </p>
    <p class="text-xs mb-4">
        The Regulations are categorized into four classes based on the type of operations conducted by companies, encompassing licenses for both Business to Consumers (B2C) and Business to Business (B2B) operators.
    </p>
    <p class="text-xs mb-4">
        The MGA's remote gaming framework is technology- and game-neutral, covering any form of gaming offered through distance communication channels (including internet, digital TV, mobile technology, and telephony). Games offered via these means, ensuring secure management and compliance with the Regulations, are eligible for MGA licensing consideration.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
        Key Features
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Permissible corporate structures include companies or limited partnerships.</li>
        <li>A local physical office presence is mandatory.</li>
        <li>Minimum paid-up capital requirements are €100,000 (Class 1 & 2) and €40,000 (Class 3 & 4).</li>
        <li>At least two directors are required.</li>
        <li>No necessity for local directors.</li>
        <li>Minimum of two shareholders.</li>
        <li>Appointment of a Company Secretary is mandatory.</li>
        <li>Corporate income tax rate is 35%.</li>
        <li>Estimated setup duration is approximately two months.</li>
    </ul>
    <p class="text-xs mb-4">
        Licenses are issued for a five-year period, and license holders must have the core operations of their online gaming platforms physically situated in Malta.
    </p>
    <p class="text-xs mb-4 font-bold">
        For further details, please contact Neptune Fiduciaries via <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>




    `,
        "Isle of Man Gaming License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Isle of Man Gaming License
    </p>
    <p class="text-xs mb-4">
        The Isle of Man is renowned as a leading e-Gaming jurisdiction committed to:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Maintaining a gambling crime-free environment</li>
        <li>Protecting minors and vulnerable individuals</li>
        <li>Ensuring fair gaming practices and timely payouts for players</li>
    </ul>
    <p class="text-xs mb-4">
        Operators seeking compliance with OGRA requirements in the Isle of Man must:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Establish an Isle of Man company</li>
        <li>Appoint at least two local Directors, who must be individuals (not corporate entities)</li>
        <li>Assign a resident Designated Official (DO), or alternatively, an Operations Manager (OM) if the DO cannot reside in the Isle of Man</li>
        <li>Register players on Isle of Man servers or operate under a Network Services License requiring establishment of network services in the Isle of Man</li>
        <li>Maintain gambling and trading accounts in a bank recognized by the Gambling Supervision Commission (GSC)</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
        Benefits of obtaining an Isle of Man e-Gaming license
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Low betting duty ranging from 1.5% to 0.1% on gross profit</li>
        <li>World-class infrastructure, bandwidth, and robust power resilience, supported by excellent data hosting facilities</li>
        <li>Concentration of service providers, advisors, and peripheral activities such as marketing, software, and IT providers with extensive experience in e-Gaming</li>
        <li>Supportive legislation making the Isle of Man an optimal location for disaster recovery</li>
        <li>Regulatory framework focused on consumer protection and player welfare</li>
        <li>Straightforward application process typically completed in 10 to 12 weeks</li>
        <li>Skilled workforce availability</li>
        <li>Political stability</li>
        <li>OECD Whitelisted status and membership in the World Trade Organization</li>
        <li>No requirement for a Fiscal Representative in the UK</li>
        <li>Double Duty Relief available for eligible EU member states</li>
        <li>Financial incentives for startups and relocations</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For further details, please contact Neptune Fiduciaries via <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>




    `,


    };

    let selectedItem = null;

    function selectItem(item) {
        const selectedContent = document.getElementById('selectedContent');
        selectedContent.innerHTML = itemContents[item];

        // Remove the active class from the previously selected item
        if (selectedItem) {
            selectedItem.classList.remove('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800',
                'hover:border-gray-400');
            selectedItem.classList.add('bg-gray-200', 'text-purple-800', 'hover:text-gray-600', 'cursor-pointer');
        }

        // Add the active class to the newly selected item
        const newItem = document.getElementById(item);
        newItem.classList.remove('bg-gray-200', 'text-purple-800', 'hover:text-gray-600');
        newItem.classList.add('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800', 'hover:border-gray-400');

        // Update the selected item
        selectedItem = newItem;

        // Scroll to the selected content
        selectedContent.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    // Generate item list dynamically
    const itemList = document.getElementById('itemList');
    Object.keys(itemContents).forEach(item => {
        const div = document.createElement('div');
        div.id = item;
        div.classList.add('rounded-lg', 'p-2', 'mt-2', 'cursor-pointer', 'bg-gray-200', 'text-purple-800');
        div.innerHTML = `<p class="max-w-md mx-auto text-xs">${item}</p>`;
        div.addEventListener('click', () => selectItem(item));
        itemList.appendChild(div);
    });

    // Select the first item on page load
    const firstItem = Object.keys(itemContents)[0];
    selectItem(firstItem);
</script>
<style scoped>
    .bg-image {
        background-image: url("/images/hero-3.jpg");
        background-size: cover;
        background-position: center;
    }

 body, p, div, h4, a, ul, li {
    font-size: 15px !important;
    line-height: 1.6 !important; /* or use 18px if you prefer fixed values */
  }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>