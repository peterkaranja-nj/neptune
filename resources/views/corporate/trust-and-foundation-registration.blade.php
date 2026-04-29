
<x-app-layout
    title="Trust and Foundation Registration Services | Neptune Fiduciaries"
    metaDescription="Neptune Fiduciaries offers expert offshore and corporate services."
    canonical="{{ url()->current() }}"
>
<main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Trust And Foundation Registration
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600"> Trust And Foundation Registration</span>
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
        "Trust And Foundation Registration": `
    <div class="p-4">
                <p class="text-lg font-bold text-purple-800 mb-4">
                    Trust And Foundation Registration
                </p>
                <p class="text-xs">
                  Get ready for a new era of global business. Our IBC services go
                  beyond borders, helping you tap into international opportunities
                  with precision.
                </p>
                <p class="text-xs font-bold text-purple-800 mt-4">
                  Unlock Global Opportunities with IBC Formation
                </p>
                <p class="text-xs">
                  Welcome to the realm of limitless global business possibilities
                  through our International Business Company (IBC) Formation
                  services. Are you ready to take your ventures beyond borders and
                  explore international opportunities with unparalleled precision?
                  Our IBC services are designed to empower you with the tools and
                  strategies you need to thrive in today's interconnected business
                  landscape.
                </p>
                <p class="text-xs font-bold text-purple-800 mt-4">
                  Why Choose IBC Formation?
                </p>
                <p class="text-xs">
                  Global Reach: Break free from geographical constraints. An IBC
                  allows you to operate internationally, opening doors to new
                  markets, partnerships, and revenue streams. Tax Efficiency:
                  Benefit from favorable tax regulations and structures in
                  different jurisdictions, optimizing your financial strategy and
                  enhancing your profit margins. Asset Protection: Shield your
                  assets from potential risks and legal complexities. An IBC
                  offers a secure framework to safeguard your wealth and
                  investments. Confidentiality: Enjoy heightened privacy and
                  confidentiality in your business affairs, giving you the freedom
                  to operate discreetly.
                </p>
                <p class="text-xs font-bold text-purple-800 mt-4">
                  How Our IBC Services Work
                </p>
                <p class="text-xs">
                  Tailored Solutions: We understand that every business is unique.
                  Our experts will work closely with you to craft an IBC strategy
                  that aligns with your goals and aspirations. Jurisdiction
                  Expertise: With an in-depth understanding of international
                  jurisdictions, we guide you in selecting the optimal location
                  for your IBC based on your business needs. Streamlined Setup: We
                  handle the intricate process of IBC formation, ensuring
                  compliance with all legal and regulatory requirements. Ongoing
                  Support: Beyond formation, we provide ongoing support to help
                  you navigate the complexities of international business
                  operations.
                </p>
                <p class="text-xs font-bold text-purple-800 mt-4">
                  Benefits Beyond Borders
                </p>
                <p class="text-xs">
                  Global Expansion: Seamlessly tap into new markets and expand
                  your business presence across the world. Diverse Ventures:
                  Engage in a wide range of activities, from trading and
                  investment to intellectual property management, under the IBC
                  umbrella. Strategic Alliances: Forge strategic partnerships with
                  international entities, leveraging the credibility and
                  versatility of your IBC. Ready to transform your business's
                  global presence? Our Virtual/Physical Office Services is your
                  gateway to a balanced approach that marries tradition with
                  innovation. Get in touch with one of our experts to learn about
                  how Neptune Fiduciaries can help elevate your
                  business to unprecedented heights through IBC Formation.
                </p>
                <p class="text-xs font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
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

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>
