<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h2 class="text-2xl font-semibold text-green-600">
               {{ __('messages.contact') }}
            </h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
                <!-- Contact Section -->
                <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-xl font-semibold text-green-600 mb-4">
                အရောင်း
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Contact 1 -->
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.contact_description_1') }}
                        {{-- မခင်မျိုးသန်း
                        Ma Khin Myo Than --}}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600">Hotline - 09999999999</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09999999999', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                Copy Number
                            </span>
                        </button>
                    </div>
                </div>

                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.contact_description_2') }}
                        {{-- မချယ်ရီထား
                        Ma Cherry Htar --}}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600">Complaint - 09425833040</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09425833040', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                Copy Number
                            </span>
                        </button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.contact_description_3') }}
                        {{-- ကိုပြည့်ဖြိုးထွန်း
                        Ko Pyae Phyo Htun --}}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600">Supervisor - 09798892685</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798892685', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                Copy Number
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Add other contacts... -->
            </div>
        </div>
    </div>


</div>


</x-app-layout>
