<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $branchesArr = [
            [
                "id" => 1,
                "division_id" => 1,
                "eng_name" => __('messages.Yangon_workshop'),
                "mm_name" => __('messages.Yangon_workshop'),
                "slug" => "yaankonsetpyinalokyaon-myseinyaawinsetmhuzon6698a17c74153",
                "type" => "workshop",
                "branch_type" => "head office",
                "head_office" => "true",
                "google_address" => "https://maps.app.goo.gl/Cmyv7TS6Fh2YhA9t6",
                "eng_address" => __('messages.service_workshop_3'),
                "mm_address" => __('messages.service_workshop_3'),
                "image" => "",
                "img_url" => "https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/yangon_showroom.jpg",
                "division" => [
                    "id" => 1,
                    "state_id" => 1,
                    "mm_name" => __('messages.Yangon'),
                    "eng_name" => __('messages.Yangon'),
                    "slug" => "yangon",
                    "image" => "",
                    "img_url" => "https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/yangon_showroom.jpg"
                ],
                "branch_phone" => [
                    ["id" => 1, "branch_id" => 1, "phone" => "04222503"],
                    ["id" => 2, "branch_id" => 1, "phone" => "09429000422"],
                    ["id" => 3, "branch_id" => 1, "phone" => "09429717242"],
                    ["id" => 4, "branch_id" => 1, "phone" => "095199759"]
                ]
            ]
            // Add other branches here...
        ];

        return view('division', compact('branchesArr'));
    }
} 