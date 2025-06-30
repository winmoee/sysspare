<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex items-center space-x-4 mb-4">
                <a href="/market" class="text-green-600 hover:text-green-800 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <h3 class="text-2xl font-semibold text-green-600">
                    {{ $data['title'] }}
                </h3>
            </div>
            <p class="text-gray-600">
                {{ $data['description'] }}
            </p>
            <p class="text-gray-600 mt-2">
                {{ $data['myanmar_description'] }}
            </p>
        </div>
    </div>

    <!-- Equipment Listings -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($data['items'] as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <!-- Equipment Image -->
                <div class="h-48 bg-gray-200">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                </div>

                <!-- Equipment Details -->
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $item['name'] }}</h4>

                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">စက်နာရီ:</span>
                            <span class="font-semibold text-green-600">{{ $item['engine_hours'] ?? $item['price'] }}</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">မြို့နယ်:</span>
                            <span class="text-gray-800">{{ $item['township'] ?? $item['location'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">လိပ်စာ:</span>
                            <span class="text-gray-800">{{ $item['address'] ?? $item['location'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">ဆက်သွယ်ရန်:</span>
                            <span class="text-gray-800">{{ $item['contact_person'] ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">မှတ်ချက်:</span>
                            <span class="text-gray-800">{{ $item['notes'] ?? $item['condition'] }}</span>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="flex space-x-2">
                        <a href="tel:{{ $item['contact'] }}" class="flex-1 bg-green-600 text-white text-center py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                            Call: {{ $item['contact'] }}
                        </a>
                        {{-- <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </button> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(empty($data['items']))
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2 2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No equipment available</h3>
            <p class="text-gray-600">Check back later for new listings in this category.</p>
        </div>
        @endif
    </div>
</x-app-layout>
