<x-app-layout
    title="@yield('meta_title', 'Corporate Bank Account Opening Services: Neptune Fiduciaries')"
    metaDescription="@yield('meta_description', 'Secure corporate bank account opening support with Neptune Fiduciaries. Expert guidance, global banks, compliance and fast setup solutions for businesses.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Bank Account Opening
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Bank Account Opening</span>
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
      <div class="flex py-5 md:w-full md:pb-20 md:pt-10 md:pr-10 ">
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
    "Bank Account Opening": `
  <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Global Bank Account Setup
  </p>
  <p class="text-xs">
    Eliminate financial obstacles. Our bank account solutions provide you with access to international banking networks, enhancing your financial reach.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Unlock Global Banking Networks and Enhance Your Financial Reach
  </p>
  <p class="text-xs">
    Step into a world where financial boundaries vanish and your influence expands – with our Bank Account Opening Services. At Neptune Fiduciaries Group, we understand the critical role of global banking networks in advancing your financial journey. Our specialized solutions are crafted to remove barriers and offer unparalleled access, enabling you to amplify your financial reach across borders.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Why Choose Our Services?
  </p>
  <p class="text-xs">
    Global Banking Reach: Our bank account solutions connect you with an extensive network of international banks, facilitating seamless global transactions. Unleash Financial Potential: Empower your business to move funds, invest, and transact effortlessly across borders. Strategic Advancement: Position your business for growth by leveraging global banking services and expanding your reach. Operational Efficiency: Enhance financial transactions and streamline operations with our expertise.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    How to Get Started
  </p>
  <p class="text-xs">
    Consultation and Assessment: We begin by understanding your financial goals and needs, tailoring our solutions to align with your strategic vision. Banking Network Integration: Our experts facilitate seamless integration of your business into our extensive network of international banks. Guided Setup: We assist you through the process, ensuring all necessary documentation and compliance requirements are met for a smooth setup. Ongoing Support: Beyond setup, our team remains available to address any banking-related needs or queries.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Advantages Beyond Banking
  </p>
  <p class="text-xs">
    Global Transactions: Seamlessly conduct international transactions, diversifying your portfolio and maximizing financial potential. Strategic Investments: Capitalize on international investment opportunities with ease, leveraging the power of global banking networks. Operational Ease: Efficiently manage financial operations across borders, empowering your business with streamlined global transactions.
  </p>
  <p class="text-xs">
    Ready to break free from financial limitations and unlock a world of opportunities? Our Bank Account Opening Services are your gateway to seamless global transactions and enhanced financial influence. Contact one of our experts to discover how Neptune Fiduciaries Group can elevate your financial journey with access to a vast banking network that empowers your financial ambitions.
  </p>
  <p class="text-xs font-bold">
    For more information, please contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.
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
      selectedItem.classList.remove('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800', 'hover:border-gray-400');
      selectedItem.classList.add('bg-gray-200', 'text-purple-800', 'hover:text-gray-600', 'cursor-pointer');
    }

    // Add the active class to the newly selected item
    const newItem = document.getElementById(item);
    newItem.classList.remove('bg-gray-200', 'text-purple-800', 'hover:text-gray-600', 'cursor-pointer');
    newItem.classList.add('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800', 'hover:border-gray-400');

    // Update the selected item
    selectedItem = newItem;
  }

  // Generate item list dynamically
  const itemList = document.getElementById('itemList');
  Object.keys(itemContents).forEach(item => {
    const div = document.createElement('div');
    div.id = item;
    div.classList.add('rounded-lg', 'p-2', 'mt-2', 'cursor-pointer');
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

  @media (max-width: 767px) {
    .section-with-bg-image {
      background-size: auto;
    }
  }
</style>