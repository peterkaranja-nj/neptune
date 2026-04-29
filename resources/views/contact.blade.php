<x-app-layout
    title="@yield('meta_title', 'Contact Neptune Fiduciaries – Get in Touch Today')"
    metaDescription="@yield('meta_description', 'Reach Neptune Fiduciaries for inquiries, support, and expert global business services. Email or visit our offices worldwide.')"
    canonical="@yield('canonical', url()->current())"
>
<div class="">
        <div class="bg-image relative isolate px-6 lg:px-8">
            <div class="py-10 sm:py-20 lg:py-28">
                <div class="">
                    <h1 class="text-2xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                        Contact Us
                    </h1>
                    <p class="font-bold text-center text-xs">
                        Home <span class="font-bold"> > </span>
                        <span class="text-yellow-600">Contact Us</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center bg-white">
        <div class="container mx-auto my-4 px-4 lg:px-20 flex flex-wrap justify-between">
            <!-- Form Section -->
            <div class="w-full md:w-2/3 lg:w-2/3 px-4 my-4">
                <div class="w-full py-14 px-6 md:px-12 rounded-2xl shadow-2xl">
                    <p class="font-bold">Get In Touch</p>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-8">
                            <input name="first_name"
                                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-100"
                                type="text" placeholder="First Name*" />
                            <input name="last_name"
                                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                                type="text" placeholder="Last Name*" />
                            <input name="email"
                                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                                type="email" placeholder="Email*" />
                            <input name="phone"
                                class="w-full bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"
                                type="number" placeholder="Phone*" />
                        </div>
                        <div class="my-4">
                            <textarea name="message" placeholder="Message*"
                                class="w-full h-32 bg-gray-100 text-gray-900 text-xs mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border border-gray-300"></textarea>
                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button type="submit"
                                class="uppercase text-xs font-bold tracking-wide bg-yellow-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Office Section -->
            <div class="w-full md:w-1/3 lg:w-1/3 px-4 py-12 rounded-2xl">
                <div class="flex flex-col text-gray-800">
                    <h2 class="font-bold text-xl my-4">Drop in our office</h2>
                    <p class="text-xs">We believe in building strong relationships with our clients, and your visit will
                        allow us to better understand your requirements and expectations. Our office is equipped with
                        state-of-the-art facilities to ensure a comfortable and productive meeting. We look forward to
                        welcoming you soon.”</p>
                    <div class="flex">
                        <div class="flex flex-col">
                            <p class="text-xs font-bold mt-4">Main Office</p>
                            <div class="flex items-center">
                                <i class='bx bxs-map text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">Victoria, Seychelles</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col text-xs">
                            <h3 class="text-xs font-bold">Email Us</h3>
                            <div class="flex items-center">
                                <i class='bx bxs-envelope text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">info@neptunecorporate.com</p>
                            </div>
                            <div class="flex items-center">
                                <i class='bx bxs-envelope text-yellow-600 text-lg'></i>
                                <p class="text-xs ml-4">sales@neptunecorporate.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<style scoped>
    .bg-image {
        background-image: url("images/hero-3.jpg");
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>