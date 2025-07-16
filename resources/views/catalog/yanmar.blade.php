<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <a href="{{ route('catalog') }}" class="text-blue-600 hover:text-blue-800">&larr; Back to Catalog</a>
                    </div>

                    <h1 class="text-3xl font-bold text-center mb-8 text-red-700">{{ __('messages.ymr') }} Catalog</h1>

                    <div class="text-center mb-8">
                        <p class="text-lg text-gray-600">Download our comprehensive Yanmar product catalogs and brochures</p>
                    </div>

                    <!-- PDF Upload/Management Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Example PDF Cards - Updated with direct download links -->
                        <!--1-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">EF 725 Tractor</h3>
                                <a href="https://drive.google.com/uc?export=download&id=1Ncc12woNi6z7XoxounnxG8-5z7VE0nvG" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                      <!--2-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">EF 514 T</h3>
                                <a href="https://drive.google.com/uc?export=download&id=1M4DwXPg2hAq9ZKROS5FfXdHIkmUB_hkQ" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                          <!--3-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                               <h3 class="text-lg font-semibold mb-2">YH 850 DG( 23 ) WU F-MM Combine Harvester</h3>
                                <a href="https://drive.google.com/uc?export=download&id=164dhcD8PnXx1cOq3zJDJhGFGdbyiuA_K" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                          <!--4-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YH 700 GU-MM & YH 850 GUW- MM Combine Harvester</h3>
                                {{-- <p class="text-sm text-gray-600 mb-4">Complete range of Yanmar tractors and specifications</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1ePM8EbGL0HAU6khU7l-2l7zR4C4D8lbi" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                        <!--5-->

                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                               <h3 class="text-lg font-semibold mb-2">0CC50-M01250EN</h3>
                                {{--  <p class="text-sm text-gray-600 mb-4">Diesel engines and power solutions</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1s6AEKBDYZVM-9DKVhnEzmcya_yYtfmCn" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                            <!--6-->
                            <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                                <div class="text-center">
                                    <div class="text-red-600 mb-4">
                                        <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold mb-2">EF 514 T ( Front Blde Dozer )</h3>
                                    {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                    <a href="https://drive.google.com/uc?export=download&id=1jqsf6vuQV_w5TgLqlXO3DgGbLG3cure9" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                                </div>
                            </div>
                            <!--7-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YM 351 R ,YM 358 R, YM 358 R L-1  ( Tractor )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1OW7vJUOrXg5C2GoVPxO9fSkyyI6OPKbu" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                          <!--8-->
                          <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">ST-A1 walking Tractor</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1dzevMjzsWvQ4qAgIFIG2RZyLRgRC6Xwe" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                        <!--9-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">AW 70 V RS, AW 70 GV RSX  , AW 82 GV RSX ( MM )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1Pnk1MIkc5KktQoXXoMG4iUbyOmmFRLO2" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
 <!--10-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YH 700 DGU- MM Combine Harvester</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1Z8RXKKQHtxBda4j3bvBSErvHE44xMrZ5" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--11-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">GT-1 walking Tractor</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1JoCI1ciD4fcCes9218km3sZuvOywZBcg" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--12-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YH 850 DGWU - MM Combine Harvester</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1KJ41idEDVYRLjHf0OxERH7SlYHt-Vhzt" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--13-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">R 190 Rotary</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1eB01r0fbFkJJvUQcvZrUAkH8FzjJl2HW" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--14-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YM 351 A  , YM 357 A ,YM 357 A L  ( Tractor )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1SV4Y-5g0fU7XvXKptPafoIwPTfwDh0cl" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--15-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">AW 82 GV  Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1cxmtCZFFvmdhmH9mCFO8IMuyOd7kZFM5" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--16-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YH 850 Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1YU3JscL3fGIhTxO0RHtmaKqUVPkN-QpO" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--17-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Y 2460  PDK ( 6 Discs - Poly Disc Plough )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1rgifeDtVk6Cg8-JsGClKBggxi_lVDcQm" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--18-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Y 2200 Rotary</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1kjvdOUrE0goJe4fOSw61nM_I8ebtdPOb" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--19-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Y 2460 PDL ( 7 Discs -  Poly Disc Plough )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1BZDaOGqdeBH4cDRG67hDJGo5ENYSS8rY" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--20-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">EF 514 Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1q6JNhW6Vtm8gV-QF7pjDFImO70ort6DN" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--21-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YM 351 R, YM 358 R, YM 358 R -L1 ( Engine )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1wvSTaYa_1JEs2H4HsAu9ziHGseRDaQFP" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--22-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Y2100FBS</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1gW8LJzS1x1JzIPldN0xt1c4PwCmIxyD8" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--23-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">0CNP6-M08430EN</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1NC2Ev5b6XJn_FA172uNHVP0oQ6VcGRVd" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--24-->
                            <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YH 700 Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1LAD8EmlE5Z0dI9-Su1Iy8QfBXSxpkxqa" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--25-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">EF 725 Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=11MsbChgrylELc19rjXmcN2dulJtToTmY" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--26-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YM 357 Engine</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=17UIW5meFM_bE9vpFSnMnrdZreVlRtmB7" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
                            </div>
                        </div>
                         <!--27-->
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-center">
                                <div class="text-red-600 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">YM 351 A , YM 357 A ( Front Blade Dozer )</h3>
                               {{-- <p class="text-sm text-gray-600 mb-4">Genuine Yanmar spare parts and accessories</p> --}}
                                <a href="https://drive.google.com/uc?export=download&id=1G1hdxKz9LwzC9Maxedibsa9xtL-a49q1" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">Download PDF</a>
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
                            <a href="{{ route('contact') }}" class="inline-flex items-center bg-red-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors duration-300 font-semibold">
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

                    <!-- Add New Catalog Section (for admin) -->
                    {{-- <div class="mt-12 bg-gray-50 p-6 rounded-lg">
                        <h2 class="text-xl font-bold mb-4">Add New Catalog</h2>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Catalog Title</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Enter catalog title">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Google Drive PDF Link</label>
                                <input type="url" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="https://drive.google.com/file/d/...">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" rows="3" placeholder="Brief description of the catalog"></textarea>
                            </div>
                            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">Add Catalog</button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')
