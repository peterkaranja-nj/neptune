<x-app-layout
    title="@yield('meta_title', 'Banking License Services and Support for Global Companies')"
    metaDescription="@yield('meta_description', 'Guidance on obtaining banking licenses globally, ensuring your financial operations meet all regulatory requirements and operate smoothly and legally.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Banking
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600">Banking</span>
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
        "United Kingdom Banking License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        United Kingdom Banking License
    </p>
    <p class="text-xs mb-4">
        The regulation of banks in the UK is overseen by the Bank of England (BoE), the Prudential Regulation Authority (PRA), and the Financial Conduct Authority (FCA). The PRA and FCA are the main regulators, ensuring safety, soundness, conduct of business, and consumer protection in the banking sector.
    </p>
    <p class="text-xs mb-4">
        To obtain a banking license in the UK, a company must register within the territory of England. The preferred corporate structure for banking activities in the UK is a Limited Liability Company (LLC) or a Public Joint Stock Company (OJSC). Key requirements and steps for obtaining a banking license include:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Submission of documents on education, qualifications, and work experience for personnel, particularly the executive director.</li>
        <li>Physical office presence in the UK with basic communications.</li>
        <li>Functioning structure fully suitable for banking activities.</li>
        <li>Application to the PRA, including detailed forms and a business plan.</li>
    </ul>
    <p class="text-xs mb-4">
        The authorization process involves stages such as pre-application, application submission, and mobilization. The total application fee is currently £50,000. Prospective banks must meet threshold conditions related to legal status, conduct of business, suitability, effective supervision, appropriate resources, and business model.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

    `,
        "Luxembourg Central Securities Depositories (CSDs)": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Luxembourg Central Securities Depositories (CSDs)
    </p>
    <p class="text-xs mb-4">
        Central Securities Depositories (CSDs) play a crucial role in the settlement of securities trades and safekeeping of securities. They are responsible for registering securities, tracking ownership, and settling securities transactions in exchange for cash.
    </p>
    <p class="text-xs mb-4">
        Luxembourg is home to a leading center for Investment funds issuance and distribution, with EUR 1.8 trillion of net assets. The Banque centrale du Luxembourg and Clearstream recently launched LuxCSD, a new central securities depository service, further enhancing Luxembourg's position in the global financial landscape.
    </p>
    <p class="text-xs mb-4">
        CSDs seeking authorization in Luxembourg must comply with the obligations outlined in Regulation (EU) No 909/2014, known as the CSDR, as well as related regulatory technical standards (RTS) and implementing technical standards (ITS). The CSSF handles the authorization process for CSDs, which includes various authorizations such as CSD authorization, extension of activities, and provision of ancillary services.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

    `,
        "Isle of Man Deposit Taking": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Isle of Man Deposit Taking
    </p>
    <p class="text-xs mb-4">
        The Isle of Man offers three types of licenses for businesses engaging in banking or deposit-taking activities:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
        <li>Class 1(1): Accepting deposits from any person, where the received money is lent to others or used to finance the depositor's activities.</li>
        <li>Class 1(2): Accepting deposits solely from restricted depositors, with similar lending or financing activities.</li>
        <li>Class 1(3): Operating a representative office of a foreign bank.</li>
    </ul>
    <p class="text-xs mb-4">
        All Class 1(1) deposit-takers must be members of the Depositors' Compensation Scheme, except for certain exempted banks and building societies.
    </p>
    <p class="text-xs mb-4">
        An unrestricted banking license allows a bank to conduct full banking business within and outside the Isle of Man. License holders must maintain a physical presence, including management, staff, secure premises, and adequate resources for banking operations.
    </p>
    <p class="text-xs mb-4">
        Managed license holders enlist the services of an 'Approved Manager' for day-to-day management and administration, with staff employment subject to Commission approval and operation from the 'Approved Manager's' premises.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>






    `,
        "Guernsey Banking License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Guernsey Banking License
    </p>
    <p class="text-xs mb-4">
        The Guernsey Financial Services Commission (GFSC) expects new banks entering the Guernsey market to be reputable, of good standing, and with an established track record in banking. Any bank wishing to establish a presence in Guernsey must make an application under the Banking Supervision (Bailiwick of Guernsey) Law, 1994, as amended (Banking Law).
    </p>
    <p class="text-xs mb-4">
        Application for registration must be made to the GFSC, which has discretion to refuse or revoke licenses and attach conditions to registration. Minimum criteria for licensing include ensuring the institution operates with prudence, professional skill, and integrity, brings economic benefit to Guernsey, and has fit and proper personnel.
    </p>
    <p class="text-xs mb-4">
        Requirements for a Guernsey banking license include a minimum of £1 million in assets, adherence to capital ratio requirements, and at least two resident directors of appropriate standing. The corporate vehicle permitted is a Guernsey company with minimum paid-up capital of USD 1,000,000, at least two directors, and two shareholders.
    </p>
    <p class="text-xs mb-4">
        Guernsey offers a favorable tax environment with no capital, value-added, or inheritance taxes, and a standard income tax rate of 0% on profits for most companies. Funds may opt for exempt company status. The setup duration is approximately 3 months, and benefits include a robust yet flexible regulatory environment, professional infrastructure, and tax neutrality.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>






    `,
        "Gibraltar Banking License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Gibraltar Banking License
    </p>
    <p class="text-xs mb-4">
        The Financial Services (Banking) Act 1992, as amended, and supporting regulations, provide the legal framework for the supervision of deposit takers providing banking services in Gibraltar. Criteria for granting a banking license include having a high reputation, fit and proper personnel, minimum service levels, and meeting capital and solvency requirements.
    </p>
    <p class="text-xs mb-4">
        Legal requirements and key features of a Gibraltar banking license include the permitted corporate vehicle of a Gibraltar domestic company, a license application fee of £10,000, and an annual license fee of USD 15,000. A local physical office is required, and corporate tax is set at 10%. Minimum paid-up capital is €5,000,000, with a minimum of two directors, including a local director.
    </p>
    <p class="text-xs mb-4">
        Service providers required include a company secretary, auditor, and legal advisor. Gibraltar offers advantages such as no investment, wealth, or inheritance tax, and no tax on trusts settled for non-resident beneficiaries.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>





    `,
        "Switzerland Banking License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Switzerland Banking License
    </p>
    <p class="text-xs mb-4">
        Under Article 1a of the Banking Act, companies mainly active in the financial sector that accept deposits from the public in excess of CHF 100 million on a professional basis, or solicit such deposits publicly, are considered banks. Banks require a license from FINMA and must meet various requirements including minimum capital, qualified management, and effective risk management.
    </p>
    <p class="text-xs mb-4">
        License requirements include a fully paid-up minimum capital of CHF 10 million, a business plan ensuring compliance with capital adequacy and risk diversification, and qualified management guaranteeing proper business conduct. The application process involves drafting the application, meeting with FINMA for discussion, filing the application, and consideration by FINMA.
    </p>
    <p class="text-xs mb-4">
        Management requirements include a minimum of 3 directors and 1 local director, and a minimum of 2 shareholders, with corporate shareholders allowed. Non-resident income is tax-exempt in Switzerland, making it a favorable jurisdiction for offshore banking needs.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

    `,
        "Banking License in Jersey": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Banking License in Jersey
    </p>
    <p class="text-xs mb-4">
        Jersey boasts a well-established reputation as an international banking center, with a stable number of registered banks. Any bank intending to operate in Jersey must register under the Banking Business (Jersey) Law 1991 and associated regulations, ensuring compliance with stringent requirements to uphold Jersey's financial integrity.
    </p>
    <p class="text-xs mb-4">
        Eligibility criteria for a banking license in Jersey include being part of a globally recognized financial institution, carrying an "investment grade" credit rating, meeting liquidity management requirements, and demonstrating satisfactory supervision in the home jurisdiction. Additionally, the applicant must have sufficient management oversight, a track record of at least five years as a banking business, and meet financial requirements such as a minimum capital of £5 million.
    </p>
    <p class="text-xs mb-4">
        The application process involves submitting an application form along with a comprehensive business plan, financial statements, organization charts, and the application fee. Individuals assuming key roles within the applicant organization must also complete a personal questionnaire.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more details, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
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