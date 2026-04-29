<div class="min-w-screen min-h-screen flex px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="w-full py-10 px-5 md:px-10">
                <div class="text-left mb-10">
                    <h2 class="font-bold text-lg mb-2 text-gray-900">Request a free consultation</h2>
                    <p class="text-xs">Kindly fill out the form, and one of our experts will be in
                        touch with you within the next 24 hours.</p>
                </div>
                <form action="{{ route('contact.request') }}" method="POST">
                    @csrf
                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-2">
                            <label for="first_name" class="text-xs font-semibold px-1">First
                                Name</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="text" id="first_name" name="first_name"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                            </div>
                        </div>
                        <div class="w-1/2 px-3 mb-2">
                            <label for="last_name" class="text-xs font-semibold px-1">Last
                                Name</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="text" id="last_name" name="last_name"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-2">
                            <label for="email" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="email" id="email" name="email"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-2">
                            <label for="email" class="text-xs font-semibold px-1">Phone Number</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="text" id="phone" name="phone"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="message" class="text-xs font-semibold px-1">Message</label>
                            <div class="flex">
                                <div
                                    class="w-10 h-20 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                </div>
                                <textarea id="message" name="message"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button type="submit"
                                class="block w-full max-w-xs mx-auto bg-purple-800 text-white rounded-lg px-2 py-1 font-semibold">Send
                                Request</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
