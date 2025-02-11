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
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('ပစ္စည်းအသစ် (Add)') }}
                        </x-nav-link>
                        <x-nav-link :href="route('upload')" :active="request()->routeIs('upload')">
                            {{ __('တင်ရန် (Upload)') }}
                        </x-nav-link>
                    @else 
                        <!-- Showroom Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Showroom') }}
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
                                <div class="px-4 py-2 text-med text-gray-700 font-medium">Product</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tractor - ထွန်စက်</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Harvester - ရိတ်စက်</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Walking Tractor - ထွန်ကိုင်း</a>
                                </div>
                                <div class="px-4 py-2 text-med text-gray-700 font-medium">Brand</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Yanmar - ယန်မာ</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">ACE - အေစီအီး</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Sifang - စီဖန်း</a>

                            </div>
                        </div>

                        <!-- SALES Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Sales') }}
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
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">Purchasing Methods</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Cash Down</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">MADB</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">MEB</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- SPARE PARTS Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Spare Parts') }}
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
                                    <a href="{{ url('/spares') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Catalog (Market)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">About Spare Parts</a>
                                </div>
                            </div>
                        </div>

                        <!-- SERVICE Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Service') }}
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
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">ဝန်ဆောင်မှုအသင်း</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Service Team <br> (စက်ပြင်ဝန်ဆောင်မှုအဖွဲ့)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">Service Workshop<br>(စက်ပြင်အလုပ်ရုံ)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Second Hand Market<br>(ထွန်စက်၊ရိတ်စက် second ရောင်းဝယ်သူများဆုံစည်းရာ)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Service & Product Feedback<br>(သုံးစွဲသူတို့ရဲ့ ရင်တွင်းစကားများ)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">Outside Transportation<br>(ပြင်ပကားအငှား ဝန်ဆောင်မှု)</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Service Award<br>(ဆားဗစ် ဆုများ)</a>
                                </div>
                            </div>
                        </div>

                        <!-- SUBDIVISION Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Subdivision') }}
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
                                    <div class="px-4 py-2 text-med text-gray-700 font-medium">Yangon - ရန်ကုန်</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">Bayintnaung</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">Z5 Showroom</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-200">MSY</a>
                                    <div class="px-4 py-2 text-med text-gray-700 font-medium">External - နယ်</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">Pathein</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">Hinthada</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">Shwebo</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-100">Taunggyi</a>
                                </div>
                            </div>
                        </div>
                        <!-- CONTACT Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <!-- Button Trigger -->
                            <button @click="open = !open" @click.away="open = false"
                                class="inline-flex items-center px-4 py-5 text-sm font-medium text-gray-500 transition hover:text-gray-700 focus:outline-none border-b-2 border-transparent group-hover:border-gray-400">
                                {{ __('Contact') }}
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
                                    <div class="px-4 py-2 text-sm text-gray-700 font-medium">ဆက်သွယ်ရန်</div>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100">Sales</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">Service</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Spare</a>
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Office</a>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Authentication Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
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
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 text-black hover:text-gray-700">Log in</a>
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
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('ပစ္စည်းအသစ် (Add)') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('upload')" :active="request()->routeIs('upload')">
                    {{ __('တင်ရန် (Upload)') }}
                </x-responsive-nav-link>
            @else 
                <!-- Mobile Showroom Dropdown -->
                <div x-data="{ showroomOpen: false }" class="space-y-1">
                    <button @click="showroomOpen = !showroomOpen" class="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                        <span>Showroom</span>
                        <svg class="ml-auto h-5 w-5" :class="{'transform rotate-180': showroomOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="showroomOpen" class="pl-4">
                        <div class="py-2 text-medium font-medium text-gray-600">Product</div>
                        <a href="{{ url('/serviceteam') }}" class="block text-sm px-4 py-2 font-medium text-base text-gray-600 hover:text-gray-800 hover:bg-red-50">Yanmar - ယန်မာ</a>
                        <a href="{{ url('/serviceteam') }}" class="block text-sm px-4 py-2 font-medium text-base text-gray-600 hover:text-gray-800 hover:bg-blue-50">ACE - အေစီအီး</a>
                        <a href="{{ url('/serviceteam') }}" class="block text-sm px-4 py-2 font-medium text-base text-gray-600 hover:text-gray-800 hover:bg-orange-50">Sifang - စီဖန်း</a>
                    </div>
                </div>

                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('dashboard')">
                    {{ __('Sales') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('dashboard')">
                    {{ __('Spare Parts') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('dashboard')">
                    {{ __('Service') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('dashboard')">
                    {{ __('Subdivision') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('spares.index')" :active="request()->routeIs('dashboard')">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
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
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>
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