<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center mb-8">{{ __('messages.spare_shop_title') }}</h1>
                    
                    <div class="text-center mb-8">
                        <p class="text-lg text-gray-600">{{ __('messages.spare_shop_description') }}</p>
                    </div>

                    <!-- Spare Parts Shop Content -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Add your spare parts shop content here -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">{{ __('messages.ymr') }} Parts</h3>
                            <p class="text-gray-600">Genuine Yanmar spare parts for tractors and harvesters.</p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">{{ __('messages.ace') }} Parts</h3>
                            <p class="text-gray-600">Quality ACE spare parts for agricultural machinery.</p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">{{ __('messages.sfg') }} Parts</h3>
                            <p class="text-gray-600">Reliable Sifang spare parts and components.</p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mt-12 text-center">
                        <h2 class="text-2xl font-bold mb-4">{{ __('messages.contact') }}</h2>
                        <p class="text-gray-600">{{ __('messages.seinnyaungso_spareshop') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>