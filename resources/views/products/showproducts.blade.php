<!-- resources/views/products/showbrands.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="bg-white shadow-sm rounded-lg">
            <div class="p-6">
                <!-- Back Button and Action Buttons -->
                <div class="mb-6 flex justify-between items-center">
                    @if($product->category === '4 Wheels Tractor')
                        <a href="{{ route('products.tractor') }}" class="text-gray-600 hover:text-gray-900">
                            ← Back to 4 Wheels Tractors
                        </a>
                    @elseif($product->category === 'Walking Tractor')
                        <a href="{{ route('products.walkingtractor') }}" class="text-gray-600 hover:text-gray-900">
                            ← Back to Walking Tractors
                        </a>
                    @elseif($product->category === 'Combine Harvester')
                        <a href="{{ route('products.combineharvester') }}" class="text-gray-600 hover:text-gray-900">
                            ← Back to Combine Harvester
                        </a>
                    @elseif($product->category === 'Diesel Engine')
                        <a href="{{ route('products.dieselengine') }}" class="text-gray-600 hover:text-gray-900">
                            ← Back to Diesel Engine
                        </a>
                    @elseif($product->category === 'Implements')
                        <a href="{{ route('products.implements') }}" class="text-gray-600 hover:text-gray-900">
                            ← Back to Implements
                        </a>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-4">
                        @can('update', $product)
                            <a href="{{ route('products.edit', $product) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                        @endcan

                        @can('delete', $product)
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this product part?')"
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

                <div class="flex flex-col lg:flex-row max-w-7xl mx-auto">
                    <!-- Left Column - Image -->
                    <div class="lg:w-1/2 p-6">
                        @if($product->photo)
                            <div class="relative group">
                                <div class="overflow-hidden rounded-2xl bg-gray-50">
                                    <img src="{{ $product->photo }}" 
                                         class="w-full h-full object-contain transform transition-transform duration-500 group-hover:scale-105" 
                                         alt="{{ $product->english_name }}">
                                </div>
                            </div>
                        @else
                            <div class="w-full aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Right Column - Details -->
                    <div class="lg:w-1/2 p-6 lg:pl-12">
                        <div class="space-y-8">
                            <!-- Product Title -->
                            <div class="space-y-2">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                                    {{ $product->english_name }}
                                </h1>
                                <h2 class="text-2xl text-gray-500">
                                    {{ $product->myanmar_name }}
                                </h2>
                            </div>

                            <!-- Product Details -->
                            <div class="space-y-6 border-t border-b border-gray-100 py-8">
                                <div class="grid grid-cols-2 gap-x-6 gap-y-4">
                                    <div>
                                        <dt class="text-sm text-gray-500">Category</dt>
                                        <dd class="mt-1 text-base font-medium text-gray-900">{{ $product->category }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm text-gray-500">Brand</dt>
                                        <dd class="mt-1 text-base font-medium text-gray-900">{{ $product->category_type }}</dd>
                                    </div>
                                    @if($product->part_number)
                                    <!-- <div class="col-span-2">
                                        <dt class="text-sm text-gray-500">Part Number</dt>
                                        <dd class="mt-1 text-base font-medium text-gray-900">{{ $product->part_number }}</dd>
                                    </div> -->
                                    @endif
                                </div>
                            </div>

                            <!-- Specifications -->
                            <div class="grid grid-cols-2 gap-6">
                                <!-- <div class="flex flex-col">
                                    <dt class="text-sm text-gray-500">Horse Power</dt>
                                    <dd class="mt-1">
                                        <span class="text-3xl font-bold text-gray-900">57.6</span>
                                        <span class="text-xl text-gray-500 ml-1">PS</span>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="text-sm text-gray-500">Weight</dt>
                                    <dd class="mt-1">
                                        <span class="text-3xl font-bold text-gray-900">1850</span>
                                        <span class="text-xl text-gray-500 ml-1">kg</span>
                                    </dd>
                                </div> -->
                            </div>

                            <!-- Notes Section -->
                            @if($product->message)
                                <div class="bg-gray-50 rounded-xl p-6 mt-8">
                                    <h3 class="text-lg font-medium text-gray-900 mb-3">Notes</h3>
                                    <p class="text-gray-600 leading-relaxed">{{ $product->message }}</p>
                                </div>
                            @endif
                        </div>

                        @if(view()->exists("products.templates.{$product->slug}"))
                            @include("products.templates.{$product->slug}")
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>