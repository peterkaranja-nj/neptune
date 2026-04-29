<x-app-layout>
    <main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Virtual/Physical Office Services
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600">Virtual/Physical Office Services</span>
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
        "Virtual/Physical Office Services": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Virtual/Physical Office Services
    </p>
    <p class="text-xs">
        Expand your presence. Our virtual and physical office solutions keep your global operations seamless.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Elevate Your Global Presence with Virtual/Physical Office Services
    </p>
    <p class="text-xs">
        Welcome to the convergence of innovation and tradition through our Virtual/Physical Office services. At Neptune Fiduciaries, we recognize that expanding your business's presence requires a balance between modern agility and established credibility. Our specialized solutions seamlessly integrate virtual and physical office components, ensuring your global operations remain not only efficient but also firmly grounded.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Why Choose Virtual/Physical Office Services?
    </p>
    <p class="text-xs">
        Agile Expansion: Our services allow you to swiftly establish a presence in new markets, leveraging virtual and physical elements for a well-rounded approach. Credibility and Trust: Project an established image with physical office addresses while benefiting from the flexibility of virtual services to cater to modern business demands. Global Accessibility: Reach clients, partners, and stakeholders across the world, utilizing virtual tools for communication while having a physical presence in key locations. Operational Efficiency: Seamlessly manage administrative tasks and client interactions through an integrated approach, enhancing efficiency and productivity.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        How Our Services Enhance Your Presence
    </p>
    <p class="text-xs">
        Flexible Solutions: Tailored to your needs, our virtual/physical office packages offer a blend of services that align with your expansion strategy. Global Reach: With physical offices in strategic locations and virtual tools for remote collaboration, you're positioned to engage with a diverse clientele. Reception and Support: Benefit from professional reception services and administrative support whether your business operates in-person or virtually. Scalable Model: As your business grows, our services adapt to accommodate changing needs, ensuring a seamless transition as you expand.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Benefits Beyond Presence
    </p>
    <p class="text-xs">
        Operational Continuity: Maintain business operations regardless of physical limitations or geographical constraints, ensuring uninterrupted growth. Client Engagement: Engage clients and partners through virtual platforms while providing them the confidence of a physical office address. Cost Efficiency: Enjoy the benefits of both physical and virtual setups without the burden of excessive costs, optimizing resource allocation.
    </p>
    <p class="text-xs">
        Ready to transform your business's global presence? Our Virtual/Physical Office Services is your gateway to a balanced approach that marries tradition with innovation. Get in touch with one of our experts to learn about how Neptune Fiduciaries can help you establish a dynamic and credible global footprint that sets the stage for expansion and success.
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