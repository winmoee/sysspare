<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h2 class="text-2xl font-semibold text-green-600">
                {{ __('messages.Award') }}
            {{-- Yanmar Service ၃ နှစ်ဆက်တိုက် ပထမဆု --}}
            {{-- Yanmar Service 3 Consecutive Years First Prize. --}}
            </h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_zone') }}
                {{-- ရန်ကုန်စက်ပြင်အလုပ်ရုံ (မြစိမ်းရောင်စက်မှုဇုံ) --}}
                {{-- Yangon Machinery Repair Workshop (Mya Seinn Yaung Industrial Zone). --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_zone_location') }}
            {{-- အမှတ်(C-9)၊မြသရဖီလမ်း၊မြစိမ်းရောင်စက်မှုဇုံ၊ဒဂုံဧရာအဝေး‌ပြေးဂိတ်အနီး၊လှိုင်သာယာမြို့နယ်၊ရန်ကုန်မြို့။ --}}
            {{-- No. (C-9), Mya Tharaphi Road, Myin Seinn Yaung Industrial Zone, near Dagon Ayeyar Express Gate, Hlaing Tharyar Township, Yangon City. --}}
        </p>
        <div class="carousel-container" data-carousel-id="yangon-carousel">
        <div class="carousel-slides">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/3_years_award_1.jpg" alt="1" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/3_years_award_2.jpg" alt="2" class="carousel-slide">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/3_years_award_3.jpg" alt="4" class="carousel-slide">
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

    <!-- Awards -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h6 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('messages.2020_award') }}
        {{-- 2020 Awards --}}
        </h6>
            <!-- Spare Section -->
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/excellent_award.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                               <p class="text-sm text-gray-600 mt-2"> {{ __('messages.exce_award') }} {{-- Excellent Award --}}</p>
                            </div>

                        </div>
                    </a>

                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/after_sale_service-award_1st_prize.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.sale_award') }}
                                </p>
                            </div>
                        </div>
                    </a>

                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/spare_2nd_prize.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.spare_award') }} </p>
                            </div>
                        </div>
                    </a>

                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/fy_2020.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.fy_award') }} </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <!-- Awards -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h6 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('messages.2021_award') }}

        </h6>
            <!-- Spare Section -->
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/after_sale_service-gold_prize.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2"> {{ __('messages.gold_award') }} </p>
                            </div>
                        </div>
                    </a>
                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/spare_parts-gold_prize.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.spare_gold_award') }} </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Awards -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h6 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('messages.2022_award') }}

        </h6>
            <!-- Spare Section -->
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/excellent_award_2022.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2"> {{ __('messages.22exce_award') }} </p>
                            </div>
                        </div>
                    </a>
                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/after_sale_service-award_1st_prize_2022.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.22sale_award') }} </p>
                            </div>
                        </div>
                    </a>
                    <a  class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/spare_parts-winner.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.22spare_award') }} </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>



    <!-- Awards -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h6 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('messages.2024_award') }}
        </h6>
            <!-- Spare Section -->
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    <a class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/fy2024_service_award_ceremony.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.24service_award') }}</p>
                            </div>
                        </div>
                    </a>
                    <a class="block">
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                            <!-- Image Section -->
                            <div class="relative aspect-[4/3] w-full">
                                    <img
                                        src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/award/fy2024_group_photo.jpg"
                                        class="w-full h-full object-cover rounded-t-lg"
                                    >
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-600 mt-2">{{ __('messages.24group_award') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


</x-app-layout>
