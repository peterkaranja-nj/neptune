<x-app-layout
    title="@yield('meta_title', 'Corporate Data Reporting Services for Compliance and Growth')"
    metaDescription="@yield('meta_description', 'Comprehensive data reporting solutions providing accuracy, transparency, and full regulatory compliance to support informed corporate decision-making worldwide.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Data Reporting
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Data Reporting</span>
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
    "Data Reporting Service Providers": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Data Reporting Service Providers
    </p>
    <p class="text-xs mb-4">
      Data Reporting Service Providers (“DRSP”) are subject to prior written authorization from the Minister responsible for the CSSF if we intend to offer data reporting services as a regular occupation or business. This is in accordance with Articles 29-7 and 29-8 of the Law of 5 April 1993 on the financial sector (“LFS”).
    </p>
    <p class="text-xs mb-4">
      Article 29-8(2) of the LFS permits credit institutions, investment firms, or market operators operating a trading venue to conduct data reporting services, provided we can verify Our compliance with Sub-section 4 of the LFS (Articles 29-7 to 29-15). These services should be included in Our authorization.
    </p>
    <p class="text-xs mb-4">
      DRSPs are characterized by three exceptions compared to other categories of financial sector professionals. Firstly, we are not subject to shareholder requirements (Article 18(20) of the LFS) and capital base requirements (Article 20(1) of the LFS).
    </p>
    <p class="text-xs mb-4">
      Secondly, Article 41 of the LFS does not apply to the activities carried out by an Approved Publication Arrangement (APA) or a Consolidated Tape Provider (CTP).
    </p>
    <p class="text-xs mb-4">
      Persons authorized in Luxembourg to provide data reporting services as outlined in annexe II, section D of the LFS are permitted to offer these services throughout the entire European Union. Similarly, the same services can be provided in Luxembourg by persons authorized by another Member State, provided that the planned services are covered by an authorization and fall under the services outlined in annexe II, section D of the LFS.
    </p>
    <p class="text-xs mb-4 font-bold">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
  </div>
`,
    "Data Reporting Service Providers in Netherlands": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Data Reporting Service Providers in Netherlands
    </p>
    <p class="text-xs mb-4">
      Entities that provide Data Reporting Services (DRS) are known as Data Reporting Service Providers (DRSP). There are three types of DRS providers:
    </p>
    <ul class="list-disc ml-8 text-xs mb-4">
      <li>Approved Publication Arrangement (APA)</li>
      <li>Consolidated Tape Provider (CTP)</li>
      <li>Approved Reporting Mechanism (ARM)</li>
    </ul>
    <p class="text-xs mb-4">
      Different organizational requirements apply to these providers.
    </p>
    <p class="text-xs mb-4">
      To provide data reporting services in the Netherlands, you must apply for a license from the AFM. This license application pertains to providing an APA, ARM, or CTP.
    </p>
    <p class="text-xs mb-4">
      <strong>License Requirements for DRSP</strong>
    </p>
    <p class="text-xs mb-4">
      To obtain a license, you must meet certain requirements, including ensuring that individuals who determine the policy of an enterprise, either solely or jointly, or who supervise such policy, are proper and fit for the performance of Our tasks.
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