<nav x-data="{ open: false, productOpen: false, showroomOpen: false }" class="bg-white border-b border-gray-100 relative z-40">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png"
                            class="block h-9 w-auto"
                            alt="SYS Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:space-x-2 sm:ms-10">
                    @auth
                        <x-nav-link :href="route('spares.index')" :active="request()->routeIs('spares.index')">
                            {{ __('Spare Parts') }}
                        </x-nav-link>
                        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                            {{ __('Products') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Add Spare Parts') }}
                        </x-nav-link>
                        <x-nav-link :href="route('upload')" :active="request()->routeIs('upload')">
                            {{ __('တင်ရန် (Upload)') }}
                        </x-nav-link>
                        <x-nav-link :href="route('upprod')" :active="request()->routeIs('upprod')">
                            {{ __('UpProd') }}
                        </x-nav-link>
                    @else
                        <!-- Showroom Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.showroom') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                <div class="px-4 py-2 text-med text-gray-700 font-medium">{{ __('messages.product') }}</div>
                                <a href="{{ url('/products#4-wheels-tractor') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.ttr') }}</a>
                                <a href="{{ url('/products#combine-harvester') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.hvr') }}</a>
                                <a href="{{ url('/products#walking-tractor') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.wtr') }}</a>
                                <div class="px-4 py-2 text-med text-gray-700 font-medium">{{ __('messages.brand') }}</div>
                                <a href="{{ url('/products#yanmar') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.ymr') }}</a>
                                <a href="{{ url('/products#ace') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.ace') }}</a>
                                <a href="{{ url('/products#sifang') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.sfg') }}</a>
                            </div>
                        </div>
                    </div>

                        <!-- SALES Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.sales') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">{{ __('messages.pm') }}</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.cash_down') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.madb') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.meb') }}</a>
                                </div>
                            </div>
                        </div>

                        <!-- SPARE PARTS Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.spare_parts') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                    <!-- <div class="px-4 py-2 text-sm text-gray-700 font-medium">Product</div> -->
                                    <a href="{{ url('/spares') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.catalog') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.about_spare_parts') }}</a>
                                </div>
                            </div>
                        </div>

                        <!-- SERVICE Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.service') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">   {{ __('messages.service_team') }}</div>
                                    <a href="{{ url('/serviceteam') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.machine_repair_team') }}</a>
                                    <a href="{{ url('/serviceworkshop') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.service_workshop') }}</a>
                                    <a href="{{ url('/market') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.second_hand_market') }}</a>
                                    <a href="{{ url('/feedback') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.service_and_products_fdb') }}</a>
                                    <a href="{{ url('/transport') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.outside_transportation') }}</a>
                                    <a href="{{ url('/serviceaward') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.service_award') }}</a>
                                </div>
                            </div>
                        </div>

                        <!-- SUBDIVISION Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.subdivision') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                    <div class="px-4 py-2 text-med text-gray-700 font-medium">{{ __('messages.yangon') }}</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.bayintnaung') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.z5_showroom') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.msy') }}</a>
                                    <div class="px-4 py-2 text-med text-gray-700 font-medium">{{ __('messages.external') }}</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.pathein') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.hinthada') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.shwebo') }}</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.taunggyi') }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- CONTACT Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('messages.contact') }}
                                <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                                style="display: none;">
                                <div class="py-2">
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">{{ __('messages.contact') }}</div>
                                    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.sales') }}</a>
                                    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.service') }}</a>
                                    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100"> {{ __('messages.spare') }}</a>
                                    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100"> {{ __('messages.office') }}</a>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Authentication Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="hidden sm:flex sm:items-center border-r pr-4 mr-4">
                    <div class="relative group" x-data="{ open: false }">
                        <!-- Language Button Trigger -->
                        <button @click="open = !open" @click.away="open = false"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none">
                            {{ app()->getLocale() == 'en' ? 'English' : 'မြန်မာဘာသာ' }}
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Language Dropdown -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute right-0 top-full mt-1 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50"
                            style="display: none;">
                            <div class="py-1">
                                <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() == 'en' ? 'bg-gray-100' : '' }}">
                                    {{ __('messages.english') }}
                                </a>
                                <a href="{{ route('locale.switch', 'my') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() == 'my' ? 'bg-gray-100' : '' }}">
                                    {{ __('messages.myanmar') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('messages.log_in') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('messages.log_out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 text-black hover:text-gray-700">{{ __('messages.log_in') }}</a>
                    @if (Route::has('register'))
                        <!-- <a href="{{ route('register') }}" class="px-3 py-2 text-black hover:text-gray-700">Register</a> -->
                    @endif
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('spares.index')">
                    {{ __('Spare Parts') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                    {{ __('Products') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Add Spare Parts') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('upload')" :active="request()->routeIs('upload')">
                    {{ __('တင်ရန် (Upload)') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('upprod')" :active="request()->routeIs('upprod')">
                    {{ __('Upprod') }}
                </x-responsive-nav-link>
            @else
                <!-- Mobile Showroom Dropdown -->
                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.showroom') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                    <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.product') }}</div>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.ttr') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.hvr') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('messages.wtr') }}</a>
                    <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.brand') }}</div>
                    <a href="{{ url('/products') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.ymr') }}</a>
                                <a href="{{ url('/products') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.ace') }}</a>
                                <a href="{{ url('/products') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.sfg') }}/a>
                    </div>
                </div>

                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.sales') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                        <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.pm') }}</div>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.cash_down') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.madb') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.med') }}</a>
                    </div>
                </div>

                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.spare_parts') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                        <a href="{{ url('/spares') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.catalog') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.about_spare_parts') }}</a>
                    </div>
                </div>

                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.service') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                    <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.service_team') }}</div>
                        <a href="{{ url('/serviceteam') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.machein_repair_team') }}</a>
                        <a href="{{ url('/serviceworkshop') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.service_workshop') }}</a>
                        <a href="{{ url('/market') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.second_hand_market') }}</a>
                        <a href="{{ url('/feedback') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.service_and_products_fdb') }}</a>
                        <a href="{{ url('/transport') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.outside_transportation') }}</a>
                        <a href="{{ url('/serviceaward') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.service_award') }}</a>
                    </div>
                </div>

                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.subdivision') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                        <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.yangon') }}</div>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.bayintnaung') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.z5_showroom') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">{{ __('messages.msy') }}</a>
                        <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.external') }}</div>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.pathein') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.hinthada') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.shwebo') }}</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">{{ __('messages.taunggyi') }}</a>
                    </div>
                </div>

                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>{{ __('messages.contact') }}</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                        <div class="py-2 text-medium font-medium text-gray-600">{{ __('messages.contact') }}</div>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">{{ __('messages.sales') }}</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">{{ __('messages.service') }}</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.spare') }}</a>
                        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">{{ __('messages.office') }}</a>
                    </div>
                </div>

                <div class="pt-2 pb-2 border-t border-gray-200">
    <div x-data="{ langOpen: false }" class="space-y-1">
        <button @click="langOpen = !langOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
            <span>{{ __('Language') }} / ဘာသာစကား</span>
            <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': langOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="langOpen" class="pl-4">
            <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() == 'en' ? 'font-bold' : '' }}">
               {{ __('messages.english') }}
            </a>
            <a href="{{ route('locale.switch', 'my') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() == 'my' ? 'font-bold' : '' }}">
                {{ __('messages.myanmar') }}
            </a>
        </div>
    </div>
</div>

                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('dashboard')">
                    {{ __('Log In') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @else

                @endauth
            </div>

            <div class="mt-3 space-y-1">
                @auth
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
