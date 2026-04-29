<x-app-layout
    title="@yield('meta_title', 'Registered Agent Services Neptune Corporate')"
    metaDescription="@yield('meta_description', 'Trusted registered agent support for compliance, official correspondence, and legal requirements for your business entities.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Registered Agent Services
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Registered Agent Services</span>
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
    "Registered Agent Services": `
    <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Trusted Agent Services
  </p>
  <p class="text-xs">
    Ease your regulatory worries. Our trusted agent services provide a strong legal foundation in various locations, giving you a significant advantage.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Mastering Regulations with Trusted Agent Services
  </p>
  <p class="text-xs">
    Experience seamless regulatory management and strategic benefits with our Trusted Agent services. Forget the hassles of legal compliance and embrace a robust legal foundation across multiple jurisdictions. At Neptune Fiduciaries, we empower your business to not only comply with regulations but also to thrive and succeed.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    The Benefits of Choosing Trusted Agent Services
  </p>
  <p class="text-xs">
    Legal Compliance: Our services ensure your business meets all regulatory requirements, reducing the risk of penalties and legal complications. Credibility: Enhance your credibility with stakeholders, clients, and partners by having a dependable registered agent for your business. Continuous Presence: Stay updated and prepared. Our agents maintain a continuous presence to receive crucial legal documents on your behalf. Strategic Advantage: With a secure legal foundation, you gain a competitive edge, allowing you to focus on growth and strategic decisions.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Our Trusted Agent Services Explained
  </p>
  <p class="text-xs">
    Global Reach: Our extensive network of agents across various jurisdictions allows you to operate smoothly on an international level. Timely Notifications: We ensure you promptly receive time-sensitive legal documents, enabling timely responses to legal deadlines. Compliance Expertise: Count on our expertise to navigate complex regulations and maintain compliance, keeping you ahead of potential issues. Tailored Solutions: We understand every business has unique needs. Our services are customized to fit your specific industry and operational requirements.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Advantages Beyond Compliance
  </p>
  <p class="text-xs">
    Focus on Growth: Shift your attention from legal details to growth initiatives, confident that your compliance needs are expertly managed. Peace of Mind: With our services, rest assured you won't miss critical legal notices or deadlines. Cross-Border Expansion: Expand your business effortlessly across borders, knowing your legal obligations are met in every jurisdiction. Ready to unlock the potential of our Trusted Agent services? By partnering with us, you gain a strategic advantage that drives your business forward. Contact one of our experts to discover how Neptune Fiduciaries can guide you through the regulatory landscape, giving you a significant edge in the business world.
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

  @media (max-width: 767px) {
    .section-with-bg-image {
      background-size: auto;
    }
  }
</style>