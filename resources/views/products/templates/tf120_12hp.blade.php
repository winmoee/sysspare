{{-- resources/views/products/gt-1.blade.php --}}
<style>
    /* For dropdown content */
#feature1 .p-6 {
    background: #f9fafb;
    border-radius: 0 0 0.5rem 0.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    margin: 0;
}
@media (min-width: 768px) {
    #feature1 .p-6 {
        min-height: 100px;
        padding-left: 3rem;
        padding-right: 3rem;
    }
}
</style>
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
</div>
</div>
</div>
</div>
</div>




    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
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
                                <span class="text-lg font-medium text-gray-700 text-left" style="font-size: 18px;">ခိုင်ခံ့ပြီး တာရှည်ခံသော တည်ဆောက်ပုံ</span>
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
                                    အရည်အသွေးမြင့်မားသောပစ္စည်းများနှင့် ခိုင်ခံ့သောဒီဇိုင်းဖြင့် တည်ဆောက်ထားသောကြောင့် ဤစီဖန်းဒီဇယ်အင်ဂျင်သည် ခက်ခဲသော စိုက်ပျိုးရေးနှင့် စက်မှုလုပ်ငန်းသုံးပတ်ဝန်းကျင်တွင် နေ့စဉ်အသုံးပြုမှုကို ခံနိုင်ရည်ရှိပြီး တာရှည်ခံကာ ယုံကြည်စိတ်ချရသော ဝန်ဆောင်မှုကို ပေးစွမ်းနိုင်ပါသည်။
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
                                <span class="text-lg font-medium text-gray-700 text-left">အားကောင်းသော မြင်းကောင်ရေ ၁၈ ကောင်အား</span>
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
                                မြင်းကောင်ရေ ၁၈ ကောင်အားရှိသောကြောင့် စိုက်ပျိုးရေးသုံး ထွန်စက်ငယ်များ၊ ရေစုပ်စက်များ၊ လျှပ်စစ်မီးစက်များနှင့် အခြားစက်မှုလုပ်ငန်းသုံး ကိရိယာများကို ထိရောက်စွာ စွမ်းအင်ပေးနိုင်ပါသည်။
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
                                <span class="text-lg font-medium text-gray-700 text-left">ဆီစားသက်သာသော လုပ်ဆောင်မှု</span>
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
                                ဒီဇယ်အင်ဂျင်ဖြစ်သောကြောင့် ဓာတ်ဆီအင်ဂျင်များထက် ဆီစားနှုန်းသက်သာပြီး လုပ်ငန်းလည်ပတ်မှုစရိတ်ကို များစွာသက်သာစေပါသည်။ လောင်စာဆီတစ်ဂါလန်တည်းဖြင့်ပင် ကြာရှည်စွာ အသုံးပြုနိုင်သောကြောင့် ငွေကုန်ကြေးကျ သက်သာစေပါသည်။
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
                                <span class="text-lg font-medium text-gray-700 text-left">ရိုးရှင်းသော လေအေးပေးစနစ် </span>
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
                                လေအေးပေးစနစ်ကို အသုံးပြုထားသောကြောင့် ရေတိုင်ကီ သို့မဟုတ် အအေးခံအရည်များ ထည့်သွင်းရန်မလိုသောကြောင့် ပြုပြင်ထိန်းသိမ်းမှုမှာ အလွန်ရိုးရှင်းပါသည်။ ထို့အပြင် ပူပြင်းသော ရာသီဥတုတွင်လည်း အပူလွန်ကဲခြင်းမရှိဘဲ တာရှည်ခံစွာ အသုံးပြုနိုင်ပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 5 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            onclick="toggleMainFeature('feature5')"
                            class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                        >
                            <div class="flex items-center">
                                <span class="text-lg font-medium text-gray-700 text-left"> သက်သေပြပြီးသော စီဖန်းနည်းပညာ</span>
                            </div>
                            <svg
                                id="arrowFeature5"
                                class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="feature5" class="hidden border-t border-gray-200 bg-gray-50">
                            <div class="p-6 flex items-center justify-center min-h-[80px]">
                                <p class="text-base text-gray-700 leading-8 text-center">
                                စီဖန်းအမှတ်တံဆိပ်၏ ယုံကြည်စိတ်ချရပြီး တာရှည်ခံသော ဒီဇယ်အင်ဂျင်များကို ထုတ်လုပ်ရာတွင် သက်သေပြပြီးသော နည်းပညာနှင့် အတွေ့အကြုံများစွာရှိပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 6 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            onclick="toggleMainFeature('feature6')"
                            class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                        >
                            <div class="flex items-center">
                                <span class="text-lg font-medium text-gray-700 text-left"> စွယ်စုံသုံးနိုင်သော အသုံးချမှုများ                            </span>
                            </div>
                            <svg
                                id="arrowFeature6"
                                class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="feature6" class="hidden border-t border-gray-200 bg-gray-50">
                            <div class="p-6 flex items-center justify-center min-h-[80px]">
                                <p class="text-base text-gray-700 leading-8 text-center">
                                ဤအင်ဂျင်သည် စိုက်ပျိုးရေးသုံးပစ္စည်းများမှ လျှပ်စစ်မီးစက်များအထိ စက်ကိရိယာများနှင့် လုပ်ငန်းအမျိုးမျိုးကို စွမ်းအင်ပေးနိုင်ပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 7 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            onclick="toggleMainFeature('feature7')"
                            class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                        >
                            <div class="flex items-center">
                                <span class="text-lg font-medium text-gray-700 text-left">  ရိုးရှင်းပြီး ယုံကြည်စိတ်ချရသော ဒီဇိုင်း                            </span>
                            </div>
                            <svg
                                id="arrowFeature7"
                                class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="feature7" class="hidden border-t border-gray-200 bg-gray-50">
                            <div class="p-6 flex items-center justify-center min-h-[80px]">
                                <p class="text-base text-gray-700 leading-8 text-center">
                                ရှုပ်ထွေးမှုမရှိသော စက်ပိုင်းဆိုင်ရာဒီဇိုင်းသည် ပြုပြင်ထိန်းသိမ်းရန် ပိုမိုလွယ်ကူစေပြီး အထူးသဖြင့် ခက်ခဲသောပတ်ဝန်းကျင်တွင် ချို့ယွင်းမှုနည်းပါးစေပါသည်။
                            </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

   <div class="main-features">
    {{-- <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
        <!-- Specification Dropdown Button -->
        <button

            onclick="toggleSpecifications()"
            class="w-full flex items-center justify-between text-white px-4 py-3 rounded-lg focus:outline-none transition-colors duration-200"
        >
            <span class="text-2xl font-semibold" style="color: #000; font-size: 18px;">အသေးစိတ်အချက်အလက်များ</span>
            <svg
                id="specArrow"
                class="w-6 h-6 transform transition-transform duration-200"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                style="color: #000;"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <!-- Specification Content -->
        <div id="specificationsContent" class="hidden mt-4 transition-all duration-300 ease-in-out">
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-700 text-white">
                            <th colspan="2" class="border border-gray-300 px-2 py-2 font-semibold">မော်ဒယ်</th>

                            <th class="border border-gray-300 px-2 py-2 font-semibold">YM358R</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- Engine Section -->
                        <tr class="bg-gray-100">
                            <td rowspan="8" class="border border-gray-300 px-2 py-2 font-medium text-center">အင်ဂျင်</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">အမှတ်အသား</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">YANMAR</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">မော်ဒယ်</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">4TNV98S</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">အမျိုးအစား</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">လေးလုံးထိုး ရေအေး၊ တိုက်ရိုက်ဆီဖျန်းစနစ်၊ ရေအေးအင်ဂျင်</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">ဆလင်ဒါ အရေအတွက်</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">4</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">ဆလင်ဒါ အချင်း [မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">98 x 110</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">ဆလင်ဒါ ထုထည် [လီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">3.319</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">မြင်းကောင်ရေ [kW (PS) / rpm]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">57.6/56.9 (42.4)</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center">ဆီလှောင်ကန် [လီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">50</td>
                        </tr>

                        <!-- Dimensions Section -->
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center" rowspan="7">အတိုင်းအတာများ ( အလျား x အနံ x အမြင့် )</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">Overall Length [mm]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">3380</td>

                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">စက်အလျား [မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">1670</td>

                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 text-center">စက်အမြင့် [မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">2390 (2480)</td>

                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">ဘီးအကွာအဝေး [မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">1970</td>
                        </tr>
                         <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 text-center">မြေပြင်ကင်းလွတ် အမြင့် [မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">425</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">ဘီးအကွာအဝေး ရှေ့[မီလီမီတာ]</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">1264 (Standard)/1404</td>

                        </tr>
                         <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 text-center">ဘီးအကွာအဝေး နောက်[မီလီမီတာ]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">1225/1338 (Standard) /1406/1520</td>

                        </tr>

                        <!-- Weight Section -->
                        <tr class="bg-white">
                            <td colspan="2" class="border border-gray-300 px-2 py-2 font-medium text-center">အလေးချိန် [ကီလိုဂရမ်]</td>


                            <td class="border border-gray-300 px-2 py-2 text-center">1850</td>

                        </tr>

                        <!-- Tires Section -->
                         <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center" rowspan="10">မောင်းနှင်််််််််မှုစနစ်</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">တာယာ ရှေ့ [inch]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">8-18</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">တာယာ နောက် [inch]</td>

                            <td class="border border-gray-300 px-2 py-2 text-center">13.6-28H</td>

                        </tr>
                         <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 text-center">ကလပ်</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">အခြေခြောက် အမျိုးအစား၊ တစ်ထပ်တည်း</td>
                        </tr>
                         <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">ဘရိတ်</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">ဆီစိမ်ဘရိတ်</td>
                        </tr>
                        <tr class="bg-gray-100">
                             <td class="border border-gray-300 px-2 py-2 text-center">စတီယာရင်</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">ပါဝါစတီယာရင်</td>
                        </tr>
                         <tr class="bg-white">
                             <td class="border border-gray-300 px-2 py-2 text-center">ပင်မဂီယာ</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">စင်ခရိုမက်ရှ်</td>
                        </tr>
                         <tr class="bg-gray-100">
                             <td class="border border-gray-300 px-2 py-2 text-center">နောက်ဂီယာ</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">စံ</td>
                        </tr>
                        <tr class="bg-white">
                             <td class="border border-gray-300 px-2 py-2 text-center">ဂီယာအရေအတွက်</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">ရှေ့ ၈ ချက်၊ နောက် ၈ ချက်</td>
                        </tr>
                        <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-2 py-2 text-center">အမြန်နှုန်း ရှေ့သို့ [km/hr]</td>

                             <td class="border border-gray-300 px-2 py-2 text-center">2.7-30.8</td>

                        </tr>
                        <tr class="bg-white">
                        <td class="border border-gray-300 px-2 py-2 text-center">အမြန်နှုန်း နောက်သို့ [km/hr]</td>

                             <td class="border border-gray-300 px-2 py-2 text-center">2.7-30.8</td>

                        </tr>

                        <!-- 3-Point Hitch Section -->


                        <tr class="bg-gray-100">
                            <td class="border border-gray-300 px-2 py-2 font-medium text-center" rowspan="4">ဟိုက်ဒရောလစ်စနစ်</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">လိုက်ပါပစ္စည်း ထိန်းချုပ်မှုစနစ်</td>
                             <td colspan="3" class="border border-gray-300 px-2 py-2 text-center">ပုံစံစနစ် ထိန်းချုပ်မှုစနစ်</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-2 text-center">နေရာချထားမှုနှင့် ဆွဲအားထိန်းချုပ်မှု *<br>အပေါက်အရွယ်အစားအမျိုးအစား</td>
                            <td class="border border-gray-300 px-2 py-2 text-center">Category 1</td>

                        </tr>
                        <tr class="bg-gray-100">
                             <td class="border border-gray-300 px-2 py-2 text-center">အနိမ့်ဆုံးချိတ်ဆက်တံ အဆုံး မှ [kN (kgf)]</td>
                             <td colspan="3" class="border border-gray-300 px-2 py-2 text-center">14.2 (1450)</td>
                        </tr>
                        <tr class="bg-white">
                             <td class="border border-gray-300 px-2 py-2 text-center">နောက် ၂၄ လက်မနေရာတွင်မတင်နိုင်စွမ်း [kN (kgf)]</td>
                             <td colspan="3" class="border border-gray-300 px-2 py-2 text-center">12.2 (1250)</td>
                        </tr>

                        <!-- PTO Section -->
                         <tr class="bg-gray-100">
                             <td class="border border-gray-300 px-2 py-2 font-medium text-center" rowspan="4">စွမ်းအင်ထုတ်ယူသုံးစွဲခြင်း (PTO)</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">အမျိုးအစား</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">သီးသန့်</td>
                        </tr>
                        <tr class="bg-white">
                             <td class="border border-gray-300 px-2 py-2 text-center">ရှပ် အရွယ်အစား</td>
                             <td class="border border-gray-300 px-2 py-2 text-center">SAE 1-3/8, 6-Splines</td>
                        </tr>
                        <tr class="bg-gray-100">
                             <td class="border border-gray-300 px-2 py-2 text-center">ဂီယာ ၁ [PTO အမြန်နှုန်း / အင်ဂျင် RPM]</td>

                             <td class="border border-gray-300 px-2 py-2 text-center">540/2096</td>
                        </tr>
                        <tr class="bg-white">
                             <td class="border border-gray-300 px-2 py-2 text-center">ဂီယာ ၂ [PTO အမြန်နှုန်း / အင်ဂျင် RPM]</td>

                             <td class="border border-gray-300 px-2 py-2 text-center">750/2092</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
   </div>


    </div>
</div>


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

