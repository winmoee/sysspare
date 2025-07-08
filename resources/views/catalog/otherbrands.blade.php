<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <a href="{{ route('catalog') }}" class="text-blue-600 hover:text-blue-800">&larr; Back to Catalog</a>
                    </div>

                    <h1 class="text-3xl font-bold text-center mb-8 text-green-700">Other Brands Catalog</h1>

                    <div class="text-center mb-8">
                        <p class="text-lg text-gray-600">Download catalogs for various other agricultural machinery brands</p>
                    </div>

                    <!-- PDF Upload/Management Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Example PDF Cards - You can add your Google Drive links here -->
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <div class="text-center">
                                <div class="text-green-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Various Tractor Brands</h3>
                                <p class="text-sm text-gray-600 mb-4">Multiple tractor brands and models with detailed specifications</p>
                                <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">Download PDF</a>
                            </div>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <div class="text-center">
                                <div class="text-green-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Specialized Equipment</h3>
                                <p class="text-sm text-gray-600 mb-4">Specialized agricultural machinery and custom equipment solutions</p>
                                <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">Download PDF</a>
                            </div>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <div class="text-center">
                                <div class="text-green-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Import Machinery</h3>
                                <p class="text-sm text-gray-600 mb-4">International machinery brands and import equipment catalog</p>
                                <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')