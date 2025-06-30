<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function category($category)
    {
        // Sample data for demonstration - replace with actual database queries
        $equipmentData = [
            'tractor' => [
                'title' => 'Four Wheels Tractor',
                'myanmar_title' => 'လေးဘီးထွန်စက်များ',
                'description' => 'Browse available four-wheel tractors in the second-hand market.',
                'myanmar_description' => 'လေးဘီးထွန်စက်များကို ရှာဖွေကြည့်ရှုပါ။',
                'items' => [
                    [
                        'id' => 1,
                        'name' => 'Yanmar 725',
                        'engine_hours' => '၂၂၉၇ နာရီ',
                        'notes' => 'ရှေ့ဂေါ် ၇ ဗန်းထယ်၊ရိုတာ‌‌ဗေတာအပါ၊လက်ရှိအသုံးပြုဆဲ',
                        'township' => 'ဓနုဖြူ',
                        'address' => 'ကိုစောအေးစမော့ (ဓနုဖြူ)',
                        'contact_person' => 'ကိုစောအေးစမော့',
                        'contact' => '09670607015',
                        'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_1275,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FvxjHc0fzl3qkwgmWYITp.jpg',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                    [
                        'id' => 2,
                        'name' => 'YM 357 FD',
                        'engine_hours' => '၃၃၅၁ နာရီ',
                        'notes' => 'လက်ရှိအသုံးပြုဆဲ',
                        'township' => 'ကန်ကြီးထောင့်မြို့နယ်',
                        'address' => 'ကန်ကြီးထောင့်မြို့နယ်',
                        'contact_person' => 'ကိုမန်းအောင်ငြိမ်း',
                        'contact' => '09456917178/09794512118',
                        'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_1275,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FNMaRnRrsi5CvYUoSdHTO.jpg',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Ace 7500',
                        'engine_hours' => '၃၄၈၇ နာရီ',
                        'notes' => 'လက်ရှိအသုံးပြုဆဲ',
                        'township' => 'ဓနုဖြူ',
                        'address' => 'ပန်းတနော်',
                        'contact_person' => 'ပန်းတနော်',
                        'contact' => '09790195749',
                        'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_1875,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FndSPwkdPt6avpuSx8kEc.jpg',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                ]
            ],
            'harvester' => [
                'title' => 'Combine Harvester',
                'myanmar_title' => 'ရိတ်သိမ်းခြွေလှေ့စက်များ',
                'description' => 'Find quality combine harvesters for your farming needs.',
                'myanmar_description' => 'သင့်လယ်ယာလုပ်ငန်းအတွက် အရည်အသွေးကောင်းသော ရိတ်သိမ်းခြွေလှေ့စက်များကို ရှာဖွေပါ။',
                'items' => [
                    [
                        'id' => 4,
                        'name' => 'Yanmar YH 700',
                        'engine_hours' => '၁၇၉၀နာရီ',
                        'notes' => 'လက်ရှိအသုံးပြုဆဲ',
                        'township' => 'ရန်ကုန်',
                        'address' => 'အမှတ်(C-9)၊ မြသရဖီလမ်း ၊ မြစိမ်းရောင်စက်မှု့ဇုန် ၊ လှိုင်သာယာ',
                        'contact_person' => 'မအေးအေးကြူ',
                        'contact' => '09798892680',
                        'image' => 'https://lh3.googleusercontent.com/d/1--xIjPzRfifI_vtCT3_EXIfOkdXFpKY_=w320?authuser=0',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                    [
                        'id' => 5,
                        'name' => 'Sifang ရိတ်ခြွေ-လှောင်ကန်',
                        'engine_hours' => '',
                        'notes' => '4C-1 (Model- 4LZ-4.0Z)လှောင်ကန်ပါ',
                        'township' => 'ရန်ကုန်',
                        'address' => 'အမှတ်(C-9)၊ မြသရဖီလမ်း ၊ မြစိမ်းရောင်စက်မှု့ဇုန် ၊ လှိုင်သာယာ',
                        'contact_person' => 'မအေးအေးကြူ',
                        'contact' => '09798892681',
                        'image' => 'https://lh3.googleusercontent.com/d/1cPXizGjL-unnI1Z16f66rLuTKXUv16dn=w320?authuser=0',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                    [
                        'id' => 6,
                        'name' => 'Sifang ရိတ်ခြွေ-အိတ်စွပ်',
                        'engine_hours' => '',
                        'notes' => '4B-4 (Model (4LZ-2.1Z)အိတ်စွပ်',
                        'township' => 'ရန်ကုန်',
                        'address' => 'အမှတ်(C-9)၊ မြသရဖီလမ်း ၊ မြစိမ်းရောင်စက်မှု့ဇုန် ၊ လှိုင်သာယာ',
                        'contact_person' => 'မအေးအေးကြူ',
                        'contact' => '09798892682',
                        'image' => 'https://lh3.googleusercontent.com/d/1Od82fZUNZfnl7sezUrgFAKPN5zlQeYp5=w320?authuser=0',
                        // Keep existing fields as fallback
                        'price' => '25,000,000 MMK',
                        'location' => 'Yangon',
                        'year' => '2018',
                        'condition' => 'Good'
                    ],
                ]
            ]
        ];

        if (!isset($equipmentData[$category])) {
            abort(404, 'Category not found');
        }

        $data = $equipmentData[$category];

        return view('market.category', compact('data', 'category'));
    }
}
