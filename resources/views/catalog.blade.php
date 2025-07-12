<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center mb-8">{{ __('messages.catalog') }}</h1>

                    <div class="text-center mb-8">
                        <p class="text-lg text-gray-600">Browse our complete catalog by brand - Choose from our premium agricultural machinery brands.</p>
                    </div>

                    <!-- Brand Catalog Content -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- Yanmar Brand -->
                        <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg border-2 border-red-200 hover:shadow-lg transition-shadow">
                            <div class="text-center">
                                <!-- Add brand logo/image -->
                                <div class="mb-4">
                                    <img src="{{ asset('images/brands/yanmar-logo.png') }}" alt="Yanmar Logo" class="mx-auto h-16 w-auto object-contain" onerror="this.style.display='none'">
                                </div>
                                <h3 class="text-2xl font-bold mb-4 text-red-700">{{ __('messages.ymr') }}</h3>
                                <p class="text-gray-700 mb-4">Premium Japanese agricultural machinery and engines. Known for reliability, efficiency, and innovative technology.</p>
                                <div class="space-y-1 text-sm text-gray-600 mb-4">
                                    <p>• Tractors & Walking Tractors</p>
                                    <p>• Diesel Engines</p>
                                    <p>• Combine Harvesters</p>
                                    <p>• Genuine Spare Parts</p>
                                </div>
                                <a href="{{ route('catalog.yanmar') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition-colors font-semibold">View Yanmar Catalog</a>
                            </div>
                        </div>

                        <!-- ACE Brand -->
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border-2 border-blue-200 hover:shadow-lg transition-shadow">
                            <div class="text-center">
                                <!-- Add brand logo/image -->
                                <div class="mb-4">
                                    <img src="{{ asset('images/brands/ace-logo.png') }}" alt="ACE Logo" class="mx-auto h-16 w-auto object-contain" onerror="this.style.display='none'">
                                </div>
                                <h3 class="text-2xl font-bold mb-4 text-blue-700">{{ __('messages.ace') }}</h3>
                                <p class="text-gray-700 mb-4">Quality agricultural implements and machinery. Trusted for durability and performance in farming operations.</p>
                                <div class="space-y-1 text-sm text-gray-600 mb-4">
                                    <p>• Agricultural Implements</p>
                                    <p>• Farm Equipment</p>
                                    <p>• Attachments</p>
                                    <p>• Replacement Parts</p>
                                </div>
                                <a href="{{ route('catalog.ace') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">View ACE Catalog</a>
                            </div>
                        </div>

                        {{-- <!-- Sifang Brand -->
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-lg border-2 border-orange-200 hover:shadow-lg transition-shadow">
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-4 text-orange-700">{{ __('messages.sfg') }}</h3>
                                <p class="text-gray-700 mb-6">Reliable and cost-effective agricultural machinery solutions. Perfect for various farming applications.</p>
                                <div class="space-y-2 text-sm text-gray-600 mb-6">
                                    <p>• Walking Tractors</p>
                                    <p>• Small Tractors</p>
                                    <p>• Farm Tools</p>
                                    <p>• Maintenance Parts</p>
                                </div>
                                <a href="{{ route('catalog.sifang') }}" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition-colors font-semibold">View Sifang Catalog</a>
                            </div>
                        </div> --}}

                        <!-- Other Brands -->
                        {{-- <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg border-2 border-green-200 hover:shadow-lg transition-shadow">
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-4 text-green-700">Other Brands</h3>
                                <p class="text-gray-700 mb-6">Explore our collection of other quality agricultural machinery brands and specialized equipment.</p>
                                <div class="space-y-2 text-sm text-gray-600 mb-6">
                                    <p>• Various Tractor Brands</p>
                                    <p>• Specialized Equipment</p>
                                    <p>• Import Machinery</p>
                                    <p>• Custom Solutions</p>
                                </div>
                                <a href="{{ route('catalog.otherbrands') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors font-semibold">View Other Brands</a>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Contact Information -->
                    <div class="mt-8 text-center bg-gray-50 p-6 rounded-lg">
                        <h2 class="text-2xl font-bold mb-4">{{ __('messages.contact') }}</h2>
                        <p class="text-gray-600 mb-4">{{ __('messages.seinnyaungso_spareshop') }}</p>
                        <p class="text-sm text-gray-500">Need help choosing the right brand? Contact us for expert advice and recommendations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')
