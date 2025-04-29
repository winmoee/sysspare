<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="bg-white shadow-sm rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Edit Product: {{ $product->english_name }}</h2>

            <form method="POST" action="{{ route('products.update', $product) }}">
                @csrf
                @method('patch') 

                <!-- Category -->
                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <input type="text" name="category" id="category" value="{{ old('category', $product->category) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>

                <!-- Part Number (Horsepower) -->
                <div class="mb-4">
                    <label for="part_number" class="block text-sm font-medium text-gray-700">Horsepower - မြင်းကောင်ရေ</label> 
                    <input type="text" name="part_number" id="part_number" value="{{ old('part_number', $product->part_number) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('part_number')" class="mt-2" />
                </div>

                <!-- English Name -->
                <div class="mb-4">
                    <label for="english_name" class="block text-sm font-medium text-gray-700">English Name</label>
                    <input type="text" name="english_name" id="english_name" value="{{ old('english_name', $product->english_name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('english_name')" class="mt-2" />
                </div>

                <!-- Myanmar Name -->
                <div class="mb-4">
                    <label for="myanmar_name" class="block text-sm font-medium text-gray-700">Myanmar Name</label>
                    <input type="text" name="myanmar_name" id="myanmar_name" value="{{ old('myanmar_name', $product->myanmar_name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('myanmar_name')" class="mt-2" />
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <!-- Stock Quantity -->
                <div class="mb-4">
                    <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                    <input type="number" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('stock_quantity')" class="mt-2" />
                </div>

                <!-- Movement Level -->
                <div class="mb-4">
                    <label for="movement_level" class="block text-sm font-medium text-gray-700">Movement Level</label>
                    <input type="text" name="movement_level" id="movement_level" value="{{ old('movement_level', $product->movement_level) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('movement_level')" class="mt-2" />
                </div>

                <!-- Category Type -->
                <div class="mb-4">
                    <label for="category_type" class="block text-sm font-medium text-gray-700">Category Type</label>
                    <input type="text" name="category_type" id="category_type" value="{{ old('category_type', $product->category_type) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('category_type')" class="mt-2" />
                </div>

                <!-- Price Range (HP Range) -->
                <div class="mb-4">
                    <label for="price_range" class="block text-sm font-medium text-gray-700">HP Range</label>
                    <input type="text" name="price_range" id="price_range" value="{{ old('price_range', $product->price_range) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('price_range')" class="mt-2" />
                </div>

                <!-- Photo URL -->
                <div class="mb-4">
                    <label for="photo" class="block text-sm font-medium text-gray-700">Photo (Link)</label>
                    <input type="text" name="photo" id="photo" value="{{ old('photo', $product->photo) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                </div>

                <!-- Slug Link -->
                <div class="mb-4">
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug Link</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $product->slug) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                </div>

                <!-- Notes -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Notes (မှတ်ချက်များ)</label>
                    <textarea
                        name="message" id="message"
                        class="block w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >{{ old('message', $product->message) }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end gap-4">
                     <a href="{{ route('products.show', $product) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </a>
                    <x-primary-button>{{ __('Save Changes') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout> 