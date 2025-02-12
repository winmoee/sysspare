<title>Seinn Yaung So</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="icon" type="image/png" sizes="32x32" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">
<link rel="icon" type="image/png" sizes="192x192" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">

<x-app-layout>
<!-- Hero Section -->
<div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="relative">
                <!-- Main Hero Image -->
                <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/sysheader.png" 
                     alt="စစ်မှန်စျေးချို စိမ်းရောင်စို" 
                     class="w-full h-auto rounded-lg">
                
                <!-- Hero Text Overlay -->
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/50">
                    <h2 class="text-white text-3xl font-bold">စစ်မှန်စျေးချို စိမ်းရောင်စို</h2>
                    <p class="text-white mt-2">တစ်နေရာထဲမှာ အားလုံးစုံ</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Showroom Section -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h3 class="text-xl font-medium text-green-600 mb-4">
            Showroom and Sales<br>
            (အရောင်းနှင့် အရောင်းပြခန်း)
        </h3>
        
        <!-- Address Information -->
        <div class="bg-white rounded-lg p-4 shadow mb-4">
            <p class="text-gray-600 mb-2">
                အရောင်းနှင့် ပြခန်းလိပ်စာ - အမှတ်(၁၄၈/ ၁၄၉)၊ အနော်ရထာရထာလမ်းမကြီး၊ လှိုင်သာယာစက်မှုဇုံအပိုင်း(၅) တိုးချဲ့။
            </p>
            <a href="https://maps.app.goo.gl/L2SfCDJeAJBv35Gm8" 
               class="inline-flex items-center text-green-600 hover:text-green-700">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Seinn Yaung So Co.,Ltd (Showroom) zone-5
            </a>
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/srsDvBFG6CY05EuX8HCx.webp">
        </div> 


    <!-- Search and Sort Section -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="space-y-4">
        <!-- Search Form -->
        <form action="{{ route('spares.index') }}" method="GET" class="mb-6">
            <div class="flex gap-4">
                <div class="flex-1">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search by name or part number..." 
                        value="{{ request('search') }}"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                    >
                </div>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-200">
                    Search
                </button>
            </div>
        </form>

        <!-- Sort Controls -->
        <div class="flex flex-wrap gap-2">
            <span class="text-gray-700">Sort by:</span>
            @php
                $sortOptions = [
                    'english_name' => 'English Name',
                    'myanmar_name' => 'Myanmar Name',
                    'part_number' => 'Part Number',
                    'price' => 'Price',
                    'created_at' => 'Date Added'
                ];
                $currentSort = request('sort', 'created_at');
                $direction = request('direction', 'desc');
            @endphp
            
            @foreach($sortOptions as $value => $label)
                <a 
                    href="{{ route('spares.index', [
                        'sort' => $value,
                        'direction' => $value === $currentSort && $direction === 'asc' ? 'desc' : 'asc',
                        'search' => request('search')
                    ]) }}"
                    class="px-3 py-1 text-sm rounded-full {{ $currentSort === $value ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    {{ $label }}
                    @if($currentSort === $value)
                        <span class="ml-1">{{ $direction === 'asc' ? '↑' : '↓' }}</span>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Spare Section -->
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
                        <!-- User info section - only show if user exists -->
                        @if($spare->user)
                            <div class="flex justify-between items-center mb-2">
                                <div>
                                    <span class="text-sm text-gray-600">{{ $spare->user->name }}</span>
                                    <small class="ml-2 text-sm text-gray-500">{{ $spare->created_at->format('j M Y') }}</small>
                                </div>
                            </div>
                        @endif

                        <p class="text-sm text-green-700">{{ $spare->myanmar_name }}</p>
                        <h3 class="text-lg font-semibold mt-1">{{ $spare->english_name }}</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ $spare->part_number }}</p>
                        
                        <!-- @if($spare->price)
                            <p class="text-sm text-gray-600 mt-2">{{ number_format($spare->price) }} MMK</p>
                        @endif -->
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Pagination -->
    @if (method_exists($spares, 'links'))
        <div class="mt-6">
            {{ $spares->links() }}
        </div>
    @endif
</div>
    
 <!-- NEW IMAGE -->
 <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="relative">
                <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/SLaxu5MEktimsQJmwNUF.webp" 
                     alt="SYS" 
                     class="w-full h-auto rounded-lg">
            </div>
    </div>
    <!-- Contact Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <!-- Contact Card 1 -->
        <div class="bg-white rounded-lg p-4 shadow">
            <h4 class="font-medium">ကောင်းပြည့်စုံထွန်း(အရောင်း)</h4>
            <p class="text-gray-600">09443209946</p>
            <div class="mt-2">
                <button onclick="copyPhoneNumber('09443209946', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                    <span class="copy-button-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                        </svg>
                        Copy Number
                    </span>
                </button>
            </div>
        </div>

        <!-- Contact Card 2 -->
        <div class="bg-white rounded-lg p-4 shadow">
            <h4 class="font-medium">အိအိ‌‌ရွှေ (အရောင်းကြီးကြပ်)</h4>
            <p class="text-gray-600">09798892678</p>
            <div class="mt-2">
                <button onclick="copyPhoneNumber('09798892678', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                    <span class="copy-button-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                        </svg>
                        Copy Number
                    </span>
                </button>
            </div>
        </div>

        <!-- Contact Card 3 -->
        <div class="bg-white rounded-lg p-4 shadow">
            <h4 class="font-medium">နေနွယ်ဦး(SSA ပြုပြင်)</h4>
            <p class="text-gray-600">09798890819</p>
            <div class="mt-2">
                <button onclick="copyPhoneNumber('09798890819', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                    <span class="copy-button-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                        </svg>
                        Copy Number
                    </span>
                </button>
            </div>
        </div>
    </div>

    <script>
    function copyPhoneNumber(phoneNumber, button) {
        // Create temporary textarea
        const textarea = document.createElement('textarea');
        textarea.value = phoneNumber;
        document.body.appendChild(textarea);
        textarea.select();
        
        try {
            // Copy the text
            document.execCommand('copy');
            
            // Get the span element within this specific button
            const buttonText = button.querySelector('.copy-button-text');
            
            // Update button text and icon temporarily
            buttonText.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Copied!`;
                
            // Reset after 2 seconds
            setTimeout(() => {
                buttonText.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                    </svg>
                    Copy Number`;
            }, 2000);
        } catch (err) {
            console.error('Failed to copy text:', err);
        }
        
        // Remove temporary textarea
        document.body.removeChild(textarea);
    }
    </script>
</div>


<!-- Service Section --> 
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <h3 class="text-xl font-medium text-green-600 mb-4">
        Service<br>
        (ဆားဗစ် ဝန်ဆောင်မှု)
    </h3>
    
   <!-- Service Grid -->
<div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
    <!-- Service Card 1 -->
    <a href="{{ url('/serviceteam') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
        <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_675,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FrVLgugAghG0Q4VIuyQnT%2Fpub%2FMEnv3wFiQurv5CgPgF1h.jpg" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
        <p class="text-green-600 font-medium">Service Team</p>
        <p class="text-sm text-gray-600">(စက်ပြင်ဝန်ဆောင်မှုအဖွဲ့)</p>
    </a>

    <!-- Service Card 2 -->
    <a href="{{ url('/serviceworkshop') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
        <img src="https://res.cloudinary.com/glide/image/fetch/f_auto,w_675,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FrVLgugAghG0Q4VIuyQnT%2Fpub%2FnXoXOJe0JAKtWW3e77MY.jpg" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
        <p class="text-green-600 font-medium">Service Workshop</p>
        <p class="text-sm text-gray-600">(စက်ပြင်အလုပ်ရုံ)</p>
    </a>

<!-- Service Card 3 -->
<a href="{{ url('/market') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
    <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/kJVfUiw71DqocDSfGNee.webp" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
    <p class="text-green-600 font-medium">Second Hand Market</p>
    <p class="text-sm text-gray-600">(ထွန်စက်၊ရိတ်စက် second ရောင်းဝယ်သူများဆုံစည်းရာ)</p>
</a>
    <!-- Service Card 4 -->
    <a href="{{ url('/feedback') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/nhPTrSfL9qirJwXCtdDs.webp" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
        <p class="text-green-600 font-medium">Service & Product Feedback</p>
        <p class="text-sm text-gray-600">(သုံးစွဲသူတို့ရဲ့ ရင်တွင်းစကားများ)</p>
    </a>

    <!-- Service Card 5 -->
    <a href="{{ url('/transport') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/Ezn6hY8LL6sbAjCObZNT.webp" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
        <p class="text-green-600 font-medium">Outside Transportation</p>
        <p class="text-sm text-gray-600">(ပြင်ပကားအငှား ဝန်ဆောင်မှု)</p>
    </a>

    <!-- Service Card 6 -->
    <a href="{{ url('/serviceaward') }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/sfh2rB5Al9D4u2l9XVQr.webp" alt="Service" class="w-auto h-auto mx-auto rounded-full mb-2">
        <p class="text-green-600 font-medium">Service Award</p>
        <p class="text-sm text-gray-600">(ဆားဗစ် ဆုများ)</p>
    </a>
</div>

    <!-- SOCIAL MEDIA SITES -->
    <h3 class="text-xl font-medium text-green-600 mb-4">
        Social Media
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <!-- Contact Card 1 -->
        <div class="bg-white rounded-lg p-4 shadow">
            <h4 class="font-medium">Seinn Yaung So</h4>
            <p class="text-gray-600">Facebook</p>
            <div class="mt-2">
                <button onclick="copyPhoneNumber('09443209946', this)" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                    <span class="copy-button-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <!-- Contact Card 2 -->
        <div class="bg-white rounded-lg p-4 shadow">
            <h4 class="font-medium">Seinn Yaung So</h4>
            <p class="text-gray-600">YouTube</p>
            <div class="mt-2">
                <button onclick="copyPhoneNumber('09798892678', this)" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                    <span class="copy-button-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

</x-app-layout>