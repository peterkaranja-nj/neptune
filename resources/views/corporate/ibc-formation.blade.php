<x-app-layout
    title="@yield('meta_title', 'IBC Formation Services Neptune Corporate Solutions')"
    metaDescription="@yield('meta_description', 'Professional IBC formation services to help you register, structure and manage your international business company with ease.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              International Business Company (IBC) Formation
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> International Business Company (IBC) Formation</span>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @if (isset($message))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: '{{ $message }}',
      showConfirmButton: false,
      timer: 2000
    });
  </script>
  @endif

  <a href="https://wa.me/254721441544" target="_blank" class="fixed bottom-4 right-32">
    <button class="bg-green-500 text-white px-2 py-1 rounded-full hover:bg-green-600 flex items-center w-14 h-14 justify-center">
      <i class="bx bxl-whatsapp text-3xl"></i>
    </button>
  </a>
</x-app-layout>

<script>
  const itemContents = {
    "International Business Company (IBC) Formation": `
    <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Formation of International Business Company (IBC)
  </p>
  <p class="text-xs">
    Embrace the future of global business. Our IBC services break down borders, enabling you to seize international opportunities with precision.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Harness Global Potential with IBC Formation
  </p>
  <p class="text-xs">
    Discover a world of limitless global business possibilities with our International Business Company (IBC) Formation services. Ready to expand your ventures internationally and explore opportunities with exceptional precision? Our IBC services equip you with the tools and strategies needed to succeed in today's interconnected business environment.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Advantages of Choosing IBC Formation
  </p>
  <p class="text-xs">
    Global Reach: Overcome geographical limitations. An IBC enables you to operate internationally, unlocking new markets, partnerships, and revenue streams. Tax Efficiency: Take advantage of favorable tax regulations and structures in various jurisdictions, optimizing your financial strategy and boosting profit margins. Asset Protection: Protect your assets from potential risks and legal complexities with the secure framework provided by an IBC. Confidentiality: Maintain heightened privacy and confidentiality in your business operations, allowing you to conduct business discreetly.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Our IBC Services Process
  </p>
  <p class="text-xs">
    Customized Solutions: Recognizing that every business is unique, our experts collaborate with you to develop an IBC strategy that aligns with your goals. Jurisdiction Expertise: With comprehensive knowledge of international jurisdictions, we help you select the optimal location for your IBC based on your business needs. Efficient Setup: We manage the intricate IBC formation process, ensuring compliance with all legal and regulatory requirements. Ongoing Support: Beyond formation, we offer continuous support to help you navigate the complexities of international business operations.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Benefits That Transcend Borders
  </p>
  <p class="text-xs">
    Global Expansion: Easily access new markets and expand your business presence worldwide. Diverse Ventures: Engage in various activities, from trading and investment to intellectual property management, under the IBC structure. Strategic Alliances: Build strategic partnerships with international entities, leveraging the credibility and flexibility of your IBC. Ready to elevate your business's global footprint? Our Virtual/Physical Office Services offer a balanced approach that combines tradition with innovation. Contact one of our experts to learn how Neptune Fiduciaries Group can help elevate your business to new heights through IBC Formation.
  </p>
  <p class="text-xs font-bold">
    For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.
  </p>
</div>

  `,
    "Anguilla International Business Company": `
    <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Anguilla International Business Company</p>
      <p class="text-xs">Under the International Business Companies Act legislation under the Anguilla Financial Services Commission, the guidelines and procedures for the incorporation of an Anguilla International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
              <thead class="bg-gray-200">
                <tr>
                  <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Key Component
                  </th>
                  <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Description
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white">
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-nowrap">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Anguilla</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero corporate taxation</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard number of authorized shares is 50,000; however, if it issues more than the authorized shares of 50,000, additional fees are involved<br>Any currency is permitted<br>Minimum capital of 1 USD equivalent to 1 share of USD 1 par value or any currency allowed by the commission</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 business day</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
                </tr>
                <tr class="hover:bg-gray-100 border-b border-purple-800">
                  <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
                  <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
                </tr>
              </tbody>
              <p class="text-xs font-bold">For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.</p>
            </table>

            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Antigua and Barbuda International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Antigua and Barbuda International Business Company (IBC)</p>
      <p class="text-xs">Under the International Business Corporation Act (As amended 1995-2018), the guidelines and procedures for the incorporation of the Antigua and Barbuda IBC are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Antigua and Barbuda</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Corporate Tax (Zero Tax)</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid up Capital<br>Usual authorized capital is USD 50,000</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts<br>No audit requirements</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Aruba Exempt Company (AVV)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Aruba Exempt Company (AVV)</p>
      <p class="text-xs">Legislation establishing the Aruba exempt corporation (Dutch Aruba vrijgestelde vennootschap, AVV) was passed in 1988</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Aruba</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Corporate Tax (Zero Tax)</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid-up Capital<br>Usual authorized capital is Aruban Florin 10,000<br>Standard Currency is Aruban Florin; however, any currency is accepted.</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts<br>No audit requirements</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Bahamas International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Bahamas International Business Company (IBC)</p>
      <p class="text-xs">Under the International Business Companies Act, 2000, (Amendment) Act 2004, (Amendment) Act 2008, (Amendment) Act 2010 legislations, the guidelines and procedures for the incorporation of Bahamas International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Bahamas</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero corporate taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">There is no minimum requirement for the share capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 Business Day</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Barbados International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Barbados International Business Company (IBC)</p>
      <p class="text-xs">Under the “International Business Companies Regulations” enacted in 1992, and the International Business Companies (Repeal) Act, 2018-40, the guidelines and procedures for the incorporation of Barbados International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Barbados</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Tax rate of 2.5% - 0.25% depending on the level of profits of the IBC<br>IBC’s owned by a Barbados Offshore Trust and managed in accordance with the International Financial Services Act receive a zero income tax rate under Chapter 325 of the Act.</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum paid up capital is USD 1<br>Standard Currency USD</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 weeks</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Bermuda Exempted Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Bermuda Exempted Company</p>
      <p class="text-xs">Under the Bermuda Companies Act 1981, legislation under the Bermuda Monetary Authority (the “BMA”), the guidelines and procedures for the incorporation of Bermuda Exempted Companies are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Bermuda</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Corporate Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Usual minimum authorised and issued share capital of at least USD 12,000<br>Companies limited by shares are no longer required to maintain a minimum share capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 weeks</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes Required to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "British Virgin Islands International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">British Virgin Islands International Business Company (IBC)</p>
      <p class="text-xs">Under the BVI Business Companies Act, 2004, which replaces and supersedes the previous BVI International Business Companies Act of 1984, the guidelines and procedures for the incorporation of the BVI International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in the British Virgin Islands</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Corporate Tax (Zero Tax)<br>No access to Double Tax Treaties</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard number of authorized shares is 50,000; however, if it issues more than the authorized shares of 50,000, additional fees are involved<br>Standard Currency is USD<br>Minimum Capital of 1 USD equivalent to 1 share of USD 1 par value</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts<br>No audit requirements</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Cayman Islands Exempt Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Cayman Islands Exempt Company</p>
      <p class="text-xs">Under the Companies Law of 2013, legislation of the Cayman Islands Monetary Authority (CIMA), the guidelines and procedures for the incorporation of the Cayman Islands Exempt Companies are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in the Cayman Islands</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Corporate Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Usual authorised capital is USD 50,000<br>Minimum paid-up capital of USD 1<br>Standard currency USD</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirements to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Cook Islands International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Cook Islands International Business Company (IBC)</p>
      <p class="text-xs">Under the International Companies Act 1981-1982, the guidelines and procedures for the incorporation of Cook Islands International Business Company are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Cook Islands</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Corporate Tax (Zero Tax)<br>No access to Double Tax Treaties</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard Currency is NZD New Zealand Dollar<br>No minimum share capital requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Dubai RAK International Business Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Dubai RAK International Business Company</p>
      <p class="text-xs">The RAK Investment Authority (RAKIA) launched the concept of the International Business Company in January 2007. RAK is an ideal choice for an offshore company, as 100 percent foreign ownership is allowed and thus no local partner is necessary. The fact that an offshore company is not required to keep accounts is also a great advantage.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Dubai</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Corporate Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard Currency AED<br>Usual Authorized Capital AED 10,000 of AED 1 per share</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Gibraltar Non-Resident Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Gibraltar Non-Resident Company</p>
      <p class="text-xs">Gibraltar Non-Resident Company is an equivalent of an offshore company, International Business Company. Under the Gibraltar Companies Ordinance 1967 legislation, the guidelines and procedures for the incorporation of a Gibraltar Non-resident Company are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Gibraltar</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Corporate Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard Currency GBP<br>Minimum Paid up Capital GBP 1<br>Usual Authorized Capital GBP 2,000</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes Required to file Accounts<br>Exceptions are made for small companies</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Hong Kong Offshore Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Hong Kong Offshore Company</p>
      <p class="text-xs">Under the Hong Kong Companies Ordinance 1984, the guidelines and procedures for the incorporation of a Hong Kong offshore Company are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed, however, one must be a natural person<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Hong Kong</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">16.5% Taxation (Only income "derived from or arising in" Hong Kong)</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum subscribed share capital is HKD 1</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Isle of Man Offshore Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Isle of Man Offshore Company</p>
      <p class="text-xs">The Isle of Man has a number of pieces of legislation that govern the offshore sector, taken from The English Companies Act 1929. The common types of companies are: The Exempt Company (Offshore) Resident Company Non-Resident Company.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of 1 director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Isle of Man</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Exempt from taxes from trading and investment activities</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No required minimum capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">3 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Labuan Offshore Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Labuan Offshore Company</p>
      <p class="text-xs">Under the Offshore Companies Act 1990 (OCA), the guidelines and procedures for the incorporation of a Labuan offshore Company are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Labuan</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No tax for non-trading companies with establishments in Labuan (Holding company structure)<br>3% Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum share capital requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">10 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Marshall Islands International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Marshall Islands International Business Company (IBC)</p>
      <p class="text-xs">Marshall Islands IBCs are one of the most widely used business vehicles. IBCs are considered distinct legal entities and are utilized for a variety of purposes, such as holding securities and bank accounts, entering joint ventures, trust and estate planning, asset protection, public offerings for raising capital in world markets, international trade, and holding vessels.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in the Marshall Islands</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Standard number of authorized shares is 50,000<br>Standard Currency is USD<br>No minimum capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2-4 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Mauritius Authorised Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Mauritius Authorised Company</p>
      <p class="text-xs">Under the Mauritius Companies Act 2001, the guidelines and procedures for the incorporation of an authorised company are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Mauritius</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Corporate Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid-up capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, required to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy<br>Bank Reference Letter<br>Updated Resume (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Montserrat International Business Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Montserrat International Business Company</p>
      <p class="text-xs">Under the International Business Companies Act 2013, the guidelines and procedures for the incorporation of Montserrat International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Montserrat</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Exempted from Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Authorized Capital USD 50,000</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "New Zealand Limited Liability Company (LLC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">New Zealand Limited Liability Company (LLC)</p>
      <p class="text-xs">Under the Companies Act 1993 No 105, the guidelines and procedures for the incorporation of a New Zealand offshore company are outlined. The NZ offshore company can be incorporated as a New Zealand offshore company with limited liability (Limited Liability Company) or with unlimited liability. New Zealand offshore companies set up as limited liability offshore companies must end the company name with the declaration 'Limited' or 'Tapui (Limited)’.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is not allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office in New Zealand</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Company Secretary</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">New Zealand taxation is assessed on residency, in that all New Zealand companies are taxable; but will not pay tax if the New Zealand “offshore” company is completely non-resident</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum paid up capital is NZD 1<br>No share capital required during formation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">12 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Panama International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Panama International Business Company (IBC)</p>
      <p class="text-xs">Under the General Corporation Law enacted since 1927, the guidelines and procedures for the incorporation of a Panama IBC are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of 3 directors<br>No local requirement<br>Corporate Director is not allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Panama</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid-up capital<br>Standard Currency: Panamanian Balboa (official currency) or USD</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 week</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Samoa International Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Samoa International Company</p>
      <p class="text-xs">Under the International Companies Act in 1987 & 1988 of Samoa, the guidelines and procedures for the incorporation of a Samoa International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of 1 director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Samoa</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero Taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum capital requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">3 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Requirement to file Accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Seychelles International Business Company (IBC)": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Seychelles International Business Company (IBC)</p>
      <p class="text-xs">Under the International Business Companies Act, 2016 (the “Act”) of Seychelles Financial Services Authority, the guidelines and procedures for the incorporation of the Seychelles IBC are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Seychelles</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No Corporate Tax (Zero Tax)<br>No access to Double Tax Treaties</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid-up capital<br>Usual authorized capital is USD 100,000<br>Standard Currency is USD</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 Business Day</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts<br>No audit requirements</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking as Seychelles is listed on the OECD</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "St Kitts and Nevis International Business Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">St Kitts and Nevis International Business Company</p>
      <p class="text-xs">Under the Nevis Business Corporation Ordinance Act 1984, New Business Corporation Ordinance 2018 & 2017, the guidelines and procedures for the incorporation of an International Business Company in St Kitts and Nevis are outlined.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of two directors<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in Nevis</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Zero corporate taxation</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Any currency is permitted; however, the standard currency is Eastern Caribbean Dollar<br>Minimum paid-up capital is USD 1</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "St Lucia International Business Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">St Lucia International Business Company</p>
      <p class="text-xs">nder the International Business Companies Act of 1999, amended in 2000 and 2001, the guidelines and procedures for the incorporation of St Lucia International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in St Lucia</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Exempted from taxation or may elect to pay an income tax of 1%</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No minimum paid-up capital</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2 weeks</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "St Vincent & The Grenadines Business Company": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">St Vincent & The Grenadines Business Company</p>
      <p class="text-xs">Under the International Business Companies (Amendment) Act 2018 of the St Vincent & The Grenadines Financial Services Authority, the guidelines and procedures for the incorporation of SVG International Business Company are laid down.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Key Component
      </th>
      <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
        Description
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-nowrap">Directors</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of 1 director<br>No local requirement<br>Corporate Director is allowed<br>The director can also be the shareholder</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Shareholders</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum of one shareholder<br>No local requirement<br>Corporate shareholder allowed<br>A shareholder can also be the director</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Public Accessible Records</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No public register available, thus unparalleled privacy</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Registered Office and Agent in SVG</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Physical Presence</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Taxation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Exempt from paying taxes in SVG (but has the option of paying 1% tax)</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Share Capital</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Minimum Issued Capital of 1 of no par value</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Duration for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">3 Business Days</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Accounts and Returns</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No requirement to file accounts</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Nominee Services</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Available</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Banking</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes, can secure offshore banking</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Meetings</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">This can be conducted anywhere</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Requirements for Incorporation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Proof of Address<br>Passport Copy (Certified as True Copy of the Original)</td>
    </tr>
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Seychelles Company and Legal Entity Formations": `
  <div class="p-4">
      <p class="text-lg font-bold text-purple-800 mb-4">Seychelles Company and Legal Entity Formations</p>
      <p class="text-xs">Background on Seychelles With its various tax benefits that international investors can take advantage of, Seychelles, an island nation in the Indian Ocean with a population of about 90,000, is renowned as one of the most attractive commercial destinations for offshore company registration. Due to its unrivaled level of secrecy and confidentiality within the company, Seychelles is one of the top countries for company formation. International Business Companies, International Trusts, Protected Cell Companies, Special License Companies, and Limited Partnerships are all registered with the Seychelles Financial Services Authority (FSA). The Financial Services Authority Act of 2013 established the Authority, which is in charge of licensing, regulating, and advancing the non-banking financial services sector in the Seychelles. We are also the regulator for non-banking financial services.</p>
      <p class="text-xs font-bold text-purple-800 mt-4 mb-4">Key Features</p>
      <div class="flex flex-col">
    <div class="overflow-x-hidden shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-x-hidden">
              <table class="w-100 divide-y divide-gray-200 table-fixed dark:divide-gray-700">
  <thead class="bg-gray-200">
    <tr>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Entity Type
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Duration for Formation and Registration
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Minimum Number of Directors
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Minimum Number of Shareholders
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Physical Registered Office Address Requirement
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Minimum Paid-Up Share Capital
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Disclosure of Shareholders/Beneficial Owner
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Regulator
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Corporate Tax
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Annual Tax Return Filing
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Entry to Double Taxation Treaties
      </th>
      <th scope="col" class="py-1 px-3 text-xs tracking-wider text-left text-gray-700 dark:text-gray-400">
        Auditor Appointment
      </th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">International Business Company (IBC)</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">3 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">International Trade Zone Company (ITZ)</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">7 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">LLC (For tax residents)</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">14 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Registrar of Companies</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0 - 33%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Special License Company (Onshore financial activities)</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">7 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1.5%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Branch Office</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">3 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Registrar of Companies</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0 - 33%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Trust</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">7 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 Founder</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Board and Voting Members</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Foundation</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">7 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">1 Founder</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Board and Voting Members</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">15%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
    </tr>
    <tr class="hover:bg-gray-100 border-b border-purple-800">
      <td class="py-2 px-4 text-xs font-medium text-gray-900 whitespace-normal">Protected Cell Companies</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">14 Days</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">2</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Local Presence (director/shareholder/officer)</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">USD 1</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Seychelles Financial Services Authority</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">0%</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">No</td>
      <td class="py-2 px-4 text-xs font-medium text-gray-500 whitespace-normal">Yes</td>
    </tr>
  </tbody>
</table>



            </div>
        </div>
    </div>
</div>


    </div>
  `,
    "Malta Protected Cell Companies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Malta Protected Cell Companies</p>
<p class="text-xs">The Protected Cell Companies (PCC) Regulations as addressed by the Companies Act (Cell Companies Carrying on Business of Insurance) Regulations provide for the constitution, or conversion, of insurance companies, insurance brokers, and insurance managers licensed by the Malta Financial Services Authority (MFSA) into Cell Companies.</p>
<p class="text-xs">The PCC Regulations allow a cell company to be formed in carrying out business of insurance, reinsurance, captive, insurance brokerage, and insurance management. After successfully applying the concept of a PCC back in 2004, Malta’s PCC model allows the promoter to write insurance business through a cell by effectively utilizing the cell company’s core capital. This would then imply that the promoter need not comply with the “own funds” requirements if the cell company’s core capital is utilized effectively.</p>
<p class="text-xs font-bold text-purple-800 mt-4 mb-2">Features</p>
<ul class="list-disc text-xs ml-6 mb-4">
  <li>Type of law that regulates PCC is a hybrid type</li>
  <li>Time to establish a new company is 2 weeks</li>
  <li>Tax is 15%</li>
  <li>Number of Cells is unlimited</li>
  <li>Registered office is required</li>
  <li>Minimum paid-up capital is 50% of the Authorized capital</li>
  <li>Shares type is cellular and non-cellular</li>
  <li>Minimum number of directors is two</li>
  <li>Corporate directorship is not allowed</li>
  <li>Corporate secretary is required, or it must be a Malta Corporate Service Provider</li>
</ul>
<p class="text-xs font-bold text-purple-800 mt-4 mb-2">Malta PCC Distinctive Benefits</p>
<ul class="list-disc text-xs ml-6 mb-4">
  <li>PCC as part of the business structure is ideal for use in umbrella funds and captive insurance structures because the losses of one cell will not have an adverse effect on the other cells</li>
  <li>It can limit the creditor exposure, the cells are independent, and the assets of a particular cell can be applied to the liabilities of that particular cell only</li>
  <li>It is cost-effective compared to forming various subsidiaries for different businesses</li>
  <li>Being the sole EU member with a separate legislation for Protected Cell Companies (PCCs) and Incorporated Cell Companies (ICCs), passport benefits within the EU/EEA, robust regulatory regime, and a favorable tax system favor Malta’s position for the carrying of business insurance, insurance management, and brokerage.</li>
</ul>
<p class="text-xs font-bold">For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.</p>



    </div>
  `,
    "Gibraltar Protected Cell Companies": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">Gibraltar Protected Cell Companies</p>
<p class="text-xs">All firms wishing to establish as a Protected Cell Company (PCC) are required to comply with the Protected Cell Companies Act 2001 (the Act).</p>
<p class="text-xs">As per Section 11 of the Act, consent of the Chief Executive Officer is required for the establishment of a PCC. Consent may only be granted if the firm is, or will be:</p>
<ul class="list-disc ml-6 text-xs mb-4">
  <li>An Insurance Company, licensed under the Financial Services (Insurance Companies) Act;</li>
  <li>A Collective Investment Scheme, licensed under the Financial Services (Collective Investment Schemes) Act; or</li>
  <li>Established principally for the purposes of issuing bonds, notes, or loan or other debt securities or instruments, secured or unsecured, in respect of which the repayment of capital and interest is to be funded from the company’s investments.</li>
</ul>
<p class="text-xs">Therefore, any firm wishing to establish as a PCC should submit a formal request to the GFSC for consideration. The request should include the following:</p>
<ol class="list-decimal text-xs ml-6 mb-4">
  <li>Details on the proposed activity;</li>
  <li>Details on the proposed license to be sought (if applicable);</li>
  <li>How the firm complies with Section 11 of the Act; and</li>
  <li>By when an application should be expected (if applicable).</li>
</ol>
<p class="text-xs">If successful, the approval granted by the GFSC will be subject to the following:</p>
<ul class="list-disc ml-6 text-xs mb-4">
  <li>An application being submitted to the GFSC within 3 months;</li>
  <li>If the application is not received within 3 months, the firm will be required to de-register the legal entity or convert to another legal type within 5 days of the end of the 3 months; and</li>
  <li>If the application is unsuccessful, the firm will be required to de-register the legal entity or convert to another legal type within 5 working days as from the point of communication from the GFSC.</li>
</ul>
<p class="text-xs font-bold">For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.</p>



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