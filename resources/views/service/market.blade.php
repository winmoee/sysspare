<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-2xl font-semibold text-green-600">
                {{ __('messages.second_market') }}
                 {{-- Second-Hand Market --}}
            </h3>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                Categories
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.second_market_info') }}
            {{-- ရိတ်သိမ်းခြွေလှေ့စက်များနှင့် လေးဘီးထွန်စက်များ၊ လယ်ယာသုံးစက်ပစ္စည်း good second-hand ရောင်းဝယ်ချင်ကြသူ တောင်သူဦးကြီးများအတွက် အဆင်ပြေစေရန် အကျိုးအမြတ်မယူပဲ သတင်းအချက်အလက် မျှဝေပေးထားခြင်းသာဖြစ်ပါသည်။ --}}
            {{-- This is simply sharing information without any profit for the benefit of farmers who are interested in buying or selling good second-hand harvesters and four-wheel tractors, farm equipment. --}}
            </p>
        </div>
            <!-- Equipment Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <!-- Four Wheels Tractor Button -->
                <a href="{{ route('market.category', ['category' => 'tractor']) }}" class="group bg-white border border-gray-200 rounded-xl p-8 hover:shadow-lg transition-all duration-300 hover:border-green-300">
                    <div class="flex items-center space-x-6">
                        <div class="flex-shrink-0">
                            <img src="https://lh3.googleusercontent.com/d/17sTDaWNzLjch7-cxZ1CwSD9A-9fF3xJa" alt="Four Wheels Tractor" class="w-24 h-24 object-contain rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-green-600 transition-colors">
                                Four Wheels Tractor
                            </h3>
                            <p class="text-gray-600 text-base mt-2">
                                လေးဘီးထွန်စက်များ
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-green-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Combine Harvester Button -->
                <a href="{{ route('market.category', ['category' => 'harvester']) }}" class="group bg-white border border-gray-200 rounded-xl p-8 hover:shadow-lg transition-all duration-300 hover:border-green-300">
                    <div class="flex items-center space-x-6">
                        <div class="flex-shrink-0">
                            <img src="https://lh3.googleusercontent.com/d/1UnULJsV2LKG-XKh4YSbIS2ZpYxCv9sK5" alt="Combine Harvester" class="w-24 h-24 object-contain rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-green-600 transition-colors">
                                Combine Harvester
                            </h3>
                            <p class="text-gray-600 text-base mt-2">
                                ရိတ်သိမ်းခြွေလှေ့စက်များ
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-green-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

    </div>
    @include('layouts.footer')
</x-app-layout>

