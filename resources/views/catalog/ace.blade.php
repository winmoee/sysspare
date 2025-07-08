<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-blue-100">
                <div class="p-8 text-gray-900">
                    <!-- Back Navigation -->
                    <div class="mb-8">
                        <a href="{{ route('catalog') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Catalog
                        </a>
                    </div>

                    <!-- Main Title -->
                    <div class="text-center mb-6">
                        <h1 class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                            {{ __('messages.ace') }} Catalog
                        </h1>
                        <!-- Second Title -->
                        <h2 class="text-2xl font-semibold text-gray-700 mb-6">
                            Premium Agricultural Equipment & Parts
                        </h2>
                        <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto rounded-full"></div>
                    </div>

                    <!-- Description Section -->
                    <div class="text-center mb-12">
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                            Download our comprehensive ACE product catalogs and brochures featuring the latest agricultural implements, farm equipment, and genuine spare parts
                        </p>
                    </div>

                    <!-- Centered PDF Card Section -->
                    <div class="flex justify-center">
                        <!-- Enhanced PDF Card -->
                        <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl border-2 border-blue-200 hover:border-blue-400 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 max-w-md">
                            <div class="text-center">
                                <!-- Enhanced Icon -->
                                <div class="relative mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl mx-auto flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                        <span class="text-white text-xs font-bold">PDF</span>
                                    </div>
                                </div>

                                <!-- Enhanced Title -->
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">
                                    ACE Part Catalogue Myanmar
                                </h3>

                                <!-- Description -->
                                <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                    Complete parts catalog with specifications, compatibility charts, and ordering information for all ACE agricultural equipment
                                </p>

                                <!-- Enhanced Download Button -->
                                <a href="https://drive.google.com/file/d/14d7A86U1zMdMh4HyiTS3Q5J0xeQtLmei/view?usp=drive_link"
                                   class="inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="mt-16 text-center bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-2xl border border-blue-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">
                            Need Additional Information?
                        </h3>
                        <p class="text-gray-600 mb-6">
                            Contact our technical support team for custom catalogs, detailed specifications, or product recommendations
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors duration-300 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contact Us
                            </a>
                            <a href="tel:+95 9 443 121 222" class="inline-flex items-center bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition-colors duration-300 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Call Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')
