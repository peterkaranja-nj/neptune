<x-app-layout
    title="@yield('meta_title', 'Expert Legal Opinions and Corporate Advisory Services')"
    metaDescription="@yield('meta_description', 'Expert legal opinions for complex corporate matters, providing clarity, strategic guidance, and full compliance with international legal standards.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              Legal Opinons of Distiction
            </h1>
            <p class="font-bold text-center text-xs">
              Home <span class="font-bold"> > </span>
              <span class="text-yellow-600"> Legal Opinons of Distiction</span>
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
    "Legal Opinions of Distinction": `
        <div class="p-4">
  <p class="text-lg font-bold text-purple-800 mb-4">
    Premier Legal Opinions
  </p>
  <p class="text-xs">
    Ensure your decisions are precise. Our legal opinions provide expert insights, simplifying international endeavors.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Achieve Clear Decision-Making with Premier Legal Opinions
  </p>
  <p class="text-xs">
    Enter a realm where uncertainty vanishes, and informed decisions prevail through our Premier Legal Opinions. At Neptune Fiduciaries Group, we know that clarity is essential in the intricate world of international business. Our legal opinions act as guiding lights, offering expert insights to facilitate successful international operations and strategies.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Why Choose Premier Legal Opinions?
  </p>
  <p class="text-xs">
    Well-Informed Decisions: Our legal opinions provide you with expert analysis and recommendations, helping you make confident and well-informed decisions. Reduced Risks: By identifying potential legal issues and challenges, our opinions assist you in navigating complex scenarios while minimizing risks. Regulatory Adherence: Ensure compliance with international laws and regulations, maintaining your business operations on firm legal ground. Strategic Growth: Utilize our legal insights to strategically plan and execute your international ventures, giving you a competitive advantage.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    How Our Legal Opinions Guide You
  </p>
  <p class="text-xs">
    Professional Guidance: Our experienced legal experts dive into the complexities of international law to deliver comprehensive and trustworthy legal opinions. Customized Approach: Each opinion is customized to your unique situation, industry, and objectives, ensuring its relevance and applicability. Clear Action Plans: We provide clear, actionable recommendations to steer your decision-making process, ensuring you are well-prepared for any legal circumstances. Risk Evaluation: Gain a thorough understanding of potential legal risks and how to mitigate them, boosting your confidence in your chosen strategies.
  </p>
  <p class="text-xs font-bold text-purple-800 mt-4">
    Advantages Beyond Clarity
  </p>
  <p class="text-xs">
    Confident Navigation: Tackle international challenges confidently, equipped with expert legal opinions that empower impactful decisions. Legal Security: Protect your ventures from legal uncertainties, ensuring your strategies are based on solid legal principles. Strategic Advantage: By leveraging legal insights, you position your business to seize opportunities and outperform competitors.
  </p>
  <p class="text-xs">
    Ready to achieve the clarity necessary for seamless international operations? Our Premier Legal Opinions serve as your guiding light, ensuring your decisions are clear and legally sound. Contact one of our experts to discover how Neptune Fiduciaries Group can provide the expert legal insights needed to drive your international success.
  </p>
  <p class="text-xs font-bold">
    For more information, please feel free to contact Neptune Fiduciaries at <a href="mailto:info@neptunecorporate.com" class="text-purple-800 hover:underline">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com" class="text-purple-800 hover:underline">sales@neptunecorporate.com</a>.
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