<x-app-layout>
    <!-- Header Section with Group Photo -->
    <div class="bg-white">
        <div class="max-w-full mx-auto">
            <div class="relative h-72 md:h-96 lg:h-[500px] overflow-hidden">
                <img src="{{ asset('https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/sys_family.jpeg') }}" alt="Team Group Photo" class="w-full h-full object-cover object-center">
                <!-- Removed: <div class="absolute inset-0 bg-black bg-opacity-40"></div> -->
                <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/30 to-transparent">
                    <div class="max-w-7xl mx-auto">
                        <div class="flex items-center gap-3 mb-3">
                            <a href="/" class="text-white hover:text-green-400 transition-colors font-semibold text-xl drop-shadow-lg">Home</a>
                            <span class="text-white text-xl drop-shadow-lg">»</span>
                            <span class="text-white text-xl drop-shadow-lg">{{ __('messages.contactus') }}</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">
               {{ __('messages.contact') }}
            </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Buttons Section -->
            <div class="divide-y divide-gray-200 mb-12">
                <!-- Sales Section -->
                <div class="py-4" id="sales">
                    <button onclick="toggleSection('sales')" class="w-full py-4 px-6 flex items-center text-left text-green-600 hover:text-red-600 transition-all duration-300 group bg-white hover:bg-gray-50 rounded-lg shadow-sm hover:shadow-md">
                        <svg id="sales-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300 group-hover:translate-x-2 group-hover:stroke-red-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <div class="flex items-center">
                            <div class="p-2 bg-green-100 rounded-lg mr-4 group-hover:bg-red-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <span id="sales-text" class="text-2xl font-bold group-hover:text-red-600">{{ __('messages.salesphone') }}</span>
                        </div>
                    </button>
                    <div id="sales-content" class="hidden pl-7 pt-4 pb-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Contact Cards -->
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.sales_contact_1') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.thidar') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('095067356', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002 2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.sales_contact_2') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.thawzin') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798892681', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.sales_contact_3') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.nyeinchan') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09254167332', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.sales_contact_4') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.kyawsoe') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09779565039', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.sales_contact_5') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.zinmon') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09443121444', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>
                        </div>
            </div>
        </div>

                <!-- Service Section -->
                <div class="py-4" id="service">
                    <button onclick="toggleSection('service')" class="w-full py-4 px-6 flex items-center text-left text-green-600 hover:text-red-600 transition-all duration-300 group bg-white hover:bg-gray-50 rounded-lg shadow-sm hover:shadow-md">
                        <svg id="service-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300 group-hover:translate-x-2 group-hover:stroke-red-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <div class="flex items-center">
                            <div class="p-2 bg-green-100 rounded-lg mr-4 group-hover:bg-red-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <span id="service-text" class="text-2xl font-bold group-hover:text-red-600">{{ __('messages.servicephone') }}</span>
                        </div>
                    </button>
                    <div id="service-content" class="hidden pl-7 pt-4 pb-2">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="p-4 border rounded-lg">
                        <h5 class="font-medium text-gray-600">
                            {{ __('messages.service_contact_1') }}
                        </h5>
                        <br>
                        <p class="text-sm text-gray-600"> {{ __('messages.cherry') }}</p>
                        <div class="mt-2">
                            <button onclick="copyPhoneNumber('09425833040', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                                <span class="copy-button-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                    </svg>
                                    {{ __('messages.copy_number') }}
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="p-4 border rounded-lg">
                        <h5 class="font-medium text-gray-600">
                            {{ __('messages.service_contact_2') }}
                        </h5>
                        <br>
                        <p class="text-sm text-gray-600"> {{ __('messages.khinmyo') }}</p>
                        <div class="mt-2">
                            <button onclick="copyPhoneNumber('09798892667', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                                <span class="copy-button-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                    </svg>
                                    {{ __('messages.copy_number') }}
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="p-4 border rounded-lg">
                        <h5 class="font-medium text-gray-600">
                            {{ __('messages.service_contact_3') }}
                        </h5>
                        <br>
                        <p class="text-sm text-gray-600"> {{ __('messages.thitthit') }}</p>
                        <div class="mt-2">
                            <button onclick="copyPhoneNumber('09444742030', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                                <span class="copy-button-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                    </svg>
                                    {{ __('messages.copy_number') }}
                                </span>
                            </button>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>

                <!-- Spare Parts Section -->
                <div class="py-4" id="spare">
                    <button onclick="toggleSection('spare')" class="w-full py-4 px-6 flex items-center text-left text-green-600 hover:text-red-600 transition-all duration-300 group bg-white hover:bg-gray-50 rounded-lg shadow-sm hover:shadow-md">
                        <svg id="spare-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300 group-hover:translate-x-2 group-hover:stroke-red-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <div class="flex items-center">
                            <div class="p-2 bg-green-100 rounded-lg mr-4 group-hover:bg-red-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <span id="spare-text" class="text-2xl font-bold group-hover:text-red-600">{{ __('messages.sparephone') }}</span>
            </div>
                    </button>
                    <div id="spare-content" class="hidden pl-7 pt-4 pb-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.spare_contact_1') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.eiei') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798892678', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.spare_contact_2') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.thinthin') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798890815', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.spare_contact_3') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.yuyu') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798890818', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.spare_contact_4') }}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600"> {{ __('messages.maythandar') }}</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09795540598', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.copy_number') }}
                            </span>
                        </button>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="flex flex-col md:flex-row gap-8 py-8">
                <!-- Contact Form -->
                <div class="flex-1">
                    <div class="px-2">
                        @if (session('success'))
                            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-8 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mb-8 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="bg-gradient-to-br from-white to-gray-50 border border-gray-200 rounded-xl shadow-2xl p-8">
                            <div class="flex items-center mb-8">
                                <div class="p-3 bg-gray-100 rounded-full mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold text-black">{{ __('messages.reachus') }}</h2>
                            </div>

                            <form id="contactForm" onsubmit="sendEmail(event)" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="relative">
                                        <label for="name" class="block text-black font-semibold mb-2 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            {{ __('messages.roname') }}
                                        </label>
                                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-black focus:ring-2 focus:ring-gray-200 transition-all duration-300" placeholder="Your name" required>
                                    </div>

                                    <div class="relative">
                                        <label for="email" class="block text-black font-semibold mb-2 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            {{ __('messages.roemail') }}
                                        </label>
                                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-black focus:ring-2 focus:ring-gray-200 transition-all duration-300" placeholder="your.email@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                                    </div>
                                </div>

                                <div class="relative">
                                    <label for="phone" class="block text-black font-semibold mb-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        {{ __('messages.rophone') }}
                                    </label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-black focus:ring-2 focus:ring-gray-200 transition-all duration-300" placeholder="Your phone number" required pattern="[0-9]+" title="Please enter numbers only" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>

                                <div class="relative">
                                    <label for="subject" class="block text-black font-semibold mb-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        {{ __('messages.rosub') }}
                                    </label>
                                    <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-black focus:ring-2 focus:ring-gray-200 transition-all duration-300" placeholder="What's this about?" required>
                                </div>

                                <div class="relative">
                                    <label for="message" class="block text-black font-semibold mb-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                        </svg>
                                        {{ __('messages.romessage') }}
                                    </label>
                                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-black focus:ring-2 focus:ring-gray-200 transition-all duration-300" placeholder="Type your message here..." required></textarea>
                                </div>

                                <div class="flex justify-end mt-6">
                                    <button type="submit" class="px-8 py-4 bg-black text-white font-bold rounded-lg hover:bg-gray-800 transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                                        {{ __('messages.rosend') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Regions List -->
                <div class="w-full md:w-1/3 p-8">
                    <h3 class="text-2xl font-bold text-black mb-6">{{ __('messages.branch') }}</span></h3>
                    <div class="space-y-4 divide-y divide-gray-200">
                        <!-- YANGON -->
                        <div class="pt-4">
                            <button onclick="toggleBranch('yangon')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch1') }}
                            </button>
                            <div id="yangon" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch1add') }}</p>
                                <p class="text-gray-600">Ph: (09) 443209947, (09) 795540591 </p>
                            </div>
                        </div>

                        <!-- MANDALAY -->
                        <div class="pt-4">
                            <button onclick="toggleBranch('showroom')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch2') }}
                            </button>
                            <div id="showroom" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch2add') }}</p>
                                <p class="text-gray-600">Ph: (09) 443121222, (09) 443121333, (09) 443121444</p>
                            </div>
                        </div>

                        <!-- SHAN (Branch 3) -->
                        <div class="pt-4">
                            <button onclick="toggleBranch('spare-branch')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch3') }}
                            </button>
                            <div id="spare-branch" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch3add') }}</p>
                                <p class="text-gray-600">Ph:  (09) 798890818, (09) 798890819</p>
                            </div>
                        </div>

                        <!-- NAYPYITAW (Branch 4) -->
                        <div class="pt-4">
                            <button onclick="toggleBranch('service-branch')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch4') }}
                            </button>
                            <div id="service-branch" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch4add') }}</p>
                                <p class="text-gray-600">Ph: (09) 254334384, (09) 798892680</p>
                            </div>
                        </div>

                        <!-- MON -->
                        <div class="pt-4">
                            <button onclick="toggleBranch('pathein')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch5') }}
                            </button>
                            <div id="pathein" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch5add') }}</p>
                                <p class="text-gray-600">Ph: (09) 429000422, (09) 798892675, (09) 5199759</p>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button onclick="toggleBranch('patheinservice')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch6') }}
                            </button>
                            <div id="patheinservice" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch6add') }}</p>
                                <p class="text-gray-600">Ph: (09) 429000422, (09) 798892675, (09) 5199759</p>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button onclick="toggleBranch('hinthada')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch7') }}
                            </button>
                            <div id="hinthada" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch7add') }}</p>
                                <p class="text-gray-600">Ph: (09) 455338282, (09) 784636426</p>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button onclick="toggleBranch('shwebo')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch8') }}
                            </button>
                            <div id="shwebo" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch8add') }}</p>
                                <p class="text-gray-600">Ph: (09) 5038903, (09) 763856556</p>
                            </div>
                        </div>

                        <!-- <div class="pt-4">
                            <button onclick="toggleBranch('taunggyi')" class="w-full text-left flex items-center text-lg text-black hover:text-red-600 font-semibold transition-colors duration-300">
                                <span class="mr-2">►</span>
                                {{ __('messages.branch9') }}
                            </button>
                            <div id="taunggyi" class="hidden mt-2 pl-6">
                                <p class="text-gray-700 mb-2">{{ __('messages.branch8add') }}</p>
                                <p class="text-gray-600">Ph: (09) 798892668, (09) 798892669</p>
                            </div>
                        </div> -->

                        <!-- MAGWAY -->

                        <!-- TANINTHARYI -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Map Location Section -->
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
            <div class="text-center mb-8">

                <h2 class="text-3xl font-bold text-green-600">{{ __('messages.location') }}</h2>
                <p class="mt-2 text-gray-600">Find us easily with Google Maps</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1382.619221703863!2d96.0429924590459!3d16.895823714531762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1be6af85c0623%3A0x766e83a1d48bfb50!2sSeinn%20Yaung%20So%20Co.%2CLtd%20(Showroom)%20zone-5!5e1!3m2!1sen!2ssg!4v1751380554479!5m2!1sen!2ssg"
                    width="1200"
                    height="550"
                    style="border:0;"
                     allowfullscreen=""
                      loading="lazy"
                       referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-green-900 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <p class="text-lg font-semibold animate-pulse">
                   © Copyright 2025 by Seinn Yaung So Manufacturing Co.,Ltd.
                </p>
                <div class="mt-4">
                    <div class="h-0.5 bg-gradient-to-r from-transparent via-white to-transparent animate-[runline_3s_linear_infinite]"></div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        @keyframes runline {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
    </style>

    <script>
        function toggleSection(sectionId) {
            const content = document.getElementById(`${sectionId}-content`);
            const arrow = document.getElementById(`${sectionId}-arrow`);
            const text = document.getElementById(`${sectionId}-text`);

            // Toggle content visibility
            content.classList.toggle('hidden');

            // Rotate arrow and change color
            if (content.classList.contains('hidden')) {
                arrow.classList.remove('rotate-90');
                text.classList.remove('text-red-600');
                text.classList.add('text-green-600');
                arrow.classList.remove('stroke-red-600');
                arrow.classList.add('stroke-green-600');
            } else {
                arrow.classList.add('rotate-90');
                text.classList.remove('text-green-600');
                text.classList.add('text-red-600');
                arrow.classList.remove('stroke-green-600');
                arrow.classList.add('stroke-red-600');
            }
        }

        function copyPhoneNumber(number, button) {
            navigator.clipboard.writeText(number).then(() => {
                const originalText = button.querySelector('.copy-button-text').innerHTML;
                button.querySelector('.copy-button-text').innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Copied!
                `;
                setTimeout(() => {
                    button.querySelector('.copy-button-text').innerHTML = originalText;
                }, 2000);
            });
        }

        function sendEmail(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            const emailSubject = `Contact Form: ${subject}`;
            const body = `
Name: ${name}
Email: ${email}
Phone: ${phone}

Message:
${message}
            `;

            const recipients = [
                'nyunthtay@seinnyaungso.com',
                'Kyawwin@seinnyaungso.com',
                'pyaephyohtoon@seinnyaungso.com',
                'hninhninthidaaung@seinnyaungso.com'
            ].join(',');

            window.location.href = `mailto:${recipients}?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(body)}`;
        }

        function toggleBranch(id) {
            const content = document.getElementById(id);
            const allContents = document.querySelectorAll('[id^="yangon"], [id^="showroom"], [id^="spare-branch"], [id^="service-branch"], [id^="pathein"],[id^="patheinservice"], [id^="hinthada"], [id^="shwebo"], [id^="taunggyi"]');
            const allButtons = document.querySelectorAll('button[onclick^="toggleBranch"]');

            // Hide all other contents
            allContents.forEach(item => {
                if (item.id !== id) {
                    item.classList.add('hidden');
                }
            });

            // Reset all arrows
            allButtons.forEach(button => {
                const arrow = button.querySelector('span');
                arrow.textContent = '►';
            });

            // Toggle current content
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                const currentButton = document.querySelector(`button[onclick="toggleBranch('${id}')"]`);
                const arrow = currentButton.querySelector('span');
                arrow.textContent = '▼';
            } else {
                content.classList.add('hidden');
                const currentButton = document.querySelector(`button[onclick="toggleBranch('${id}')"]`);
                const arrow = currentButton.querySelector('span');
                arrow.textContent = '►';
            }
        }
    </script>
</x-app-layout>
