{{-- resources/views/services/serviceworkshop.blade.php --}}
<script>

<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-2xl font-semibold text-green-600">
                {{ __('messages.service_workshop_1') }}
                {{-- စက်ပြင်အလုပ်ရုံများ --}}
                {{-- Workshops --}}
            </h3>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_workshop_2') }}
                {{-- ရန်ကုန်စက်ပြင်အလုပ်ရုံ (မြစိမ်းရောင်စက်မှုဇုံ) --}}
                {{-- Yangon Workshop (Mya Sein Yaung Industrial Zone) --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_workshop_3') }}
            {{-- အမှတ်(C-9)၊မြသရဖီလမ်း၊မြစိမ်းရောင်စက်မှုဇုံ၊ဒဂုံဧရာအဝေး‌ပြေးဂိတ်အနီး၊လှိုင်သာယာမြို့နယ်၊ရန်ကုန်မြို့။ --}}
            {{-- No. (C-9), Mya Tharaphy Street, Mya Seinn Yaung Industrial Zone, Near Dagon Ayeyar Highway Gate, Hlaingthaya Township, Yangon --}}
        </p>
        <div class="carousel-container" data-carousel-id="yangon-carousel">
        <div class="carousel-slides">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/yangon_workshop_1.jpg" alt="Yangon Workshop 1" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/yangon_workshop_2.jpg" alt="Yangon Workshop 2" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/yangon_workshop_3.jpg" alt="Yangon Workshop 3" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/yangon_workshop_4.jpg" alt="Yangon Workshop 4" class="carousel-slide">
        </div>

        <button class="carousel-nav carousel-nav-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button class="carousel-nav carousel-nav-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="carousel-indicators"></div>
    </div>
        </div>
<!-- Contact Section -->
<div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-xl font-semibold text-green-600 mb-4">
                {{ __('messages.service_workshop_4') }}
                {{-- Contact  --}}
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Contact 1 -->
                                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.service_workshop_5') }}
                        {{-- Ma Aye Aye Kyu --}}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600">Yangon - 09798892680</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09798892680', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.service_workshop_11') }}
                                {{-- Copy Number --}}
                            </span>
                        </button>
                    </div>
                </div>

<!--
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">မချယ်ရီထား</h5>
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
                    <h5 class="font-medium text-gray-600">ကိုပြည့်ဖြိုးထွန်း</h5>
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
                </div> -->

                <!-- Add other contacts... -->
            </div>
        </div>
        <!-- Service 2 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_workshop_6') }}
            {{-- ပုသိမ်စက်ပြင်အလုပ်ရုံ (DIG စက်မှုဇုံ) --}}
            {{-- Pathein Workshop (DIG Industrial Zone) --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_workshop_7') }}
                {{-- DIG စက်မှုဇုံဝင်း၊ ကင်မလင်းကျွန်းရပ်ကွက်၊ ပုသိမ်မြို့။ --}}
            {{-- DIG Industrial Zone Compound, Kinmalin Kyun Ward, Pathein --}}
            </p>
            <div class="carousel-container" data-carousel-id="pathein-carousel">
        <div class="carousel-slides">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/pathein_workshop_1.jpg" alt="Pathein Workshop 1" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/pathein_workshop_2.jpg" alt="Pathein Workshop 2" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/pathein_workshop_3.jpg" alt="Pathein Workshop 3" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/pathein_workshop_4.jpg" alt="Pathein Workshop 4" class="carousel-slide">
        </div>

        <button class="carousel-nav carousel-nav-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button class="carousel-nav carousel-nav-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="carousel-indicators"></div>
    </div>

        </div>
        <!-- Contact Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="text-xl font-semibold text-green-600 mb-4">
                {{ __('messages.service_workshop_4') }}
                {{-- Contact --}}
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Contact 1 -->
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">
                        {{ __('messages.service_workshop_8') }}
                        {{-- Ma Nwe Nwe Htun --}}
                    </h5>
                    <br>
                    <p class="text-sm text-gray-600">Pathein - 09429000422</p>
                    <div class="mt-2">
                        <button onclick="copyPhoneNumber('09429000422', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                            <span class="copy-button-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                                </svg>
                                {{ __('messages.service_workshop_11') }}
                                {{-- Copy Number --}}
                            </span>
                        </button>
                    </div>
                </div>
<!--
                <div class="p-4 border rounded-lg">
                    <h5 class="font-medium text-gray-600">မချယ်ရီထား</h5>
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
                    <h5 class="font-medium text-gray-600">ကိုပြည့်ဖြိုးထွန်း</h5>
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
                </div> -->

                <!-- Add other contacts... -->
            </div>
        </div>
        <!-- Service 3 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_workshop_9') }}
                {{-- ကျွမ်းကျင်စက်ပြင်ဆရာများ --}}
                {{-- Experienced Technicians --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_workshop_10') }}
                {{-- စိမ်းရောင်စို၏ စက်ပြင်ဆရာများအကြောင်း --}}
                {{-- About SYS Technicians --}}
            </p>
            <div class="carousel-container" data-carousel-id="id-carousel">
        <div class="carousel-slides">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/1.webp" alt="1" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/2.webp" alt="2" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/3.webp" alt="3" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/4.webp" alt="4" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/service/0.webp" alt="0" class="carousel-slide">
        </div>

        <button class="carousel-nav carousel-nav-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button class="carousel-nav carousel-nav-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="carousel-indicators"></div>
    </div>
        </div>
    </div>
</x-app-layout>
