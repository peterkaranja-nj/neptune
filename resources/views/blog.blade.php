<x-app-layout
    title="@yield('meta_title', 'Neptune Corporate Blog Tips on Business & Offshore Services')"
    metaDescription="@yield('meta_description', 'Read expert guides, tips, and insights on IBC, LLC formation, registered agent services, and global business solutions.')"
    canonical="@yield('canonical', url()->current())"
>

{{-- Blog Page --}}
<section class="w-full px-4 py-10 mx-auto max-w-7xl">

    {{-- Hero Banner --}}
    <div class="mb-10">
        <div class="bg-image relative isolate px-6 lg:px-8 rounded-lg">
            <div class="py-10 sm:py-20 lg:py-28">
                <h1 class="text-2xl font-bold text-center tracking-tight text-white sm:text-5xl">
                    Blog
                </h1>
                <p class="font-bold text-center text-xs mt-2">
                    Home <span class="font-bold"> > </span>
                    <span class="text-yellow-600">Blog</span>
                </p>
            </div>
        </div>
    </div>

    {{-- Blog Grid --}}
    <div id="blog-grid" class="grid grid-cols-1 gap-10 md:grid-cols-2 xl:grid-cols-3">
        @foreach($posts as $index => $post)
        <div class="blog-card {{ $index >= 9 ? 'hidden' : '' }}">
            <a href="/blog/{{ $post['slug'] }}">
                <img
                    src="{{ $post['image'] }}"
                    class="object-cover w-full h-56 mb-5 bg-center rounded"
                    alt="{{ $post['title'] }}"
                    loading="{{ $index < 9 ? 'eager' : 'lazy' }}"
                />
            </a>
            <p class="mb-2 text-xs font-semibold tracking-wider text-gray-400 uppercase">
                {{ $post['category'] }}
            </p>
            <h2 class="mb-2 text-xl font-bold leading-snug text-gray-900">
                <a href="/blog/{{ $post['slug'] }}" class="text-gray-900 hover:text-purple-700">
                    {{ $post['title'] }}
                </a>
            </h2>
            <p class="mb-4 text-xs font-normal text-gray-600">
                {{ $post['excerpt'] }}
            </p>
            <a class="flex items-center text-gray-700" href="#">
                <div class="avatar">
                    <img
                        class="w-12 h-12 rounded-full"
                        src="https://images.unsplash.com/photo-1645378999013-95abebf5f3c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Author"
                    />
                </div>
                <div class="ml-2">
                    <p class="text-xs font-semibold text-gray-900">Neptune Corporate</p>
                    <p class="text-xs text-gray-600">
                        {{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}
                    </p>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    {{-- Load More Button --}}
    @if(count($posts) > 9)
    <div class="flex justify-center mt-12" id="load-more-wrapper">
        <button
            id="load-more-btn"
            class="px-10 py-3 bg-yellow-600 hover:bg-purple-800 text-white font-semibold rounded-lg transition-colors duration-200 text-sm"
        >
            Load More Articles
        </button>
    </div>
    @endif

</section>

<a href="https://wa.me/254721441544" target="_blank" class="fixed bottom-4 right-32">
    <button class="bg-green-500 text-white px-2 py-1 rounded-full hover:bg-green-600 flex items-center w-14 h-14 justify-center">
        <i class="bx bxl-whatsapp text-3xl"></i>
    </button>
</a>

</x-app-layout>

<style scoped>
    .bg-image {
        background-image: url("images/blog-1.jpg");
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('load-more-btn');
    if (!btn) return;

    const allCards = document.querySelectorAll('.blog-card');
    let visibleCount = 9;
    const batchSize = 9;

    btn.addEventListener('click', function () {
        let shown = 0;

        for (let i = visibleCount; i < allCards.length && shown < batchSize; i++) {
            allCards[i].classList.remove('hidden');
            shown++;
            visibleCount++;
        }

        // Hide button if all posts are now visible
        if (visibleCount >= allCards.length) {
            document.getElementById('load-more-wrapper').remove();
        }
    });
});
</script>