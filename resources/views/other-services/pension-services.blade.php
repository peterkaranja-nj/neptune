<x-app-layout
    title="@yield('meta_title', 'Corporate Pension Services and Solutions for Businesses Now')"
    metaDescription="@yield('meta_description', 'Tailored pension services offering compliance-focused solutions to secure long-term financial planning, effective management, and optimized benefits for clients.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Pension Services
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Pension Services</span>
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
    "United Kingdom Life Insurers and Pension Providers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Life Insurers and Pension Providers
    </p>
    <p class="text-xs mb-4">
      Pension providers are commercial organizations that provide pension arrangements and services to pension schemes. Private pension schemes are ways for you or your employer to save money for later in your life.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Pension Scheme Administration
    </p>
    <p class="text-xs mb-4">
      You must register as a scheme administrator before you can apply to register a new pension scheme. Only the scheme administrator can apply to register the pension scheme.
    </p>
    <p class="text-xs mb-4">
      You can only apply to register a pension scheme that is one of the following:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Set up with permission under the Financial Services and Markets Act 2000 to establish a personal pension or stakeholder pension scheme, such as a bank or insurance company.</li>
      <li>An occupational pension scheme set up by an employer for Our employees.</li>
      <li>A public sector scheme set up under legislation or Parliamentary approval.</li>
    </ul>
    <p class="text-xs mb-4">
      Your scheme must be set up entirely or mainly for the purpose of providing authorized pensions and lump sums. The pension scheme does not have to be set up in the UK, but as the scheme administrator you must meet the required criteria to register.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Pension Scheme Administrator
    </p>
    <p class="text-xs mb-4">
      All registered pension schemes must have at least one scheme administrator. The scheme administrator can be:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>One or more individuals.</li>
      <li>A company or organization such as an employer.</li>
      <li>A specialist pension administration company.</li>
      <li>A partnership.</li>
    </ul>
    <p class="text-xs mb-4">
      If you or your organization wants to become a scheme administrator, you must be a legal resident of:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>The UK.</li>
      <li>An EU member state.</li>
      <li>Iceland.</li>
      <li>Liechtenstein.</li>
      <li>Norway.</li>
    </ul>
    <p class="text-xs mb-4">
      To register as a scheme administrator, you’ll need to:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Understand that you’re responsible for carrying out the functions and responsibilities of a scheme administrator, as shown in Finance Act 2004.</li>
      <li>Understand that you may need to provide further information or declarations as reasonably required.</li>
      <li>Be a fit and proper person.</li>
      <li>Intend to carry out these functions and responsibilities of a scheme administrator at all times.</li>
      <li>Understand that you may be liable to a penalty or prosecution if you make a false statement.</li>
    </ul>
    <p class="text-xs mb-4">
      As part of your scheme administrator registration, you must complete declarations in relation to all of the above. To apply to register a new scheme or to take over as the scheme administrator of an existing scheme, you must:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Be appointed to the role of scheme administrator in line with the scheme’s rules.</li>
      <li>Complete further declarations.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Claims Management Companies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Claims Management Companies
    </p>
    <p class="text-xs mb-4">
      Claims management companies (CMCs) are commercial businesses or individuals that handle certain types of claims, including:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Financial services and products, e.g. PPI, payday loans, claims under Section 75 of the Consumer Credit Act.</li>
      <li>Personal injury.</li>
      <li>Employment matters, e.g. unfair dismissal claims.</li>
      <li>Criminal injury.</li>
      <li>Certain cases of housing disrepair.</li>
      <li>Specified benefits.</li>
    </ul>
    <p class="text-xs mb-4">
      In the UK, all claims companies are legally required to register with the Financial Conduct Authority. This process can take up to six months.
    </p>
    <p class="text-xs mb-4">
      To become authorized as a claims management company, you will need to submit an application to the FCA, including a detailed business plan. You will also need to pay an application fee (£1,200 for smaller companies) and then an annual fee to maintain your authorization. These fees are to cover the FCA’s regulatory activities on claims management. Full details of the business plan requirements, application process, and fees can be found on the FCA website.
    </p>
    <p class="text-xs mb-4">
      As a firm that’s either considering becoming a Claims Management Company or already authorized as one, you should be aware of the FCA rules that apply. The rules on how you are expected to conduct your activity can largely be found in the FCA’s Claims Management: Conduct of Business sourcebook (referred to as ‘CMCOB’). There are also additional FCA rules that apply to all firms, including the complaint handling rules and rules on the Senior Managers and Certification Regime (SM&CR).
    </p>
    <p class="text-xs mb-4">
      Applicant Claims Management Company seeking FCA authorization require a coherent compliance monitoring framework and must be able to demonstrate that the business model is one that meets the FCA’s requirements. Those in control or who will have management responsibilities within the firm must also be suitable and appropriate.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Pensions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Pensions
    </p>
    <p class="text-xs mb-4">
      The MFSA is responsible for the authorization and subsequent oversight of authorized Service Providers (Retirement Scheme Administrators, Investment Managers, and Custodians), Personal Retirement Schemes, Occupational Retirement Schemes ('Retirement Schemes'), and Retirement Funds in line with the Retirement Pensions Act, subsidiary legislation, and the Pension Rules.
    </p>
    <p class="text-xs mb-4">
      Supervision of Service Providers, Retirement Schemes, and Retirement Funds is carried out in a proportionate manner and comprises an appropriate combination of off-site and on-site supervision. In exercising its function and duties under the Retirement Pensions Act, the MFSA ensures that such duties are carried out in a transparent and accountable manner, taking into consideration the protection of members and beneficiaries, the promotion of competition and choice, and the reputation and suitability of the applicant and other connected parties.
    </p>
    <p class="text-xs mb-4">
      The current pension scheme in Malta is based on the Social Security Act, Chapter 318 of the Laws of Malta. The Act provides for two basic schemes, the Contributory Scheme, and the Non-Contributory Scheme. In the Contributory Scheme, the basic requirement for entitlement is that specific contribution conditions are satisfied. In the Non-Contributory Scheme, the basic requirement is that the conditions of the means test are satisfied.
    </p>
    <p class="text-xs mb-4">
      The Non-Contributory Scheme has made possible the allocation of more than one benefit at the same time, thus providing simultaneous coverage in those cases where more than one contingency is present. Through the process of targeting, this scheme has succeeded in the provision of additional assistance to certain specific categories such as, in the case of persons with a disability, in the case of single parents, as well as in the case of the family as a single unit.
    </p>
    <p class="text-xs mb-4">
      The Contributory Scheme is universal since it practically covers all strata of the Maltese society. Within this scheme, employees, self-occupied, and self-employed persons acquire social insurance rights through the payment of a weekly contribution as laid down by the Social Security Act.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein Pension Schemes": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Liechtenstein Pension Schemes
    </p>
    <p class="text-xs mb-4">
      The Insurance and Pension Funds Division of the FMA is responsible for issues relating to occupational pensions. The FMA carries out the following main tasks:
    </p>
    <ul class="list-disc list-inside">
      <li class="text-xs mb-4">Monitoring of business operations of pension schemes.</li>
      <li class="text-xs mb-4">Processing of licenses for the business operations of pension schemes.</li>
      <li class="text-xs mb-4">Processing of total liquidation of pension schemes.</li>
      <li class="text-xs mb-4">Review of annual financial statements.</li>
      <li class="text-xs mb-4">Preparation of laws and international agreements.</li>
      <li class="text-xs mb-4">Provision of information on questions relating to occupational pension law.</li>
      <li class="text-xs mb-4">Verification of association.</li>
      <li class="text-xs mb-4">Processing of cash payout applications.</li>
      <li class="text-xs mb-4">Processing of reports of failure to contribute.</li>
    </ul>
    <p class="text-xs mb-4">
      Liechtenstein’s pension system is a three-pillar system, made up of statutory, occupational, and personal pension schemes. Statutory and occupational pensions are mandatory, while personal pensions are voluntary. Financed by state contributions (in the case of statutory pension) and by employers and employees (through defined-contribution plans), the system has functioned effectively in recent years.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein Pension Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Liechtenstein Pension Funds
    </p>
    <p class="text-xs mb-4">
      The FMA supervises all the business activities of institutions for occupational retirement provision (pension funds) and monitors compliance with laws, solvency of the pension funds, and creation of the required provisions, and it ensures that the interests of members and beneficiaries are protected.
    </p>
    <p class="text-xs mb-4">
      In addition to supervising pension funds, the FMA carries out the following tasks in particular:
    </p>
    <ul class="list-disc list-inside">
      <li class="text-xs mb-4">Preparing laws and international agreements.</li>
      <li class="text-xs mb-4">Providing information and carrying out legal clarifications regarding the law governing occupational retirement provision.</li>
    </ul>
    <p class="text-xs mb-4">
      The FMA also represents the interests of the Liechtenstein financial center and is a member of the EIOPA within the EEA as well as global bodies such as the International Organization of Pension Supervisors (IOPS).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Latvian Pension Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Latvian Pension Funds
    </p>
    <p class="text-xs mb-4">
      <strong>Private Pension Funds</strong><br>
      A private pension fund is a joint-stock company registered in the Commercial Register. It accrues and invests contributions of monetary assets paid by members of pension schemes to ensure supplementary retirement benefits. Pension funds can be closed or open.
    </p>
    <p class="text-xs mb-4">
      To obtain a private pension fund license, a joint-stock company submits an application and required documents to the Financial and Capital Market Commission. The Commission examines the application and decides within 90 days of receiving all necessary documents.
    </p>
    <p class="text-xs mb-4">
      <strong>State Funded Pension Scheme</strong><br>
      The State funded pension scheme (2nd pension pillar) is a State-organized set of measures for making contributions, administration of funds, and disbursement of pensions. It provides an opportunity to acquire additional pension capital by investing part of the contributions in financial instruments and other assets.
    </p>
    <p class="text-xs mb-4">
      Management of contributions and assets of the funded pension scheme may be performed by an investment management company registered in Latvia or a branch of a company registered in the EU or EEA authorized to provide investment management services.
    </p>
    <p class="text-xs mb-4">
      The Commission processes applications and decides on entry in the register of managers of the funded pension scheme assets within a 60-day period after submission of all required documents.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Pensions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Pensions
    </p>
    <p class="text-xs mb-4">
      Upon taking responsibility for the supervision of retirement benefits schemes, the IPA conducted an extensive review of the Isle of Man's existing pensions legislation. The objective was to provide a regulatory framework that encompassed domestic schemes available to Isle of Man residents and enabled multi-national businesses to manage retirement benefits schemes for employees worldwide.
    </p>
    <p class="text-xs mb-4">
      The Retirement Benefits Schemes Act 2000 established a broad framework for all schemes operated in or from the Isle of Man, with separate regulations for international and domestic schemes. Treasury legislation also governs specific aspects of management and administration for certain schemes.
    </p>
    <p class="text-xs mb-4">
      Secondary legislation under the Retirement Benefits Schemes Act 2000 falls into three categories: dealing solely with international schemes, domestic schemes, and general provisions.
    </p>
    <p class="text-xs mb-4">
      <strong>Domestic Schemes:</strong> The Retirement Benefits Schemes (Domestic Schemes) (General Administration) Regulations 2004 established an infrastructure for the management and administration of domestic retirement benefits schemes authorized under the Act. Registration with the Authority is required, but it does not confer tax-approved status.
    </p>
    <p class="text-xs mb-4">
      <strong>International Retirement Benefits Schemes Framework:</strong> The Retirement Benefits Schemes (International Schemes) Regulations 2001 established an infrastructure for the management and administration of international retirement benefits schemes. Registration with the Authority does not confer tax-approved status.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Personal Pension Scheme Adviser": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Personal Pension Scheme Adviser
    </p>
    <p class="text-xs mb-4">
      The Regulations define the regulated activity as advising another person on the merits of participating in, or being a member of, a personal pension scheme or occupational pension scheme, or the acquisition or disposal of any interests, rights, benefits, or other entitlements in connection with such schemes.
    </p>
    <p class="text-xs mb-4">
      This regulated activity allows you to provide advice on becoming a member of a personal pension scheme or an occupational pension scheme, advising on AVCs, transferring rights and assets between pension schemes, and taking benefits from a pension scheme.
    </p>
    <p class="text-xs mb-4">
      Applicants should submit an application pack with all relevant documents. Regulated firms are required to self-assess the level of financial resources required for an orderly wind-down, subject to a minimum of 4% of turnover or £15,000.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Czech Republic Pension Management Companies and Funds/ Pension Intermediaries": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Pension Management Companies and Funds/ Pension Intermediaries
    </p>
    <p class="text-xs mb-4">
      The regulations in the pensions area apply to pension management companies, participation and transformed funds, retirement funds, and foreign institutions for occupational retirement provision operating in the Czech Republic. They also cover distributors of retirement savings and supplementary pension savings, as well as insurance companies offering pension insurance services.
    </p>
    <p class="text-xs mb-4">
      During the transitional period until 1 January 2013, the regulations also cover pension funds under the Act on State-Contributory Supplementary Pension Insurance and Amending Certain Acts Related to its Introduction, as amended.
    </p>
    <p class="text-xs mb-4 font-bold">
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