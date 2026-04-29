<x-app-layout
    title="@yield('meta_title', 'Electronic and Money Services Licensing Made Simple ')"
    metaDescription="@yield('meta_description', 'Launch electronic and money services businesses with expert guidance for licensing, regulatory compliance, and smooth operational management worldwide.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Electronic and Money Services Businesses
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Electronic and Money Services Businesses</span>
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
    "Estonia Payment Institutions and E-Money Institutions": `
    <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Estonia Payment Institutions and E-Money Institutions
  </p>
  <p class="text-xs mb-4">
    A payment service provider is a company whose main business is providing payment services. A license is needed to operate as a payment service provider, and this is issued by Finantsinspektsioon.
  </p>
  <p class="text-xs mb-4">
    Applying for an operating license as a payment institution
  </p>
  <p class="text-xs mb-4">
    To apply for an operating license, a written application must be submitted to Finantsinspektsioon together with the additional information required by the Payment Institutions and E-money Institutions Act (MERAS).
  </p>
  <p class="text-xs mb-4">
    To apply for an operating license for payment services, the founders of a business or the management of the registered company must submit all the required documents and data to Finantsinspektsioon.
  </p>
  <p class="text-xs mb-4">
    The decision to issue an operating license or to refuse it is taken by Finantsinspektsioon within three months after all the necessary documentation and data have been received, and not later than six months after the application for the operating license has been received.
  </p>
  <p class="text-xs mb-4">
    Operating licenses for an e-money institution
  </p>
  <p class="text-xs mb-4">
    An e-money institution is a company that issues electronic money in its own name. E-money is an electronic payment instrument, which may be a card, computer memory, or other device that allows monetary units to be stored electronically. When e-money is issued, the sum stored on the e-money device may not exceed the sum given in return for the e-money, and one e-money device can store up to 1000 euros at the most.
  </p>
  <p class="text-xs mb-4">
    A license is needed to operate as an e-money institution, and this is issued and can be withdrawn by Finantsinspektsioon. The operating license for issuing e-money has no expiry date and it cannot be transferred to any other person.
  </p>
  <p class="text-xs mb-4">
    To apply for an operating license, a written application must be submitted to Finantsinspektsioon together with the additional information required by the Payment Institutions and E-money Institutions Act (MERAS).
  </p>
  <p class="text-xs mb-4">
    The decision to issue an operating license or to refuse it is taken by Finantsinspektsioon within three months after all the necessary documentation and data have been received, and not later than six months after the application for the operating license has been received.
  </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
    "Czech Republic Payment Institutions/ EMIs/ Small Scale Payment Service Providers and Small Scale Electronic Issuers": `
<div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Czech Republic Payment Institutions/EMIs/Small Scale Payment Service Providers and Small Scale Electronic Issuers
  </p>
  <p class="text-xs mb-4">
    The regulations in the area of payment system institutions apply – to varying extents – to entities that are authorized or registered to perform the activities of payment institutions, electronic money institutions, electronic money issuers, or small-scale payment service providers. Some of these institutions are subject to similar regulation as banks and credit unions. Banks and credit unions may also provide payment services under conditions stipulated in the act regulating the activities of banks or credit unions.
  </p>
  <p class="text-xs mb-4">
    Electronic money becomes a necessity progressively as the general development of society. Due to interactive wallets, you can pay for any product or service without leaving your office or home. A certificate is not required for user management of a private virtual account.
  </p>
  <p class="text-xs mb-4">
    However, in the event that a legal entity plans to use the interactive currency continuously to conduct business or intends to create its own payment system, it must obtain a license for the use of electronic money.
  </p>
  <p class="text-xs mb-4">
    If you need a license of the Payment Institution to build your international payment services business, the Czech Republic is the best solution for your payment system and you are on the right site. The Czech license of the Payment Institution is a European license and gives the right to work throughout the European Union, without any limits in attracting clients from all over the world. And your employees can be where you decide.
  </p>
  <p class="text-xs mb-4">
    The Czech Republic regulates the activities of persons authorized to provide payment services and issue electronic money, according to the Act number 284/2009 Sb. and directive number 141/2011 Sb. Czech legislation and regulations regarding Payment Institutions fully comply with all EU directives, so the passportization in other EU countries after obtaining a Czech license is possible.
  </p>
  <p class="text-xs mb-4 font-bold">
    License requirements for payment institutions:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">A legal entity is a resident of the Czech Republic.</li>
    <li class="text-xs mb-4">The registered and head office is located in the Czech Republic.</li>
    <li class="text-xs mb-4">Share capital is from 70,000 Euro.</li>
    <li class="text-xs mb-4">The business plan is available.</li>
    <li class="text-xs mb-4">Transparency and compliance of the business model with regulations and international rules.</li>
    <li class="text-xs mb-4">Directors are reliable persons in terms of reasonable provision of payment services.</li>
    <li class="text-xs mb-4">Key persons are employees who are able to effectively do business on payment services provision, who are competent and are sufficiently experienced in terms of reasonable and careful provision of payment services.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    Small-scale payment services provider:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">The maximum average monthly turnover of 3 million euros at the rate of the last 12 months. Those must not exceed 36 million euros for 12 months.</li>
    <li class="text-xs mb-4">Can provide services only in the Czech Republic. However, this does not prohibit customers from all over the world. And company employees can work remotely.</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    Electronic money institution license:
  </p>
  <p class="text-xs mb-4">
    The license of the E-Money Institution - EMI or the Electronic Money Issuer includes all the capabilities of the Payment Institution. The main difference between the two types of payment service providers is that electronic institutions can issue electronic money. Electronic money is the digital equivalent of cash stored on an electronic device or remotely on a server. Unlike the Payment Institution, the Electronic Money Institution (EMI), issuing electronic money in exchange for money, provides financial services that are unlimited in time, without known payment directions, with the possibility of crushing and accumulating funds. The issuer undertakes the obligation to pay money in exchange for electronic money at any time.
  </p>
  <p class="text-xs mb-4">
    A company registered as a Small-Scale Electronic Money Institution is entitled to provide a full range of services, as well as the Electronic Money Institution (EMI), which is the most complete license of all types of payment system licenses, but with the limitations specified above.
  </p>
  <p class="text-xs mb-4 font-bold">
    Small-scale electronic money issuers license:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">The issuer has the right to issue electronic money, provided that the average amount of electronic money issued by it in circulation over the past 6 months does not exceed the amount corresponding to 5,000,000 euros.</li>
    <li class="text-xs mb-4">The Issuer has the right to provide other payment services not related to electronic money. But the maximum average monthly volume of these payment services should not exceed 3,000,000 euros for the last 12 months. Those must not exceed 36 million euros for 12 months.</li>
    <li class="text-xs mb-4">Can provide services only in the Czech Republic. However, this does not prohibit customers from all over the world. And company employees can work remotely.</li>
  </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
    "Georgia Payment Service Provider License": `
<div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Georgia Payment Service Provider License
  </p>
  <p class="text-xs mb-4">
    A recognized Payment Service Provider (PSP) in a Georgian free zone like Tbilisi (Georgian capital) will enable a business to have a tax-free working environment.
  </p>
  <p class="text-xs mb-4 font-bold">
    Activities permitted with a Georgia PSP license include:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">Deposit-taking of electronic money from third parties</li>
    <li class="text-xs mb-4">Transfer money on behalf of third parties to other third parties</li>
    <li class="text-xs mb-4">Issuing debit cards / electronic money</li>
    <li class="text-xs mb-4">Offering payment services to third parties</li>
    <li class="text-xs mb-4">Opening merchant accounts to receive payments and forward them</li>
    <li class="text-xs mb-4">Conversion of electronic money into virtual money (Bitcoin etc.)</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    Legal requirements:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">Corporate vehicle is permitted from a Georgian company</li>
    <li class="text-xs mb-4">License application fee is USD 6,000</li>
    <li class="text-xs mb-4">Annual license fee is USD 6,000</li>
    <li class="text-xs mb-4">Local physical office is required</li>
    <li class="text-xs mb-4">Minimum number of directors is two</li>
    <li class="text-xs mb-4">Corporate directorship is allowed</li>
    <li class="text-xs mb-4">Local director is not a must</li>
    <li class="text-xs mb-4">Minimum number of shareholders is two</li>
    <li class="text-xs mb-4">Corporate shareholder is allowed</li>
    <li class="text-xs mb-4">Local shareholder is not a must</li>
    <li class="text-xs mb-4">No minimal paid up capital is required</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    The following service providers are required:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">Company secretary</li>
    <li class="text-xs mb-4">An auditor</li>
    <li class="text-xs mb-4">Legal advisor</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    Taxation:
  </p>
  <p class="text-xs mb-4">
    Complete tax exemption for companies that are set up in the Free Zones (optional).
  </p>
  <p class="text-xs mb-4 font-bold">
    Duration to Set Up:
  </p>
  <p class="text-xs mb-4">
    Around 30 – 60 days
  </p>
  <p class="text-xs mb-4 font-bold">
    Benefits of PSP License:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">Fast turnaround time</li>
    <li class="text-xs mb-4">License is issued by the National Bank of Georgia, reinforcing the strength of its regulatory framework</li>
    <li class="text-xs mb-4">Friendly regulatory regime</li>
    <li class="text-xs mb-4">Low costs of operation</li>
    <li class="text-xs mb-4">No minimum capital requirement</li>
  </ul>
  <p class="text-xs mb-4 font-bold">
    Advantage of working with us:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">End to end comprehensive service</li>
    <li class="text-xs mb-4">Speedy and efficient service</li>
    <li class="text-xs mb-4">Expert advice on structuring options</li>
    <li class="text-xs mb-4">Dedicated ongoing compliance support</li>
    <li class="text-xs mb-4">Extensive network pool of service providers</li>
  </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>

`,
    "Gibraltar Electronic Money Issuer": `
<div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Gibraltar Electronic Money Issuer
  </p>
  <p class="text-xs mb-4">
    Electronic Money (E–money) is electronically, including magnetically, stored monetary value, represented by an issuer, accepted by a person other than the electronic money issuer. Types of E-money include pre-paid cards and electronic pre-paid accounts for use online.
  </p>
  <p class="text-xs mb-4 font-bold">
    Authorization Process:
  </p>
  <p class="text-xs mb-4">
    The authorisation of E-money Issuers falls within the scope of the Financial Services Act 2019. E-money Issuers should ensure that we comply with all subsidiary legislation to the Act. An E-money Issuer can issue and redeem E-money through a proper establishment or through an Agent or Distributor.
  </p>
  <p class="text-xs mb-4 font-bold">
    Types of E-money Issuers:
  </p>
  <ol class="list-decimal ml-6 text-xs mb-4">
    <li class="text-xs mb-4">Authorized E-money Issuer</li>
    <li class="text-xs mb-4">Registered E-money Issuer</li>
  </ol>
  <p class="text-xs mb-4">
    Both types of E-money Issuers must meet certain standards and provide the necessary information so that the GFSC can monitor and supervise them effectively. Applicants should note that Registered E-money Issuers cannot passport Our services.
  </p>
  <p class="text-xs mb-4 font-bold">
    Capital Requirements:
  </p>
  <p class="text-xs mb-4">
    An authorized E-money Issuer is required to hold an initial and ongoing capital of:
  </p>
  <ul class="list-disc ml-6 text-xs mb-4">
    <li class="text-xs mb-4">€350,000; or</li>
    <li class="text-xs mb-4">2.2%* of the average outstanding electronic money (as projected at application), whichever the highest</li>
  </ul>
  <p class="text-xs mb-4">
    A small or registered E-money Issuer is required to hold an initial and ongoing capital of 2.2% of the average outstanding electronic money.
  </p>
  <p class="text-xs mb-4 font-bold">
    Safeguarding Requirements:
  </p>
  <p class="text-xs mb-4">
    In accordance with the Regulations, every E-money Issuer must satisfy the GFSC that it has adequate arrangements in place to safeguard the funds of customers received in exchange for E-money issued, and prevent the use of these funds for the E-money Issuer’s own account.
  </p>
  <p class="text-xs mb-4">
    Additionally, an E-money Issuer that holds customer funds must keep such records and accounts as are necessary to enable them at any time and immediately distinguish funds held for one customer from another and from the funds of the e-money Institution.
  </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>


`,

    "Gibraltar Payment Service Provider": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Gibraltar Payment Service Provider</p>
    <p class="text-xs mb-4">The term Payment Service Provider refers to a category of payment services that facilitates or acts as an intermediary in a cash transaction. The authorisation of this regulated activity falls under the scope of the Financial Services Act 2019.</p>
    <p class="text-xs mb-4">Payment services may consist of:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">Enabling cash withdrawals;</li>
      <li class="text-xs mb-4">Enabling cash to be placed in a payment account;</li>
      <li class="text-xs mb-4">Credit transfers, including standing order;</li>
      <li class="text-xs mb-4">Issuing payment instruments or acquiring payment transactions; or</li>
      <li class="text-xs mb-4">Money remittance.</li>
    </ul>
    <p class="text-xs mb-4">Any firm wishing to provide these types of services must be authorized by the GFSC as a Payment Services Provider and is required to comply with certain rules when providing services or completing payment transactions.</p>
    <p class="text-xs mb-4">As an Authorized Payment Service Provider firms will be authorized to provide one or more payment services and will be required to comply with all legislative requirements.</p>
    <p class="text-xs mb-4">A Payment Service Provider may appoint agents. Agents provide payment services on behalf of the Payment Service Provider. These must register with the GFSC. Applicants should submit an application pack with all relevant documents.</p>
    <p class="text-xs mb-4">The type of services conducted by the firm determines the capital requirements for a Payment Service Provider and hence the type of license obtained.</p>
    <p class="text-xs mb-4">The initial and ongoing minimum capital requirements are:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">Class A License: €20000</li>
      <li class="text-xs mb-4">Class B License: €50000</li>
      <li class="text-xs mb-4">Class C License: €125000</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Ireland Electronic Money Institution/PSP": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Ireland Electronic Money Institution/PSP</p>
    <p class="text-xs mb-4">Progress in technology has contributed to the development of a new kind of payment instrument - electronic money.</p>
    <p class="text-xs mb-4">This may be in the form of value stored on a technical device such as a chip card or a computer. Electronic money (e-Money) can be best described as a digital form of cash since it has many of the characteristics of cash.</p>
    <p class="text-xs mb-4">Customers buy the electronic equivalent of coins and notes. The customer in effect has exchanged cash for another means of payment. Instead of using a debit card (which requires a bank account) or a credit card (which requires a contract agreement) the customer has purchased a non-cash means of payment which can be used in much the same way as cash or other forms of card payment but without the requirement of third party authorization.</p>
    <p class="text-xs mb-4">Benefits of electronic money:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">Instant payment</li>
      <li class="text-xs mb-4">Offers higher payment security</li>
      <li class="text-xs mb-4">Better customer convenience</li>
      <li class="text-xs mb-4">Saves processing costs</li>
      <li class="text-xs mb-4">Low risk of theft</li>
      <li class="text-xs mb-4">It is transparent</li>
      <li class="text-xs mb-4">Contactless</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Money Transmission Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Isle of Man Money Transmission Services</p>
    <p class="text-xs mb-4">A license to carry on the Class 8 regulated activity of Money Transmission Services permits a business operating in or from the Isle of Man (within certain criteria and with specified exclusions) to:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">Operate a bureau de change</li>
      <li class="text-xs mb-4">Provide and execute payment services either directly or as an agent</li>
      <li class="text-xs mb-4">Provide cheque cashing services</li>
      <li class="text-xs mb-4">Issue electronic money</li>
    </ul>
    <p class="text-xs mb-4">To apply for a license, the relevant sections of the license application form must be completed. A full list of supporting documentation is set out in the application form and needs to be submitted with the application, this includes a business plan. The supporting documentation varies depending on which classes of regulated activity you are applying to undertake. Once received the application will be processed in accordance with the Authority’s Licensing Procedure.</p>
    <p class="text-xs mb-4">The Authority’s current published service standard for processing an application from receipt of a complete application to a decision from the Authority is 6 months. This standard applies to an application with which there are no major difficulties concerning the applicant or people connected with the applicant.</p>
    <p class="text-xs mb-4 font-bold">Licensing Procedure</p>
    <p class="text-xs mb-4">Prospective applicants are encouraged to contact officers of the Isle of Man Financial Services Authority (“the Authority”) at an early stage to discuss Our proposals for establishing and operating a licensable business in the Isle of Man. These discussions enable the Authority’s officers to give applicants any appropriate guidance where it is sought and to identify any foreseeable difficulties connected with the proposed operation. It also enables the Authority to provide guidance on which classes of regulated activity the license is required to cover and on any other matters which may be relevant.</p>
    <p class="text-xs mb-4">On receipt of the application, staff of the Authority will process the application. This will include a review of the application form and supporting documents such as the business plan and financial projections, and, if appropriate, discussion with other regulatory bodies. The assessment process for license applicants involves a thorough evaluation to ensure the Authority’s fitness and propriety criteria, including integrity, competence, and financial standing, are met.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Jersey Money Service Business": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Jersey Money Service Business</p>
    <p class="text-xs mb-4">Jersey Money Service Business institutions are governed by the Financial Services (Jersey) Law 1998 as subject to any Order under Article 4 the meaning given to that expression by Article 2(9). The Money Service Business is regulated by the Jersey Financial Services Commission.</p>
    <p class="text-xs mb-4">A person carries on money service business if we carry on the business of any of the following:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">A bureau de change</li>
      <li class="text-xs mb-4">Providing cheque cashing services</li>
      <li class="text-xs mb-4">Transmitting or receiving funds by wire or other electronic means</li>
      <li class="text-xs mb-4">Engaging in money transmission services</li>
    </ul>
    <p class="text-xs mb-4">The Financial Services (Money Service Business (Exemptions)) (Jersey) Order 2007 (Exemptions Order) (the MSB Order) sets out certain exemptions from the money service business provisions of the FSJL. These are contained in Article 3(2) of the Exemptions Order (the Full Exemptions) and the principal one is in relation to a person who carries on money service business consisting of the transmission or receipt of funds by wire or other electronic means or the provision of money transmission services by the person for the sole purpose of enabling another person to pay for goods or services or to access their funds.</p>
    <p class="text-xs mb-4">A limited exemption is set out in Article 4 of the MSB Order and broadly a person is exempt from having to register to conduct money service business if:</p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">That person notifies the Commission in writing of their intent to carry on money service business</li>
      <li class="text-xs mb-4">The turnover for the last completed financial period for the money service business carried on by that person is less than £300000</li>
    </ul>
    <p class="text-xs mb-4">Legal requirements of money service business</p>
    <p class="text-xs mb-4"><span class="font-bold">Entity requirement</span></p>
    <ul class="list-disc ml-4 text-xs mb-4">
      <li class="text-xs mb-4">Entities under the companies (jersey) law 1991: Partnership Unit Trust</li>
      <li class="text-xs mb-4">Directors requirements; At least 2 (two) natural person Fit and Proper Directors and one must be based in Jersey</li>
      <li class="text-xs mb-4">Shareholders; at least two shareholders</li>
      <li class="text-xs mb-4">Audited accounts; The accounting record requirements for a Money Service Business applicant are those that apply to any business taking the same form as the applicant e.g. Companies (Jersey) Law 1991 or those applicable as a result of other regulated activities undertaken by the applicant, e.g. deposit-taking business.</li>
      <li class="text-xs mb-4">Compliance officer who must; Have appropriate independence and direct access to the registered person’s Jersey board of directors or equivalent, Have unfettered access to all business lines, support departments, and information necessary to properly discharge Our responsibilities, Be based in Jersey</li>
      <li class="text-xs mb-4">Jersey office; The applicant will ensure to have a local office for designated employees and a local compliance officer.</li>
      <li class="text-xs mb-4">Minimum Capital Requirements; The PSL Law requires a minimum capital of EUR 350,000 for an Electronic Money Institution.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Ongoing Obligations</p>
    <p class="text-xs mb-4">A registered person is expected to maintain such books and records in a language understood by the employees of the business. These must be translated into English at the request of the JFSC. A registered person must be able to readily retrieve them in Jersey and, if kept otherwise than in legible form, maintain them so as to be readable at a computer terminal in Jersey so that we may be produced in legible form without any delay.</p>,
    <p class="text-xs mb-4">A registered person must ensure that it has appropriate record-keeping arrangements for compliance with the applicable laws (including anti-money laundering legislation and company legislation), Orders, and regulatory requirements, set by the Code or the relevant AML/CFT Handbook.</p>,
    <p class="text-xs mb-4">A registered person is expected to maintain and adequately document policies and procedures that cover the management of the business.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Latvia Electronic Money Institution": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Latvia Electronic Money Institution</p>
    <p class="text-xs mb-4">An electronic money institution is a commercial company that has received a license from the Financial and Capital Market Commission (hereinafter – Commission) for issuing electronic money or a legal entity that does not need a license to issue electronic money and is registered in the register of institutions maintained by the Commission.</p>
    <p class="text-xs mb-4">An electronic money account (e-money account) in accordance with Section 2, Paragraph eight of the Law is a limited functionality account opened in a closed system set up and maintained by an electronic money institution and used by its holder for accounting of electronic money issuance and repurchase transactions, as well as accounting for electronic money payments made only in the closed system of this electronic money institution. A closed system means that e-money account holders do not have the option to transfer e-money from Our e-money account to third parties outside of this system. The only payments that can be made are payments between e-money accounts in this system.</p>
    <p class="text-xs mb-4 font-bold">Licensed Electronic Money Institution</p>
    <p class="text-xs mb-4">In order to obtain a license to operate an electronic money institution, the company must submit a relevant application to the Commission, by attaching documents and information referred to in Article 11 of the Law and Commission’s Regulation No 155.</p>
    <p class="text-xs mb-4">The initial capital of the licensed electronic money institution shall be at least EUR 350,000. Providing additional payment services, the initial capital of the licensed electronic money institution remains the same, at least EUR 350,000.</p>
    <p class="text-xs mb-4">The Commission shall take a decision on the issuance of a license or refusal to issue a license and inform the participant thereof within three months after receipt of all necessary documents, giving reasons for the refusal in the event of refusal. The Commission shall issue a license for the operation of an electronic money institution for an indefinite period.</p>
    <p class="text-xs mb-4">An application for a Latvia Electronic Money Institution License can be made by a Joint Stock Company or Limited Liability Company registered in the country. The process of application commences with the formation of the Company and by fulfilling the minimum initial capital requirements. The Company will also have to provide information about the shareholders, beneficial owners, and members of the Company along with business plans and anti-money laundering procedures. While there is no specified license fee for the application process, the law states that the Institution has to pay up to 0.02 percent of the average total assets of the electronic money institution during a quarter but not less than 2500 lats per year to the Commission.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Latvia Payment Service Providers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Latvia Payment Service Providers</p>
    <p class="text-xs mb-4">The definition for a payment service is quite wide under the law and includes most forms of payments that can be made electronically. An application for a Latvia Payment Service Provider License can be made by a Joint Stock Company or Limited Liability Company registered in the country. The process of application commences with the formation of the Company and by fulfilling the minimum initial capital requirements.</p>
    <p class="text-xs mb-4">In order to receive a license for the operation of a payment institution, the commercial company must submit the relevant application to the Commission, accompanied by the documents and information referred to in Article 11 of the Law and in the Commission’s Regulations No 155.</p>
    <p class="text-xs mb-4">The initial capital of a licensed payment institution must be equivalent to at least the following amount:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">EUR 20,000 where the payment institution provides only the money remittance services;</li>
      <li class="text-xs mb-4">EUR 50,000 where the payment institution provides only the payment initiation services;</li>
      <li class="text-xs mb-4">EUR 125,000 if the payment institution provides any of the payment services referred to in Article 1 (1), Subparagraphs “a”, “b”, “c”, “d” or “e” of the Law.</li>
    </ul>
    <p class="text-xs mb-4">The Commission shall take a decision on the issuance of a license or refusal to issue a license and inform the applicant within three months after receipt of all the necessary documents, notifying reasons for the refusal in the event of refusal. The Commission shall issue the license to the payment institution for an indefinite period of time.</p>
    <p class="text-xs mb-4">In accordance with the EU Directive of 2009, it is necessary to take care of an availability of a real office, the legal address of the company, a management from the number of local residents who have sufficient qualifications for electronic money issuing and providing the related services.</p>
    <p class="text-xs mb-4">To get permission to do a full-fledged e-money business in Latvia, it is required to fulfill the basic requirements:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Provide CV / CV of directorates, confirming Our competence in the financial field;</li>
      <li class="text-xs mb-4">Prove documented that the founders of the company have specialized education and professional experience from three years;</li>
      <li class="text-xs mb-4">Confirm that the founders have the right to engage in commercial activities and we have no previous convictions;</li>
      <li class="text-xs mb-4">Provide documents confirming the presence of an office, a bank account, and software for business.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Liechtenstein Electronic Money License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Liechtenstein Electronic Money License</p>
    <p class="text-xs mb-4">The Banking Supervision Section of the Financial Market Authority is responsible for supervising e-money institutions in Liechtenstein, and it monitors compliance with the applicable legal norms. As part of the licensing procedure, the submitted documents are reviewed for content and completeness. Ongoing supervision is ensured based on legally required reports as well as through direct and periodic contact with the boards of directors and management of the institutions.</p>
    <p class="text-xs mb-4">With regard to auditing and review of compliance by e-money institutions with Our legal requirements, the Financial Market Authority relies primarily on the audit reports prepared by external auditors, though the Financial Market Authority may also carry out its own audits or accompany external audits.</p>
    <p class="text-xs mb-4 font-bold">Licensing requirements and key features</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">The registered office and the head office of the e-money institution must be situated in Liechtenstein.</li>
      <li class="text-xs mb-4">The initial capital of an e-money institution must be at least EUR 350,000.00, or the equivalent in Swiss francs. The company’s own funds must be at least 2% of the e-money under circulation.</li>
      <li class="text-xs mb-4">E-money institutions are required to present separate financial information for the issuance of e-money and other activities, with an audit report being prepared on this basis.</li>
      <li class="text-xs mb-4">E-money institutions are required to have Our business activities audited each year by an independent firm of auditors recognized by the FMA.</li>
      <li class="text-xs mb-4">A fee of CHF 30,000.00 is payable for the granting of a license as an e-money institution.</li>
      <li class="text-xs mb-4">A license is generally granted within 3 months of submission of a fully completed application.</li>
    </ul>,
    <p class="text-xs mb-4 font-bold">Management and personnel</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Minimum 2 directors – we should have experience in the financial industry (fit and proper) and EU passport.</li>
      <li class="text-xs mb-4">Internal Auditor.</li>
      <li class="text-xs mb-4">Compliance.</li>
      <li class="text-xs mb-4">Risk Management.</li>
      <li class="text-xs mb-4">Internal software and control system.</li>
    </ul>,
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein Payment Institution": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Liechtenstein Payment Institution</p>
    <p class="text-xs mb-4">The Banking Supervision Section of the Financial Market Authority is responsible for supervising payment institutions in Liechtenstein, and it monitors compliance with the applicable legal norms. As part of the licensing procedure, the submitted documents are reviewed for content and completeness. Ongoing supervision is ensured on the basis of legally required reports to be submitted by the payment institutions, as well as through direct and periodic contact with the boards of directors and management of the institutions.</p>
    <p class="text-xs mb-4 font-bold">According to Article 3(1) (20) PSA, payment services include the following services:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Services enabling cash to be placed on a payment account as well as all the operations required for operating a payment account.</li>
      <li class="text-xs mb-4">Services enabling cash withdrawals from a payment account as well as all the operations required for operating a payment account.</li>
      <li class="text-xs mb-4">Execution of payment transactions, including transfers of funds on a payment account with the payment service provider of the payment service user or with another payment service provider.</li>
      <li class="text-xs mb-4">Issuing and/or acquiring of payment instruments.</li>
      <li class="text-xs mb-4">Money remittance.</li>
      <li class="text-xs mb-4">Execution of payment transactions where the consent of the payer to execute a payment transaction is given by means of any telecommunication, digital or IT device and the payment is made to the telecommunication, IT system, or network operator, acting only as an intermediary between the payment service user and the supplier of the goods and services.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Features and requirements for a license</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">The applicant must be a legal person.</li>
      <li class="text-xs mb-4">The registered office and central administration of a payment institution must be situated in Liechtenstein.</li>
      <li class="text-xs mb-4">Shareholders with a qualifying holding (10% or more) must be suitable taking into account the need to ensure the sound and prudent management of the payment institution.</li>
      <li class="text-xs mb-4">The payment institutions must safeguard assets we have received from payment service users or via another payment service provider for the execution of payment transactions.</li>
      <li class="text-xs mb-4">If a payment institution intends to provide payment services via agents, the payment institution must transmit the information to the FMA for the purpose of verification by the FMA.</li>
      <li class="text-xs mb-4">The payment institution must have its business activity audited each year by an independent external auditor recognized by the FMA.</li>
      <li class="text-xs mb-4">The license application and the documents to be submitted with the application must, in principle, be in German. The FMA may grant exceptions.</li>
      <li class="text-xs mb-4">The fee for the issuance of a license for a payment institution is CHF 30,000.00.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Initial capital</p>
    <p class="text-xs mb-4">Initial capital is composed of paid-in capital, including any share premium account, and any reserves and profit carried forward, and it must be fully paid in.</p>
    <p class="text-xs mb-4">The initial capital must amount to at least:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">For payment institutions operating payment services, in accordance with Article 3(1)(20)(f) PSA, 40,000 Swiss francs or the equivalent in euros.</li>
      <li class="text-xs mb-4">For payment institutions operating payment services in accordance with Article 3(1) (20)(g) PSA, 100,000 Swiss francs or the equivalent in euros.</li>
      <li class="text-xs mb-4">For payment institutions operating payment services in accordance with Article 3(1) (20)(a)-(e) PSA, 250,000 Swiss francs or the equivalent in euros.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Luxembourg Payment Institutions/ Electronic Money Institutions/ AISP": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Luxembourg Payment Institutions/ Electronic Money Institutions/ AISP</p>
    <p class="text-xs mb-4">Electronic Money Institutions (EMIs) and Payment Institutions (PI) are instrumental in making e-commerce and electronic payment possible across EEA and the Single European Payments Area (SEPA). The electronic payments market is growing at a rapid pace with businesses and consumers relying increasingly on electronic payments. The provision of such services is regulated by EU Directives and enforced by Member States’ regulators.</p>
    <p class="text-xs mb-4">The services offered by Payment Institutions can vary from the provision of payment infrastructures to customers (e.g., for services industries) to services enabling payments between individuals. It also includes facilitation of secure credit and debit card transactions, both nationally and internationally. Other services include automatic currency conversion in sales outlets, the processing of electronic gift tokens or money-off vouchers, as well as recharging mobile phone pre-paid cards.</p>
    <p class="text-xs mb-4">In addition to issuing electronic money, EMIs are also permitted to supply all services of Payment Institutions, to grant loans (under certain conditions) linked to payment services, to supply operational services and other services closely linked to the issuing of electronic money or to the supply of payment services. Entities with a banking license are automatically permitted to perform PI and EMI functions.</p>
    <p class="text-xs mb-4 font-bold">Authorisation Procedure</p>
    <p class="text-xs mb-4">Before taking a formal decision to set up an EMI or PI in Luxembourg, prospective institutions often like to have an informational meeting with the supervisory authority, the Commission de Surveillance du Secteur Financier (CSSF). Such meetings allow the financial services supervisory authority to immediately clarify regulatory aspects to the prospective institutions. PIs and EMIs are subject to initial assessment, which takes place in the form of a detailed application file to the CSSF, with a filing fee of EUR 15,000.</p>
    <p class="text-xs mb-4">The institution’s head office and central administration must be in Luxembourg. The Company must provide its services to the Luxembourg market and have an office and employees in Luxembourg.</p>
    <p class="text-xs mb-4">Following the delivery of the license, a letter is sent to the supervised entity explaining the various legal reporting to be submitted to the CSSF on a periodic basis. An annual lump sum fee of EUR 20,000 must also be paid to the regulator by PIs and EMIs.</p>
    <p class="text-xs mb-4">Luxembourg authorized PIs and EMIs may provide Our services in another EEA state, by using a “passport “for cross-border services, or by setting-up an establishment or branch in an EEA country. This is done through a regulatory notification procedure.</p>
    <p class="text-xs mb-4">Authorization may only be granted to a legal person incorporated under Luxembourg law, which must be established in the form of a public limited company (société anonyme – SA).</p>
    <p class="text-xs mb-4 font-bold">The PSL Law requires a minimum capital of at least:</p>
    <ul class="list-disc list-inside">
      <li class="text-xs mb-4">EUR 20,000 – 125,000 for a Payment Institution, depending on the type of payment services.</li>
      <li class="text-xs mb-4">EUR 350,000 for an Electronic Money Institution.</li>
    </ul>
    <p class="text-xs mb-4">In general, successful applications for PI and EMI licenses take between 4 – 12 months, depending on the complexity of the business and the quality of the application file.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Electronic Money Institution License": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Malta Electronic Money Institution License</p>
    <p class="text-xs mb-4">The Malta Financial Services Authority (MFSA) is the authority responsible for the licensing, regulation, and supervision of credit institutions, electronic money institutions, and financial institutions. The setting up of Electronic Money Institutions in Malta is regulated by the Financial Institutions Act and Financial Institutions Rules.</p>
    <p class="text-xs mb-4">Electronic Money Institutions are entitled to engage in any of the following activities:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">the provision of certain payment services;</li>
      <li class="text-xs mb-4">the granting of credit related to certain payment services. Provided that any such credit shall not be granted from the funds received in exchange for electronic money and held in accordance with the prescribed safeguarding requirements;</li>
      <li class="text-xs mb-4">provision of operational services and closely related ancillary services in respect of the issuing of electronic money or to the provision of payment services referred to in point (a) above;</li>
      <li class="text-xs mb-4">The operation of payment systems;</li>
      <li class="text-xs mb-4">business activities other than the issuance of electronic money, having regard to the applicable law regulating such activities;</li>
    </ul>
    <p class="text-xs mb-4">Electronic Money Institutions are allowed to issue debit cards (such as a chip device) but we are not allowed to issue credit cards since such institutions are not permitted to undertake lending or other bank-related activities;</p>
    <p class="text-xs mb-4">EMIs based in Malta are allowed to outsource services subject to the MFSA’s evaluation on Our own merits.</p>
    <p class="text-xs mb-4">Once a license is obtained, the Electronic Money Institution would benefit from the right to passport such a license into other EU Member States and EEA countries by following some basic procedures of notification, thereby enabling the Electronic Money Institution to provide its services within the relevant Member States and/or EEA States either through the establishment of a branch or remotely, under the freedom to provide services.</p>
    <p class="text-xs mb-4 font-bold">Legal Requirements and Features</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Corporate vehicle permitted is a company, or a limited partnership</li>
      <li class="text-xs mb-4">No local physical office required</li>
      <li class="text-xs mb-4">Minimum paid-up capital is €350,000</li>
      <li class="text-xs mb-4">Minimum number of directors is two</li>
      <li class="text-xs mb-4">Corporate directorship is allowed</li>
      <li class="text-xs mb-4">No local director required</li>
      <li class="text-xs mb-4">Minimum number of shareholders is two</li>
      <li class="text-xs mb-4">Corporate shareholding is allowed</li>
      <li class="text-xs mb-4">Company Secretary is required</li>
      <li class="text-xs mb-4">Duration to Set Up is about 2 months</li>
    </ul>
    <p class="text-xs mb-4 font-bold">Tax Treatment</p>
    <p class="text-xs mb-4">Companies incorporated in Malta are considered to be ordinarily resident and domiciled in Malta and are subject to income tax on Our worldwide income. The standard rate of Maltese corporate income tax is 35%.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Netherlands Electronic Money Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Netherlands Electronic Money Institutions</p>
    <p class="text-xs mb-4">An electronic money institution issues electronic money, for example in the shape of a gift card or a wristband you can use for paying at a festival. Electronic money institutions wishing to operate in the Netherlands must have a license or exemption from DNB. Exempt institutions are not supervised by DNB, but by the AFM.</p>
    <p class="text-xs mb-4">If you wish to become an electronic money institution in the Netherlands then you must prepare and submit an electronic money institution application to the Dutch regulator – the Dutch Central Bank, namely, the De Nederlandsche Bank NV (DNB), before you can offer such services, as an electronic money institution. The Financial Supervision Act (Wet op het financieel toezicht) defines an electronic money institution as a party, not being a bank, that issues electronic money in exchange for funds with which payments can be made.</p>
    <p class="text-xs mb-4">As per Section 3:34 of the Financial Supervision Act (Wet op het financieel toezicht), an electronic money institution is able to perform the following:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Provide services relating to the issuance of electronic money;</li>
      <li class="text-xs mb-4">Issue and manage other means of payments;</li>
      <li class="text-xs mb-4">Payment accounts. The user is able to place and withdraw cash on such accounts as well as use the account card to make a payment transaction, using the card to buy goods and services. Users are also able to set up direct debits standing orders as well as transferring funds;</li>
      <li class="text-xs mb-4">Merchant services. Holders of the payment institution license are able to provide merchant services. This can include acting as a master merchant and offering merchants the ability to accept card payments;</li>
      <li class="text-xs mb-4">Money remittance. Money remittance or transfer is another service payment institutions are able to offer. This service enables the payment service provider to enable users to make cross-border payments, internationally;</li>
      <li class="text-xs mb-4">Payment initiation services. Under this model, an initiator (i.e., a payment service provider under the payment institution license), subject to the user's consent, is able to initiate a payment directly from the user's bank account and transfer the amount directly to the merchant retailer’s bank account, removing the Visa and MasterCard networks from the payment process;</li>
      <li class="text-xs mb-4">Account information services. Under this permission, subject to the user's consent, a payment service provider is able to provide access to a user’s accounts and enable them to view consolidated account information in one place.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">License Application</p>
    <p class="text-xs mb-4">As part of your electronic money institution license application in the Netherlands, you will be required to submit a number of documents, policies, and procedures, including a business plan, your safeguarding measures (how you will keep your client money separated and ring-fenced), your governance arrangements and risk management, your procedures for managing and handling security incidents and customer complaints, your security policy, and your measures against financial crime, including AML. These policy and procedural documents must be specific to your firm and adequately address key aspects as set out by the regulator.</p>
    <p class="text-xs mb-4">As part of your electronic money institution license application, you will need to provide details of your IT systems, including both core systems and any support systems. You will also be required to demonstrate that you have an operational presence in the Netherlands e.g. physical office and locally-based people.</p>
    <p class="text-xs mb-4">As part of your Authorized Electronic Money Institution license application, you will be required to provide the following information as part of your application:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Company details</li>
      <li class="text-xs mb-4">Programme of operations</li>
      <li class="text-xs mb-4">Business plan and financial forecasts</li>
      <li class="text-xs mb-4">A description of your business’s organization structure</li>
      <li class="text-xs mb-4">Evidence of your initial capital</li>
      <li class="text-xs mb-4">Details of client fund safeguarding</li>
      <li class="text-xs mb-4">Compliance & governance arrangements</li>
      <li class="text-xs mb-4">Procedure for monitoring, handling, and following up on security incidents and security-related customer complaints</li>
      <li class="text-xs mb-4">Processes for filing, monitoring, tracking, and restricting access to sensitive payment data</li>
      <li class="text-xs mb-4">Business continuity and recovery measures</li>
      <li class="text-xs mb-4">Collection of statistical data regarding performance, transaction, and fraud</li>
      <li class="text-xs mb-4">Security policy</li>
      <li class="text-xs mb-4">Risk assessment and mitigation measures including controls to manage your AML/CTF obligations</li>
      <li class="text-xs mb-4">Shareholder information</li>
      <li class="text-xs mb-4">Details of any outsourcing arrangements</li>
    </ul>
    <p class="text-xs mb-4">The Dutch regulator must make a decision within three months of receiving a complete application. In reality, it takes around 4-5 months to obtain the license. If you are authorized as an electronic money institution in the Netherlands, you can provide your services as an electronic money provider across the rest of the countries within the European Economic Area without requiring additional licenses in those countries.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Netherlands Exchange Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Netherlands Exchange Institutions</p>
    <p class="text-xs mb-4">The Wft defines an exchange institution as one that pursues the business of performing exchange transactions. Exchange transaction is itself defined as:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">a currency exchange transaction,</li>
      <li class="text-xs mb-4">the payment of coins and banknotes upon presentation of a credit card or against delivery of a document as referred to in Section 1:5a (2), under g, of the Wft, such as paper cheques, including traveler's cheques, postal or money orders etc.</li>
    </ul>
    <p class="text-xs mb-4">Pursuant to the Financial Supervision Act (Wet op het financieel toezicht or Wft), an exchange institution may not pursue its business until and unless it has been authorized by DNB. To determine whether authorization is required, it must be decided whether the institution and its transactions qualify as an exchange office and, respectively, exchange transactions.</p>
    <p class="text-xs mb-4">Exchange institutions wishing to operate in the Netherlands must have a license or exemption from DNB. An authorized exchange institution may not perform payment services, such as money remittance.</p>
    <p class="text-xs mb-4">In principle, De Nederlandsche Bank (DNB) decides on an application for authorization of an exchange institution within 13 weeks. However, the actual consideration period depends on many factors. The quality and completeness of your application have a major bearing on the time required by DNB for assessment.</p>
    <p class="text-xs mb-4">An application for authorization as an exchange institution should be submitted via the Digitaal Loket Toezicht (DLT) of the Dutch Central Bank.</p>
    <p class="text-xs mb-4">De Nederlandsche Bank (DNB) charges a fee for handling applications for authorization of exchange institutions.</p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "United Kingdom Electronic Money and Payment Institution": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">United Kingdom Electronic Money and Payment Institution</p>
    <p class="text-xs mb-4">The UK Financial Conduct Authority (FCA) defines an authorized payment institution as a person authorized as a payment institution under the Payment Services Regulations and included in the Financial Services register to that effect. The Financial Conduct Authority is the regulator of the more than 50,000 firms offering financial services in the UK, including cross-border payment providers, to ensure that markets work efficiently for business and individuals and are honest, fair, and effective towards consumers.</p>
    <p class="text-xs mb-4">An authorized payment institution license enables a business to provide payment services across the European Economic Area. By obtaining the Authorized Payment Institution license, a license holder is able to provide the following payment services:</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Services enabling cash to be placed on a payment account and all of the operations required for operating a payment account.</li>
      <li class="text-xs mb-4">Services enabling cash withdrawals from a payment account and all of the operations required for operating a payment account.</li>
      <li class="text-xs mb-4">The execution of payment transactions, including transfers of funds on a payment account with the user’s payment service provider or with another payment service provider.</li>
      <li class="text-xs mb-4">The execution of payment transactions where the funds are covered by a credit line for a payment service user.</li>
      <li class="text-xs mb-4">Issuing payment instruments or acquiring payment transactions.</li>
      <li class="text-xs mb-4">Money remittance.</li>
      <li class="text-xs mb-4">Payment initiation services.</li>
      <li class="text-xs mb-4">Account information services.</li>
    </ul>
    <p class="text-xs mb-4">Electronic Money Institution (EMI) in the UK is allowed to issue and redeem electronic money. Electronic money is a digital equivalent of cash stored on an electronic device or remotely at a server. Additionally, EMIs can be authorized to provide all of the services of a Payment Institution. Electronic Money Institution license is more suitable for a business wishing to have a possibility of retaining funds of Our clients for a more extended period of time and offering products of stored value.</p>
    <p class="text-xs mb-4">License Requirements</p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li class="text-xs mb-4">Initial capital requirements:</li>
      <ul class="list-disc list-inside text-xs mb-4">
        <li class="text-xs mb-4">If you want to be authorized as an E-money Institution, there is the initial capital requirement of EUR 350,000.</li>
        <li class="text-xs mb-4">Authorized Payment institution – Payment accounts i.e. debit cards — €125,000.</li>
        <li class="text-xs mb-4">Merchant acquiring/payment processing — €125,000.</li>
        <li class="text-xs mb-4">Money remittance — €20,000.</li>
      </ul>
      <li class="text-xs mb-4">Other requirements:</li>
      <ul class="list-disc list-inside text-xs mb-4">
        <li class="text-xs mb-4">The head office and registered office must be in the UK.</li>
        <li class="text-xs mb-4">The company’s management should reside in the UK's office on a daily basis.</li>,
        <li class="text-xs mb-4">On the day the license is obtained, the company must have a ready-to-operate IT system.</li>
      </ul>
      <li class="text-xs mb-4">Fees:</li>
      <ul class="list-disc list-inside">
        <li class="text-xs mb-4">For payment institutions providing money remittance, payment initiation services, and/or account information services, the license fee is EUR 1500.</li>
        <li class="text-xs mb-4">The registration fee for an Authorized E-Money (EMI) institution license in the UK is GBP 5,000.</li>
        <li class="text-xs mb-4">The registration fee for small PI or EMI licenses in the UK – GBP 500.</li>
        <li class="text-xs mb-4">After services are authorized, every year companies must pay an annual fee to FCA. An annual fee amount is defined by FCA.</li>
      </ul>
    </ul>
    <p class="text-xs mb-4">Period to get a license: 3 months</p>
    <p class="text-xs mb-4">Benefits of a license in UK:</p>
    <ul class="list-disc list-inside">
      <li class="text-xs mb-4">UK regulator FCA is one of the best.</li>
      <li class="text-xs mb-4">Favorable tax regime; there is no withholding tax on dividends paid out by UK companies to any shareholders.</li>
      <li class="text-xs mb-4">Despite Brexit, the UK is still a European FinTech Capital.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Netherlands Exchange Institutions": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Netherlands Exchange Institutions</p>
    <p class="text-xs mb-4">The Wft defines an exchange institution as one that pursues the business of performing exchange transactions. Exchange transaction is itself defined as:</p>
    <ul class="list-disc list-inside">
      <li class="text-xs mb-4">a currency exchange transaction,</li>
      <li class="text-xs mb-4">the payment of coins and banknotes upon presentation of a credit card or against delivery of a document as referred to in Section 1:5a (2), under g, of the Wft, such as paper cheques, including traveler's cheques, postal or money orders etc.</li>
    </ul>
    <p class="text-xs mb-4">Pursuant to the Financial Supervision Act (Wet op het financieel toezicht or Wft), an exchange institution may not pursue its business until and unless it has been authorized by DNB. To determine whether authorization is required, it must be decided whether the institution and its transactions qualify as an exchange office and, respectively, exchange transactions.</p>
    <p class="text-xs mb-4">Exchange institutions wishing to operate in the Netherlands must have a license or exemption from DNB. An authorized exchange institution may not perform payment services, such as money remittance.</p>
    <p class="text-xs mb-4">In principle, De Nederlandsche Bank (DNB) decides on an application for authorization of an exchange institution within 13 weeks. However, the actual consideration period depends on many factors. The quality and completeness of your application have a major bearing on the time required by DNB for assessment.</p>
    <p class="text-xs mb-4">An application for authorization as an exchange institution should be submitted via the Digitaal Loket Toezicht (DLT) of the Dutch Central Bank.</p>
    <p class="text-xs mb-4">De Nederlandsche Bank (DNB) charges a fee for handling applications for authorization of exchange institutions.</p>,
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>
    </p>
  </div>
`,
    "Netherlands Payment Institutions": `
<div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">Netherlands Payment Institutions</p>
  <p class="text-xs mb-4">A payment service provider is one whose business it is to provide payment services, according to Section 1:1 of the Financial Supervision Act (Wet op het financieel toezicht – Wft). These services must be provided to persons making payments (consumers) or parties using the payment services (retailers), or both. So a payment service provider acts as an intermediary between the two.</p>
  <p class="text-xs mb-4">Payment service providers holding a license issued by DNB are referred to as payment institutions. Our license requirement is set out in Section 2:3a of the Financial Supervision Act (Wet op het financieel toezicht – Wft).</p>
  <p class="text-xs mb-4">Following the implementation of the revised Payment Services Directive (2015/2366/EU) (PSD2), there will be eight types of payment services requiring a license. We may be provided as a single service or in any combination. These are:</p>
  <ul class="list-disc list-inside">
    <li class="text-xs mb-4">Services enabling cash to be placed on a payment account as well as all the operations required for operating a payment account.</li>
    <li class="text-xs mb-4">Services enabling cash withdrawals from a payment account as well as all the operations required for operating a payment account.</li>
    <li class="text-xs mb-4">Execution of payment transactions, including transfers of funds on a payment account with the user's payment service provider or with another payment service provider.</li>
    <li class="text-xs mb-4">Execution of payment transactions where the funds are covered by a credit line for a payment service user.</li>
    <li class="text-xs mb-4">Issuing and/or acquiring of payment instruments.</li>
    <li class="text-xs mb-4">Money remittance.</li>
    <li class="text-xs mb-4">Payment initiation services.</li>
    <li class="text-xs mb-4">Account information services.</li>
  </ul>
  <p class="text-xs mb-4 font-semibold">Licensing Procedure</p>
  <p class="text-xs mb-4">The payment institution must meet various criteria to be able to offer its services. These include:</p>
  <ul class="list-disc list-inside">
    <li class="text-xs mb-4">Demonstrating the reliability and suitability of policy makers.</li>
    <li class="text-xs mb-4">The integrity of the company’s operations.</li>
    <li class="text-xs mb-4">Controlled governance.</li>
    <li class="text-xs mb-4">Surety of the funds.</li>
    <li class="text-xs mb-4">Evaluation of the day-to-day policy makers.</li>
    <li class="text-xs mb-4">Minimum equity and solvency requirements.</li>
    <li class="text-xs mb-4">No Objection certificate.</li>
  </ul>
  <p class="text-xs mb-4">DNB charges a fee for considering applications for authorization. The amount of this one-off fee is EUR 6,800, as specified in the Financial Supervision Funding Act. DNB also charge payment institutions an annual fee to cover the costs of our regular supervision.</p>
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