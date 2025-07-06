<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-3xl font-bold text-green-600 mb-2">
                {{ __('messages.about_us') }}
            </h1>
            <div class="h-1 w-20 bg-green-600 mb-6"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Company Profile Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ __('messages.company_profile') }}</h2>
                <h3 class="text-xl font-semibold text-green-600">{{ __('messages.company_name') }}</h3>
            </div>

            <!-- Company Description -->
            <div class="prose max-w-none text-gray-700 leading-relaxed space-y-6">
                <p class="text-lg">
                    {{ __('messages.company_description') }}
                </p>

                <!-- Mission Section -->
                <div class="bg-green-50 p-6 rounded-lg">
                    <h4 class="text-xl font-semibold text-green-700 mb-3">{{ __('messages.our_mission') }}</h4>
                    <p>{{ __('messages.mission_description') }}</p>
                </div>

                <!-- What We Offer Section -->
                <div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">{{ __('messages.what_we_offer') }}</h4>
                    <p class="mb-4">{{ __('messages.offer_description') }}</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <div class="text-2xl mb-2">🚜</div>
                            <h5 class="font-semibold">{{ __('messages.walking_tractors') }}</h5>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <div class="text-2xl mb-2">🚜</div>
                            <h5 class="font-semibold">{{ __('messages.tractors') }}</h5>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <div class="text-2xl mb-2">🌾</div>
                            <h5 class="font-semibold">{{ __('messages.combine_harvesters') }}</h5>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <div class="text-2xl mb-2">🔧</div>
                            <h5 class="font-semibold">{{ __('messages.implements') }}</h5>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <div class="text-2xl mb-2">🔋</div>
                            <h5 class="font-semibold">{{ __('messages.de') }}</h5>
                        </div>
                    </div>

                    <p>{{ __('messages.distributor_info') }}</p>
                </div>

                <!-- Our Commitment Section -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">{{ __('messages.our_commitment') }}</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            {{ __('messages.commitment_sales') }}
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            {{ __('messages.commitment_financing') }}
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            {{ __('messages.commitment_service') }}
                        </li>
                    </ul>
                    <p class="mt-4">{{ __('messages.commitment_description') }}</p>
                </div>

                <!-- Continuous Improvement Section -->
                <div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">{{ __('messages.continuous_improvement') }}</h4>
                    <p>{{ __('messages.improvement_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.footer')
