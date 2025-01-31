<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('spares.update', $spare) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <div class="space-y-4">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <input type="text" name="category" id="category" value="{{ old('category', $spare->category) }}" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>

                <!-- Part Number -->
                <div>
                    <label for="part_number" class="block text-sm font-medium text-gray-700">Part Number</label>
                    <input type="text" name="part_number" id="part_number" value="{{ old('part_number', $spare->part_number) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('part_number')" class="mt-2" />
                </div>

                <!-- English Name -->
                <div>
                    <label for="english_name" class="block text-sm font-medium text-gray-700">English Name</label>
                    <input type="text" name="english_name" id="english_name" value="{{ old('english_name', $spare->english_name) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('english_name')" class="mt-2" />
                </div>

                <!-- Myanmar Name -->
                <div>
                    <label for="myanmar_name" class="block text-sm font-medium text-gray-700">Myanmar Name</label>
                    <input type="text" name="myanmar_name" id="myanmar_name" value="{{ old('myanmar_name', $spare->myanmar_name) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('myanmar_name')" class="mt-2" />
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $spare->price) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <!-- Stock Quantity -->
                <div>
                    <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                    <input type="number" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity', $spare->stock_quantity) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('stock_quantity')" class="mt-2" />
                </div>

                <!-- Movement Level -->
                <div>
                    <label for="movement_level" class="block text-sm font-medium text-gray-700">Movement Level</label>
                    <input type="text" name="movement_level" id="movement_level" value="{{ old('movement_level', $spare->movement_level) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('movement_level')" class="mt-2" />
                </div>

                <!-- Category Type -->
                <div>
                    <label for="category_type" class="block text-sm font-medium text-gray-700">Category Type</label>
                    <input type="text" name="category_type" id="category_type" value="{{ old('category_type', $spare->category_type) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('category_type')" class="mt-2" />
                </div>

                <!-- Price Range -->
                <div>
                    <label for="price_range" class="block text-sm font-medium text-gray-700">Price Range</label>
                    <input type="text" name="price_range" id="price_range" value="{{ old('price_range', $spare->price_range) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('price_range')" class="mt-2" />
                </div>

                <!-- Photo -->
                <div>
                    <label for="photo" class="block text-sm font-medium text-gray-700">Photo (Link)</label>
                    <input type="text" name="photo" id="photo" value="{{ old('photo', $spare->photo) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                </div>

                <!-- Notes -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Notes (မှတ်ချက်များ)</label>
                    <textarea
                        name="message"
                        id="message"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                    >{{ old('message', $spare->message) }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
            </div>

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('spares.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Cancel') }}
                </a>
            </div>
        </form>
    </div>
</x-app-layout>