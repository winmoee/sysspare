<x-app-layout>
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

        <!-- Spares Listing -->
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($spares as $spare)
                <div class="p-6 flex space-x-2">
                    <!-- Image Column -->
                    <div class="flex-shrink-0 w-24">
                        @if($spare->photo)
                            <img src="{{ $spare->photo }}" class="w-24 h-24 object-cover rounded-lg">
                        @else
                            <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Content Column -->
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $spare->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $spare->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($spare->created_at->eq($spare->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($spare->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('spares.edit', $spare)">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('spares.destroy', $spare) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('spares.destroy', $spare)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>

                        <!-- Spare Part Details -->
                        <div class="mt-4 grid grid-cols-2 gap-4">
                            <!-- Left Column -->
                            <div class="space-y-3">
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Category:</span>
                                    <p class="text-gray-900">{{ $spare->category }}</p>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Part Number:</span>
                                    <p class="text-gray-900">{{ $spare->part_number }}</p>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-500">English Name:</span>
                                    <p class="text-gray-900">{{ $spare->english_name }}</p>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Myanmar Name:</span>
                                    <p class="text-gray-900">{{ $spare->myanmar_name }}</p>
                                </div>
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Price:</span>
                                    <p class="text-gray-900">{{ number_format($spare->price) }} MMK</p>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-3">
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

                        <!-- Notes -->
                        @if($spare->message)
                            <div class="mt-4">
                                <span class="text-sm font-medium text-gray-500">Notes:</span>
                                <p class="mt-1 text-gray-900">{{ $spare->message }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- CLAUDE -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($spares as $spare)
                <a href="{{ route('spares.show', $spare) }}" class="block">
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                        <!-- Image Section -->
                        <div class="relative aspect-[4/3] w-full">
                            @if($spare->photo)
                                <img 
                                    src="{{ $spare->photo }}" 
                                    alt="{{ $spare->english_name }}"
                                    class="w-full h-full object-cover rounded-t-lg"
                                >
                            @else
                                <div class="w-full h-full bg-gray-200 rounded-t-lg flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Content Section -->
                        <div class="p-4">
                            <p class="text-sm text-gray-600">{{ $spare->myanmar_name }}</p>
                            <h3 class="text-lg font-semibold mt-1">{{ $spare->english_name }}</h3>
                            <p class="text-sm text-gray-500 mt-1">{{ $spare->part_number }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination - only shown if spares is a paginator instance -->
        @if (method_exists($spares, 'links'))
            <div class="mt-6">
                {{ $spares->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
