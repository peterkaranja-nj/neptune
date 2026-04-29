<x-app-layout
    title="@yield('meta_title', 'Nominee Director & Shareholder Services Neptune Corporate')"
    metaDescription="@yield('meta_description', 'Confidential nominee director and shareholder access solutions to protect privacy and streamline corporate governance.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Nominee Director and Shareholder Access
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Nominee Director and Shareholder Access</span>
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
    "Nominee Director and Shareholder Access": `
    <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Strategic Nominee Director and Shareholder Solutions
  </p>
  <p class="text-xs">
    Advance with strategic brilliance. Our nominee director and shareholder services ensure compliance and enhance your strategic maneuvers.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Expert Nominee Director and Shareholder Services
  </p>
  <p class="text-xs">
    Enter a domain of strategic excellence and compliance assurance with our Nominee Director and Shareholder services. At Neptune Fiduciaries, we understand the significance of navigating the business landscape with strategic insight. Our services are meticulously crafted to empower you to progress strategically while ensuring compliance at every stage. With our expert guidance, you’ll be well-positioned to make impactful decisions that drive your business toward success.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Benefits of Choosing Nominee Director and Shareholder Services
  </p>
  <p class="text-xs">
    Strategic Advantage: Gain a strategic edge by focusing on core business activities while our nominee director and shareholder handle legal and administrative tasks. Compliance Confidence: Stay ahead of evolving regulations and legal obligations with our experts ensuring your business remains fully compliant, mitigating potential risks. Privacy and Confidentiality: Maintain privacy in your business affairs using nominee services, allowing you to operate discreetly in today's interconnected world. Enhanced Decision-Making: Strengthen your decision-making process by leveraging the expertise of our nominee director and shareholder to navigate complex business decisions.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    How Our Services Operate
  </p>
  <p class="text-xs">
    Strategic Alignment: We collaborate closely with you to understand your business goals and tailor our nominee services to align with your strategic direction. Experienced Professionals: Our nominee directors and shareholders are seasoned professionals with deep industry knowledge, ensuring your decisions are well-informed. Compliance Assurance: We guarantee your business adheres to all legal and regulatory requirements, reducing potential penalties and legal obstacles. Ongoing Support: Beyond initial setup, we provide continuous support to help you navigate the challenges of business operations and decision-making.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Advantages Beyond Compliance
  </p>
  <p class="text-xs">
    Focused Strategy: Shift your focus from administrative tasks to strategic planning, leveraging the expertise of our nominee director and shareholder. Risk Mitigation: Minimize legal and regulatory risks with experienced professionals managing compliance on your behalf. Confidence in Decisions: Make critical business decisions with confidence, knowing you have expert guidance and support at your side.
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