<x-app-layout>
    <div class="bg-white">
        <div class="max-w-4xl mx-auto p-6 lg:p-8">
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('transport') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    ပြန်သွားရန်
                </a>
            </div>

            <!-- Car Photo -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ $transport['image'] }}" alt="{{ $transport['name'] }}" class="w-full h-96 object-cover">
                </div>
            </div>

            <!-- Transport Details -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $transport['name'] }}</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="font-semibold text-gray-700 w-24">တည်နေရာ:</span>
                            <span class="text-gray-600">{{ $transport['location'] }}</span>
                        </div>

                        <div class="flex items-center">
                            <span class="font-semibold text-gray-700 w-24">ဖုန်း:</span>
                            <span class="text-gray-600">{{ $transport['phone'] }}</span>
                        </div>

                        @if(isset($transport['vehicles']))
                        <div class="flex items-center">
                            <span class="font-semibold text-gray-700 w-24">ယာဉ်အမျိုးအစား:</span>
                            <span class="text-gray-600">{{ $transport['vehicles'] }}</span>
                        </div>
                        @endif

                        {{-- <div class="flex items-center">
                            <span class="font-semibold text-gray-700 w-24"></span>
                            <span class="text-gray-600">၆ဘီးကား ၁၄ ပေ (၁) စီး</span>
                        </div> --}}
                    </div>

                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">ဖော်ပြချက်:</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $transport['description'] }}</p>

                        <!-- Contact Button -->
                        <div class="mt-6">
                            <a href="tel:{{ $transport['phone'] }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                ဆက်သွယ်ရန်
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
