<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
        <form method="POST" action="{{ route('spares.store') }}" enctype="multipart/form-data">
        
        <div class="space-y-4">
            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category" id="category" value="{{ old('category') }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <!-- Part Number -->
            <div>
                <label for="part_number" class="block text-sm font-medium text-gray-700">Part Number</label>
                <input type="text" name="part_number" id="part_number" value="{{ old('part_number') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('part_number')" class="mt-2" />
            </div>

            <!-- English Name -->
            <div>
                <label for="english_name" class="block text-sm font-medium text-gray-700">English Name</label>
                <input type="text" name="english_name" id="english_name" value="{{ old('english_name') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('english_name')" class="mt-2" />
            </div>

            <!-- Myanmar Name -->
            <div>
                <label for="myanmar_name" class="block text-sm font-medium text-gray-700">Myanmar Name</label>
                <input type="text" name="myanmar_name" id="myanmar_name" value="{{ old('myanmar_name') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('myanmar_name')" class="mt-2" />
            </div>

            <!-- Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <!-- Stock Quantity -->
            <div>
                <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                <input type="number" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('stock_quantity')" class="mt-2" />
            </div>

            <!-- Movement Level -->
            <div>
                <label for="movement_level" class="block text-sm font-medium text-gray-700">Movement Level</label>
                <input type="text" name="movement_level" id="movement_level" value="{{ old('movement_level') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('movement_level')" class="mt-2" />
            </div>

            <!-- Category Type -->
            <div>
                <label for="category_type" class="block text-sm font-medium text-gray-700">Category Type</label>
                <input type="text" name="category_type" id="category_type" value="{{ old('category_type') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('category_type')" class="mt-2" />
            </div>

            <!-- Price Range -->
            <div>
                <label for="price_range" class="block text-sm font-medium text-gray-700">Price Range</label>
                <input type="text" name="price_range" id="price_range" value="{{ old('price_range') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('price_range')" class="mt-2" />
            </div>

            <!-- Photo Upload -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700">Photo (Link)</label>
                <input type="text" name="photo" id="photo" value="{{ old('photo') }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <!-- Notes -->
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('Notes (မှတ်ချက်များ)') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            @csrf

        </div>

        <x-primary-button class="mt-4">{{ __('Create Spare Part') }}</x-primary-button>
    </form>
</x-app-layout>
