@extends('layouts.wave')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg">
        <div class="p-6">
            <h2 class="text-2xl font-bold mb-6">Confirm Payment</h2>

            <form action="https://wavepay-payment-gateway.com/payment" method="POST">
                {{-- Payment Data --}}
                @foreach($data as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach

                {{-- Items Data --}}
                <input type="hidden" name="items" value="{{ json_encode($items) }}">

                {{-- Order Summary --}}
                <div class="mb-6">
                    <div class="border-b pb-4">
                        <h3 class="text-lg font-semibold mb-4">Order Summary</h3>
                        <div class="flex justify-between mb-2">
                            <span>{{ $items[0]['name'] }}</span>
                            <span>{{ number_format($items[0]['amount']) }} MMK</span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between mt-4 font-bold">
                        <span>Total</span>
                        <span>{{ number_format($data['amount']) }} MMK</span>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
                    Confirm Payment with Wave
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
