<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Products CSV') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Upload a CSV file to import PRODUCTS.") }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ url('/upprod') }}" enctype="multipart/form-data">
            @csrf

            <!-- File Input -->
            <div>
                <label for="file" class="block text-sm font-medium text-gray-700">Choose CSV File</label>
                <input type="file" name="file" id="file" accept=".csv"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <x-primary-button class="mt-4">{{ __('Upload and Import') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
