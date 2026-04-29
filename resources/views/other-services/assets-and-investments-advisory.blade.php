<x-app-layout
    title="@yield('meta_title', 'Assets and Investment Advisory Services for Corporate Clients')"
    metaDescription="@yield('meta_description', 'Expert advisory services for assets and investments, helping clients optimize growth, secure portfolios, and remain compliant with all relevant regulations.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Assets And Investment Advisory
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Assets And Investment Advisory</span>
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
    "Estonia Fund Management Companies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Fund Management Companies
    </p>
    <p class="text-xs mb-4">
      The main and permanent work of a fund management company is to manage the assets of a fund established as a company or a contractual fund. A management company may manage several funds. Alongside fund management, the management company may provide the following services:
    </p>
    <ul class="text-xs mb-4 list-disc ml-4">
      <li>Managing a securities portfolio within the meaning of the Securities Markets Act;</li>
      <li>Investment advice;</li>
      <li>Holding fund units or shares for clients;</li>
      <li>Fund management services within the meaning of the Investment Funds Act for funds whose assets it does not manage.</li>
    </ul>
    <p class="text-xs mb-4">
      A license is needed to operate as a fund manager, and this is issued and can be withdrawn by Finantsinspektsioon.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar CIS Administrator": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar CIS Administrator
    </p>
    <p class="text-xs mb-4">
      A CIS Administrator provides administration services to collective investment schemes. CIS Administration is a regulated activity under the Financial Services Act 2019.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Services Provided by CIS Administrator</span><br>
      - Fund accounting;<br>
      - Registrar, transfer agency and client services;<br>
      - Financial accounting;<br>
      - Compliance.
    </p>
    <p class="text-xs mb-4">
      CIS Administrators are required to have a service agreement with funds that set out the agreed services that the CIS administrator will provide to the fund, the fees to be charged and termination provisions.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Application Process</span><br>
      Applicants should submit an application pack with all relevant documents. The minimum regulatory capital is £10,000.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Company Managers in Gibraltar": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Company Managers in Gibraltar
    </p>
    <p class="text-xs mb-4">
      A Company Manager provides company or corporate administration by way of business. A Company Manager permission allows a firm to carry out a range of activities, which includes, but is not limited to:
    </p>
    <ul class="text-xs mb-4 list-disc ml-4">
      <li>The formation, management, or administration of companies, partnerships, or other unincorporated bodies;</li>
      <li>Provision of corporate or individual directorship services;</li>
      <li>Provision of corporate or individual secretary or in any other capacity as an officer of a company, partnership, or other unincorporated body other than a director;</li>
      <li>Provision of nominee services, including (without limitation) acting as or providing nominee shareholders;</li>
      <li>Provision of Registered Office facilities.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Experienced Investor Fund Director": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Experienced Investor Fund Director
    </p>
    <p class="text-xs mb-4">
      EIFs are funds designed for professional, high net worth, or experienced investors. EIFs are required to have at least two approved EIF directors.
    </p>
    <p class="text-xs mb-4">
      The GFSC will not grant consent for an individual to act as an EIF Director unless it is satisfied that the individual:
    </p>
    <ul class="text-xs mb-4 list-disc ml-3">
      <li>Has at least five years of relevant experience in providing services to funds;</li>
      <li>Can provide evidence that we have familiarized themselves with the GFSC's EIF Director Policy Statement.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Professional Trustee and Foundation Councillor": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Professional Trustee and Foundation Councillor
    </p>
    <p class="text-xs mb-4">
      Professional Trusteeship is defined as an entity or individual holding out as a professional trustee for profit or reward, or soliciting for such, in or from within Gibraltar.
    </p>
    <p class="text-xs mb-4">
      Companies or individuals authorized as professional trustees and professional foundation councillors can provide company management services without needing separate authorization.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Application Process</span><br>
      An applicant who is already authorized as a Professional Trustee and intends to apply to provide Professional Foundation Councillor services is required to submit a letter together with an application fee to vary the scope of authorization.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Small Scheme Manager": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Small Scheme Manager
    </p>
    <p class="text-xs mb-4">
      A Small Scheme Manager is an AIFM that manages portfolios of AIFs whose assets under management do not exceed a threshold of EUR 100 million, EUR 500 million when the portfolios of AIFs consist of AIFs that have no redemption rights for five years following the date of initial investment in each AIF.
    </p>
    <p class="text-xs mb-4">
      Small Scheme Managers must register as such with the GFSC and comply with the conditions applicable to Small Scheme Managers. AIFMs that manage AIFs whose assets exceed the thresholds set out above require an Alternative Investment Fund Managers (AIFM) authorization.
    </p>
    <p class="text-xs mb-4">
        <span class="font-bold">Application Process</span><br>
      Applicants should submit an application pack with all relevant documents. Small Scheme Managers are required, on an ongoing basis, to self-assess the level of financial resources required to be able to meet its liabilities and ensure an orderly wind-down, subject to a minimum of £15,000. In granting an authorization, the GFSC may require a Small Scheme Manager to maintain financial resources at a level that is higher than the self-assessed level.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Guernsey Fiduciary License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Fiduciary License
    </p>
    <p class="text-xs mb-4">
      Guernsey is a leading international fiduciary center with more than 50 years’ experience supplying trust and corporate services to clients from around the globe. It was one of the first centers in the world to establish a system of licensing and supervising its trust and corporate services providers via the Regulation of Fiduciaries, Administration Businesses and Company Directors (Bailiwick of Guernsey) Law 200.
    </p>
    <p class="text-xs mb-4">
      A personal fiduciary license can only be granted to an individual and authorizes the holder to carry out a restricted range of fiduciary activities. Those include acting as a company director, as trustee (but not as a sole trustee), and as executor of a will or administrator of an estate and as a foundation official for foundations. Licences are granted to entities and individuals who meet the minimum criteria for licensing set out in Schedule 1 of the Law. Licensees are required to meet the criteria on an ongoing basis.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Personal Fiduciary License Application</span><br>
      The license application pack must contain:
      <ul class="list-disc text-xs ml-3">
        <li>Application form and supporting documentation</li>
        <li>Application fee</li>
        <li>Personal Questionnaire (“OPQ”) and Online Appointment ("OA")</li>
      </ul>
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Guernsey Standard Track Licensing": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Standard Track Licensing
    </p>
    <p class="text-xs mb-4">
      Licences are issued under the Protection of Investors (Bailiwick of Guernsey) Law, 1987, as amended ("the POI Law"). The POI Law does not permit licences to be issued to individuals. Entities seeking to be licensed must familiarize themselves with the scope of Schedules 1 and 2 to the POI Law to identify which categories and restricted activities may be relevant to the prospective business to be undertaken.
    </p>
    <p class="text-xs mb-4 mt-4">
      License applications will only be processed for entities that have definite and early plans to conduct controlled investment business. The applicant's proposed business activities detailed in its business plan and the categories and restricted activities requested in the application form must be consistent and relevant to that proposed business.
    </p>
    <p class="text-xs mb-4 mt-4">
      <span class="font-bold">Principal Managers and General Partners</span><br>
      Standard track license applications will only be processed for these parties when the first fund we intend to manage has achieved at least "outline" authorization. The license will normally be granted on the same day as the fund achieves authorization.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Ireland Investment Manager License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Ireland Investment Manager License
    </p>
    <p class="text-xs mb-4">
      In accordance with the provisions of the UCITS Directive and AIFMD, where an investment fund proposes to delegate the investment management function, the mandate may only be given to entities which are authorized or registered for the purpose of asset management and subject to prudential supervision. Where the proposed investment manager is not located in Ireland, and is given to a third-country undertaking, cooperation between the supervisory authorities concerned must be ensured.
    </p>
    <p class="text-xs mb-4 mt-4">
      <span class="font-bold">Application Forms</span><br>
      Applications for clearance to act as an Investment Manager may take two forms:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Full Review - Non EU Based Applicants</li>
        <li>Fast-track application - EU Based Applicants</li>
      </ul>
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Designated Business": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Designated Business
    </p>
    <p class="text-xs mb-4">
      Following comments from the IMF report in 2009, the Council of Ministers considered proposals put forward by the then Chief Secretary’s Office (now the Cabinet Office) to place responsibility on the Isle of Man Financial Services Authority (“the Authority") for the oversight of the adherence of certain businesses and professions (“Designated Businesses”) to the Island’s anti-money laundering and countering the financing of terrorism legislation (“AML/CFT legislation”).
    </p>
    <p class="text-xs mb-4">
      Designated Businesses are also commonly referred to as Designated Non-Financial Businesses and Professions or “DNFBPs”.
    </p>
    <p class="text-xs mb-4">
      Designated businesses are registered and overseen by the Authority for AML/CFT compliance only –they retain Our current status with the various bodies (if any) responsible for Our wider business, competence or other matters, such as the Isle of Man Law Society, the ICAEW, ACCA, CIMA, the Office of Fair Trading etc.
    </p>
    <p class="text-xs mb-4 mt-4">
      <span class="font-bold">Registration Policy</span><br>
      The Authority’s General Registration Policy ("the Registration Policy") sets out the criteria that applicants must satisfy to be successful in the registration of Our business. The Authority will not register a business where it feels that the applicant, including the persons associated with it, are not fit and proper to undertake the designated business.
    </p>
    <p class="text-xs mb-4">
      The fit and proper test is both an initial test at the time of registration and a continuing test in relation to the compliance with AML/CFT legislation of designated business.
    </p>
    <p class="text-xs mb-4">
      Once registered, a designated business must advise the Authority of any changes in its circumstances, within 14 days of the change. The changes that should be notified include any changes to the information submitted at registration such as contact details or details of those charged with the governance of the business.
    </p>
    <p class="text-xs mb-4">
      Each year, a registered designated business is required to submit an annual return. This is made available on the online portal from the 1 October of each year and must be submitted by 1 November of that year. If the annual return is not submitted by 1 November, the Authority will issue a civil penalty to the business in line with the Designated Businesses (Civil Penalties) Order 2015.
    </p>
    <p class="text-xs mb-4 py-2">
      At present, the Authority has delegated its oversight powers to the following professional bodies:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Institute of Chartered Accountants of England and Wales</li>
        <li>Association of Chartered Certified Accountants</li>
        <li>Isle of Man Law Society</li>
        <li>Institute of Certified Bookkeepers</li>
        <li>Institute of Financial Accountants</li>
        <li>International Association of Bookkeepers</li>
      </ul>
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Management or Administration": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Management or Administration
    </p>
    <p class="text-xs mb-4">
      A license to carry on the Class 7 regulated activity of Management or Administration Services permits a business operating in or from the Isle of Man (within certain criteria and with specified exclusions) to provide management or administration services in respect of a regulated activity (other than one falling within Class 3) to a person licensed to carry on that activity.
    </p>
    <p class="text-xs mb-4 mt-2">
      A license holder is obliged to comply with any license conditions that have been imposed by the Isle of Man Financial Services Authority (“the Authority”) and which are shown on the license.
    </p>
    <p class="text-xs mb-4 mt-2">
      There are no application, license, or annual fees for Class 7 license holders.
    </p>
    <p class="text-xs mb-4 mt-2">
      Section 2.9 of the licensing policy addresses when a Class 7 license is likely to be necessary and the responsibilities of the parties concerned. Paragraph 2.9.7 of the licensing policy includes that:
    </p>
    <p class="text-xs mb-4">
      "A license applicant who wishes to conduct management or administration services for another license holder must:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>be authorized to carry on regulated activities falling within Class 7;</li>
        <li>also be authorized to carry on regulated activities falling within the relevant className i.e. only a deposit taker can manage another deposit taker;</li>
        <li>have a track record in the relevant regulated activity; and</li>
        <li>be able to demonstrate competence and experience to act as manager of the managed entity …</li>
      </ul>
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Professional Officers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Professional Officers
    </p>
    <p class="text-xs mb-4">
      Professional officers are individuals who are licensed by the Isle of Man Financial Services Authority (“the Authority”) to carry on limited activities. The classes of regulated activity are set out in the Regulated Activities Order 2011 (as amended 2019).
    </p>
    <p class="text-xs mb-4">
      A professional officer’s activities are restricted to:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Acting as director or alternate director of companies (paragraph (6) of Class 4)</li>
        <li>Acting as trustee, protector, or enforcer (paragraphs (2), (5), and (6) of Class 5).</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      Professional officers must comply with the Authority's regulatory regime including:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>The relevant provisions of the Financial Services Act 2008;</li>
        <li>Part 9 of the Financial Services Rule Book.</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      Professional officers must meet Our legal obligations in relation to anti-money laundering and countering of terrorist financing requirements, including those established under:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Anti-Money Laundering and Terrorist Financing Code 2015</li>
        <li>Any successor and any other relevant code of practice under section 157(1) of the Proceeds of Crime Act 2008 or section 27A of the Terrorism (Finance) Act 2009, as amended which are contained in the Anti-Money Laundering Handbook.</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Licensing and Regulation of Professional Officers</span><br>
      A professional officer is an individual who undertakes certain Class 4 (corporate services) and / or Class 5 (trust services) activities, and the FSA will only consider applications from individuals for a professional officer license.
    </p>
    <p class="text-xs mb-4">
      Before granting a license, the FSA must be satisfied that the individual applicant is fit and proper to undertake the regulated activity.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Latvia Alternative Investment Fund Managers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Latvia Alternative Investment Fund Managers
    </p>
    <p class="text-xs mb-4">
      Alternative Investment Funds (AIFs) are real estate, hedge, and private equity funds registered and working in the European Union. AIFs operate under the Alternative Investment Fund Managers Directive 2011/61/EU (or "AIFMD" for short) and subsequent Law on Alternative Investment Funds and Our Managers in Latvia. Alternative Investment Funds in Latvia are supervised by the Financial and Capital Market Commission.
    </p>
    <p class="text-xs mb-4">
      All real estate, hedge, or private equity funds in Latvia have to be registered as Alternative Investment Funds and managed by a licensed or registered management company.
    </p>
    <p class="text-xs mb-4">
      An alternative investment fund manager is a joint-stock company or a limited liability company, the basic activity of which is the management of alternative investment funds. The alternative investment fund manager shall operate in accordance with the Law on Alternative Investment Funds and Our Managers, the Commission’s normative acts, EU Regulations, the Commercial Law, and other regulatory enactments, and its articles of association.
    </p>
    <p class="text-xs mb-4">
      Registered manager is a manager that either directly or indirectly, through a company with which the AIFM is linked by common management or control, or by a substantive direct or indirect holding, manages portfolios of AIFs whose assets under management in total do not exceed a threshold of EUR 500 million when the portfolios of AIFs consist of AIFs that are unleveraged and have no redemption rights exercisable during a period of 5 years following the date of the initial investment in each AIF.
    </p>
    <p class="text-xs mb-4">
      In order to obtain a registration, the alternative investment fund manager submits to the Commission an application for receipt of a registration. The application shall be accompanied by the information and documents referred to in Article 8 of the Law on Alternative Investment Funds and Our Managers.
    </p>
    <p class="text-xs mb-4">
      The Commission shall take a decision to issue a registration within a three-month period after the receipt of all the documents specified in the Law on Alternative Investment Funds and Our Manager for taking the decision, prepared and formulated in compliance with the requirements prescribed by regulatory enactments.
    </p>
    <p class="text-xs mb-4">
      Licensed manager is a manager that manages portfolios of AIFs whose assets under management exceed the criteria set for the registered manager. In order to obtain a license, the alternative investment fund manager submits to the Commission an application for receipt of a registration. The application shall be accompanied by the information and documents referred to in Article 10 of the Law on Alternative Investment Funds and Our Managers.
    </p>
    <p class="text-xs mb-4">
      The minimum initial capital of a manager which is an internally managed shall be EUR 300,000. The minimum initial capital of an external manager shall be EUR 125,000.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Latvia Investment Management Companies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Latvia Investment Management Companies
    </p>
    <p class="text-xs mb-4">
      An investment management company is a joint-stock company, the basic activity of which is the management of investment funds. The investment management company shall operate in accordance with the Law on the Investment Management Companies, the Commercial Law, and other regulatory enactments, and its articles of association.
    </p>
    <p class="text-xs mb-4">
      In order to obtain a license, the investment management company shall submit to the Commission an application for the receipt of a license. The application shall be accompanied by the information and documents referred to in Section 10 of the Law on the Investment Management Companies (the Law).
    </p>
    <p class="text-xs mb-4">
      The minimum original capital of a company shall be EUR 125,000 equivalent in lats according to the exchange rate set by the Bank of Latvia.
    </p>
    <p class="text-xs mb-4">
      The Commission shall take a decision to issue a license within a three-month period after the receipt of all the documents specified in the Law for taking the decision, prepared and formulated in compliance with the requirements prescribed by regulatory enactments.
    </p>
    <p class="text-xs mb-4">
      The Commission shall issue a license within a 10-day period as of the day the decision to issue a license has been taken.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein Asset Management License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Liechtenstein Asset Management License
    </p>
    <p class="text-xs mb-4">
      An Asset Management Company in Liechtenstein is a legal person or partnership which provides the following services:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Portfolio management</li>
        <li>Investment advice</li>
        <li>Reception and transmission of orders</li>
        <li>Execution of orders on behalf of the client</li>
        <li>Financial analysis for securities</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      An Asset Management Company in Liechtenstein must perform its services in compliance with its legal duties regarding good behavior, due diligence, and its fiduciary duties. An Asset Management Company in Liechtenstein is required to classify its clients as being either non-professional, professional, or as being a suitable opposing party. This classification is then used to determine the level of protection owed to a particular client. Clients classified as non-professional are due the highest level of protection.
    </p>
    <p class="text-xs mb-4">
      An Asset Management Company in Liechtenstein is subject to the supervision of Liechtenstein‘s Financial Market Authority (FMA). The FMA has the statutory power to grant, amend or revoke licenses. Asset management companies are not the management company of the collective investment schemes, and we are not allowed to accept or hold client money.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Formation of an Asset Management Company in Liechtenstein</span><br>
      An Asset Management Company in Liechtenstein may be formed as a private corporation (Public Limited Company (PLC., Corp.) or Trust Enterprise (Trust reg.)), as an Establishment, as a Foundation, as a Limited Liability Partnership, or as a General Partnership. Notwithstanding this, no natural persons are permitted to undertake asset management. The legal form in which the Asset Management Company is set up will determine what the particular formation requirements are.
    </p>
    <p class="text-xs mb-4">
      A company must apply to Liechtenstein‘s Financial Market Authority (FMA) for a license to operate as an Asset Management Company in Liechtenstein. Applications will be granted where the following requirements are satisfied by a company:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>It must have its registered office, its main place of central management and control, and its place of business in Liechtenstein;</li>
        <li>It must provide proof that it has a minimum capital of 100,000 Swiss Francs;</li>
        <li>At least one of the directors of the company is required to be permanently resident in Liechtenstein;</li>
        <li>It must appoint an external auditor who shall undertake an annual audit of its business activities.</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Licensing Fee</span><br>
      A fee of CHF 10,000 is payable for the grant of a license.
    </p>
    <p class="text-xs mb-4">
      <span class="font-bold">Applying for and Obtaining a License</span><br>
      Applications for licenses must be submitted in German; the originals of all accompanying documents must be submitted in German or English. In duly substantiated cases, the FMA may permit exemptions. The application, including all the requisite documents, must be sent to the FMA. Applications for a license are to be submitted to the FMA in hard copy and electronic format.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein Management Companies and Funds Under IUA": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Liechtenstein Management Companies and Funds Under IUA
    </p>
    <p class="text-xs mb-4">
      The FMA certifies domestic investment companies and approves Our management companies. In the ongoing supervision of the management companies and investment companies, the FMA monitors if the law (IUG 2015) and the ordinance (IUV 2015) are met.
    </p>
    <p class="text-xs mb-4">
      Under the IUA 2015, the FMA authorizes management companies and approves investment undertakings (IU) managed by them. The FMA has the statutory power to grant, amend, or revoke licenses. The following four categories of investment undertakings under the IUA 2015 may be managed:
      <ul class="list-disc text-xs mb-4 ml-3">
        <li>Investment undertakings for single investors</li>
        <li>Investment undertakings for families</li>
        <li>Investment undertakings for a community of interests</li>
        <li>Investment undertakings for a corporate group</li>
      </ul>
    </p>
    <p class="text-xs mb-4">
      Investment undertakings are only applicable within Liechtenstein. In order to obtain authorization for an investment undertaking or a license as a management company, the necessary documents have to be sent to FMA.
    </p>
    <p class="text-xs mb-4">
      Authorized management companies and approved investment undertakings (IU) are subject to ongoing supervision by the FMA. The FMA enforces the law (IUA 2015) and the ordinance (IUO).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Luxembourg Specialized PFS": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Luxembourg Specialized PFS
    </p>
    <p class="text-xs mb-4">
      Specialized PFS are financial professionals referred to in Article 13 of the Law of 5 April 1993 on the financial sector (“LFS”) and in Part I, Chapter 2, Section 2, Sub-section 2 (“Specialized PFS”) of the LFS.
    </p>
    <p class="text-xs mb-4">
      Legal Requirements and Authorization Procedure for Specialized Professionals of the Financial Sector (“Specialized PFS”)
    </p>
    <p class="text-xs mb-4">
      The legal requirements that must be met and the procedure that must be followed to obtain an authorization as specialized PFS are laid down in Articles 13 to 23 of the Law of 5 April 1993 on the financial sector (“LFS”).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Luxembourg Support PFS": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Luxembourg Support PFS
    </p>
    <p class="text-xs mb-4">
      Pursuant to Part I, Chapter 2, Section 2, Sub-section 3 of the Law of 5 April 1993 on the financial sector, the professionals of the financial sector falling within the following categories are defined as support PFS:
    </p>
    <p class="text-xs mb-4">
      Legal Requirements and Authorization Procedure for Support Professionals of the Financial Sector (“Support PFS”)
    </p>
    <p class="text-xs mb-4">
      The legal requirements that must be met and the procedure that must be followed in order to obtain an authorization as support PFS are laid down in Articles 13 to 23 of the Law of 5 April 1993 on the financial sector (“LFS”).
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Company Service Providers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Company Service Providers
    </p>
    <p class="text-xs mb-4">
      Recently, Malta has enacted new regulations to regulate company service providers providing services in Malta. This is in order to implement Act 36 of EU Directive 2005/60/EU on the prevention of the use of the financial system for the purpose of money laundering and terrorist financing, with respect to company service providers.
    </p>
    <p class="text-xs mb-4">
      Registration of a Company Service Provider
    </p>
    <p class="text-xs mb-4">
      Any person resident or operating from Malta who acts as a company service provider shall be required to be registered with the Malta Financial Services Authority (MFSA), with the exception of those persons who possess a warrant to act as an advocate, notary, legal procurator, or accountant and persons authorized to act as a trustee in Malta.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Investment Service Providers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Investment Service Providers
    </p>
    <p class="text-xs mb-4">
      Over the last two decades, Malta has established itself as an innovative and reliable financial services center, hosting a variety of financial services businesses and structures including fund managers, fund administrators, forex brokers, payment services providers, investment advisors, and insurance principals.
    </p>
    <p class="text-xs mb-4">
      Different Types of Investment Services
    </p>
    <p class="text-xs mb-4">
      “Investment services” is a general term used to describe a whole range of activities related to investments in financial instruments. Typically, the most common forms of investment services are the following:
    </p>
    <p class="text-xs mb-4">
      MiFID II Licensing and Authorization
    </p>
    <p class="text-xs mb-4">
      The provision of MiFID II services, referred to as Investment Services, in or from Malta is a licensable activity, requiring the attainment of an Investment Services License in terms of the Act and subsequent regulations which transpose EU Directives such as MiFID II and AIFMD.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Portfolio Managers and Trustees in Switzerland": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Portfolio Managers and Trustees
    </p>
    <p class="text-xs mb-4">
      Portfolio managers are persons who are eligible to accept assets belonging to others on the basis of a power of attorney, and who carry out this activity on a commercial basis, or who manage the assets of collective investment schemes or occupational pension schemes below the defined thresholds. Portfolio managers require a license from FINMA before we commence Our commercial activities.
    </p>
    <p class="text-xs mb-4">
      The same applies to trustees, who on a commercial basis manage or hold a separate fund for the benefit of the beneficiaries or for a specified purpose based on the instrument creating a trust. Trustees also require a license from FINMA before we commence Our commercial activities.
    </p>
    <p class="text-xs mb-4 font-bold">Licensing Requirements</p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Be legally classified as either a sole proprietorship, a commercial enterprise, or a cooperative and entered as such in the commercial register.</li>
      <li>Be suitably organized with adequate risk management and internal controls.</li>
      <li>Have sufficient equity capital or securities.</li>
      <li>Describe Our business activity including precise details of Our operations and geographic layout in the relevant documents.</li>
      <li>Provide proof of affiliation to an SO, thus confirming we are supervised by a supervisory organization.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Licensing Process</p>
    <ol class="list-decimal ml-8 text-xs mb-4">
      <li>Self-registration on the EHP.</li>
      <li>Preparing application.</li>
      <li>Transmitting the license application to a supervisory organization.</li>
      <li>Checking of the license application and confirmation from the SO.</li>
      <li>Transmitting the application and SO confirmation to FINMA.</li>
    </ol>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,

    "Switzerland Asset Management": `
<div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Switzerland Asset Management
  </p>
  <p class="text-xs mb-4">
    Anyone who manages or is responsible for the safekeeping of assets held in collective investment schemes or who represents foreign collective investment schemes in Switzerland or manages assets of occupational pension schemes on a commercial basis must be authorized by FINMA to do so (Art. 5 para. 1 FinIA / Art. 13 para. 1 CISA). The following are required to obtain authorization:
  </p>
  <p class="text-xs mb-4 font-bold">Authorization Requirements</p>
  <p class="text-xs mb-4 font-bold">Fund management companies</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>It must be organized as a limited company with its registered office and administrative center in Switzerland.</li>
    <li>It must meet the minimum capital requirements.</li>
    <li>The board of directors must have at least three members.</li>
    <li>The share capital must be divided into registered shares.</li>
    <li>The company must have an organization appropriate to its role.</li>
    <li>Those responsible for managing the fund management company must be independent of the custodian bank, and vice versa.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Managers of Collective Assets</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>It must have the legal form of a commercial enterprise.</li>
    <li>It must have an organization that is appropriate to its role.</li>
    <li>It must have the required minimum capital and further collateral.</li>
    <li>The articles of association, partnership agreement, or organizational rules must include a factually and geographically accurate description of its proposed operations.</li>
    <li>It must manage at least one collective investment scheme or the assets of at least one occupational pension scheme.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Investment Companies with Variable Capital (SICAVs)</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>SICAVs must have assets of at least CHF 5m one year after launch.</li>
    <li>The company's name must contain a description of its legal form or the abbreviation "SICAV".</li>
    <li>The ratio of company shareholder deposits to total assets must be appropriate.</li>
    <li>Company and investor shares which do not have a nominal value and are freely transferable must be fully paid up in cash.</li>
    <li>Investment regulations must be defined.</li>
    <li>A custodian bank must be designated.</li>
    <li>The SICAV must choose to be either self-managed (i.e. it handles its own administration and may delegate portfolio management activities) or externally managed (i.e. it delegates both administration and portfolio management activities).</li>
    <li>Its sole object is to manage its funds/sub-funds.</li>
    <li>It is prohibited from providing services to third parties in accordance with Arts. 26 and 34 FinIA.</li>
    <li>It must hold a defined quantity of equity capital.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Investment Companies with Fixed Capital (SICAFs)</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>The ratio of equity capital to total assets must be appropriate.</li>
    <li>The company’s name must contain a description of its legal form or the abbreviation "SICAF".</li>
    <li>Shares must be fully paid up.</li>
    <li>The issuing of voting shares, participation certificates, dividend right certificates, and preference shares is prohibited.</li>
    <li>The key provisions concerning investments, investment policy, investment restrictions, and risk diversification, etc. must be set out in the articles of association and the investment regulations.</li>
    <li>A custodian bank must be designated.</li>
    <li>An audit firm must be appointed.</li>
    <li>The company may only manage its own assets.</li>
    <li>The main purpose of the company must be to generate returns and/or capital gains and not to engage in business activities as such.</li>
    <li>It is prohibited from providing services to third parties in accordance with Arts. 26 and 34 FinIA.</li>
    <li>The minimum deposit on foundation must be at least CHF 500,000 in shares, fully paid up.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Limited Partnerships for Collective Investment Schemes (LP)</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>A general partner must be constituted as a limited company with its registered office in Switzerland and must act solely for one LP (unless we are authorized to operate as asset managers of collective investment schemes).</li>
    <li>General partners must have paid-in capital of at least CHF 100,000.</li>
    <li>Limited partners must be qualified investors as defined in Article 10 para. 3 and para. 3ter CISA (Art. 98 para. 3 CISA).</li>
    <li>The partnership exists as soon as it appears in the Commercial Register.</li>
    <li>The partnership’s name must contain a description of its legal form or the abbreviation "LP".</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Custodian Banks of Collective Investment Schemes</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>It must be a bank in accordance with the Banking Act.</li>
    <li>It must have an organization that is appropriate to its role as a custodian bank of collective investment schemes.</li>
    <li>The persons entrusted with the management and with the tasks of the custodian bank must provide the guarantee of irreproachable business conduct.</li>
    <li>The custodian bank's staff must have the specialist qualifications required for Our functions.</li>
    <li>It must have at least three full-time equivalent positions with signatory powers for its activities as a custodian bank.</li>
    <li>Those responsible for managing the fund management company must be independent of those managing the custodian bank, and vice versa.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Representatives of Foreign Collective Investment Schemes</p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>Minimum capital and collateral (Art. 131 CISO).</li>
    <li>Professional indemnity insurance (Art. 132 CISO).</li>
  </ul>
  <p class="text-xs mb-4 font-bold">Licensing Process of Asset Managers</p>
  <p class="text-xs mb-4">
    The licensing process roughly consists of the following steps:
  </p>
  <ol class="list-decimal ml-8 text-xs mb-4">
    <li>Registration on the FINMA platform (online tool)</li>
    <li>Completion of the application questionnaire (in the online tool)</li>
    <li>Affiliation with a supervisory organization</li>
    <li>Submission of the licensing application via online tool</li>
    <li>Preliminary assessment by the supervisory organization</li>
    <li>Assessment by FINMA</li>
    <li>Decision</li>
  </ol>
  <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
    "United Kingdom Financial Advisors": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Financial Advisors
    </p>
    <p class="text-xs mb-4">
      Financial advisers give advice about financial planning, investing, insurance, and other financial services. Financial advisers look at your personal circumstances and your financial plans and recommend products to help you meet your needs. There are two types of financial advisers:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Independent financial advisers (IFAs) give unbiased advice about the whole range of financial products from all the different companies available.</li>
      <li>Restricted advisers give advice on a limited range of products. We may specialize in one area, for example, pensions, or we may only offer advice on products offered by a limited number of companies.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Requirements for Financial Advisers</p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Level 4 or above of the national Qualifications and Credit Framework.</li>
      <li>A Statement of Professional Standing (SPS). This means we have signed up to a code of ethics and have completed at least 35 hours of professional training each year.</li>
    </ul>
    <p class="text-xs mb-4">
      Independent financial advisers (IFAs), like the banks and companies that sell financial products, are regulated by the FCA. In order to register with the FCA, financial advisers need to have a Certificate of Financial Planning (Cert FP).
    </p>
    <p class="text-xs mb-4">
      Individuals and businesses consult IFAs on many matters including investment, retirement planning, insurance, protection, and mortgages (or other loans). IFAs also advise on some tax and legal matters.
    </p>
    <p class="text-xs mb-4 font-bold">IFA Network</p>
    <p class="text-xs mb-4">
      IFA Network is an association of IFAs. All financial advisers in the UK must either be authorized or exempt under the Financial Services and Markets Act 2000. Membership of an IFA Network qualifies an IFA as being exempt from regulation. The IFA Network is then responsible for the advice and regulatory compliance of its members.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Investment Managers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Investment Managers
    </p>
    <p class="text-xs mb-4">
      Investment is the process of redirecting finance towards profit generation. Investment management involves the professional management of various financial securities and assets belonging to an investor for the purpose of earning maximum benefits. An investment manager is an individual who manages investor finance and focuses on yielding future benefits for the investor. Investment managers manage investment portfolios and operate under the government’s securities legislation. Investment managers are also known as ‘fund managers’. The term fund or investment manager refers to both an individual who helps direct investment management decisions, and institutions providing financial services.
    </p>
    <p class="text-xs mb-4 font-bold">Investment License in the UK</p>
    <p class="text-xs mb-4">
      Obtaining an investment license in the UK is possible for citizens of any country in the world. Issuing permission for conducting financial activities in the jurisdiction of Great Britain is carried out by the FCA (Financial Conduct Authority).
    </p>
    <p class="text-xs mb-4 font-bold">License Requirements</p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Threshold Conditions: Firms are required to demonstrate at the time of Our authorization that we satisfy the minimum standards set by FSMA, namely the Threshold Conditions, for all regulated activities. Firms must also demonstrate that Our key persons running or managing the firm are 'fit and proper' to perform Our functions.</li>
      <li>Location of Offices: A firm's 'mind and management,' including directors, compliance, governance function, audit, and risk functions, must be in the UK.</li>
      <li>Appropriate Resources: Firms must demonstrate that we have appropriate financial resources, skills, and experience of those managing its affairs.</li>
      <li>Suitability: Firms must demonstrate the competence and ability of Our management, and that Our affairs are conducted in an appropriate manner in the best interest of consumers.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Investment License Categories</p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Dealing on Own Account (Dealer License): This license is equivalent to "market-making" and involves position-taking which includes the conclusion of the transaction in financial instruments.</li>
      <li>Matched Principle (Intermediary License): Also known as STP/straight-through processing, it involves client trades being hedged with an equal transaction with a liquidity provider.</li>
      <li>Restricted Broker License: This is an introducer or referral type of license, permitting firms to conduct sales and marketing but not being able to hold client funds.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Initial Capital Requirement</p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Dealing on Own Account License (Dealer License) - EUR 730,000</li>
      <li>Matched Principle License - EUR 125,000</li>
      <li>Restricted Broker License - EUR 50,000</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Wealth Managers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Wealth Managers
    </p>
    <p class="text-xs mb-4">
      Wealth management firms offer investment management and comprehensive financial advice. Wealth managers handle complex financial issues and coordinate financial experts on behalf of clients. Wealth management is a financial service provided to customers who have signed an agreement with a firm to have Our money or investments managed.
    </p>
    <p class="text-xs mb-4">
      This is done on either a discretionary or advisory basis:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>A discretionary service is where the firm manages your portfolio of investments in line with instructions given by you. This means the firm will manage your portfolio and will make alterations without checking with you.</li>
      <li>An advisory service is where the firm will make recommendations based on your attitude to risk and circumstances, but you will need to agree to any changes before we are made to your portfolio.</li>
    </ul>
    <p class="text-xs mb-4">
      There are no formal requirements needed to become a Wealth Manager. However, you will need to have a good level of previous experience and an in-depth knowledge of the finance industry. Regulations and authorization of wealth managers are the same as for investment managers.
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