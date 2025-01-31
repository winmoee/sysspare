<!-- resources/views/spares/show.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="bg-white shadow-sm rounded-lg">
            <div class="p-6">
                <!-- Back Button and Action Buttons -->
                <div class="mb-6 flex justify-between items-center">
                    <a href="{{ route('spares.index') }}" class="text-gray-600 hover:text-gray-900">
                        ← Back to Spare Parts
                    </a>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-4">
                        @can('update', $spare)
                            <a href="{{ route('spares.edit', $spare) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                        @endcan

                        @can('delete', $spare)
                            <form action="{{ route('spares.destroy', $spare) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this spare part?')"
                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Left Column - Image and Buy Now -->
                    <div class="md:w-1/3 space-y-4">
                        <!-- Spare Part Image -->
                        @if($spare->photo)
                            <img src="{{ $spare->photo }}" class="w-full rounded-lg object-cover" alt="{{ $spare->english_name }}">
                        @else
                            <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif

                        <!-- In views/spares/show.blade.php -->
                        <form action="{{ route('wave.checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="spare_name" value="{{ $spare->name }}">
                            <input type="hidden" name="spare_price" value="{{ $spare->price }}">
                            
                            <!-- Wave Money Payment Button -->
                            <div class="flex justify-center cursor-pointer hover:opacity-90 transition-opacity">
                                <button type="submit" class="border-0 bg-transparent p-0">
                                    <img src="https://partners.wavemoney.com.mm/images/paywithwave.svg" 
                                        alt="Pay with Wave Money"
                                        class="h-auto w-full max-w-[200px]">
                                </button>
                            </div>
                        </form>
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