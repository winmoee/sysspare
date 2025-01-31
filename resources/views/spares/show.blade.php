<!-- resources/views/spares/show.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="bg-white shadow-sm rounded-lg">
            <div class="p-6">
                <!-- Back Button -->
                <div class="mb-6">
                    <a href="{{ route('spares.index') }}" class="text-gray-600 hover:text-gray-900">
                        ← Back to Spare Parts
                    </a>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Left Column - Image -->
                    <div class="md:w-1/3">
                        @if($spare->photo)
                            <img src="{{ $spare->photo }}" class="w-full rounded-lg object-cover" alt="{{ $spare->english_name }}">
                        @else
                            <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Right Column - Details -->
                    <div class="md:w-2/3">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Basic Information -->
                            <div class="space-y-4">
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-900">{{ $spare->english_name }}</h2>
                                    <p class="text-lg text-gray-600">{{ $spare->myanmar_name }}</p>
                                </div>
                                
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Part Number:</span>
                                    <p class="text-gray-900">{{ $spare->part_number }}</p>
                                </div>

                                <div>
                                    <span class="text-sm font-medium text-gray-500">Category:</span>
                                    <p class="text-gray-900">{{ $spare->category }}</p>
                                </div>

                                <div>
                                    <span class="text-sm font-medium text-gray-500">Price:</span>
                                    <p class="text-gray-900">{{ number_format($spare->price) }} MMK</p>
                                </div>
                            </div>

                            <!-- Additional Details -->
                            <div class="space-y-4">
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Stock Quantity:</span>
                                    <p class="text-gray-900">{{ $spare->stock_quantity }}</p>
                                </div>

                                <div>
                                    <span class="text-sm font-medium text-gray-500">Movement Level:</span>
                                    <p class="text-gray-900">{{ $spare->movement_level }}</p>
                                </div>

                                <div>
                                    <span class="text-sm font-medium text-gray-500">Category Type:</span>
                                    <p class="text-gray-900">{{ $spare->category_type }}</p>
                                </div>

                                <div>
                                    <span class="text-sm font-medium text-gray-500">Price Range:</span>
                                    <p class="text-gray-900">{{ $spare->price_range }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        @if($spare->message)
                            <div class="mt-8">
                                <h3 class="text-lg font-medium text-gray-900">Notes</h3>
                                <p class="mt-2 text-gray-600">{{ $spare->message }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>