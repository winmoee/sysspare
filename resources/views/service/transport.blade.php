<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-2xl font-semibold text-green-600">
                {{ __('messages.outdoor_vehicle_service') }}
            {{-- ပြင်ပကားအငှား ဝန်ဆောင်မှု --}}
            {{-- Outdoor Vehicle Rental Service. --}}

            </h3>
            <p class="text-gray-600 mt-4 mb-4 leading-8">
                {{ __('messages.outdoor_vehicle_info') }}
            {{-- ရိတ်သိမ်းခြွေလှ့စက်၊ လေးဘီးထွန်စက်များ သယ်ယူပို့ဆောင်ရာတွင် တောင်သူများ အဆင်ပြေစေရန်အတွက် အကျိုးအမြတ်မယူပဲ သတင်းအချက်အလက် မျှဝေထားပေးခြင်းသာဖြစ်ပါသည်။ --}}
            {{-- The sharing of information without any profit is solely for the convenience of farmers in the transportation of harvesters, four-wheel tractors. --}}
        </p>
        </div>
    </div>

    <!-- Transport Service Buttons -->
    <div class="bg-gradient-to-br from-gray-50 to-gray-100 py-12">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Button 1: ကုန်တင် -->
                <a href="{{ route('transport.driver', 1) }}" class="block group transform hover:scale-105 transition-all duration-300">
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 text-center border-l-4 border-green-500 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-green-50 rounded-full -mr-10 -mt-10 opacity-50"></div>
                        <div class="flex justify-center mb-6">
                            <div class="w-24 h-24 bg-green-50 rounded-full flex items-center justify-center shadow-inner">
                                <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FuqBASiafntLxxzNmnv5U.jpg" alt="ကုန်တင်" class="w-16 h-16 object-cover rounded-lg">
                            </div>
                        </div>

                        <h5 class="text-lg font-semibold text-green-600 mb-2">ကိုဇော်</h5>
                        <p class="text-sm text-gray-500 mb-4">ရန်ကုန် (အထိုင်)</p>
                        <div class="flex items-center justify-center text-green-500 group-hover:text-green-700 font-medium">
                            <span class="mr-2">ကြည့်ရှုရန်</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Button 2: ကုန်သင် -->
                <a href="{{ route('transport.driver', 2) }}" class="block group transform hover:scale-105 transition-all duration-300">
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 text-center border-l-4 border-green-500 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-green-50 rounded-full -mr-10 -mt-10 opacity-50"></div>
                        <div class="flex justify-center mb-6">
                            <div class="w-24 h-24 bg-green-50 rounded-full flex items-center justify-center shadow-inner">
                                <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_1275,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2Ff9BnHZRwyCIr2Yd9xVs7.jpg" alt="ကုန်သင်" class="w-16 h-16 object-cover rounded-lg">
                            </div>
                        </div>

                        <h5 class="text-lg font-semibold text-green-600 mb-2">ကိုဇော်လင်း</h5>
                        <p class="text-sm text-gray-500 mb-4">ရန်ကုန် (အထိုင်)</p>
                        <div class="flex items-center justify-center text-green-500 group-hover:text-green-700 font-medium">
                            <span class="mr-2">ကြည့်ရှုရန်</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Button 3: ကုန်စုစု -->
                <a href="{{ route('transport.driver', 3) }}" class="block group transform hover:scale-105 transition-all duration-300">
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 text-center border-l-4 border-green-500 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-green-50 rounded-full -mr-10 -mt-10 opacity-50"></div>
                        <div class="flex justify-center mb-6">
                            <div class="w-24 h-24 bg-green-50 rounded-full flex items-center justify-center shadow-inner">
                                <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FuqBASiafntLxxzNmnv5U.jpg" alt="ကုန်စုစု" class="w-16 h-16 object-cover rounded-lg">
                            </div>
                        </div>

                        <h5 class="text-lg font-semibold text-green-600 mb-2">ကိုစောဂေးဒို</h5>
                        <p class="text-sm text-gray-500 mb-4">ကန်ကြီးထောင့်မြို့နယ် / ရန်ကုန် (အထိုင်)</p>
                        <div class="flex items-center justify-center text-green-500 group-hover:text-green-700 font-medium">
                            <span class="mr-2">ကြည့်ရှုရန်</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Button 4: ကုန်ပိုင်းကုန် -->
                <a href="{{ route('transport.driver', 4) }}" class="block group transform hover:scale-105 transition-all duration-300">
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 text-center border-l-4 border-green-500 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-green-50 rounded-full -mr-10 -mt-10 opacity-50"></div>
                        <div class="flex justify-center mb-6">
                            <div class="w-24 h-24 bg-green-50 rounded-full flex items-center justify-center shadow-inner">
                                <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FBIbQUPgbKyWxKSAptq5Z.jpg" alt="ကုန်ပိုင်းကုန်" class="w-16 h-16 object-cover rounded-lg">
                            </div>
                        </div>

                        <h5 class="text-lg font-semibold text-green-600 mb-2">ကိုမြင့်ဇော်</h5>
                        <p class="text-sm text-gray-500 mb-4">ကန်ကြီးထောင့်မြို့နယ် (အထိုင်)</p>
                        <div class="flex items-center justify-center text-green-500 group-hover:text-green-700 font-medium">
                            <span class="mr-2">ကြည့်ရှုရန်</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>

<!-- Add this JavaScript at the bottom of your file -->
<script>
function showDriverDetails(driverName, location, phone) {
    alert(`ယာဉ်မောင်းအမည်: ${driverName}\nတည်နေရာ: ${location}\nဖုန်းနံပါတ်: ${phone}`);
}
</script>
