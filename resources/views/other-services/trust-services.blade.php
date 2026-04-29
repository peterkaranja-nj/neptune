<x-app-layout
    title="@yield('meta_title', 'Comprehensive Trust Services and Support for Your Company')"
    metaDescription="@yield('meta_description', 'Expert trust services for managing, structuring, and protecting assets while ensuring full legal compliance and operational efficiency for individuals and businesses.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Trust Services
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600">Trust Services</span>
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
    "Guernsey Trust": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Trust
    </p>
    <p class="text-xs mb-4">
      The Guernsey law of trusts was codified in 1989 along broadly Anglo-Saxon lines in the Trusts (Guernsey) Law 1989 since updated by the Trusts (Guernsey) Law 2007. Overall, it gives extra protection to beneficiaries. This law does not apply directly in Alderney or Sark but has a substantial influence on trusts in those jurisdictions.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Trust Features
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Type of law is English law</li>
      <li class="text-xs mb-4">Time to establish a Trust is 2 weeks</li>
      <li class="text-xs mb-4">No taxation of trust assets</li>
      <li class="text-xs mb-4">Duration of trust 100 years</li>
      <li class="text-xs mb-4">Settler should not be a resident of Guernsey</li>
      <li class="text-xs mb-4">Beneficiary should be a resident of Guernsey</li>
      <li class="text-xs mb-4">Property should not include immovable property situated in Guernsey</li>
      <li class="text-xs mb-4">Minimum number of trustees is 1 if corporate and 2 or more if not corporate</li>
      <li class="text-xs mb-4">No domestic trustee is required</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Trust Administration
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Trust documents are in English</li>
      <li class="text-xs mb-4">There are no registration requirements for trusts, no fees are payable on the formation, and there are no annual reporting requirements other than for resident trusts (i.e. those with resident beneficiaries).</li>
      <li class="text-xs mb-4">Trust accounts must be kept but there is no audit requirement</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Trust Company Management": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Trust Company Management
    </p>
    <p class="text-xs mb-4">
      Trust management, particularly for wealthy UK individuals, has been a traditional business for Gibraltar. Successive tightening of UK anti-avoidance legislation has reduced the possibilities for UK citizens, but trust work continues to be significant; many Collective Investment Funds are, of course, based on Trusts.
    </p>
    <p class="text-xs mb-4">
      The basic law of trusts is contained in the Gibraltar Trustee Ordinance, which is virtually a copy of English trust legislation. Gibraltarian legislation affecting trusts also includes the Perpetuities and Accumulations Ordinance, the Trustee Investments Ordinance, the Bankruptcy Ordinance, the Trusts (Recognition) Ordinance, and the Financial Services (Conduct of Fiduciary Services Business) Regulations 2006.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Features and Legal Requirements
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Type of law applicable is English Trustee Act 1925s.</li>
      <li class="text-xs mb-4">Legal framework is The Gibraltar Trustee Act 1975.</li>
      <li class="text-xs mb-4">Time to establish is two weeks.</li>
      <li class="text-xs mb-4">No taxation of trust assets.</li>
      <li class="text-xs mb-4">Duration of the trust is 100 years.</li>
      <li class="text-xs mb-4">No restriction on the investment of assets.</li>
      <li class="text-xs mb-4">Settlor should not be a resident of Gibraltar.</li>
      <li class="text-xs mb-4">Beneficiary should not be a resident of Gibraltar.</li>
      <li class="text-xs mb-4">Minimum number of trustees is 1 if corporate and 2 or more if not corporate.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Liechtenstein International Trust": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Liechtenstein International Trust
    </p>
    <p class="text-xs mb-4">
      The total revision of the Professional Trustees Act created a comprehensive, efficient and internationally recognized supervision of the trust business. Consequently, it is possible to combat abuse even more efficiently.
    </p>
    <p class="text-xs mb-4">
      Anyone intending to offer services under the Trustees Act in the Principality of Liechtenstein requires an FMA license as a professional trustee or trust company. The FMA monitors compliance with this licensing requirement and authorized use of the term “professional trustee” or equivalent professional or business term. It follows up on all indications of non-licensed trustee activities or the use of protected terms by non-licensed persons.
    </p>
    <p class="text-xs mb-4">
      Creation of trusts became possible for the first time within the territory of continental Europe in Liechtenstein in 1926 with the adoption of the Anglo-Saxon trust institution at the legislative level. From 1926 until nowadays, the activities of trusts in Europe are recognized only in Liechtenstein.
    </p>
    <p class="text-xs mb-4">
      A trust established in Liechtenstein can have both commercial and non-commercial goals, while compulsory observing the legitimacy of these goals, and we should not contradict the principles of morality. Basically, trusts are established to generate income when managing family assets and guarantee Our long-term protection.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Procedure for Registering a Trust
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">According to Liechtenstein's trust laws, the establishment of a trust occurs by entering into a written declaration of trust between the founder on the one part and one or more trust managers on the other. It is also possible to formally establish a trust by drawing up a unilateral trust declaration and consent to it.</li>
      <li class="text-xs mb-4">All trusts which existence is planned for more than one year must be registered in the Commercial Register no later than 12 months from the date of Our establishment. For this purpose, an official document is provided to the Register, indicating the name of the trust, the date of its establishment, the period for which it was established, and a complete list of trust managers and Our addresses.</li>
      <li class="text-xs mb-4">When registering a declaration of trust in Liechtenstein, you must pay a one-time registration fee of CHF 200.</li>
      <li class="text-xs mb-4">Declaration of trust and all data on the trust are not publicly available, which allows us to give evidence of confidentiality. At the same time, all changes in the data of the trust must be registered in the Register.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Features & Structure of Trusts
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The person who establishes the trust and contributes the constituent capital is called the founder of the trust. The founder can be represented both by a natural person and a legal entity.</li>
      <li class="text-xs mb-4">The trust manager or trustee is in charge of managing the trust. Under the laws of Liechtenstein, the property of the trustee must be kept separately from the property of the trust, and in this case the beneficial owners will be able to claim his ownership if the assets entrusted to the trustee are lost by him.</li>
      <li class="text-xs mb-4">The Trust can appoint an auditor that is a person who monitors compliance with the declaration of trust.</li>
      <li class="text-xs mb-4">The founder of the trust determines the beneficial owners, who may be natural or legal persons. The beneficial owners cannot manage the trust.</li>
      <li class="text-xs mb-4">Submission of reports on the activities of trusts in the tax authorities is not required. In Liechtenstein, the minimum tax for the income of trust is 1200 Swiss francs.</li>
      <li class="text-xs mb-4">The trust can be liquidated at any time. The law does not provide for the timing of the liquidation of the trust.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Trust and Corporate Service Providers (TCPS)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Trust and Corporate Service Providers (TCPS)
    </p>
    <p class="text-xs mb-4">
      A license to carry on the Class 4 regulated activity of Corporate Services permits a business operating in or from the Isle of Man (within certain criteria and with specified exclusions) to:
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Provide services with respect to the formation, sale, transfer, or disposal of companies.</li>
      <li class="text-xs mb-4">Provide registered offices or accommodation address facilities for a company.</li>
      <li class="text-xs mb-4">Act as a "registered agent".</li>
      <li class="text-xs mb-4">Act as an officer of a company.</li>
      <li class="text-xs mb-4">Act as a nominee shareholder/member of a company.</li>
      <li class="text-xs mb-4">Provide administration services to a company.</li>
      <li class="text-xs mb-4">Provide similar services to the above in respect of a partnership.</li>
    </ul>
    <p class="text-xs mb-4">
      A license to carry on the Class 5 regulated activity of Trust Services permits a business operating in or from the Isle of Man (within certain criteria and with specified exclusions) to:
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Act as a trustee in relation to an express trust.</li>
      <li class="text-xs mb-4">Provide trust administration services in relation to an express trust.</li>
      <li class="text-xs mb-4">Act as a trust corporation.</li>
      <li class="text-xs mb-4">Act as a protector in relation to an express trust.</li>
      <li class="text-xs mb-4">Act as an enforcer in relation to a purpose trust.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Trustees and Fiduciaries": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Trustees and Fiduciaries
    </p>
    <p class="text-xs mb-4">
      The MFSA is responsible for the supervision of trustees and other fiduciaries.
    </p>
    <p class="text-xs mb-4">
      The overall aim of the Authority is to monitor the supervision of authorised trustees and other fiduciaries, including administrators of private foundations and Our level of compliance with the applicable legislative framework so as to ensure an appropriate degree of protection for the clients of persons carrying on such regulated activity. Trustees and other fiduciaries are deemed to be gatekeepers to the financial system in view of the fact that the structures which we set up may have wide-ranging effects and uses within the financial sector as a whole. In this respect the MFSA’s scrutiny of the trustee and fiduciary service providers is taken very seriously in view of the heightened risks which these sectors may pose.
    </p>
    <p class="text-xs mb-4">
      The Authority adopts a risk-based approach with respect to the supervision of trustees and other fiduciaries. A risk monitoring system is utilised whereby the data collated through the offsite supervision and any other intelligence available is inputted and a risk score is allocated to each authorised trustee or fiduciary. This risk score will determine the type and frequency of supervision conducted by the Authority.
    </p>
    <p class="text-xs mb-4">
      The Authority adopts a mixture of tools with respect to supervision, with onsite inspections being the most frequently utilised method. This may take the form of either a comprehensive top-down review of all the systems and procedures of the authorised person, or a focused inspection on a specific area.
    </p>
    <p class="text-xs mb-4">
      It is not a common thing to find trusts incorporated in the law systems of civil law countries. Malta, however, is different in the fact that a civil law jurisdiction that does recognize the trust concept. In the Maltese trusts and trustees act, a trust may validly exist until the 125th anniversary of the date on which it came into existence, and, unless sooner terminated, would then terminate. This limitation (against perpetuities) would not, however, apply in respect of a trust created for charitable purposes or a unit trust or a qualifying retirement scheme.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Trustees and Fiduciaries": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Trustees and Fiduciaries
    </p>
    <p class="text-xs mb-4">
      The MFSA is responsible for the supervision of trustees and other fiduciaries.
    </p>
    <p class="text-xs mb-4">
      The overall aim of the Authority is to monitor the supervision of authorised trustees and other fiduciaries, including administrators of private foundations and Our level of compliance with the applicable legislative framework so as to ensure an appropriate degree of protection for the clients of persons carrying on such regulated activity. Trustees and other fiduciaries are deemed to be gatekeepers to the financial system in view of the fact that the structures which we set up may have wide-ranging effects and uses within the financial sector as a whole. In this respect the MFSA’s scrutiny of the trustee and fiduciary service providers is taken very seriously in view of the heightened risks which these sectors may pose.
    </p>
    <p class="text-xs mb-4">
      The Authority adopts a risk-based approach with respect to the supervision of trustees and other fiduciaries. A risk monitoring system is utilised whereby the data collated through the offsite supervision and any other intelligence available is inputted and a risk score is allocated to each authorised trustee or fiduciary. This risk score will determine the type and frequency of supervision conducted by the Authority.
    </p>
    <p class="text-xs mb-4">
      The Authority adopts a mixture of tools with respect to supervision, with onsite inspections being the most frequently utilised method. This may take the form of either a comprehensive top-down review of all the systems and procedures of the authorised person, or a focused inspection on a specific area.
    </p>
    <p class="text-xs mb-4">
      It is not a common thing to find trusts incorporated in the law systems of civil law countries. Malta, however, is different in the fact that a civil law jurisdiction that does recognize the trust concept. In the Maltese trusts and trustees act, a trust may validly exist until the 125th anniversary of the date on which it came into existence, and, unless sooner terminated, would then terminate. This limitation (against perpetuities) would not, however, apply in respect of a trust created for charitable purposes or a unit trust or a qualifying retirement scheme.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      The Components to Register a Trust in Malta
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The settlor is the person that creates the trust by providing and transferring assets, which will constitute the subject matter of the trust, to the trustee that has been appointed. Once the settlor determines who is to benefit from the trust the settlor is left without any rights in regards to the property in the trust. However, the Trusts and Trustees Act highlights the rights of a settlor, which are provided along with the trust deed.</li>
      <li class="text-xs mb-4">The trustee is the person who has been appointed by the settlor as the legal owner of the trust property. Trustees in Malta are licensed, regulated, and supervised by the MFSA. The legal obligation that binds a trustee means that he/she must deal with the trust property over which he/she exercises control for the exclusive benefit of the objects of the trust.</li>
      <li class="text-xs mb-4">The beneficiary is the person(s) who benefit from a trust. A beneficiary must be mentioned by name or ascertained by relationship or class to the settlor. Children of all ages, including conceived children, who are beneficiaries must be mentioned in the trust deed.</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Private Trust Company Jersey": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Private Trust Company Jersey
    </p>
    <p class="text-xs mb-4">
      A private trust company (PTC) is a privately owned corporate trustee that is often the vehicle of choice to act as a trustee of a trust or a number of trusts holding the assets of very wealthy families.
    </p>
    <p class="text-xs mb-4">
      The Financial Services (Jersey) Law 1998, as amended, (the “Financial Services Law”) is the principal legislation which regulates Jersey’s trust company industry. Amongst other things, it requires any person who carries out trust company business as a business in the Island to be duly registered by the Jersey Financial Services Commission (the “Commission”) under the Financial Services Law. Acting as or fulfilling or arranging for another person to act as or fulfil the functions of a trustee of an express trust is a regulated activity under the Financial Services Law.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Private Trust Company Business Exemption
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">The sole purpose of the PTC must be to provide trust company business services in respect of one or more trusts. If there are multiple trusts, it would be expected that we are all linked to the same family.</li>
      <li class="text-xs mb-4">As mentioned above, the PTC need not be a Jersey company. It may be incorporated in any other jurisdiction, in which case this exemption will only be relevant if the PTC operates in or from within Jersey.</li>
      <li class="text-xs mb-4">No specific provisions are required in the constitutional documents of the company. A suitable memorandum of association and articles of association can be supplied.</li>
      <li class="text-xs mb-4">The registration exemption applies only to the provision of trust company business services in respect of trusts. Services provided to companies are not covered by the exemption.</li>
      <li class="text-xs mb-4">There is no formal procedure for the securing of the exemption, and importantly, there is no public record of PTCs. The name of the PTC must, however, be notified to the JFSC.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Ownership of PTC
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4"><b>Individual:</b> this is whereby the client or members of the client’s family own the shares in the PTC in Our personal names. This is, however, unattractive to many clients as it may cause issues with taxation, confidentiality, and heirship.</li>
      <li class="text-xs mb-4"><b>Purpose Trust:</b> In view of the problems associated with ownership by an individual, a PTC is usually an ‘orphaned’ structure so that its ownership is not attributable to any particular person.</li>
      <li class="text-xs mb-4"><b>Foundation:</b> A foundation can be established with the sole object of holding the shares in a PTC.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Features of a PTC
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4"><b>Type of company used:</b> Private, no limit on place of incorporation</li>
      <li class="text-xs mb-4"><b>Licensing requirements:</b> None</li>
      <li class="text-xs mb-4"><b>Registration requirements:</b> None</li>
      <li class="text-xs mb-4"><b>Approval from JFSC:</b> No, simply notify the name</li>
      <li class="text-xs mb-4"><b>Public record of shareholders:</b> Yes, but use of nominees is possible (if Jersey company)</li>
      <li class="text-xs mb-4"><b>Public record of directors:</b> No (if Jersey company)</li>
      <li class="text-xs mb-4"><b>Annual filings:</b> Yes, annual return and fee for the PTC</li>
      <li class="text-xs mb-4"><b>External audit:</b> No, unless constitutional documents specify</li>
      <li class="text-xs mb-4"><b>Jersey taxation:</b> 0% income tax and GST exemption available</li>
      <li class="text-xs mb-4"><b>No. of directors:</b> Minimum of one, if a Jersey company</li>
      <li class="text-xs mb-4"><b>No. of shareholders:</b> Minimum of one, if a Jersey company</li>
      <li class="text-xs mb-4"><b>Jersey resident Directors required?</b> No</li>
      <li class="text-xs mb-4"><b>Jersey administration required:</b> Yes, by registered service provider</li>
      <li class="text-xs mb-4"><b>Jersey registered office:</b> No, unless a Jersey registered company</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`

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