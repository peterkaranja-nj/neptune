<x-app-layout
    title="@yield('meta_title', 'Investment Fund Setup and Advisory Services for Companies')"
    metaDescription="@yield('meta_description', 'Professional setup and management of investment funds, ensuring transparency, regulatory compliance, and optimized performance for investors globally.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Investments and Funds
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Investments and Funds</span>
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
      <div class="py-5 md:w-full md:pb-20 md:pt-10 md:pr-10">
        <div id="selectedContent" class="text-left px-2 py-3 rounded-lg bg-gray-100">
        </div>
        @include('components.consultation-form');
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
    "Czech Republic Management Companies and Investment Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Management Companies and Investment Funds
    </p>
    <p class="text-xs mb-4">
      Foreign investors have the option to establish either a company or an investment fund in the Czech Republic. The legislation governing investment funds in the Czech Republic differs from that which applies to commercial companies. Investment vehicles in the Czech Republic are regulated under the Act on Investment Companies and Investment Funds.
    </p>
    <p class="text-xs mb-4">
      Following the AIFMD and UCITS directives, the Investment Management and Investment Funds Regulation cover rules for products (funds) and providers (fund managers, administrators, depositaries) as well as other rules (cross-border services, marketing).
    </p>
    <p class="text-xs mb-4">
      The new Act on Investment Companies and Investment Funds introduces new investment opportunities for both local and foreign investors. It establishes new investment vehicles, including SICAV (investment company with variable capital) and trust funds. This Act aligns with regulations available under the Directive on Alternative Investment Fund Managers (AIMF).
    </p>
    <p class="text-xs mb-4">
      Under the new Act, which implements the AIMF regulations, alternative investment fund managers must register with the Czech National Bank (CNB). Additionally, individuals interested in investing capital in the Czech Republic must notify CNB.
    </p>
    <p class="text-xs mb-4">
      In 2013, the Czech government enacted new laws regulating investment funds to comply with EU directives. Three new forms of investment funds became available in the Czech Republic: the joint stock company with variable capital (SICAV), the limited partnership, and the trust fund. Additionally, investors can register mutual funds, joint stock companies, limited liability companies, and European companies. The fund legislation in the Czech Republic also provides for another type of vehicle – the Qualified Investor Fund (QIF).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Estonia Investment and Pension Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Investment and Pension Funds
    </p>
    <p class="text-xs mb-4">
      Investment and pension funds are collective investment pools managed by management companies with the principle of risk distribution.
    </p>
    <p class="text-xs mb-4">
      Investment funds in Estonia are categorized into public and non-public funds. Public funds target ordinary investors, while non-public funds cater to professional investors. Managing public investment and pension funds requires a license from Finantsinspektsioon, which can be withdrawn if necessary. Non-public fund managers must also obtain an operating license or register their activities with Finantsinspektsioon.
    </p>
    <p class="text-xs mb-4">
      Various types of investment funds can be established in Estonia, including euro funds (UCITS), alternative investment funds (AIF), statutory pension funds, and voluntary pension funds. These funds are typically established as contractual funds, although operating as a company (e.g., private limited company, public limited company, or limited partnership) is possible in certain cases.
    </p>
    <p class="text-xs mb-4">
      Approval of the conditions or statutes of investment funds varies based on whether they are public or non-public. Public investment fund conditions and statutes, including changes, require approval from Finantsinspektsioon. Non-public investment fund conditions and statutes are generally approved by the management board of the fund manager.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Exempt Non-Guernsey Schemes": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Exempt Non-Guernsey Schemes
    </p>
    <p class="text-xs mb-4">
      Under Section 29(1) of the Protection of Investors (Bailiwick of Guernsey) Law, 1987, and related regulations, designated territory status has been granted to the UK, Jersey, the Isle of Man, and the Republic of Ireland.
    </p>
    <p class="text-xs mb-4">
      Entities conducting business related to collective investment schemes with a main place of business in any of the designated territories mentioned above do not require a license under the Law to promote certain collective investment schemes in Guernsey. However, prior notice to the Guernsey Financial Services Commission (GFSC) is required by completing Form EX.
    </p>
    <p class="text-xs mb-4">
      Fees are applicable for funds other than those domiciled in Jersey, including an application fee and an annual fee, which is reduced pro rata in the first year of approval.
    </p>
    <p class="text-xs mb-4">
      Schedule 2 to the Regulations outlines the collective investment schemes established within each designated territory covered by the Regulations. These typically include open-ended schemes equivalent to Guernsey Class A funds. Additionally, funds recognized in the UK, such as UCITS schemes, are also covered.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Alternative Investment Fund (AIF) Manager License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Alternative Investment Fund (AIF) Manager License
    </p>
    <p class="text-xs mb-4">
      The Alternative Investment Fund Managers Directive 2011/61/EU (“AIFMD”) was transposed into Gibraltar legislation via the Financial Services (Alternative Investment Fund Managers) Regulations 2013. AIFMD focuses on regulating the managers of Alternative Investment Funds (“AIFs”) rather than directly regulating the AIFs themselves.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Key Features and Legal Requirements:</span>
      <ul class="list-disc list-inside text-xs mb-4">
        <li>Permitted corporate vehicles: Company and Limited Partnership</li>
        <li>No requirement for a local physical office</li>
        <li>Minimum paid-up capital: €125,000 (or €300,000 for self-managed AIFMs)</li>
        <li>Minimum number of directors: Two</li>
        <li>No residency requirements for directors</li>
        <li>Minimum number of shareholders: Two</li>
        <li>Corporate shareholding allowed</li>
        <li>Company secretary required</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Tax Treatment:</span>
      <ul class="list-disc list-inside text-xs mb-4">
        <li>No Corporation tax on income accrued and derived outside Gibraltar</li>
        <li>No requirement to withhold tax on dividends or on redemption of shares</li>
        <li>No inheritance, capital gains tax, wealth tax, or VAT</li>
        <li>No withholding tax on dividends paid to non-resident companies or individuals</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Duration to Set Up:</span> 3 months
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Benefits of License:</span>
      <ul class="list-disc list-inside text-xs mb-4">
        <li>Low setup costs</li>
        <li>Quick and easy regulatory notification process</li>
        <li>No investment restrictions</li>
        <li>Favorable tax environment</li>
      </ul>
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Experienced Investor Funds (EIFs)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Experienced Investor Funds (EIFs)
    </p>
    <p class="text-xs mb-4">
      EIFs are funds tailored for professional, high net worth, or experienced investors in accordance with the regime established under Part 18 of The Financial Services Act. A Collective Investment Scheme (CIS) encompasses any arrangement regarding a property enabling participants to participate in or receive profits or income arising from the acquisition, holding, management, or disposal of the property.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">The Board:</span>
      Funds can be structured as Protected Cell Companies subject to the GFSC's assessment of associated risks. The Board's competence, experience, and oversight over different cells are crucial factors considered by the GFSC.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Depositary:</span>
      An EIF must appoint a depositary unless exempted due to being a closed-end fund or by GFSC determination.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Administrator:</span>
      The EIF's administrator must be domiciled and regulated in Gibraltar or, if abroad, adhere to a regulatory regime providing equivalent protection.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Authorization of EIF:</span>
      The administrator notifies the GFSC of the fund's establishment within 10 working days or at least 10 working days before its launch, facilitating registration.
    </p>
    <p class="text-xs mb-4">
      Applicants should submit an application form and additional documentation as required.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Guernsey Authorised Fund": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Authorised Fund
    </p>
    <p class="text-xs mb-4">
      If a vehicle established in Guernsey satisfies the criteria for a "collective investment scheme" or "fund," it must be registered or authorized by the Guernsey Financial Services Commission (GFSC) for services to be provided.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Categories:</span>
      <br />
      - Authorized collective investment schemes
      <br />
      - Registered collective investment schemes
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Open-ended funds may be Authorized:</span>
      <br />
      - Class B: popular for marketing to institutions and high net worth/sophisticated investors
      <br />
      - Class A: eligible for marketing to the general public in certain jurisdictions
      <br />
      - Class Q: restricted to qualifying professional investors
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Features and Requirements:</span>
      <br />
      - Corporate vehicles: Jersey Company, Incorporated cell company (ICC), Protected cell company (PCC), Limited Partnership, Unit trust
      <br />
      - No local physical office required
      <br />
      - No minimum paid-up capital
      <br />
      - Minimum one director required
      <br />
      - Corporate directorship allowed
      <br />
      - Service providers required: fund manager/investment manager and auditors
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Tax Treatment:</span>
      <br />
      - No capital, value-added, or inheritance taxes in Guernsey
      <br />
      - Certain businesses pay a standard rate of 0% income tax on profits
      <br />
      - Funds have the option to apply for exempt company status
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Duration to Set Up:</span>
      <br />
      - 3 months
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
  `,
    "Guernsey Authorized Closed-Ended Investment Schemes": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Authorized Closed-Ended Investment Schemes
    </p>
    <p class="text-xs mb-4">
      Under the Protection of Investors (Bailiwick of Guernsey) Law, 1987, closed-ended schemes are declared as authorized or registered.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Key Features:</span>
      <br />
      - Each scheme must be authorized under the Law and is subject to continuing supervision by the Commission.
      <br />
      - Authorized Closed-ended investment schemes may be established as companies (including protected cell and incorporated cell companies), unit trusts, or limited partnerships.
      <br />
      - The scheme must be established with the objective of spreading risk, with criteria specified in the scheme’s information particulars.
      <br />
      - Provisions for disclosures to investors, notifications to the Commission regarding changes, financial statements, and statistical information.
      <br />
      - The Commission may consider the appointment of a Custodian/Trustee domiciled outside Guernsey.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Guernsey Closed-Ended Scheme": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Closed-Ended Scheme
    </p>
    <p class="text-xs mb-4">
      The Protection of Investors (Bailiwick of Guernsey) Law, 1987 as amended, includes closed-ended investment funds, declared as authorized or registered under section 8 of the POI Law.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Key Features:</span>
      <br />
      - Each Guernsey domiciled authorized fund must have a designated manager licensed under the POI Law and operating in Guernsey.
      <br />
      - The GFSC may consider the appointment of a custodian/trustee domiciled outside Guernsey, but it's not mandatory.
      <br />
      - Unless classified as a Qualifying Investor or registered Fund, a three-stage process applies: Outline Authorization, Interim Authorization, and Formal Authorization.
      <br />
      - Fast-track approval process for authorized closed-ended funds established as "registered" or as a "QIF" in Guernsey.
      <br />
      - Separate formal consent/approval for an Incorporated Cell Company (ICC) or Protected Cell Company (PCC) following outline authorization.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Guernsey Green Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Green Funds
    </p>
    <p class="text-xs mb-4">
      Any investment fund established and regulated in Guernsey can seek designation as a Guernsey Green Fund. To do so, a fund must ensure its principal documents comply with the Guernsey Green Fund Rules and ensure its portfolio meets the 'green criteria' set out in the Guernsey Green Fund Rules. Having done so and obtained certification, the fund will then be entitled to use the Guernsey Green Fund brand and logo.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Objective:</span>
      <br />
      Provide a platform for investments in green initiatives, enhancing investor access to the green investment space.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Green Criteria:</span>
      <br />
      - 75% of portfolio invested in renewable energy projects, energy efficiency initiatives, sustainable land use, clean transportation, climate change adaptation projects.
      <br />
      - Remaining 25% of the portfolio can be invested in other asset classes, provided they align with the fund's objective of mitigating environmental damage.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Certification Process:</span>
      <br />
      Two routes for certification: Third-party certification or certification by the Guernsey licensed administrator or manager.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Guernsey Open-Ended Scheme": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Open-Ended Scheme
    </p>
    <p class="text-xs mb-4">
      A Guernsey fund is open-ended if the investors are entitled to have our units redeemed or repurchased by the fund at a price related to the value of the property to which we relate (i.e., the NAV).
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Classes of Funds:</span>
      <br />
      - Class A Funds: Authorized under The Authorised Collective Investment Schemes (Class A) Rules 2008, allowing public marketing in the UK.
      <br />
      - Class B Funds: Usually marketed to institutional or professional investors, with flexible rules reflecting best practices.
      <br />
      - Class Q Funds: Marketed to qualifying professional investors, subject to simpler rules.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Restrictions:</span>
      <br />
      Restrictions on types of investors who can invest in certain classes of funds.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Guernsey Registered Fund": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Registered Fund
    </p>
    <p class="text-xs mb-4">
      An open-ended registered fund is subject to the Registered Collective Investment Scheme Rules 2008 and the Prospectus Rules 2008.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Characteristics:</span>
      <br />
      - Objective: Spread risk; criteria for spread of risk specified in offering document.
      <br />
      - Disclosures: Prospectus Rules 2008 govern disclosures in offering document.
      <br />
      - Notifications: Provisions for notifications to GFSC regarding changes to the fund, financial and statistical information.
      <br />
      - Restrictions: Cannot be offered to the public in Guernsey; requires a Guernsey licensed custodian (unless derogation available).
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Features:</span>
      <br />
      - Corporate vehicles permitted: Guernsey Company, Incorporated cell company (ICC) or a Protected cell company (PCC), Limited Partnership, Unit trust.
      <br />
      - No minimum paid-up capital; minimum number of directors is one.
      <br />
      - Service providers required: Custodian (local), Fund manager/investment manager, Auditors.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Ireland Alternative Investment Fund (Non UCITS Fund)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Ireland Alternative Investment Fund (Non UCITS Fund)
    </p>
    <p class="text-xs mb-4">
      An alternative investment fund (AIF) is a type of collective investing where funds are raised from a number of investors with a view to investing them in accordance with a defined investment policy.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Authorized Categories:</span>
      <br />
      - Retail Investor AIF (RIAIF): Marketed to retail investors, no minimum subscription requirements, investment restrictions apply.
      <br />
      - Qualifying Investor AIF (QIAIF): Marketed to qualifying investors, no investment restrictions, minimum investment of €100,000 required.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Benefits of launching a QIAIF in Ireland:</span>
      <br />
      - Flexibility in investment strategies.
      <br />
      - No UCITS fund requirements (e.g., liquidity, diversification).
      <br />
      - Access to EU marketing passport for sale to professional investors.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Taxation:</span>
      <br />
      - No Irish taxation on income or gains.
      <br />
      - Distributions to non-Irish shareholders without withholding taxes.
      <br />
      - VAT exemptions on services to QIAIFs.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Steps to launch a QIAIF in Ireland:</span>
      <br />
      - Choose appropriate structure (ICAV, CCF, Unit Trust).
      <br />
      - Select and appoint service providers (administrator, depository, investment manager, etc.).
      <br />
      - Obtain Central Bank of Ireland approval of the investment manager.
      <br />
      - Draft required legal documentation.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,

    "Ireland Undertaking for Collective Investment in Transferable Securities (UCITS)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Ireland Undertaking for Collective Investment in Transferable Securities (UCITS)
    </p>
    <p class="text-xs mb-4">
      UCITS are investment funds regulated at a European Union (EU) level, allowing funds to seek single authorization in one EU member state and register for sale across EU member states.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Authorized Structures:</span>
      <br />
      - Unit trusts
      <br />
      - Common contractual funds
      <br />
      - Variable or fixed capital companies
      <br />
      - Irish Collective Asset-management Vehicles (ICAVs)
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Benefits of UCITS fund in Ireland:</span>
      <br />
      - Leading funds domicile with vast assets under administration.
      <br />
      - Expertise in alternative and complex strategies.
      <br />
      - Efficient regulatory approval process with approval timeframe of ten to twelve weeks.
      <br />
      - Favorable taxation regime with no Irish taxation on income or gains.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Steps in launching a UCITS in Ireland:</span>
      <br />
      - Choose an appropriate structure (Unit Trust, CCF, ICAV).
      <br />
      - Select and appoint service providers (administrator, depository, investment manager, etc.).
      <br />
      - Obtain Central Bank of Ireland approval of the investment manager.
      <br />
      - Draft required legal documentation (prospectus, KIID, agreements, etc.).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>`,
    "Isle of Man Collective Investment Schemes": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Isle of Man Collective Investment Schemes</p>
    <p class="text-xs mb-4 font-bold">Class 3 license – Services to</p>
    <p class="text-xs mb-4">A license to carry on the Class 3 regulated activity of providing services to funds permits a business operating in or from the Isle of Man (within certain criteria and with specified exclusions) to provide one or more services to different types of funds from the following list:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">manager to certain funds</li>
      <li class="text-xs mb-4">administrator to certain funds</li>
      <li class="text-xs mb-4">asset manager to certain funds</li>
      <li class="text-xs mb-4">investment adviser to certain funds</li>
      <li class="text-xs mb-4">trustee or fiduciary custodian to certain funds</li>
      <li class="text-xs mb-4">custodian to certain funds</li>
      <li class="text-xs mb-4">promoter of a fund which requires a regulated promoter</li>
      <li class="text-xs mb-4">management and administration services to an Isle of Man manager, administrator, asset manager, or investment adviser</li>
      <li class="text-xs mb-4">outsourced functions on behalf of an overseas manager or administrator of funds</li>
      <li class="text-xs mb-4">specified services to a Recognized Scheme</li>
    </ul>
    <p class="text-xs mb-4">A license holder under the Financial Services Act 2008 is obliged to comply with any license conditions that have been imposed by the Isle of Man Financial Services Authority ("the Authority") and which are shown on the license.</p>
    <p class="text-xs mb-4">A license holder and its key staff are required to be fit and proper persons. The Authority's licensing policy is to apply a test of fitness and propriety in the key areas of integrity, competence, and financial standing.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Funds": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Isle of Man Funds</p>
    <p class="text-xs mb-4">The Collective Investment Schemes Act 2008 ("CIS Act") sets out the statutory framework in the Isle of Man for the promotion and regulation of collective investment schemes ("funds").</p>
    <p class="text-xs mb-4">Current Fund Types</p>
    <p class="text-xs mb-4">Authorised Collective Investment Schemes - high level key features</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Formally authorised - most highly regulated</li>
      <li class="text-xs mb-4">Must appoint an IOM Manager</li>
      <li class="text-xs mb-4">Must appoint a fiduciary custodian/trustee</li>
      <li class="text-xs mb-4">Must have appropriate arrangements for asset management</li>
      <li class="text-xs mb-4">Benefits from an investor compensation scheme</li>
      <li class="text-xs mb-4">Can be sold directly to the general public in the IOM and subject to recognition elsewhere, for example: UK, Hong Kong, Australia, Jersey, and Guernsey etc</li>
      <li class="text-xs mb-4">Can be sold via the other sales routes</li>
    </ul>
    <p class="text-xs mb-4">Regulated Fund - high level key features</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Funds aimed at retail investors or markets requiring a Fiduciary Custodian, Trustee, or Custodian</li>
      <li class="text-xs mb-4">May be open-ended or closed-ended</li>
      <li class="text-xs mb-4">Regulated IOM fund subject to Authority pre-approvals</li>
      <li class="text-xs mb-4">No restrictions on types of investors</li>
      <li class="text-xs mb-4">Must appoint an IOM Manager</li>
      <li class="text-xs mb-4">Must appoint a Fiduciary Custodian, Trustee, or Custodian</li>
      <li class="text-xs mb-4">Flexibility on investment advisory/asset management requirements</li>
      <li class="text-xs mb-4">Normally sold through independent financial advisers</li>
    </ul>
    <p class="text-xs mb-4">Qualifying Fund - high level key features</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Not retail – no minimum initial investment level</li>
      <li class="text-xs mb-4">No regulatory pre-approval</li>
      <li class="text-xs mb-4">Post-event notifications to the Authority</li>
      <li class="text-xs mb-4">Must appoint an IOM Manager</li>
      <li class="text-xs mb-4">Must appoint an appointed custodian</li>
      <li class="text-xs mb-4">Flexibility on investment advisory/asset management requirements</li>
      <li class="text-xs mb-4">Investors must be "qualifying investors"</li>
      <li class="text-xs mb-4">Normally sold through Independent Financial Advisers to qualifying investors</li>
    </ul>
    <p class="text-xs mb-4">Specialist Fund – high level key features</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Not retail – minimum initial investment level above US$100000</li>
      <li class="text-xs mb-4">No regulatory pre-approval</li>
      <li class="text-xs mb-4">Post-event notifications to the Authority</li>
      <li class="text-xs mb-4">Must appoint an administrator in IOM or acceptable jurisdiction</li>
      <li class="text-xs mb-4">No formal requirements for a custodian</li>
      <li class="text-xs mb-4">Flexibility on investment advisory/asset management requirements</li>
      <li class="text-xs mb-4">Investors must be "specialist investors"</li>
      <li class="text-xs mb-4">Normally sold through Independent Financial Advisers to specialist investors or direct to institutional investors</li>
    </ul>
    <p class="text-xs mb-4">Exempt Scheme</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Private arrangements</li>
      <li class="text-xs mb-4">Not directly subject to regulation</li>
      <li class="text-xs mb-4">Must have fewer than 50 investors</li>
      <li class="text-xs mb-4">No invitation to become a participant can be made to the public or any section of it in any part of the world</li>
    </ul>
    <p class="text-xs mb-4">Recognized Scheme</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Schemes established outside the IOM</li>
      <li class="text-xs mb-4">Equivalent to an IOM Authorised Collective Investment Scheme</li>
    </ul>
    <p class="text-xs mb-4">Overseas Schemes</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Schemes established outside the IOM that are not Recognized Schemes or private arrangements equivalent to the Exempt Scheme (known as "Exempt Type Schemes")</li>
    </ul>
    <p class="text-xs mb-4">Fund Functionaries</p>
    <p class="text-xs mb-4">License holders that provide services to funds are regulated under the Financial Services Act 2008. Such services constitute Class 3 activities under the Regulated Activities Order 2011.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Fund Licenses in Jersey": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Fund Licenses in Jersey</p>
    <p class="text-xs mb-4">Jersey is one of the premier offshore jurisdictions for the establishment of investment funds and other investment structures. Jersey is highly regarded for the quality of its regulatory regime and its legal and other service providers. Investment funds contribute significantly to Jersey's finance industry, and many innovative products and structures are available to suit all types of investors and promoters.</p>
    <p class="text-xs mb-4">Benefits of Jersey as a Leading Funds Domicile</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Politically and financially stable</li>
      <li class="text-xs mb-4">Well known to the global investor community</li>
      <li class="text-xs mb-4">London time zone and connections</li>
      <li class="text-xs mb-4">Many large service providers</li>
      <li class="text-xs mb-4">EU market access but outside AIFMD</li>
      <li class="text-xs mb-4">Tax-neutral</li>
    </ul>
    <p class="text-xs mb-4">Categorization of Funds</p>
    <p class="text-xs mb-4">Private Placement Fund</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Specifically designed for the professional and institutional investor market</li>
      <li class="text-xs mb-4">3 working days JFSC turnaround</li>
      <li class="text-xs mb-4">No more than 50 offerees</li>
      <li class="text-xs mb-4">Highly flexible structure</li>
      <li class="text-xs mb-4">No prescribed investment restrictions, concentration limits, or leverage restraints</li>
      <li class="text-xs mb-4">May be open or closed-ended provided that the 50 or fewer test (within the meaning of the JPF Guide) is met</li>
      <li class="text-xs mb-4">Must appoint a designated service provider registered under the FS Law</li>
      <li class="text-xs mb-4">Without EU marketing: 48-hour regulatory approval</li>
      <li class="text-xs mb-4">No requirement for audit, Jersey directors, or a PPM</li>
      <li class="text-xs mb-4">No ongoing regulation</li>
    </ul>
    <p class="text-xs mb-4">EU Marketing (sub-threshold Jersey AIFM)</p>
    <p class="text-xs mb-4">10-day regulatory approval</p>
    <p class="text-xs mb-4">No requirement for audit or 2 Jersey directors</p>
    <p class="text-xs mb-4">No ongoing regulation (except limited applicable AIFMD rules)</p>
    <p class="text-xs mb-4">EU Marketing (Jersey AIFM is NOT sub-threshold)</p>
    <p class="text-xs mb-4">10-day regulatory approval</p>
    <p class="text-xs mb-4">2 Jersey directors (or 3 if the AIFM will directly handle client assets)</p>
    <p class="text-xs mb-4">No ongoing regulation (except limited applicable AIFMD rules)</p>
    <p class="text-xs mb-4">Regulated Public Funds</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Suitable for funds with more than 50 investors or where a regulated product is needed</li>
      <li class="text-xs mb-4">3-day approval (10 days for a new "special purpose" service provider company)</li>
      <li class="text-xs mb-4">No investment or borrowing restrictions</li>
      <li class="text-xs mb-4">Eligible for EU marketing</li>
    </ul>
    <p class="text-xs mb-4">Expert Funds</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">An "expert fund" is one which complies with the requirements of the Jersey Expert Fund Guide issued by the JFSC and is marketed only to "expert investors" (as defined in the Jersey Expert Fund Guide); among other things, this includes any person committing to invest at least US$100,000 (or its currency equivalent) in the fund.</li>
      <li class="text-xs mb-4">3 working days JFSC turnaround</li>
      <li class="text-xs mb-4">Can target over 50 offerees</li>
      <li class="text-xs mb-4">Can only target 'expert investors'</li>
      <li class="text-xs mb-4">May be open or closed-ended</li>
      <li class="text-xs mb-4">Certified Funds and must have at least two Jersey resident directors for the fund company, trustee (for unit trusts), or general partner (for limited partnerships)</li>
      <li class="text-xs mb-4">Must appoint an administrator or manager together with staff and a physical presence in Jersey</li>
      <li class="text-xs mb-4">Must have adequate arrangements for the safe custody of Our assets (including, if applicable, prime brokerage arrangements) which must be disclosed in Our offer document</li>
      <li class="text-xs mb-4">There is no requirement for an investor or advisor to be incorporated or carry on business in Jersey, and the Promoter Policy does not apply</li>
    </ul>
    <p class="text-xs mb-4">Eligible Investor Funds</p>
    <p class="text-xs mb-4">A fund suitable for Eligible Investors (professional or experienced investors) and which can be authorized on a fast-track basis provided it fulfills the criteria of the Jersey Eligible Investor Fund Guide issued by the JFSC.</p>
    <p class="text-xs mb-4">Unregulated Funds</p>
    <p class="text-xs mb-4">There are two types of Unregulated Fund:</p>
    <p class="text-xs mb-4">Unregulated Eligible Investor Funds: May be open or closed-ended and may only be offered to eligible investors, including professional or institutional investors or investors who make a minimum initial investment of US$1,000,000 (or its currency equivalent).</p>,
    <p class="text-xs mb-4">Unregulated Exchange-Traded Funds: Must be closed-ended and listed on an exchange or market approved by the JFSC.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Collective Investment Schemes": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Malta Collective Investment Schemes</p>
    <p class="text-xs mb-4">Collective Investment Schemes are financial products where money from several different investors is pooled and then invested by a fund manager according to specific criteria. The scheme or fund is divided into segments called ‘units’, which are to some degree similar to shares. Investors take a stake in the fund by buying these units, we will therefore become unitholders. The price of a unit is based on the value of the investments the fund has invested in. Collective investment schemes may have different fee structures, make sure you understand how you will be charged before you invest as charges may have a major impact on the performance of your investment.</p>
    <p class="text-xs mb-4">A collective investment scheme (CIS) is defined by the Malta Investment Services Act as a scheme or arrangement which has as its object the collective investment of capital acquired by means of an offer of units for subscription, sale or exchange and which has any of the following characteristics:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The scheme or arrangement operates according to the principle of risk spreading, and either:</li>
      <li class="text-xs mb-4">The contributions of the participants and the profits or income out of which payments are to be made to them are pooled; or</li>
      <li class="text-xs mb-4">At the request of the holders, units are or are to be re-purchased or redeemed out of the assets of the scheme, or arrangement, continuously or in blocks at short intervals; or</li>
      <li class="text-xs mb-4">Units are, or have been, or will be issued continuously or in blocks at short intervals.</li>
    </ul>
    <p class="text-xs mb-4">A CIS may be set up in Malta as a:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">SICAV (investment company with variable share capital (i.e. an open-ended fund)</li>
      <li class="text-xs mb-4">Investment company with fixed share capital (i.e. a closed-ended fund)</li>
      <li class="text-xs mb-4">Contractual Fund</li>
      <li class="text-xs mb-4">Limited Partnership</li>
      <li class="text-xs mb-4">Incorporated Cell Company; or</li>
      <li class="text-xs mb-4">Unit Trust.</li>
    </ul>
    <p class="text-xs mb-4">CISs can be licensed as follows:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">UCITS Schemes: UCITS Schemes are open-ended schemes licensed in accordance with the provisions of the Investment Services Act. Within this framework, these Schemes benefit from passporting rights within the EU and can hence be marketed in other EU or EEA Member States.</li>
      <li class="text-xs mb-4">Alternative Investment Funds: This category of funds includes non-UCITS Retail Schemes and Professional Investor Funds (PIFs). Non-UCITS Retail Schemes can be open-ended or closed-ended retail schemes. On the other hand, PIFs are regulated under a separate framework which is particularly suited for funds sold internationally on a private placement basis.</li>
    </ul>
    <p class="text-xs mb-4">Collective Investment schemes in Malta are monitored by the Malta Financial Services Authority which, besides having the responsibility for the licensing process, is also responsible for the regulation and ongoing supervision of Collective Investment Schemes. It is to be noted however that the following Malta CIS are exempted from the requirement to operate according to the principle of risk spreading:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Alternative investment funds marketed to professional investors;</li>
      <li class="text-xs mb-4">A collective investment scheme licensed as a professional investor fund targeting qualifying investors in terms of the Investment Services Rules;</li>
      <li class="text-xs mb-4">A collective investment scheme licensed as a professional investor fund targeting extraordinary investors in terms of the Investment Services Rules.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Malta Notified Alternative Investment Fund (NAIF)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Malta Notified Alternative Investment Fund (NAIF)</p>
    <p class="text-xs mb-4">The Malta Financial Services Authority (MFSA) announced on 11 February 2016 a new fund structure for Alternative Investment Funds (AIFs): the Notified AIF. This new framework is aimed at qualifying investors and professional investors under MiFID.</p>
    <p class="text-xs mb-4">The new regime will only be applicable to AIFs, whether open-ended or closed-ended, which are not already licensed by the MFSA. The regime is not available for:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Loan funds;</li>
      <li class="text-xs mb-4">AIFs which are not marketed and sold exclusively to professional and/or qualifying investors; or</li>
      <li class="text-xs mb-4">Funds which invest in non-financial assets (e.g. real estate).</li>
    </ul>
    <p class="text-xs mb-4">An AIF, in relation to which a notification may be submitted, may be in the form of one of the below structures:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">An Investment Company with Variable Share Capital (SICAV),</li>
      <li class="text-xs mb-4">An Investment Company with Fixed Share Capital (INVCO),</li>
      <li class="text-xs mb-4">An Incorporated Cell Company of a SICAV ICC,</li>
      <li class="text-xs mb-4">An Incorporated Cell of a Recognized Incorporated Cell Company (RICC),</li>
      <li class="text-xs mb-4">A Contractual Fund.</li>
    </ul>
    <p class="text-xs mb-4">Main Features of the Notified Alternative Investment Fund (NAIF)</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The Investment Fund is not subject to the licensing process by the MFSA;</li>
      <li class="text-xs mb-4">The NAIF is subject to a Notification Process;</li>
      <li class="text-xs mb-4">Onus of Due-Diligence & Ongoing supervision lie within the AIFM;</li>
      <li class="text-xs mb-4">The NAIF can be both open & closed ended;</li>
      <li class="text-xs mb-4">The NAIF cannot be self-managed;</li>
      <li class="text-xs mb-4">The NAIF cannot be in the form of a Loan Fund;</li>
      <li class="text-xs mb-4">The NAIF cannot invest in non-financial assets, including real-estate;</li>
      <li class="text-xs mb-4">The AIFM is to appoint an MLRO as oversight over the NAIF.</li>
    </ul>
    <p class="text-xs mb-4">Although the NAIF is not subject to the 3-phased licensing procedure, it is still subject to a Notification process. Such process is structured as follows:</p>
    <ol class="list-decimal ml-4">
      <li class="text-xs mb-4">A written request by the AIFM in respect of an AIF – and its sub-funds, if any – to be included in the list of Notified AIFs in the form and manner as required by the MFSA;</li>
      <li class="text-xs mb-4">Prior submission of (1) above, the governing body of the AIF shall approve a resolution certifying that the Prospectus of the AIF satisfies the minimum criteria as prescribed by the MFSA;</li>
      <li class="text-xs mb-4">The AIFM shall submit the duly completed written notification together with the accompanying documents within thirty (30) calendar days from the date of the resolution of the governing body of the AIF whereby approving the AIF's prospectus and prior to the effective date of the prospectus;</li>
      <li class="text-xs mb-4">The competent authority should include the AIF in the List of Notified AIFs within ten (10) working days from the date of filing of the notification request together with the completed required documentation.</li>
    </ol>
    <p class="text-xs mb-4">Benefits of NAIF</p>
    <p class="text-xs mb-4">Benefits include a quick process, which means fund managers can bring AIFs to market more swiftly. There is also no regulation of the AIF by the MFSA – as the name suggests, this framework only requires a notification. One important distinction to draw between the Notified AIF and the new QIAIF and RAIF structures in Ireland and Luxembourg, respectively, is that there is no requirement for domestic service providers to be appointed by the fund.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Malta Undertaking in Collective Investment Scheme (UCITS) Fund": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Malta Undertaking in Collective Investment Scheme (UCITS) Fund</p>
    <p class="text-xs mb-4">The Malta Financial Services Authority (MFSA) regulates collective investment schemes in Malta. The Maltese Investment Services Act (the Act) provides the statutory basis for regulating investment funds constituted in or from Malta. Malta’s legislation is in line with EU law and built on best practices from other finance centers.</p>
    <p class="text-xs mb-4">The Undertaking in Collective Investment Scheme (UCITS) brand is a pan-European regulated branded investment fund which is designed for the retail investor market.</p>
    <p class="text-xs mb-4 font-bold">Features</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">A regulated EU structure under the UCITS directive</li>
      <li class="text-xs mb-4">Suitable for retail investors</li>
      <li class="text-xs mb-4">Prescriptive diversification and leverage rules</li
      <li class="text-xs mb-4">Single fund or multi-fund structure, combining different investment strategies or asset classes in different sub-funds</li>
      <li class="text-xs mb-4">Possibility of internally managed</li>
      <li class="text-xs mb-4">Availability of marketing passporting of UCITS to all EU member states</li>
      <li class="text-xs mb-4">Corporate vehicles permitted are Incorporated Cell Company (ICC), SICAV, Limited partnerships, Unit trust, Contractual fund</li>
      <li class="text-xs mb-4">Minimum capital requirement is €300,000</li>
      <li class="text-xs mb-4">Minimum number of directors is two</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Service Providers Required</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Custodian</li>
      <li class="text-xs mb-4">Fund manager/ investment manager</li>
      <li class="text-xs mb-4">Fund administrator</li>
      <li class="text-xs mb-4">Auditors</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Tax Treatment</p>
    <p class="text-xs mb-4">Income from collective investment schemes in Malta is tax exempt. However, if the value for the assets in Malta allocated to the fund is 85% of the value of the total assets, the fund is liable to a withholding tax on income from Malta sources of 10% to 15%.</p>
    <p class="text-xs mb-4 font-bold">Duration to Set Up</p>
    <p class="text-xs mb-4">About 2 months</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Collective Investment Schemes in Netherlands": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Collective Investment Schemes in Netherlands</p>
    <p class="text-xs mb-4">Collective Investment Schemes are more frequently known as ‘investment funds’, ‘mutual funds’ or simply ‘funds’. We invest in assets, such as bonds, equities, or cash. The collective assets owned by the fund are called a portfolio, and we are managed by a professional fund manager.</p>
    <p class="text-xs mb-4">Under section 2:65 of the Financial Supervision Act (Wet op het financieel toezicht / Wft) companies that manage collective investment schemes are required to have a license. The Netherlands Authority for the Financial Markets (Autoriteit Financiële Markten) is the body that issues licenses to companies to act as management companies of collective investment schemes.</p>
    <p class="text-xs mb-4">Following the Alternative Investment Fund Managers Directive, a manager requires a registration in certain situations in order to manage an AIFM and/or to offer units or shares in the Netherlands to investors.</p>
    <p class="text-xs mb-4 font-bold">Features and requirements for AIFM in Netherlands</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The process involves submission of a template application form plus numerous supporting documents to the Netherlands Authority for Financial Markets (“AFM”) for review. Part of the application is a test of suitability and reliability of the board members and supervisory board members of the AIFM</li>
      <li class="text-xs mb-4">Additional forms must be provided along with the application form: – Notification form AIFs, Notification form AIFM depositary and Application form for suitability and reliability testing for each (supervisory) board member</li>
      <li class="text-xs mb-4">The AFM can decide within 13 weeks, however, the AFM may use up to 26 weeks in which case the AFM will inform the applicant thereof. As such, the practical timetable is around 8 months (including preparation time)</li>
      <li class="text-xs mb-4">The AFM charges an application fee of €5,500, and additional fees for the suitability and reliability tests.</li>
      <li class="text-xs mb-4">Initial capital of €125,000 required, unless an AIF is set up as an investment entity with legal personality without a separate AIFM in which case initial capital of €300,000 is required. Additional own funds required if the AIFM does not have a separate professional indemnity insurance</li>
      <li class="text-xs mb-4">In addition to AIFMD depositary, a ‘legal owner’ must be appointed if AIFM sets up AIFs without legal personality to hold the assets</li>
      <li class="text-xs mb-4">Four eyes principle is applied. AIFM should have at least two day-to-day policymakers</li>
      <li class="text-xs mb-4">AIFM with an official seat in the Netherlands, head office must be in the Netherlands</li>
      <li class="text-xs mb-4">The standard corporate income tax rate on income is 20% (for profits up to €200,000) / 25% (for profits in excess of €200,000)</li>
      <li class="text-xs mb-4">No withholding tax on interest and royalty payments. Standard Dutch dividend withholding tax rate on outgoing dividends is 15%, however, a reduction or exemption may be applicable on the basis of EU Parent-Subsidiary Directive, a double tax treaty or by the use of a Dutch “cooperative”. So tax-free repatriation to US, UK and a wide range of other jurisdictions is generally available</li>
      <li class="text-xs mb-4">Income from employment is subject to income tax at progressive rates up to 52%. However, certain qualifying foreign employees that move to the Netherlands may be able to apply for a “30% ruling”, which may result in an effective maximum income tax rate of 36.4% (instead of 52%)</li>
      <li class="text-xs mb-4">An AIFM must have legal personality under Dutch corporate law (typically a Dutch private limited company is incorporated). Incorporation requires the assistance of a Dutch civil law notary</li>
      <li class="text-xs mb-4">The entity will need to be registered with the Dutch Chamber of Commerce.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Benefits of AIFM in Netherlands</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Broad domestic and treaty dividend withholding tax exemptions</li>
      <li class="text-xs mb-4">Limited quantitative requirements on corporate governance</li>
      <li class="text-xs mb-4">Data protection legislation is very similar to the UK in terms of practical application</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Non-Guernsey Schemes (NGS)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Non-Guernsey Schemes (NGS)</p>
    <p class="text-xs mb-4">A Non-Guernsey Scheme (NGS) is a collective investment scheme that is not established or incorporated in the Bailiwick of Guernsey (the Bailiwick) and is not authorised or registered by the Commission.</p>
    <p class="text-xs mb-4">Under the current regime, an entity licensed under the Protection of Investors (Bailiwick of Guernsey) Law, 1987 (a POI licensee) that intends to manage, administer, or provide custody to an NGS is required to give prior written notice to and seek formal approval from the Commission before commencing any of those restricted activities in respect of each NGS (note that a POI licensee may act for an NGS which is authorised in Jersey, Isle of Man, United Kingdom and Ireland without prior approval). Once approved, the POI licensee is subject to the NGS Rules, which are currently only applied in practice to restricted activities carried out in connection with open-ended collective investment schemes.</p>
    <p class="text-xs mb-4">Under the proposals, the requirement for prior notification and approval will be removed and replaced with a requirement that the POI licensee submits additional information in its annual return on the activities it has undertaken in respect of all investment assets serviced in Guernsey. The fees associated with NGS, i.e. notification and annual fees, will naturally fall away.</p>
    <p class="text-xs mb-4">The GFSC must give specific approval to a local licensee before that licensee may commence providing services in relation to a non-Guernsey open-ended scheme. In considering whether or not to approve such a proposal, the GFSC will take into account:</p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The protection and enhancement of the reputation of the Bailiwick as a financial center;</li>
      <li class="text-xs mb-4">The general nature and specific attributes of the controlled investment business to which the proposal relates; and</li>
      <li class="text-xs mb-4">Any other factors that the GFSC considers appropriate to consider. Normally, approval will only be given if the non-Guernsey open-ended fund would have been likely to obtain authorization under the Protection of Investors (Bailiwick of Guernsey) Law, 1987, as amended.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
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