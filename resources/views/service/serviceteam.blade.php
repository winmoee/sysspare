{{-- resources/views/services/team.blade.php --}}
<x-app-layout>
    <!-- Header Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-2xl font-semibold text-green-600">
                {{ __('messages.service_team_1') }}
                {{-- SYS ဆားဗစ်အဖွဲ့မှ ပံ့ပိုးပေးသောဝန်ဆောင်မှုများ --}}
                {{-- Services provided by Seinn Yaung So (SYS) service team --}}
            </h3>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_2') }}
                {{-- ၁။ စက်အသုံးမပြုမီ သင်တန်းပေးခြင်း။ (Pre-Delivery Training) --}}
                {{-- 1. Pre-Delivery Training (Training provided before using the machine) --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_3') }}
                {{-- စက်ကြီးများအား မှန်ကန်စွာနှင့်ဘေးကင်းလုံခြုံစွာ အသုံးပြုနိုင်ရန် စက်ကိုင်တွယ်မောင်းနှင်မှုသင်တန်းများကို စက်အသုံးမပြုမီ စရိတ်ငြိမ်းသင်ကြားပေးပါသည်။ --}}
                {{-- We provide free training on how to operate large machines correctly and safely before they are used. --}}
            </p>
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/svc1.webp"
                 alt="Training"
                 class="w-full rounded-lg">
        </div>

        <!-- Service 2 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_4') }}
                {{-- ၂။ စက်မအပ်မီ စစ်ဆေးပေးခြင်း။ (Pre-Delivery Inspection - PDI) --}}
                {{-- 2. Pre-Delivery Inspection (PDI) – Inspection before handing over the machine --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_5') }}
                {{-- စက်ဝယ်ယူသူများအနေဖြင့် မိမိဝယ်ယူသောစက်အသစ်ကို ချွတ်ယွင်းမှုကင်းစွာဖြင့် စိတ်ချလက်ချထုတ်ယူနိုင်ရန် စနစ်တကျစစ်ဆေးပြီး အပ်နှံပေးပါသည်။ --}}
                {{-- We systematically inspect and deliver new machinery to ensure that customers can safely receive their new machinery without any defects. --}}
            </p>
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/svc2.webp"
                 alt="Inspection"
                 class="w-full rounded-lg">
        </div>

        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_6') }}
                {{-- ၃။ အချိန်အပိုင်းအခြားအလိုက် စစ်ဆေး ချိန်ညှိ ပြုပြင်ပေးခြင်း။ (Periodical Inspection - PI) --}}
                {{-- 3. Periodical Inspection (PI) – Regular inspection, adjustment, and maintenance --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_7') }}
            {{-- ရုတ်တရက်စက်ပျက်ခြင်းမှကာကွယ်ရန်၊စက်သက်တမ်းရှည်စွာအသုံးပြုနိုင်ရန်နှင့်စက်စွမ်းအားပြည့်လည်ပတ်မောင်းနှင်နိုင်ရန် အချိန်အပိုင်းအခြားအလိုက် စစ်ဆေးခြင်းနှင့် ဆီများလဲလှယ်ခြင်း၊ ချိန်ညှိခြင်း၊ သန့်ရှင်းရေး ပြုလုပ်ခြင်းများကို စနစ်တကျပြုလုပ်ရန် အထူးအရေးကြီးပါသည်။ --}}
            {{-- To prevent sudden machine breakdowns, extend the machine's lifespan, and ensure optimal performance,
            it is crucial to conduct regular inspections, oil changes, adjustments, and cleaning in a systematic manner. --}}
            <br>
            <br>
            {{ __('messages.service_team_8') }}
            {{-- ထွန်စက်များအတွက် လက်ခအခမဲ့ ဆားဗစ် (၅) ကြိမ် (နာရီ ၅၀၊ ၃၀၀၊ ၆၀၀၊ ၉၀၀ နှင့် ၁၂၀၀) ရိတ်သိမ်းခြွေလှေ့စက်များအတွက် လက်ခအခမဲ့ဆားဗစ် (၄) ကြိမ် (နာရီ ၅၀၊ ၂၅၀၊ ၅၀၀ နှင့် ၈၀၀)
            တို့တွင် ကွင်းထဲအရောက် လက်ခအခမဲ့ ဝန်ဆောင်မှုပေးပါသည်။ --}}
            {{-- For tractors, five free labor services are provided at 50, 300, 600, 900, and 1200 hours.

            For harvesters, four free labor services are provided at 50, 250, 500, and 800 hours.

            On-site free labor service is available for these scheduled maintenance intervals. --}}
            <br>
            <br>
            {{ __('messages.service_team_9') }}
            {{-- စက်အသုံးပြုသူများအနေဖြင့်လည်း တက်ကြွစွာပူးပေါင်းပါဝင်ခြင်းဖြင့် အာမခံကာလကျော်လွန်ချိန်တွင် မိမိတို့ကိုယ်တိုင် စနစ်တကျ စစ်ဆေးချိန်ညှိပြုပြင်နိုင်မည်ဖြစ်ပြီး ကုန်ကျစရိတ်သက်သာစွာဖြင့် စက်သက်တမ်းအပြည့် စိတ်ချမ်းချမ်းသာသာ အသုံးပြုနိုင်မည်ဖြစ်ပါသည်။ --}}
            {{-- By actively participating, machine users can systematically check and adjust their own machines after the warranty period,
            and use them for the entire life of the machine at a low cost. --}}
            </p>
        </div>

        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_10') }}
            {{-- ၄။ အာမခံကာလအတွင်း စက်ချွတ်ယွင်းမှုအတွက်သက်ဆိုင်ရာစက်၏ အာမခံမူဝါဒဖြင့် ပြင်ဆင်ပေးခြင်း။ (Warranty) --}}
            {{-- 4. Warranty - Repairs for machine defects during the warranty period according to the warranty policy of the relevant machine --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_11') }}
            {{-- စက်အား ပုံမှန်စစ်ဆေးချိန်ညှိနေပြီး စက်အားမှန်ကန်စွာအသုံးပြုနေသော်လည်း စက်ရုံဘက်မှအမှားကြောင့် စက်ချွတ်ယွင်းမှုတစုံတရာဖြစ်ပေါ်လာခဲ့လျှင် စိမ်းရောင်စိုဆားဗစ်အဖွဲ့မှ သေချာစွာစစ်ဆေးပြီးလျှင်
            သက်ဆိုင်ရာစက်၏အာမခံမူဝါဒအတိုင်း ပျက်စီးသွားသောစက်အစိတ်အပိုင်းများအား ပြုပြင်ပေးခြင်း သို့မဟုတ် လဲလှယ်ပေးခြင်းတို့ကိုအခမဲ့ပြုလုပ်ပေးမည်ဖြစ်ပါသည်။ --}}
            {{-- If the machine is regularly inspected, properly maintained, and used correctly, but a defect occurs due to a manufacturing fault,
            the Seinn Yaung So (SYS) service team will thoroughly inspect the issue. According to the machine’s warranty policy,
            defective parts will be either repaired or replaced free of charge. --}}
            <br>
            <br>
            {{ __('messages.service_team_12') }}
            {{-- အာမခံအပြည့်အ၀ရနိုင်ရန်အတွက် စက်အားလွဲမှားစွာအသုံးပြုခြင်းမရှိကြောင်း အတည်ပြုရန်လိုအပ်ပါသဖြင့် လိုအပ်နေသောအချက်အလက်များရရှိရန် ဝယ်ယူသူဘက်မှ ကုမ္ပဏီ၏ညွှန်ကြားချက်များအတိုင်း တိကျစွာ မဖြစ်မနေပူးပေါင်းပါဝင်ရန် အထူးလိုအပ်ပါသည်။ --}}
            {{-- In order to receive a full warranty, it is necessary to confirm that the device has not been misused,
            so it is imperative that the customer strictly cooperates with the company's instructions to obtain the necessary information. --}}
            </p>
        </div>
        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_13') }}
            {{-- ၅။ အာမခံကျော်လွန်ပြီးသောစက်များအား ကွင်းထဲအရောက်စက်ပြင်ဝန်ဆောင်မှုပေးခြင်းနှင့်စက်ပြင်အလုပ်ရုံများတွင် အလုံးစုံပြုပြင်ပေးခြင်း။ (Workshop) --}}
            {{-- 5. Workshop Service – On-site repair services for machines beyond the warranty period and comprehensive repairs at our workshops --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_14') }}
            {{-- အာမခံကျော်လွန်ပြီးသောစက်များအား ပြင်ဆင်ရန်လိုအပ်ပါက စိမ်းရောင်စိုကုမ္ပဏီမှ ကျွမ်းကျင်စက်ဆရာများကိုယ်တိုင် သင့်တော်သောနှုန်းထားများဖြင့် ကွင်းထဲအရောက်စက်ပြင်ဝန်ဆောင်မှုပေးပါသည်။ --}}
            {{-- If machines beyond the warranty period require repairs, Seinn Yaung So (SYS) company’s skilled technicians will provide on-site repair services at reasonable rates. --}}
            <br>
            <br>
            {{ __('messages.service_team_15') }}
            {{-- ထို့အပြင် ရန်ကုန်မြို့နှင့် ပုသိမ်မြို့များရှိ စက်ပြင်အလုပ်ရုံများတွင် စက်ကိုအပ်နှံကာ အချိန်တိုအတွင်း စစ်မှန်သော အပိုပစ္စည်းများဖြင့် အသစ်နီးပါးပြန်လည်ကောင်းမွန်အောင်  ကျွမ်းကျင်ဝါရင့် စက်ပြင်ဆရာကြီးများနှင့် စျေးနှုန်းသက်သာစွာ ပြုပြင်ဝန်ဆောင်မှု ပေးပါသည်။ --}}
            {{-- Additionally, repair workshops in Yangon and Pathein provide affordable and high-quality repair services
             by experienced technicians. Using only genuine spare parts, these skilled technicians will restore the machines
              to near-new condition, ensuring optimal performance after the repair. --}}
            </p>
        </div>
        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_16') }}
            {{-- ၆။ လုပ်ငန်းခွင် ရာသီမတိုင်မှီ ဆားဗစ်ပွဲတော်အစီအစဉ် (Service Caravan) ဖြင့် စက်ပြင်ဝန်ဆောင်မှုပေးခြင်း။ --}}
            {{-- 6. Service Caravan – Providing machine repair services through the Pre-Season Service Program before the working season begins --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_17') }}
            {{-- စက်အား အဆက်မပြတ်အသုံးပြုရသည့် ရာသီချိန်အတွင်း၌ စက်ပျက်ခြင်းကြောင့် လုပ်ငန်းနှောင့်နှေးခြင်းနှင့် ငွေကြေးဆုံးရှုံးခြင်းများအား ထိရောက်စွာကာကွယ်နိုင်ရန်လုပ်ငန်းခွင် ရာသီမတိုင်မှီ သက်ဆိုင်ရာဆားဗစ်အဖွဲ့များနှင့် ပူးပေါင်းပြီး စက်များ၏နီးစပ်ရာနေရာများတွင် စရိတ်သက်သာစွာဖြင့် စုပေါင်းပြုပြင်ပေးပါသည်။ --}}
            {{-- To effectively prevent delays and financial losses due to machine breakdowns during the season when the machine is used continuously, we cooperate with relevant service teams before the work season and provide cost-effective joint repairs at nearby locations. --}}
            </p>
        </div>
        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_18') }}
            {{-- ၇။ သဘာ၀ဘေးအန္တရာယ်၊ မတော်တဆဖြစ်စဉ်များကြောင့် ထိခိုက်ဆုံးရှုံးမှုများအတွက် အာမခံကုမ္ပဏီ ( FNI ) နှင့် အာမခံကိစ္စများဆောင်ရွက်ပေးခြင်း။ --}}
            {{-- 7. Insurance Assistance – Handling insurance matters with FNI Insurance Company for damages and losses caused by natural disasters or accidents --}}
            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_19') }}
            {{-- မမျှော်မှန်းနိုင်သော ကိစ္စရပ်များနှင့် မတော်တဆအခြေအနေများကြောင့်ဖြစ်ပေါ်လာသော ပျက်စီးဆုံးရှုံးမှုများကို တစ်စိတ်တစ်ပိုင်းသော်လည်းကောင်း အပြည့်အ၀သော်လည်းကောင်း ကုစားဖြည့်ဆည်းပေးနိုင်ရန် အာမခံကိစ္စရပ်များအတွက် စက်ပိုင်အား အာမခံကုမ္ပဏီများ(First National Insurance )နှင့်ချိတ်ဆက်ကူညီဆောင်ရွက်ပေးပါသည်။ --}}
            {{-- To help cover losses caused by unexpected incidents or accidents,
            we assist machine owners in coordinating with First National Insurance (FNI)
            to process insurance claims, whether for partial or full compensation. --}}
            </p>
        </div>
        <!-- Service # -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.service_team_20') }}
            {{-- ၈။ စက်အသုံးပြုနေသူများအား အခြေခံစက်ပြင်သင်တန်းပေးခြင်း (Basic Repair Training) --}}
            {{-- 8. Basic Repair Training – Providing fundamental repair training for machine users --}}

            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.service_team_21') }}
            {{-- အာမခံကာလကျော်လွန်ပြီးနောက် အသေးစားနှင့်အလတ်စားပြင်ဆင်မှုများအား စက်အသုံးပြုသူများကိုယ်တိုင် စနစ်တကျလုပ်ဆောင်နိုင်ရန် အခြေခံစက်ပြင်သင်တန်းကို အခမဲ့ သင်ကြားပေးပါသည်။--}}
            {{-- A free Basic Repair Training is provided to machine users,
            enabling them to systematically perform minor and medium-scale repairs on their own after the warranty period has expired. --}}
        </p>
        </div>

    </div>

    <!-- Additional content sections can be added here... -->

 <!-- Footer Video Section -->

 <div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="aspect-w-16 aspect-h-9">
        <iframe
            class="w-full h-96 rounded-lg"
            src="https://www.youtube.com/embed/18V3EpKfIDA"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

            <!-- Contact Section -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h4 class="text-xl font-semibold text-green-600 mb-4">
            {{ __('messages.contact_us') }}
            {{-- ဆက်သွယ်ရန် --}}
            {{-- Contacts --}}
        </h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Contact 1 -->
            <div class="p-4 border rounded-lg">
                <h5 class="font-medium text-gray-600">
                    {{ __('messages.contact_description_1') }}
                    {{-- မခင်မျိုးသန်း
                    Ma Khin Myo Than --}}
                </h5>
                <br>
                <p class="text-sm text-gray-600">Hotline - 09444742030</p>
                <div class="mt-2">
                    <button onclick="copyPhoneNumber('09444742030', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                        <span class="copy-button-text">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                            </svg>
                            Copy Number
                        </span>
                    </button>
                </div>
            </div>

            <div class="p-4 border rounded-lg">
                <h5 class="font-medium text-gray-600">
                    {{ __('messages.contact_description_2') }}
                    {{-- မချယ်ရီထား
                    Ma Cherry Htar --}}
                </h5>
                <br>
                <p class="text-sm text-gray-600">Complaint - 09425833040</p>
                <div class="mt-2">
                    <button onclick="copyPhoneNumber('09425833040', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                        <span class="copy-button-text">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                            </svg>
                            Copy Number
                        </span>
                    </button>
                </div>
            </div>
            <div class="p-4 border rounded-lg">
                <h5 class="font-medium text-gray-600">
                    {{ __('messages.contact_description_3') }}
                    {{-- ကိုပြည့်ဖြိုးထွန်း
                    Ko Pyae Phyo Htun --}}
                </h5>
                <br>
                <p class="text-sm text-gray-600">Supervisor - 09798892685</p>
                <div class="mt-2">
                    <button onclick="copyPhoneNumber('09798892685', this)" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center gap-2">
                        <span class="copy-button-text">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                            </svg>
                            Copy Number
                        </span>
                    </button>
                </div>
            </div>

            <!-- Add other contacts... -->
        </div>
    </div>
</div>

</x-app-layout>
@include('layouts.footer')
