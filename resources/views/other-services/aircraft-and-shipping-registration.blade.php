<x-app-layout
    title="@yield('meta_title', 'Aircraft and Shipping Registration Experts for Global Firms')"
    metaDescription="@yield('meta_description', 'Professional aircraft and shipping registration services ensuring full legal compliance, proper documentation, and seamless registration processes for clients.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Aircraft and Shipping Registration
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600"> Aircraft and Shipping Registration</span>
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
        "Estonia Aircraft Registration": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Estonia Aircraft Registration
    </p>
    <p class="text-xs mb-4">
        Owners or authorized representatives applying for aircraft registration, amendment of entries, or deletion from the register must submit their applications to the Technical Department of the Estonian Civil Aviation Administration (ECAA) along with required documents. The application must be signed by the owner or an authorized person.
    </p>
    <p class="text-xs mb-4">
        <span class="font-bold">Key Features:</span><br>
        Eligible aircraft owners or operators include:<br>
        - Estonian citizens<br>
        - Individuals with long-term residence permits or permanent residence rights in Estonia<br>
        - Estonian registered legal entities<br>
        - Local authorities<br>
        - The Estonian state<br>
        Aircraft must possess:<br>
        - A valid permit to fly<br>
        - A certificate of airworthiness issued in Estonia or recognized by Estonia from another competent authority<br>
        Aircraft without a valid certificate of airworthiness or permit to fly may be temporarily registered for up to three months.<br>
        Aircraft already registered in another state cannot be registered in the Estonian aircraft register.
    </p>
    <p class="text-xs mb-4">
        <span class="font-bold">Registration Process:</span><br>
        Upon submission, applications are registered and reviewed within 30 working days. The ECAA's Technical and Legal Departments assess applications and attached documents for compliance with regulatory requirements. Applicants are notified of any missing or insufficient information.<br>
        A certificate of aircraft registration or temporary registration is issued upon completion, either in person upon signature or sent by mail as required.<br>
        Certificates for aircraft deletion from the register are issued to owners or sent to the civil aviation authority of the intended State of Registration.
    </p>
    <p class="text-xs mb-4 font-bold">
        For further details, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
        "Estonia Ship Registration": `
<div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Estonia Ship Registration
    </p>
    <p class="text-xs mb-4">
        The Ship Register in Estonia contains detailed information about marine vessels, inland vessels (including fishing vessels), non-propelled floating vessels, and vessels under construction. Alongside technical data, the register includes ownership details, ship mortgages, usufructs, prohibition notations, and other vessel-related restrictions, all of which hold legal significance. Transactions involving registered vessels only take effect after being recorded in the Ship Register.
    </p>
    <p class="text-xs mb-4">
        The Ship Register is maintained by registry departments at the Harju County Court, Tartu County Court, and Pärnu County Court, with the Harju County Court also overseeing the Viru County Court's jurisdiction. It is managed electronically.
    </p>
    <p class="text-xs mb-4">
        Upon registering a ship, citizens of EU Member States and legal entities established under EU law, with their seat and business establishment within an EU Member State, are considered equal to owners, co-owners, or successors of seagoing vessels under specified conditions. These conditions include having a residence or permanent business establishment in Estonia, and appointing a permanent representative in Estonia responsible for ensuring compliance with Estonia's technical, social, and administrative requirements for seagoing vessels, who directly oversees the vessel's use.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more details, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
        "Estonia Trademark Registration": `
<div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Estonia Trademark Registration
    </p>
    <p class="text-xs mb-4">
        The legal framework for trademark registration in Estonia is governed by the Trademark Act of October 1, 1992, with the latest amendment effective from January 1, 2012. Trademark protection is secured through registration.
    </p>
    <p class="text-xs mb-4 list-disc">
        <span class="font-bold">Key Features</span><br>
        To register a trademark in Estonia, an application must be filed with the Patent Office by a local agent. A non-legalized power of attorney suffices for this purpose. Foreign applicants do not require prior domestic registration.<br>
        Trademark registrations in Estonia are valid for 10 years from the registration date and can be renewed for successive 10-year periods.<br>
        Failure to use the trademark within 5 years of registration or for a continuous 5-year period thereafter may result in cancellation.
    </p>
    <p class="text-xs mb-4">
        <span class="font-bold">Documents Required for Trademark Registration:</span><br>
        - Completed Trade Mark Registration Application Form;<br>
        - Authorization document or reference to a previously submitted authorization document if represented by an agent;<br>
        - Documents proving priority if priority is claimed;<br>
        - Proof of payment of the state fee;<br>
        - Regulations governing the collective mark or guarantee mark, if applicable.
    </p>
    <p class="text-xs mb-4 font-bold">
        For further details, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
        "Gibraltar Ship Registration": `
<div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Gibraltar Ship Registration
    </p>
    <p class="text-xs mb-4">
        The Gibraltar Yacht Registry is a globally recognized registry offering efficient and cost-effective services, ideal for yacht owners seeking the assurance of British registration under the Red Ensign.
    </p>
    <p class="text-xs mb-4">
        Located at the entrance of the Mediterranean Sea, Gibraltar's Ship Register is renowned for its quality and serves as a vital commercial and maritime hub. As a common law jurisdiction, Gibraltar is highly attractive for vessel registration, maintaining separate registers for commercial and pleasure vessels without size restrictions for pleasure vessels.
    </p>
    <p class="text-xs mb-4">
        <span class="font-bold">Key Benefits</span><br>
        Gibraltar adheres to all international shipping and safety conventions ratified by the United Kingdom, granting Gibraltar-registered vessels equivalent status to any other British registry.<br>
        Recent legislative changes broaden eligibility criteria, allowing a wider range of individuals and corporate entities to qualify as ship owners.<br>
        Gibraltar Ship Register (GSR) offers three registration types: full registration, bareboat registration, and registration under construction.<br>
        Typically, GSR accepts ships under 20 years old, though older ships may register subject to pre-registration survey.<br>
        Full registrations are valid for five years, bareboat registrations for up to two years, all renewable.<br>
        Notably, the Gibraltar Register ensures strict security for mortgagees, requiring mortgage discharge or consent before de-registration.<br>
        Eligible owners include British Citizens, British Dependent Territories citizens, British Overseas citizens, EU/EEA nationals, or companies registered within the EU/EEA, holding a majority interest in the vessel.
    </p>
    <p class="text-xs mb-4 list-disc">
        <span class="font-bold">Additional Benefits</span><br>
        Registered yachts fly the British Red Ensign, symbolizing international recognition and prestige.<br>
        Access to assistance from British embassies and consulates worldwide where the vessel is located.<br>
        Simplified legal title transfer or yacht registration processes.<br>
        Comprehensive yacht details are contained in the Register and the Certificate of British Registry ('Blue Book').<br>
        The Register is publicly accessible, providing security for title searches by interested parties such as buyers or lenders.<br>
        Facilitates straightforward yacht disposal with cost-effective procedures.<br>
        Mandatory registration of legal mortgages ensures transparency regarding encumbrances or liens on yachts.
    </p>
    <p class="text-xs mb-4 font-bold">
        For further information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
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