<?php

namespace App\Services;

class WavePaymentService
{
    private string $merchantId;
    private string $secretKey;
    private string $merchantName;
    private string $backendUrl;
    private string $frontendUrl;

    public function __construct()
    {
        $this->merchantId = config('services.wave.merchant_id', 'test_merchant');
        $this->secretKey = config('services.wave.secret_key', 'test_secret');
        $this->merchantName = config('services.wave.merchant_name', 'Test Store');
        $this->backendUrl = config('services.wave.backend_url', 'http://localhost:8000/wave/callback');
        $this->frontendUrl = config('services.wave.frontend_url', 'http://localhost:8000/wave/return');
    }

    public function preparePaymentData(array $items, string $description)
    {
        $totalAmount = collect($items)->sum('amount');
        $orderId = $this->generateOrderId();
        
        $data = [
            'merchant_name' => $this->merchantName,
            'merchant_id' => $this->merchantId,
            'timeToLiveSeconds' => 300,
            'order_id' => $orderId,
            'amount' => $totalAmount,
            'backend_result_url' => $this->backendUrl,
            'frontend_result_url' => $this->frontendUrl,
            'merchant_reference_id' => "wave-{$orderId}",
            'payment_description' => $description,
        ];

        $data['hash'] = $this->generateHash($data);

        return [
            'data' => $data,
            'items' => $items
        ];
    }

    private function generateHash(array $data): string
    {
        return hash_hmac('sha256', implode('', [
            $data['timeToLiveSeconds'],
            $data['merchant_id'],
            $data['order_id'],
            $data['amount'],
            $data['backend_result_url'],
            $data['merchant_reference_id'],
        ]), $this->secretKey);
    }

    private function generateOrderId(): string
    {
        return (string) rand(1000000, 9999999);
    }
}