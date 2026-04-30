<x-app-layout
    title="@yield('meta_title', 'About Neptune Corporate Expert Business Services')"
    metaDescription="@yield('meta_description', 'Discover Neptune Corporate: learn about our mission, and dedicated expert team providing trusted company formation and corporate support worldwide.')"
    canonical="@yield('canonical', url()->current())"
>
<main>
    <div class="">
      <div class="bg-image relative isolate px-6 lg:px-8">
        <div class="py-20 sm:py-40 lg:py-28">
          <div class="">
            <h1 class="text-2xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
              About Us
            </h1>
            <p class="font-bold text-center text-xs">Home <span class="font-bold"> > </span> <span class="text-yellow-600">About Us</span></p>
          </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        </div>
      </div>
    </div>

    <div class="relative flex flex-col max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 px-8">
      <div class="flex py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
        <div class="text-left py-10">
          <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
            Who We Are
          </h2>
          <p class="max-w-md mx-auto mt-3 text-base text-gray-500 text-xs md:mt-5 md:max-w-3xl">
            Our dedication continues far beyond the initial setup, guiding clients throughout the
            entire business lifecycle. We offer detailed assistance through complex legal procedures,
            safeguarding our clients' businesses from potential hazards. Furthermore, our unwavering
            support in maintaining ongoing compliance with international regulations underscores
            our commitment to long-term success. At Neptune Fiduciaries Group, clients are our top
            priority. We aim to build deep, lasting relationships through transparent communication,
            gaining a comprehensive understanding of our clients' needs. This approach not only
            provides us with valuable insights but also allows us to offer a level of service
            that is unmatched in the industry.
          </p>
          <p class="max-w-md mx-auto mt-3 text-base text-gray-500 md:mt-5 text-xs md:max-w-3xl">
            Neptune Fiduciaries Group thrives within the fast-paced, ever-changing landscape of the
            global market. We specialize in delivering personalized incorporation services that
            perfectly match the specific commercial goals of each client. Beyond establishing the
            optimal company structure, our wide-ranging expertise covers every aspect of company
            administration, ensuring meticulous attention to every operational detail and laying
            a robust foundation for business success.
          </p>
        </div>
      </div>
      <div class="flex items-center py-5 md:w-1/2">
        <div class="p-3 rounded">
          <div class="rounded-lg bg-white text-black w-full">
            <img src="images/about-6.jpg" />
          </div>
        </div>
      </div>
    </div>

    <section class="bg-white">
      <div class="container px-6 mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">
          Our Principles
        </h2>
        <p class="text-xs">
          At Neptune Fiduciaries Group, our principles are the foundation of our identity, guiding all our actions.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">Excellence & Empathy</h3>
            <p class="text-gray-500 text-xs">
              Neptune Fiduciaries Group is built on the principles of excellence and empathy. We strive to provide top-tier services, always maintaining the highest standards of quality and care.
            </p>
          </div>

          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">Honesty & Clarity</h3>
            <p class="text-gray-500 text-xs">
              We prioritize honesty and clarity at Neptune Fiduciaries Group. These values create an environment of trust and understanding, essential for fostering growth and success.
            </p>
          </div>

          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">Dedication & Teamwork</h3>
            <p class="text-gray-500 text-xs">
              Our commitment to dedication and teamwork is pivotal to enhancing productivity and meeting our clients' expectations. This collaborative approach allows us to deliver services innovatively and effectively.
            </p>
          </div>

          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">Professionalism & Respect</h3>
            <p class="text-gray-500 text-xs">
              We are committed to treating everyone with professionalism and deep respect. Our promise is to address concerns and communicate empathetically, fostering an inclusive and supportive environment.
            </p>
          </div>

          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">Enduring Relationships</h3>
            <p class="text-gray-500 text-xs">
              We believe in building long-lasting relationships. Through trust, mutual respect, and open communication, we remain dedicated partners throughout our clients' journeys.
            </p>
          </div>

          <div class="flex flex-col p-6 space-y-3 bg-gray-200 rounded-xl">
            <h3 class="text-xl font-semibold text-yellow-600 capitalize">International Outlook</h3>
            <p class="text-gray-500 text-xs">
              The global market significantly influences our perspective. We address challenges and opportunities with a broad international outlook, ensuring our services remain relevant and effective in an ever-changing world.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section with scroll-triggered count-up -->
    <div id="about-stats" class="bg-gray-50 py-16 sm:py-20">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 text-center sm:grid-cols-3">

          <div class="bg-white rounded-2xl p-8 shadow-sm border-t-4 border-yellow-500 hover:shadow-md transition-shadow duration-200">
            <div class="text-4xl font-bold text-gray-900 sm:text-5xl" id="transactions-counter">0</div>
            <div class="text-yellow-600 font-semibold text-sm mt-1">projects</div>
            <div class="text-gray-500 text-xs mt-2">Projects completed</div>
          </div>

          <div class="bg-white rounded-2xl p-8 shadow-sm border-t-4 border-yellow-500 hover:shadow-md transition-shadow duration-200">
            <div class="text-4xl font-bold text-gray-900 sm:text-5xl" id="assets-counter">$0</div>
            <div class="text-yellow-600 font-semibold text-sm mt-1">million</div>
            <div class="text-gray-500 text-xs mt-2">Transactions every 24 hours</div>
          </div>

          <div class="bg-white rounded-2xl p-8 shadow-sm border-t-4 border-yellow-500 hover:shadow-md transition-shadow duration-200">
            <div class="text-4xl font-bold text-gray-900 sm:text-5xl" id="members-counter">0</div>
            <div class="text-yellow-600 font-semibold text-sm mt-1">users</div>
            <div class="text-gray-500 text-xs mt-2">Happy customers</div>
          </div>

        </div>
      </div>
    </div>

    <a href="https://wa.me/254721441544" target="_blank" class="fixed bottom-4 right-32">
      <button class="bg-green-500 text-white px-2 py-1 rounded-full hover:bg-green-600 flex items-center w-14 h-14 justify-center">
        <i class="bx bxl-whatsapp text-3xl"></i>
      </button>
    </a>
</main>

</x-app-layout>

<style scoped>
  .bg-image {
    background-image: url("images/hero-3.jpg");
    background-size: cover;
    background-position: center;
  }

  body, p, span, div, dt {
    font-size: 15px !important;
    line-height: 1.6 !important;
  }

  @media (max-width: 767px) {
    .section-with-bg-image {
      background-size: auto;
    }
  }
</style>

<script>
  function animateCountUp(el, target, prefix, suffix, duration) {
    const steps    = Math.ceil(duration / 16);
    const stepSize = target / steps;
    let   frame    = 0;

    const timer = setInterval(() => {
      frame++;
      const current = Math.min(stepSize * frame, target);
      const display = target >= 1000
        ? Math.floor(current).toLocaleString()
        : Math.floor(current);
      el.textContent = prefix + display + suffix;
      if (frame >= steps) {
        el.textContent = prefix + target.toLocaleString() + suffix;
        clearInterval(timer);
      }
    }, 16);
  }

  const statsSection  = document.getElementById('about-stats');
  let   statsAnimated = false;

  if (statsSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !statsAnimated) {
          statsAnimated = true;
          animateCountUp(document.getElementById('transactions-counter'), 7500,   '',  '', 2000);
          animateCountUp(document.getElementById('assets-counter'),        200000, '$', '', 2000);
          animateCountUp(document.getElementById('members-counter'),       9000,   '',  '', 2000);
          observer.unobserve(statsSection);
        }
      });
    }, { threshold: 0.25 });

    observer.observe(statsSection);
  }
</script>
