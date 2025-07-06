@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Navigation -->
        <a href="{{ url('/products/4-wheels-tractor') }}" class="inline-flex items-center text-gray-600 hover:text-gray-800 transition-colors duration-200 mb-8">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to 4 Wheels Tractors
        </a>

        <!-- Product Display -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <!-- Product Image -->
                <div class="relative">
                    <img src="{{ asset('images/products/ym358r.jpg') }}" 
                         alt="YM358R - Four Wheels Tractor" 
                         class="w-full h-auto object-contain rounded-lg">
                </div>

                <!-- Product Information -->
                <div class="space-y-6">
                    <!-- Product Title -->
                    <div class="border-b border-gray-100 pb-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">YM358R - Four Wheels Tractor</h1>
                        <h2 class="text-xl text-gray-600">YM358R - လေးဘီးထွန်စက်</h2>
                    </div>

                    <!-- Product Details -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Category:</h3>
                            <p class="mt-1 text-lg text-gray-900">4 Wheels Tractor</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Brand:</h3>
                            <p class="mt-1 text-lg text-gray-900">Yanmar</p>
                        </div>

                        <!-- <div>
                            <h3 class="text-sm font-medium text-gray-500">Part Number:</h3>
                            <p class="mt-1 text-lg text-gray-900">57.6 HP</p>
                        </div> -->

                        <!-- Specifications Grid -->
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="bg-gray-50 rounded-xl p-4">
                                <dt class="text-sm font-medium text-gray-500">Horse Power</dt>
                                <dd class="mt-1 text-lg font-medium text-gray-900">57.6PS</dd>
                            </div>

                            <div class="bg-gray-50 rounded-xl p-4">
                                <dt class="text-sm font-medium text-gray-500">Weight</dt>
                                <dd class="mt-1 text-lg font-medium text-gray-900">1850 kg</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
