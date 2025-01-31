<?php

namespace App\Http\Controllers;

use App\Services\WavePaymentService;
use Illuminate\Http\Request;

class WavePaymentController extends Controller
{
    private WavePaymentService $wavePayment;

    public function __construct(WavePaymentService $wavePayment)
    {
        $this->wavePayment = $wavePayment;
    }

    public function checkout(Request $request)
    {
        $items = [
            [
                'name' => $request->spare_name,
                'amount' => (float) $request->spare_price
            ]
        ];

        $paymentData = $this->wavePayment->preparePaymentData(
            items: $items,
            description: 'Purchase of ' . $request->spare_name
        );

        return view('wave.checkout', $paymentData);
    }

    public function callback(Request $request)
    {
        logger()->info('Wave Payment Callback', $request->all());
        return response()->json(['status' => 'success']);
    }

    public function return(Request $request)
    {
        return view('wave.return', ['status' => $request->status]);
    }
}