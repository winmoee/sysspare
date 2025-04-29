<x-app-layout>
    <style>
        .mb-12 .brand{
            width: 250px;
            height: 80px;
            background-color: white;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }
        .mb-12 .brand img{
            width: 200px;
            height: 50px;
            object-fit: contain;
        }
    </style>
@auth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        
        <div class="space-y-4">
            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category" id="category" value="{{ old('category') }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <!-- Horsepower - မြင်းကောင်ရေ -->
            <div>
                <label for="part_number" class="block text-sm font-medium text-gray-700">Horsepower - မြင်းကောင်ရေ</label>
                <input type="text" name="part_number" id="part_number" value="{{ old('part_number') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('part_number')" class="mt-2" />
            </div>

            <!-- English Name -->
            <div>
                <label for="english_name" class="block text-sm font-medium text-gray-700">English Name</label>
                <input type="text" name="english_name" id="english_name" value="{{ old('english_name') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('english_name')" class="mt-2" />
            </div>

            <!-- Myanmar Name -->
            <div>
                <label for="myanmar_name" class="block text-sm font-medium text-gray-700">Myanmar Name</label>
                <input type="text" name="myanmar_name" id="myanmar_name" value="{{ old('myanmar_name') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('myanmar_name')" class="mt-2" />
            </div>

            <!-- Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <!-- Stock Quantity -->
            <div>
                <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                <input type="number" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('stock_quantity')" class="mt-2" />
            </div>

            <!-- Movement Level -->
            <div>
                <label for="movement_level" class="block text-sm font-medium text-gray-700">Movement Level</label>
                <input type="text" name="movement_level" id="movement_level" value="{{ old('movement_level') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('movement_level')" class="mt-2" />
            </div>

            <!-- Category Type -->
            <div>
                <label for="category_type" class="block text-sm font-medium text-gray-700">Category Type</label>
                <input type="text" name="category_type" id="category_type" value="{{ old('category_type') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('category_type')" class="mt-2" />
            </div>

            <!-- Price Range -->
            <div>
                <label for="price_range" class="block text-sm font-medium text-gray-700">HP Range</label>
                <input type="text" name="price_range" id="price_range" value="{{ old('price_range') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('price_range')" class="mt-2" />
            </div>

            <!-- Photo Upload -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700">Photo (Link)</label>
                <input type="text" name="photo" id="photo" value="{{ old('photo') }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>
            <!-- SLUG -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug Link</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
            </div>

            <!-- Notes -->
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('Notes (မှတ်ချက်များ)') }}"
                class="block w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            @csrf

        </div>
        <x-primary-button class="mt-4">{{ __('Create Product') }}</x-primary-button>
        </form>
    </div>
    @else 
    @endauth
    <!-- <div class="w-full bg-white shadow-sm top-0 z-10">
    <div class="max-w-7xl mx-auto px-4 py-2">
        <div class="flex flex-wrap gap-2 items-center justify-start overflow-x-auto">
            <a href="#walking-tractor" class="inline-flex flex-col items-center px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">Walking Tractor</span>
                <span class="text-xs text-gray-500">ထွန်စက်</span>
            </a>
            <a href="#harvester" class="inline-flex flex-col items-center px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">Harvester</span>
                <span class="text-xs text-gray-500">ရိတ်စက်</span>
            </a>
            <a href="#combine-harvester" class="inline-flex flex-col items-center px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">Combine Harvester</span>
                <span class="text-xs text-gray-500">ထွန်ကိုင်း</span>
            </a>
            <a href="#yanmar" class="inline-flex flex-col items-center px-4 py-2 bg-red-50 rounded-lg hover:bg-red-100 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">Yanmar</span>
                <span class="text-xs text-gray-500">ယန်မာ</span>
            </a>
            <a href="#ace" class="inline-flex flex-col items-center px-4 py-2 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">ACE</span>
                <span class="text-xs text-gray-500">အေစီအီး</span>
            </a>
            <a href="#sifang" class="inline-flex flex-col items-center px-4 py-2 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors min-w-fit">
                <span class="text-sm font-medium text-gray-700">Sifang</span>
                <span class="text-xs text-gray-500">စီဖန်း</span>
            </a>
        </div>
    </div>
</div> -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <!-- All Products Section -->
        <!-- <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">All Products</h2>
            <div x-show="activeTab === 'type'">
                @foreach($productsByType as $type => $products)
                    <div class="mb-12" id="{{ Str::slug($type) }}">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">{{ $type }}</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($products as $product)
                                <div class="bg-white shadow-sm rounded-lg p-6">
                                    @if($product->photo)
                                        <img src="{{ $product->photo }}" class="w-full h-64 object-cover rounded-lg mb-4" alt="{{ $product->english_name }}">
                                    @else
                                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                    
                                    <div class="space-y-4">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900">{{ $product->english_name }}</h3>
                                            <p class="text-gray-600">{{ $product->myanmar_name }}</p>
                                        </div>
                                        
                                        <div class="space-y-2">
                                            <p class="text-sm text-gray-500">Horsepower - မြင်းကောင်ရေ: {{ $product->part_number }}</p>
                                            <p class="text-lg font-bold text-gray-900">{{ number_format($product->price) }} MMK</p>
                                        </div>
                                        
                                        <a href="{{ route('products.show', $product) }}" 
                                           class="block w-full text-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div> -->

        <!-- Yanmar Products Section -->
        <div class="mb-12">
            <div class="brand"><img src="https://www.yanmar.com/ltc/assets/img/img/dbe44d5a6b/img_site-logo_04.png"> </div>
            <br>
            <!-- <h2 class="text-2xl font-bold text-gray-900 mb-6">Yanmar Products</h2> -->
            <div x-show="activeTab === 'type'">
                @foreach($yanmarProductsByType as $type => $products)
                    <div class="mb-12" id="{{ Str::slug($type) }}">
                        <!-- <h3 class="text-xl font-bold text-gray-900 mb-6">{{ $type }} Products</h3> -->
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($products as $product)
                                <div class="bg-white shadow-sm rounded-lg p-6">
                                    @if($product->photo)
                                        <img src="{{ $product->photo }}" class="w-full h-64 object-cover rounded-lg mb-4" alt="{{ $product->english_name }}">
                                    @else
                                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                    
                                    <div class="space-y-4">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900">{{ $product->english_name }}</h3>
                                            <p class="text-gray-600">{{ $product->myanmar_name }}</p>
                                        </div>
                                        
                                        <div class="space-y-2">
                                            <p class="text-sm text-gray-500">Horsepower - မြင်းကောင်ရေ: {{ $product->part_number }}</p>
                                            <p class="text-lg font-bold text-gray-900">{{ number_format($product->price) }} MMK</p>
                                        </div>
                                        
                                        <a href="{{ route('products.showbrands', $product->slug) }}" 
                                           class="block w-full text-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')    