{{-- resources/views/products/gt-1.blade.php --}}
<div class="specification-container">
    <table class="table-striped">
        <tbody>
            <!-- <tr class="text-grey-color">
                <td class="py-1 fs-6">Horse Power</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">57.6PS
                </td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Weight</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1850 kg
                </td>
            </tr> -->
            {{-- <tr class="text-grey-color">
                <td class="py-1 fs-6">Wheel</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">800 x 275 (mm)</td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Width</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1055 - 1205 (mm)</td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Height</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1225 (mm)</td>
            </tr> --}}
        </tbody>
    </table>
</div>


<div class="bg-white rounded-lg shadow-lg p-6">
    <br>
    <h6 class="text-xl font-semibold text-gray-800 mb-4">
    အဓိကအင်္ဂါရပ်များ
    </h6>
        <!-- Spare Section -->
    <div class="max-w-7xl mx-auto py-6 lg:py-8">
        <div class="space-y-4">
            <!-- Dropdown 1 -->
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
                            ACE Company ရဲ့ မြင့်မားတဲ့စွမ်းအား၊ ကြီးမားတဲ့အလုပ်များအတွက် အထူးဒီဇိုင်းထုတ်ထားတဲ့ Tractor တစ်စင်းဖြစ်ပါတယ်။ ACE DI 9000 ဟာ 4wheel tractor ပါဝင်ပြီး စိုက်ပျိုးရေး လုပ်ငန်းကြီးများ၊ မြေတူးဖော်မှုများအတွက် သင့်လျော်တဲ့ စက်ယာဉ်တစ်စင်းဖြစ်ပါတယ်။
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dropdown 2 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature2')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">စျေးနှုန်းနှင့် အရည်အသွေး ကောင်းမွန်ခြင်း</span>
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

စျေးနှုန်းသင့်တင့်ပြီး လယ်ထွန်အတွက် အသုံးချမှုမှာ ယုံကြည်စိတ်ချရသည်။ထုတ်လုပ်မှုခိုင်မာပြီး ကြာရှည်ခံစွာအသုံးခံ နိုင်ပါသည်။ သစွမ်းအားအပြည့် လယ်ယာစက်တစ်စင်းဖြစ်ပြီး နေ့စဉ် လယ်ထွန်လုပ်ငန်းများအတွက် ယုံကြည်စိတ်ချစွာ အသုံးပြုနိုင်ပါသည်။
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dropdown 3 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature3')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">လယ်ယာ အထူး အသုံးပြုနိုင်ခြင်း</span>
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


	ကြီးမားသော လယ်ယာများ၊ မြေတူးဖော်မှုများနှင့် အလုပ်ပြင်းများတွင် ထိရောက်စွာ အသုံးပြုနိုင်သည်။စိုက်ပျိုးရေး လုပ်ငန်းကြီးများတွင် အသုံးပြုရာတွင် အထူးထိရောက်သည်။ခက်ခဲသောမြေမျက်နှာပြင်များ၊ အနွမ်းမြေများတွင် စွမ်းအားတက်စေပြီး မောင်းနှင်ရ လွယ်ကူစေပါသည်။
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dropdown 4 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature4')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">အသုံးပြုရ လွယ်ကူခြင်း</span>
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

                            Power Steering နှင့် Dual Clutch ကြောင့် မောင်းနှင်ရ လွယ်ကူသည်။Synchromesh Gearbox ကြောင့် Gear ပြောင်းရာတွင် အသံနည်းပြီး အဆင်ပြေချောမွေ့စေပါသည်။လောင်စာ သုံးနှုန်း သက်သာပြီး အချိန်တိုအတွင်း ပိုမိုအလုပ်လုပ်နိုင်ပါသည်။
                        </p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>



    <!-- SECOND SECTION -->
    <!-- Section removed as per user request -->

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
