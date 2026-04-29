<x-app-layout
    title="@yield('meta_title', 'Credit and Bond Institution Setup Services for Businesses')"
    metaDescription="@yield('meta_description', 'Establish credit and bond institutions with professional services ensuring regulatory approval, compliance, and efficient operational setup for global business.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Credit and Bond Institutions
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Credit and Bond Institutions</span>
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
    "Czech Republic Bank and Credit Unions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Bank and Credit Unions
    </p>
    <p class="text-xs mb-4">
      Credit unions and banks are together referred to as “credit institutions”. In many cases, particularly as regards prudential requirements, we are subject to the same rules. The National Bank of the country acts as the regulator of the financial market in the Czech Republic. The advantage of conducting banking activities in the Czech Republic is the presence of the process of passportization.
    </p>
    <p class="text-xs mb-4">
      The procedure for obtaining banking license starts from the moment of submitting application by the applicant. The main requirement for foreign companies is the establishment of Our own bank in the country. The branch should be acting and refer to the organizational and legal form of LLC or JSC. The legal entity is also obliged to register settlement account and contribute the authorized capital in the amount corresponding to the selected organizational and legal form. Minimum regulatory capital of the bank in the Czech Republic equals to 500 million CZK (approximately 18 million 700 thousand EUR).
    </p>
    <p class="text-xs mb-4">
      Consideration of the application takes no more than 8 months from the date of delivery of the package of documents to the commission for financial regulation. The certificate has unlimited period of validity, however, annual renewal of the permission is required.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Estonia Credit Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Credit Institutions
    </p>
    <p class="text-xs mb-4">
      The main job of a credit institution, or bank, is to take in deposits of money and other repayable funds from the public and to issue loans on its own account or to finance them in other ways. To create a credit institution, an activity license needs to be applied for from Finantsinspektsioon.
    </p>
    <p class="text-xs mb-4">
      Only businesses that take in deposits from the public have the right to use the name ‘bank’. The only businesses established in Estonia that are allowed to take in deposits from the public are those that have a license from Finantsinspektsioon to operate as a credit institution.
    </p>
    <p class="text-xs mb-4">
      Applying for an operating license as a credit institution: To receive an operating license, the members of the management of the business being set up or operating must submit a written application to Finantsinspektsioon and the documents and data listed in the Credit Institutions Act. When a bank is founded the share capital paid in must be at least five million euros. Only real sums paid in may be indicated as equity capital of the bank. The bank cannot be founded with publicly subscribed shares. The procedures for issuing an operating license to a bank take 6-12 months. The decision to issue an operating license or to refuse it is taken by Finantsinspektsioon within six months after all the necessary documentation and data have been received, and not later than 12 months after the application for the operating license has been received. The fee for applying for an operating license as a credit institution is 1500 euros.
    </p>
    <p class="text-xs mb-4">
      Providing cross-border services in Estonia: A credit institution from an EEA state that wants to start providing cross-border services in Estonia informs Finantsinspektsioon through the financial supervision authority of that state, indicating the transactions and operations that it intends to start providing. A credit institution from an EEA state may start providing cross-border services in Estonia once the notification has been sent to Finantsinspektsioon by the financial supervision authority of the EEA state.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Estonia Creditors": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Creditors
    </p>
    <p class="text-xs mb-4">
      A creditor is an institution that provides credit to private clients, extends payment deadlines for a fee, provides leases or other financial help, including signing credit agreements, and carries out all the related transactions under its own name and on its own account.
    </p>
    <p class="text-xs mb-4">
      A creditor that issues credit backed by mortgages or other collateral to customers to buy, renovate or build residential real estate is a mortgage creditor.
    </p>
    <p class="text-xs mb-4">
      Applying for an operating license as a creditor: To receive an operating license as a creditor, the members of the management of the business being set up or operating must submit a written application to Finantsinspektsioon and the documents and data listed in the Creditors and Credit Intermediaries Act. During the implementation period for the Creditors and Credit Intermediaries Act, the decision to issue an operating license or to refuse it is taken by Finantsinspektsioon within six months after all the necessary documentation and data have been received and the requirements met, and not later than eight months after the application for the operating license has been received. The fee for applying for an operating license as a creditor is 1000 euros and the fee for the application for an additional operating license is 500 euros.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Consumer Credit": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Consumer Credit
    </p>
    <p class="text-xs mb-4">
      Under the EU Directive 2008/48/EC, licenses granted under the Financial Services (Moneylending) Act fall under the scope of the Financial Services (Consumer Credit) Act 2011 (the Act). The CEO of the GFSC is the director appointed for the purposes of the Act and is responsible for firm and individuals’ compliance with the conduct of business rules within the Act.
    </p>
    <p class="text-xs mb-4">
      The Act applies to firms who:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Grant or promise to grant credit to consumers; or</li>
      <li>Act as intermediaries in connection with agreements granting credit made between a creditor and consumer.</li>
    </ul>
    <p class="text-xs mb-4">
      If you are providing consumer credit as defined in the Act, you are required to comply with the provisions in the Act. The Act applies to loans between EUR 200 and EUR 75,000 if these do not relate to the purchase of property. Some overdrafts and overrunning are also within the scope of this Act. Credit Institutions and branches in Gibraltar do not have to be separately licensed under the Moneylenders Act but must comply with conduct of business requirements in the Act.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Credit Institutions License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Credit Institutions License
    </p>
    <p class="text-xs mb-4">
      A Credit Institution (more commonly referred to as a bank) receives deposits or other repayable funds from the public and grants credits. The authorization of banking services falls within the scope of the Financial Services Act 2019. Credit Institutions that are permissioned in Gibraltar are also required to be members of the Deposit Guarantee Scheme.
    </p>
    <p class="text-xs mb-4">
      The accepting deposits permission allows an institution to carry out deposit taking and related services such as:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Taking deposits and other repayable funds</li>
      <li>Lending including, inter alia: consumer credit, credit agreements relating to immovable property, factoring, with or without recourse, financing of commercial transactions (including forfeiting).</li>
      <li>Financial leasing.</li>
      <li>Payment services as defined in Article 4(3) of Directive (EU) 2015/2366.</li>
      <li>Issuing and administering other means of payment (e.g. travellers’ cheques and bankers’ drafts) insofar as such activity is not covered by point 4.</li>
      <li>Guarantees and commitments.</li>
      <li>Trading for own account or for account of customers in any of the following:
          (a) money market instruments (cheques, bills, certificates of deposit, etc.);
          (b) foreign exchange;
          (c) financial futures and options;
          (d) exchange and interest-rate instruments;
          (e) transferable securities.</li>
      <li>Participation in securities issues and the provision of services relating to such issues.</li>
      <li>Advice to undertakings on capital structure, industrial strategy and related questions and advice as well as services relating to mergers and the purchase of undertakings.</li>
      <li>Money broking.</li>
      <li>Portfolio management and advice.</li>
      <li>Safekeeping and administration of securities.</li>
      <li>Credit reference services.</li>
      <li>Safe custody services.</li>
      <li>Issuing electronic money.</li>
    </ul>
    <p class="text-xs mb-4">
      Applicants should submit an application form and additional documentation with all relevant documents. The capital requirements for a credit institution are set out in the Financial Services (Capital Requirements Directive IV) Regulations (CRD IV).
    </p>
    <p class="text-xs mb-4">
    A credit institution’s minimum initial and ongoing capital requirement is the higher of:
  </p>
  <ul class="list-disc ml-8 text-xs mb-4">
    <li>€5,000,000; or</li>
    <li>The capital calculations as per CRD IV.</li>
  </ul>
  <p class="text-xs mb-4">
    The preferred approach for the GFSC is to accept applications for banking permissions from institutions that are majority owned by established banking groups from reputable jurisdictions.
  </p>
  <p class="text-xs mb-4">
    The GFSC may in certain instances and in particular where the applicant is part of a major established financial services group based in a reputable jurisdiction, consider applications for banking operations which do not have a banking parentage.
  </p>
  <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Mortgage Credit Intermediary": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Mortgage Credit Intermediary
    </p>
    <p class="text-xs mb-4">
      A Mortgage Credit Intermediary is a natural or legal person who presents or offers credit agreements to consumers, assists consumers by undertaking preparatory work or other pre-contractual administration in respect of credit agreements or concludes credit agreements with consumers on behalf of the creditor.
    </p>
    <p class="text-xs mb-4">
      The authorisation and regulation of a Mortgage Credit Intermediary falls within the scope of the Financial Services Act 2019 and the Mortgage Credit Directive 2014/17/EU. This regulated activity allows a Mortgage Credit Intermediary to carry out mortgage credit intermediation activities and advisory services.
    </p>
    <p class="text-xs mb-4">
      Applicants should submit an application pack with all relevant documents. A Mortgage Credit Intermediary is required to hold an initial and ongoing capital of:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Three months’ worth of operating expenses or £15,000 (whichever is the higher); and</li>
      <li>A sum equal to any excess payable under its professional indemnity insurance.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Non-Credit Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Non-Credit Institutions
    </p>
    <p class="text-xs mb-4">
      A Non-Credit Institution is a natural or legal person who grants or promises to grant credit agreements, which are secured either by a mortgage or by another comparable security on residential immovable property.
    </p>
    <p class="text-xs mb-4">
      The authorization of Non-Credit Institutions falls within the scope of the Financial Services Act 2019 and the Mortgage Credit Directive 2014/17/EU. A Non-Credit Institution permission allows an institution to carry out mortgage credit activities and advisory services. Applicants should submit an application pack with all relevant documents.
    </p>
    <p class="text-xs mb-4">
      A Non-Credit Institution is required to hold an initial and ongoing capital of:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>£100,000 plus a sum equal to any excess payable under its professional indemnity insurance; or</li>
      <li>The sum of:
        <ul class="list-disc ml-8">
          <li>its credit risk capital requirement (calculated in accordance with the Capital Requirements Directive IV (2013/36/EU) and Capital Requirements Regulation (575/2013));</li>
          <li>1% of its total assets, total undrawn commitments, and total unreleased amounts under mortgage credit agreements less its intangible assets plus any loan entered into, securitization position originated, or fund position entered into by the institution;</li>
          <li>a sum equal to any excess payable under its professional indemnity insurance.</li>
        </ul>
      </li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle Of Man Credit Unions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle Of Man Credit Unions
    </p>
    <p class="text-xs mb-4">
      A license to carry on the Class 9 regulated activity of Operation of a Credit Union permits an entity that is incorporated as a credit union under the Credit Unions Act 1993 to operate a credit union in the Isle of Man. There are no exclusions from the requirement for a license for Class 9 activities. A credit union must be incorporated under the Credit Unions Act 1993 before it can be licensed under the Financial Services Act 2008. A credit union may not commence trading, nor advertise its business until it has been licensed by the Authority.
    </p>
    <p class="text-xs mb-4">
      All banks in the Isle of Man are subject to a licensing and supervision regime administered by the Financial Services Authority (“FSA”). The FSA is an independent statutory body whose functions include, amongst other things, the licensing, supervision and regulation of deposit takers, insurance companies, money transmission services and credit unions.
    </p>
    <p class="text-xs mb-4">
      To apply for a license, the relevant sections of the application form (which may be found on the FSA’s website) together with a full suite of supporting documents (which includes a business plan). A non-refundable fee is also payable upon a license application.
    </p>
    <p class="text-xs mb-4">
      The FSA’s current published service standard for processing an application, from receipt of a complete application to a decision from the FSA, is approximately six months. An application may take considerably longer than six months to process if it is incomplete or if there are issues in relation to the applicant or any of its key persons which may require further investigation.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Latvia Co-Operative Credit Unions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Latvia Co-Operative Credit Unions
    </p>
    <p class="text-xs mb-4">
      Cooperative Savings and Credit Unions (CSCUs) in Latvia are formal cooperative financial institutions operating on the financial market. CSCUs provide basic financial services—savings, loans, and money transferring—to Our members at a reasonable price. CSCUs are mutual help organizations, which mostly serve unbankable people. CSCUs are the key social enterprises and microfinance institutions on the Latvian financial market.
    </p>
    <p class="text-xs mb-4">
      Licensing of Credit Unions
    </p>
    <p class="text-xs mb-4">
      In order to obtain a special credit union operating permit (license), a newly established union shall submit to the Financial and Capital Market Commission (the Commission) an application and documents required for obtaining a license in accordance with the procedures prescribed by regulatory enactments.
    </p>
    <p class="text-xs mb-4">
      The Commission shall process an application for a special credit union operating permit (license) within a three-month period after the receipt of all the necessary documents. The Commission shall issue a credit union operating license of an unlimited duration. The Commission shall issue the license within a three-day period after the receipt of a copy of the certified registration certificate of the credit union.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Latvia Credit Institution": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Latvia Credit Institution
    </p>
    <p class="text-xs mb-4">
      The bank is a capital company, which accepts deposits and other repayable funds from an unlimited customer base, issues credits in its own name, and provides other financial services. A credit institution may be founded (owned) by natural persons or legal persons.
    </p>
    <p class="text-xs mb-4">
      In order to receive a credit institution operating license (permit), a bank shall submit to the Financial and Capital Market Commission (FCMC) the information and documentation in accordance with provisions of the Credit Institution Law and Procedures of Submission the Information and Documents for Obtaining License, Permits and Confirmations Regulating the Operation of Credit Institutions and for the Provision of Information of 27.10.2020 approved by the FCMC.
    </p>
    <p class="text-xs mb-4">
      The minimum initial capital of a bank shall be five million euros. The FCMC shall examine the application for obtaining a license (permit) within a three-month period after the receipt of all the necessary documents. The decision to issue a credit institution operating license shall be adopted by the European Central Bank based on the draft proposal by the FCMC.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Luxembourg Credit Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Luxembourg Credit Institutions
    </p>
    <p class="text-xs mb-4">
      Credit Institutions are legal persons whose activities consist in receiving from the public deposits or other repayable funds and in granting credits for Our own account. Credit institutions are by law also authorized to exercise all activities regulated by the Law of 5 April 1993 on the financial sector, in particular investment services.
    </p>
    <p class="text-xs mb-4">
      Legal requirements and authorization procedures for credit institutions
    </p>
    <p class="text-xs mb-4">
      The authorization procedures pertaining to the existence (licensing), shareholding (qualifying holding), and management (fit & proper) of credit institutions, and the legal requirements relating thereto, are set out in Articles 3 to 10-2 of the Law of 5 April 1993 on the financial sector (“LFS”). Circular CSSF 12/552 specifies the implementing procedures as regards central administration, internal governance, and risk management. The prudential approval procedure for the appointment of key function holders sets out the fit & proper (“FAP”) approval process. Circular CSSF 17/669 details the prudential assessment criteria of qualifying shareholders.
    </p>
    <p class="text-xs mb-4">
      Legal requirements
    </p>
    <p class="text-xs mb-4">
      Legal form: A banking authorization may only be granted to a legal person incorporated under Luxembourg law. The legal person may only be incorporated as a public law institution, a société anonyme [public limited company], a société en commandite par actions [limited partnership with a share capital], or a société coopérative [cooperative society].
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Luxembourg Mortgage Credit Intermediaries": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Luxembourg Mortgage Credit Intermediaries
    </p>
    <p class="text-xs mb-4">
      Mortgage credit intermediaries are defined in Articles L.226-1, points 14 and 15 of the Consumer Code:
    </p>
    <p class="text-xs mb-4">
      "mortgage credit intermediary" means a natural or legal person who is not acting as a creditor or notary and not merely introducing, either directly or indirectly, a consumer to a creditor or mortgage credit intermediary, and who, in the course of his trade, business or profession, for remuneration, which may take a pecuniary form or any other agreed form of financial consideration:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>presents or offers mortgage credit agreements to consumers;</li>
      <li>assists consumers by undertaking preparatory work or other pre-contractual administration, other than as referred to in letter (a), in respect of mortgage credit agreements; or</li>
      <li>concludes mortgage credit agreements with consumers on behalf of the creditor;</li>
    </ul>
    <p class="text-xs mb-4">
      "tied mortgage credit intermediary" means any mortgage credit intermediary who acts on behalf of and under the full and unconditional responsibility of:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>only one creditor;</li>
      <li>only one group; or</li>
      <li>a number of creditors or groups which do not represent the majority of the market.</li>
    </ul>
    <p class="text-xs mb-4">
      Legal requirements
    </p>
    <p class="text-xs mb-4">
      Legal form: An authorization as a mortgage credit intermediary may, in general, be granted to natural or legal persons in the form of a public entity or a commercial company.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Credit Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Credit Institutions
    </p>
    <p class="text-xs mb-4">
      Credit institutions are entities licensed to operate under the Banking Act, Chapter 371 of the Laws of Malta. According to the Banking Act, a credit institution can undertake a number of activities which are specified in the same Act. The taking of deposits from retail customers is the licensable activity that distinguishes a credit institution from other licensed entities.
    </p>
    <p class="text-xs mb-4">
      Regulatory Bodies for Credit Institutions
    </p>
    <p class="text-xs mb-4">
      In order to offer such credit facilities, banks must abide by strict regulation as well as meet certain requirements on an ongoing basis. Malta has one regulator for all financial services, the Malta Financial Services Authority (MFSA). It is the MFSA that will consider applications for credit institutions as the local competent authority but will then liaise with the European Central Bank (ECB) in order for any license to be issued. Large credit institutions deemed to be of critical importance to the national and/or European banking sector are not only regulated by the MFSA but are also directly regulated by the European Central Bank.
    </p>
    <p class="text-xs mb-4">
      The Depositor Compensation Scheme and Credit Institutions
    </p>
    <p class="text-xs mb-4">
      As part of the requirements to be licensed as a credit institution, entities are required to contribute to the Depositor Compensation Scheme. The Scheme refers to a fund set up as a contingency for insolvent banks licensed by the MFSA under the Malta Banking Act within the European Economic Area (“EEA”), that are not able to provide payment to depositors, thus ensuring the stability of the financial system in Malta. Compensation for deposits at credit institutions is capped at a maximum of EUR 100,000 per depositor held within that credit institution. Additional compensation of up to EUR 500,000 may be awarded in special cases.
    </p>
    <p class="text-xs mb-4">
      License requirements
    </p>
    <p class="text-xs mb-4">
      In order to obtain a credit institution license in Malta, the applicant must contribute and maintain own funds as a minimum share capital of EUR 5 million, and a minimum of two people must manage the operation of the Malta credit institution. Further functions will be required to be carried out either by additional staff or through outsourcing arrangements – the MFSA will need to be convinced that the proposed structure is adequate to the planned business model and volumes. Applications, where the credit institution will be at least partly owned by a licensed bank or financial institution, tend to be preferred, although it is possible to demonstrate alternative means of soundness and stability. All applications are submitted to the MFSA and must include a business plan, demonstrating how liquidity and minimum capital requirements will be met and maintained, as well as due diligence exercises and regulatory compliance.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Switzerland Central Mortgage Bond Institute": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Switzerland Central Mortgage Bond Institute
    </p>
    <p class="text-xs mb-4">
      Special institution set up to issue mortgage bonds and grant long-term loans to its affiliated banks. Two such institutions were established in Switzerland in 1930, namely the Central Mortgage Bond Institution of the Swiss Cantonal Banks and the Mortgage Bond Bank of the Swiss Mortgage Institutions.
    </p>
    <p class="text-xs mb-4">
      Mortgage bonds are debt securities used for the long-term financing of senior mortgage loans granted by banks.
    </p>
    <p class="text-xs mb-4">
      Switzerland’s central mortgage bond institutions are supervised by FINMA on the basis of auditing and reporting conducted by licensed audit firms. Unlike conventional bonds, Swiss mortgage bonds offer extensive protection by law. The issuer and the lending banks are liable with Our own assets, while the borrowers are also liable towards the banks with Our mortgaged properties. This chain of security is unique worldwide.
    </p>
    <p class="text-xs mb-4">
      FINMA is responsible for supervising both of these institutions on an ongoing basis for which it relies largely on the auditing and reporting conducted by external audit firms.
    </p>
    <p class="text-xs mb-4">
      Audit firms are commissioned in particular with:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Financial reporting rules</li>
      <li>Articles of association and regulatory requirements</li>
      <li>Legal requirements for issuing mortgage bonds and granting loans</li>
      <li>Legal requirements for covering mortgage bonds and loans</li>
      <li>Legal requirements for estimating property values and calculating loan-to-value ratios</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Building Societies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Building Societies
    </p>
    <p class="text-xs mb-4">
      A building society is a financial institution owned by its members as a mutual organization. Building societies offer banking and related financial services, especially savings and mortgage lending. We are similar to credit unions in organization, though few enforce a common bond. However, rather than promoting thrift and offering unsecured and business loans, the purpose of a building society is to provide home mortgages to members. Borrowers and depositors are society members, setting policy and appointing directors on a one-member, one-vote basis. Building societies often provide other retail banking services, such as current accounts, credit cards, and personal loans.
    </p>
    <p class="text-xs mb-4">
      The requirements for establishing a building society are set out in Section 5 and Part 1 of Schedule 2 to the Building Societies Act 1986. To establish a new society, ten or more persons must agree on a memorandum setting out the purpose (or principal purpose) and the extent of the powers of the intended society, in terms which comply with the 1986 Act and on rules for the regulation of the society which comply with the Act. All those persons (or at least 10), and the intended secretary, must then sign four copies of the memorandum and the rules and send them to the Prudential Regulation Authority (PRA) for consideration.
    </p>
    <p class="text-xs mb-4">
      There are strict capital requirements for setting up a new society - it must have adequate capital resources commensurate with the nature and scale of its business and the risks inherent in its business. It must maintain own funds of at least £1 million. The new organization would also have to have a proper business plan, funding and lending plans, and robust information technology, etc.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Consumer Credit Firms": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Consumer Credit Firms
    </p>
    <p class="text-xs mb-4">
      If a business offers credit, lends money to consumers, or allows customers time to pay for goods and services, it must be licensed with the Consumer Credit Bureau of the Office of Fair Trading under the Consumer Credit Act 1974. Consumer credit activities include:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Selling on credit</li>
      <li>Hiring or leasing out goods for more than 3 months</li>
      <li>Lending money</li>
      <li>Issuing credit cards or trading checks</li>
      <li>Arranging credit for others</li>
      <li>Offering hire purchase terms</li>
      <li>Collecting debts</li>
      <li>Helping people with debt problems or advising on credit standing</li>
    </ul>
    <p class="text-xs mb-4">
      Consumer credit licenses are issued by the Financial Conduct Authority (FCA).
    </p>
    <p class="text-xs mb-4">
      Criteria for consumer credit licenses
    </p>
    <p class="text-xs mb-4">
      The FCA will only license applicants if we are a 'fit person' to be licensed. As well as your own activities, those of your employees, agents or associates - past and present - are considered. Factors taken into account to establish fitness include:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Your competence to engage in the relevant activities</li>
      <li>Any offence or conviction connected to the business or anyone involved in running the business</li>
      <li>Any evidence of discrimination on grounds of sex, color or race</li>
      <li>Failure to comply with the Consumer Credit Act 2006 or other consumer protection laws</li>
      <li>Any consumer complaints about the business</li>
      <li>Business practices that are unfair or improper, or could otherwise damage the interests of consumers</li>
      <li>Evidence of irresponsible lending</li>
      <li>Insolvency, bankruptcy or disqualification as a director</li>
      <li>Adverse information from other regulators, professional bodies, trade bodies, consumer organizations or other traders</li>
      <li>Unauthorized use of the FCA name or logo (on letterheads or websites) to suggest that the business is 'approved' by the FCA</li>
      <li>Failure to comply with general or specific guidance on fitness to hold a consumer credit license</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "United Kingdom Credit Unions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      United Kingdom Credit Unions
    </p>
    <p class="text-xs mb-4">
      A credit union is a financial co-operative which provides savings, loans, and a range of services to its members. It is owned and controlled by the members. The first credit union in Britain began trading in 1964, and over the last 50 years, credit unions have grown to provide loans and savings to more than 1.2 million people across England, Scotland, and Wales. Credit unions are owned by the people who use Our services, and not by external shareholders or investors. So the emphasis is always on providing the best service to members – not maximizing profits.
    </p>
    <p class="text-xs mb-4">
      Credit unions are dual-regulated, which means that we are regulated by the Financial Conduct Authority (FCA) and by the Prudential Regulation Authority (PRA). The services that credit unions can offer include:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Deposit-taking</li>
      <li>Savings</li>
      <li>Lending</li>
    </ul>
    <p class="text-xs mb-4">
      Members have a say in how Our credit union is run, and the directors are elected from the members, by the members, to represent Our interests. Profits are distributed to members in dividends.
    </p>
    <p class="text-xs mb-4">
      Setting up a credit union
    </p>
    <p class="text-xs mb-4">
      Key requirements include:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>A registered office address</li>
      <li>A qualified auditor or two lay auditors</li>
      <li>A business plan, including financial projections</li>
      <li>An organizational structure chart, setting out names of staff and Our responsibilities</li>
      <li>A policies and procedures manual showing "robust governance"</li>
      <li>An insurance provider</li>
    </ul>
    <p class="text-xs mb-4">
      Below outlines the supporting documents that must be attached to a firm’s application:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Responsibilities map</li>
      <li>Regulatory business plan</li>
      <li>Financial projections</li>
      <li>Policies and Procedures manual</li>
      <li>Evidence of insurance provider</li>
      <li>Confirmation of initial funding</li>
    </ul>
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