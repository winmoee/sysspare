<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h2 class="text-2xl font-semibold text-green-600">
               {{ __('messages.contact') }}
            </h2>
        </div>
    </div>
 <!-- sale contacts... -->
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
                <!-- Contact Section -->

        <div id="sales" class="bg-white rounded-lg shadow-lg p-6" >
            <h4 class="text-xl font-semibold text-green-600 mb-4">
                {{ __('messages.sales') }}
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Contact 1 -->
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
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

                <!-- Add other contacts... -->
            </div>
        </div>


               <div id="service" class="bg-white rounded-lg shadow-lg p-6">
                <h4 class="text-xl font-semibold text-green-600 mb-4">
                    {{ __('messages.service') }}
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Contact 1 -->
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

                    <!-- Add other contacts... -->
                </div>
            </div>

        <div id="spare" class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-xl font-semibold text-green-600 mb-4">
                {{ __('messages.spare') }}
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Contact 1 -->
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

                <!-- Add other contacts... -->
            </div>
        </div>



        </div>






</x-app-layout>
