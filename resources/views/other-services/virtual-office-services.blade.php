<x-app-layout
    title="@yield('meta_title', 'Virtual Office Services Neptune Corporate')"
    metaDescription="@yield('meta_description', 'Virtual office solutions offering business address, mail handling, and professional support to enhance your company’s image and operational efficiency.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Virtual Office Services
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Virtual Office Services</span>
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
    "Czech Republic Representative Office": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Representative Office
    </p>
    <p class="text-xs mb-4">
      Czech Republic does not differentiate Representative Offices from branch offices. Consequently, representative offices are subject to the same tax filling obligations, although we are not subject to taxation provided, we can demonstrate no revenue generating activity is conducted.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Features
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Also known as RO</li>
      <li class="text-xs mb-4">Not permitted to do business in Czech Republic</li>
      <li class="text-xs mb-4">Can register the company with a virtual office solution</li>
      <li class="text-xs mb-4">No tax obligation since it cannot trade</li>
      <li class="text-xs mb-4">No issued share capital is required</li>
      <li class="text-xs mb-4">Resident director/manager is required</li>
      <li class="text-xs mb-4">Minimum number of directors/manager is 1</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Advantages of Czech Republic Representative
    </p>
    <ul class="list-disc ml-4">
      <li class="text-xs mb-4">Nominee Services are permissible</li>
      <li class="text-xs mb-4">The Czech Republic has numerous Double Taxation treaties</li>
      <li class="text-xs mb-4">A Limited company legitimizes itself for many business activities</li>
      <li class="text-xs mb-4">Business expenses can be claimed against tax</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Czech Republic Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Often it is useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing and call handling service. These services would provide your Company with a more comprehensive ground presence in the Czech Republic, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      The Czech Republic Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Czech Republic.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Czech Republic Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in the Czech Republic.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Czech Republic Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in the Czech Republic.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in the Czech Republic.
    </p>
    <p class="text-xs mb-4">
      The Same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Czech Republic office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message and, if such message is provided, it will be forwarded to you by email or other methods of communication.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Advantages of Czech Republic Virtual Offices
    </p>
    <p class="text-xs mb-4">
      Growth Flexibility.
    </p>
    <p class="text-xs mb-4">
      Ease of Administration.
    </p>
    <p class="text-xs mb-4">
      Substantial Cost Savings.
    </p>
    <p class="text-xs mb-4">
      Payment Flexibility.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Estonia Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Often it is useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Estonia, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Estonia.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Estonia.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Estonia.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in Estonia.
    </p>
    <p class="text-xs mb-4">
      The same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Estonia office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message, and if such message is provided, it will be forwarded to you by email or other method of communication.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Gibraltar Virtual Office Services are useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Gibraltar, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      The Same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Gibraltar office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message and, if such message is provided, it will be forwarded to you by email or other methods of communication.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Estonia Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Often it is useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Estonia, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Estonia.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Estonia.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Estonia Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Estonia.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in Estonia.
    </p>
    <p class="text-xs mb-4">
      The same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Estonia office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message, and if such message is provided, it will be forwarded to you by email or other method of communication.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Gibraltar Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Gibraltar Virtual Office Services are useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Gibraltar, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Gibraltar Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in Gibraltar.
    </p>
    <p class="text-xs mb-4">
      The Same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Gibraltar office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message and, if such message is provided, it will be forwarded to you by email or other methods of communication.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Guernsey Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Guernsey Virtual Office Services are useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Guernsey, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Guernsey Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Guernsey.
    </p>
    <p class="text-xs mb-4">
      All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client.
    </p>
    <p class="text-xs mb-4">
      Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence.
    </p>
    <p class="text-xs mb-4">
      The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers.
    </p>
    <p class="text-xs mb-4">
      Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Guernsey Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Guernsey.
    </p>
    <p class="text-xs mb-4">
      Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents.
    </p>
    <p class="text-xs mb-4">
      Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated.
    </p>
    <p class="text-xs mb-4">
      We will not distribute any documents received in pre-sealed envelopes.
    </p>
    <p class="text-xs mb-4">
      Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Guernsey Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Guernsey.
    </p>
    <p class="text-xs mb-4">
      This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in the Guernsey.
    </p>
    <p class="text-xs mb-4">
      The same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers.
    </p>
    <p class="text-xs mb-4">
      While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Guernsey office of your firm and will request the caller to state his business and leave his particulars.
    </p>
    <p class="text-xs mb-4">
      We will offer to take a message and, if such message is provided, it will be forwarded to you by email or other methods of communication.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Benefits
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Growth Flexibility</li>
      <li>Ease of Administration</li>
      <li>Substantial Cost Savings</li>
      <li>Payment Flexibility</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Virtual Office Services in Ireland": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Virtual Office Services in Ireland
    </p>
    <p class="text-xs mb-4">
      It is important for a company to have a virtual office so as to increase presence in Ireland. All companies are required to have a registered office in Ireland. In addition, the following virtual office services are provided;
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Business address registration</li>
      <li>Mail forwarding services</li>
      <li>Provision of a business fax number & fax forwarding services</li>
      <li>Provision of a dedicated business telephone number</li>
      <li>Call handling services</li>
      <li>Administrative support</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Advantages of Virtual Office
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Growth Flexibility</li>
      <li>Ease of Administration</li>
      <li>Substantial Cost Savings</li>
      <li>Payment Flexibility</li>
      <li>Productivity increases</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Our Advantage
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Speedy, Efficient, and Consistent Services</li>
      <li>Relentless Effort to Obtain Bank Accounts</li>
      <li>Expert Advice on Structuring Options</li>
      <li>Dedicated Ongoing Compliance Support</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Isle of Man Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Isle of Man Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Isle of Man Virtual Office Services are useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in the Isle of Man, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Isle of Man Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Isle of Man. All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client. Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence. The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers. Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Isle of Man Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in the Isle of Man. Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents. Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated. We will not distribute any documents received in pre-sealed envelopes. Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Isle of Man Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in the Isle of Man. This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in the Isle of Man. The Same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers. While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Isle of Man office of your firm and will request the caller to state his business and leave his particulars. We will offer to take a message and, if such message is provided, it will be forwarded to you by email or other methods of communication.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Advantages
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Growth Flexibility</li>
      <li>Ease of Administration</li>
      <li>Substantial Cost Savings</li>
      <li>Payment Flexibility</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Malta Virtual Office Services": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Virtual Office Services
    </p>
    <p class="text-xs mb-4">
      Often it is useful for an offshore Company to have more than just the minimum mandatory presence in the country where it is registered. Companies involved in active trading (or just about any other activity) may utilize a virtual office facility – an advanced administration services package. This may include a full address useable for business correspondence, local telephone and fax numbers, mail and fax forwarding service, document re-mailing, and call handling service. These services would provide your Company with a more comprehensive ground presence in Malta, providing the Company with a full-bodied, proper appearance.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Malta Mail and Fax Forwarding Service
    </p>
    <p class="text-xs mb-4">
      The Company will be provided with a street and suite address and a domestic fax number in Malta. All mail or fax correspondence addressed to the Company will be forwarded to the address, as indicated by the client. The method (mail, courier, fax, email) and frequency of forwarding can be chosen by the client. Handling costs and charges are applicable, depending on the method of forwarding chosen and the volume of correspondence. The address and fax numbers provided to a client Company under this title will normally be shared between several subscribers. Forwarding service will only be provided for correspondence that can be clearly identified as addressed to the client Company.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Malta Document Re-Mailing Service
    </p>
    <p class="text-xs mb-4">
      This service enables You to send out Your commercial documents (for example, invoices or commercial offers) from Your Company's office in Malta. Such documents shall be sent to us in electronic format (doc or pdf) with respective intended recipients and Our postal addresses clearly indicated in the body of such documents. Unless specifically agreed, we will not provide signatures on any such documents. Documents will be printed as is and mailed as indicated. We will not distribute any documents received in pre-sealed envelopes. Handling charges will be applied to each outgoing unit of correspondence.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Malta Call Handling Service
    </p>
    <p class="text-xs mb-4">
      A shared domestic telephone line (different and separate from our normal business lines) will be used to take calls and telephone messages on behalf of Your Company in Malta. This service enables you to indicate a local telephone number in your letterheads and stationery. The call handling service is only available during the official business hours in the Malta. Same telephone line will be used to provide the call handling service to a reasonable amount of unrelated subscribers. While the incoming call will not be answered directly in the name of your Company, we will confirm upon request that the caller has reached the Malta office of your firm and will request caller to state his business and leave his particulars. We will offer to take message and, if such message is provided, it will be forwarded to you by email or other method of communication.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Benefits
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Growth Flexibility</li>
      <li>Ease of Administration</li>
      <li>Substantial Cost Savings</li>
      <li>Payment Flexibility</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Virtual Office Services in Netherlands": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Virtual Office Services in Netherlands
    </p>
    <p class="text-xs mb-4">
      The Netherlands is known as the largest logistics centers in Europe as it also has two of the largest ports on the continent: Amsterdam and Rotterdam. During the years, some of the largest companies in the world have established Our regional headquarters here which has led to the opening of smaller business which concluded contracts with these multinationals. These small businesses also needed to have registered addresses as a condition imposed by Dutch Company Law and this is how the virtual office came to life. A Dutch virtual office, in Amsterdam or other city, is a business location which allows companies and business owners to carry out Our activities remotely.
    </p>
    <p class="text-xs mb-4">
      The Dutch virtual office itself is not defined by any Dutch laws, however, the concept exists, and it is one of the most important facilities offered to those interested in registering companies in the Netherlands but do not have a legal address for Our businesses.
    </p>
    <p class="text-xs mb-4">
      The Dutch virtual office is usually employed as a legal address when opening a company in the Netherlands and as a part of the company registration procedure. It is also very common for local companies to use virtual offices in other Dutch cities, such as Amsterdam, in order to keep in contact with customers and business partners in a certain region of the country.
    </p>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Uses of a virtual office
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>as a registered address when starting the company registration procedure in the Netherlands;</li>
      <li>as an address where existing or potential clients and business partners can ask for information on certain services;</li>
      <li>as a contact point for foreign companies and investors who do not have a local Dutch office yet;</li>
      <li>as a business address for foreign enterprisers who act as sole traders in the Netherlands.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Virtual Services offered include:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>dedicated local phone number with voice mail and fax services;</li>
      <li>high-speed internet connection which will enable the client to get in touch with clients and business associates without any worry or interruption;</li>
      <li>mail collection and forwarding services to any address specified by the client;</li>
      <li>bank statement collection and forwarding services (service offered on request);</li>
      <li>meeting room services provided that the room is booked a few days ahead;</li>
      <li>a prestigious address in a recognized business center of the client’s choosing.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Benefits of Netherlands Virtual Office Services
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Growth Flexibility</li>
      <li>Ease of Administration</li>
      <li>Substantial Cost Savings</li>
      <li>Payment Flexibility</li>
    </ul>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
    
  </div>
`,
    "Representative Offices of Financial Institutions in Switzerland": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Representative Offices of Financial Institutions in Switzerland
    </p>
    <p class="text-xs mb-4">
      According to the Financial Institutions Act (FinIA), a foreign financial institution must have authorization from FINMA to employ people in Switzerland who, on a professional and permanent basis and either in or from Switzerland, represent the institution, notably by concluding client mandates on its behalf, promoting the company or for other purposes. As a result, the representative office may not operate as a foreign financial institution within the strict sense of the term but will instead be eligible solely for representative duties.
    </p>
    <p class="text-xs mb-4">
      The applicant and representative office must meet the following conditions for the foreign financial institution to receive authorization to set up a representative office:
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>the foreign financial institution is subject to adequate supervision;</li>
      <li>the competent foreign supervisory authorities have no objection to the establishment of a representative office;</li>
      <li>the persons responsible for managing the representative office can provide the requisite confirmation that we meet the requirements for proper business conduct;</li>
      <li>proof of compliance with the relevant provisions if we provide financial services as outlined in the Financial Services Act (FinSA);</li>
      <li>proof of affiliation to a supervisory organization (SO) if we operate as a portfolio manager or trustee.</li>
    </ul>
    <p class="text-xs mb-4 font-bold text-purple-800 mt-4">
      Features of Representative Office
    </p>
    <ul class="list-disc list-inside text-xs mb-4">
      <li>Also known as Bureau de Liaison</li>
      <li>Not allowed to do business in Switzerland</li>
      <li>Cannot rent local office premises</li>
      <li>Corporate tax is 0%</li>
      <li>Annual tax return should be submitted</li>
      <li>No issued share capital required</li>
      <li>One resident director required</li>
      <li>Minimum number of director or manager is one</li>
      <li>Length to set up is approximately 3 weeks</li>
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