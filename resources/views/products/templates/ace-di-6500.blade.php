{{-- resources/views/products/gt-1.blade.php --}}
<div class="p-6 bg-white rounded-lg shadow-md mb-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Product Images</h2>
    <div class="flex flex-wrap justify-center -mx-4">
        <div class="px-4 w-full sm:w-1/2">
            <img src="{{ asset('img/products/ace-di-6500-spec.jpg') }}" alt="ACE DI-6500 Specification Image 1" class="w-full h-auto rounded-lg shadow-lg mb-4 sm:mb-0">
        </div>
        <div class="px-4 w-full sm:w-1/2">
            <img src="{{ asset('img/products/ace-di-6500-spec.jpg') }}" alt="ACE DI-6500 Specification Image 2" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</div>

<div class="specification-container p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Specification</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Engine-model</span>
            <span class="text-gray-800">A.65 (cold start kit optional)</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Horse Power</span>
            <span class="text-gray-800">(61.2) HP</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Fuel Tank</span>
            <span class="text-gray-800">65 Liters</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Weight</span>
            <span class="text-gray-800">2850 kg</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Front-wheel-size</span>
            <span class="text-gray-800">9.5 - 24</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Back-wheel-size</span>
            <span class="text-gray-800">16.9 - 28</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Gearbox</span>
            <span class="text-gray-800">ရှေ့ 12 ချက်/နောက် 12 ချက်</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Lifting-capacity</span>
            <span class="text-gray-800">2200 kg</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Club</span>
            <span class="text-gray-800">အခြောက်သုံးဒစ်ပြား (နှစ်ပြား)</span>
        </div>
        <div class="flex justify-between border-b py-2">
            <span class="font-semibold text-gray-600">Brake</span>
            <span class="text-gray-800">ဆီတွင်စိမ်ထားသော ဘရိတ်ပြားစနစ်</span>
        </div>
    </div>
</div>
<div class="p-6 bg-white rounded-lg shadow-md mb-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Product Images</h2>
    <div class="flex flex-wrap justify-center -mx-4">
        <div class="px-4 w-full sm:w-1/2">
            <img src="{{ asset('https://res.cloudinary.com/glide/image/fetch/f_auto,w_1875,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2Ff8wTuPOrzw3498DFwFH6%2Fpub%2FSToHZm23g9tg8zd2Hokm.png') }}" alt="ACE DI-6500 Specification Image 1" class="w-full h-auto rounded-lg shadow-lg mb-4 sm:mb-0">
        </div>
        <div class="px-4 w-full sm:w-1/2">
            <img src="{{ asset('https://res.cloudinary.com/glide/image/fetch/f_auto,w_1875,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2Ff8wTuPOrzw3498DFwFH6%2Fpub%2FSToHZm23g9tg8zd2Hokm.png') }}" alt="ACE DI-6500 Specification Image 2" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</div>




<!-- <div class="bg-white rounded-lg shadow-lg p-6">
    <br>
    <h6 class="text-xl font-semibold text-gray-800 mb-4">
    အဓိကအင်္ဂါရပ်များ
    </h6>
        
    <div class="max-w-7xl mx-auto py-6 lg:py-8">
        <div class="space-y-4">
         
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature1')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left" style="font-size: 18px;">ACE ရဲ့ ထူးခြားချက်</span>
                    </div>
                    <svg
                        id="arrowFeature1"
                        class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="feature1" class="hidden border-t border-gray-200 bg-gray-50">
                    <div class="p-6 flex items-center justify-center min-h-[80px]">
                        <p class="text-base text-gray-700 leading-8 text-center">

                        အရည်အသွေး ကောင်းကောင်း လိုချင်ရင် တန်ဖိုးကြီးကြီးပေး ရမယ်ဆိုတဲ့ အစဉ်အလာကို Ace လေးဘီးထွန်စက်က ချိုးဖျက်လိုက်ပါပီ ။

                        တန်ဖိုးအသက်သာဆုံးနှင့် အရည်အသွေးအကောင်းဆုံး Ace အိန္ဒိယလေးဘီးထွန်စက်က  တောင်သူဦးကြီးများ လယ်ယာလုပ်ငန်းခွင်အတွက် အသုံး ပြုဖို့အတွက် အကောင်းဆုံး ဖစ်ပါသည်။

                        အရည်အသွေးမြင့်မားသည့်  အီတလီ နိုင်ငံထုတ် Carraro ဂီယာဘောက် ဖြစ်ပါသည်။
                        လေးဘီးထွန်စက်များကို ချစ်မြတ်နိုးသည့် အိန္ဒိယစက်ရုံ Aceကုမ္ပဏီ ဥက္ကဌကြီး၏ စေတနာတို့ကြောင့်  တန်ဖိုးအသက်သာဆုံးနှင့် စွမ်းအားအမြင့်ဆုံး Ace အိန္ဒိယ လေးဘီးထွန်စက်များကို ဝယ်ယူသုံးစွဲကြပါစို့။
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature2')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">ထူးခြားချက်</span>
                    </div>
                    <svg
                        id="arrowFeature2"
                        class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="feature2" class="hidden border-t border-gray-200 bg-gray-50">
                    <div class="p-6 flex items-center justify-center min-h-[80px]">
                        <p class="text-base text-gray-700 leading-8 text-center">
                            အလုပ်ကြမ်းအလုပ်များအတွက် တော်တော်လေး သင့်တော်သော Engine ပါဝါ ပါဝင်ပါသည်။
                            •	Four Wheel Drive ဖြစ်သောကြောင့်
                        ခက်ခဲသောမြေမျက်နှာပြင်များ၊ ရေစိုနေရာများတွင် လွယ်ကူစွာ မောင်းနှင်နိုင်သည်။
                        ချောမွေ့စွာ ရပ်တန့်နိုင်ပြီး ဘရိတ်ဖိအားကောင်းမွန်မှု ရှိသည်။
                        မြန်မြန်ဆန်ဆန် ထွန်ယက်နိုင်ပြီး ကြီးမားသော စိုက်ပျိုးရေးစက်ကိရိယာများ ဆွဲတင်နိုင်စွမ်းရှိပါသည်။
                        မောင်းနှင်ရ လွယ်ကူပြီး သက်တောင့်သက်သာ ဖြစ်စေသည်။
                        </p>
                    </div>
                </div>
            </div>

           
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature3')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">Spare Parts ရရှိမှု လွယ်ကူခြင်း</span>
                    </div>
                    <svg
                        id="arrowFeature3"
                        class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="feature3" class="hidden border-t border-gray-200 bg-gray-50">
                    <div class="p-6 flex items-center justify-center min-h-[80px]">
                        <p class="text-base text-gray-700 leading-8 text-center">
                            အရည်အသွေးမြင့် စက်ပစ္စည်းများ အသုံးပြုထား၍ ကြာရှည်ခံနိုင်ပါသည်။စျေးနှုန်း သင့်တင့်ပြီး အရည်အသွေးကောင်းသော Tractor ဖြစ်ပါသည်။ACE Tractor များအတွက် အပိုပစ္စည်းများကို တပ်ဆင်ခြင်းနှင့် ပြုပြင်ခြင်း လွယ်ကူစွာ ပြုလုပ်နိုင်ပါ သည်။
                        </p>
                    </div>
                </div>
            </div>

           
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature4')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">လယ်ယာအထူးပြု</span>
                    </div>
                    <svg
                        id="arrowFeature4"
                        class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="feature4" class="hidden border-t border-gray-200 bg-gray-50">
                    <div class="p-6 flex items-center justify-center min-h-[80px]">
                        <p class="text-base text-gray-700 leading-8 text-center">
                            ကြီးမားသော လယ်ယာများအတွက်
                            လည်း အသုံးပြုနိုင်ပါသည်။ မည်သည့် မြေအမျိုးအစားတွင်မဆို မောင်းနှင်နိုင်ပါသည်။ ခက်ခဲသော မြေမျက်နှာပြင်များတွင် အသုံးပြုလိုသူများအတွက်လည်း အဆင်ပြေ စေ နိုင်ပါသည်။
                            တာရှည်ခံပြီး စွမ်းဆောင်ရည်မြင့် Tractor ကို ရှာဖွေနေသူများအတွက်အထူး သင့်လျော်ပါသည်။
                        </p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div> -->



</section>

<!-- Add JavaScript for toggle functionality -->
<script>
    function toggleSpecifications() {
        const content = document.getElementById('specificationsContent');
        const arrow = document.getElementById('specArrow');

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
</script>

<script>
    function toggleMainFeature(featureId) {
        const content = document.getElementById(featureId);
        const arrow = document.getElementById('arrow' + featureId.charAt(0).toUpperCase() + featureId.slice(1));

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
</script>
