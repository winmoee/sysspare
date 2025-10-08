@php
$serviceCards = [
[
'url' => '/serviceteam',
'img' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_675,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FrVLgugAghG0Q4VIuyQnT%2Fpub%2FMEnv3wFiQurv5CgPgF1h.jpg',
'title' => 'service_team',
],
[
'url' => '/serviceworkshop',
'img' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_675,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FrVLgugAghG0Q4VIuyQnT%2Fpub%2FnXoXOJe0JAKtWW3e77MY.jpg',
'title' => 'service_workshop',
],
[
'url' => '/market',
'img' => 'https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/kJVfUiw71DqocDSfGNee.webp',
'title' => 'second_hand_market',
],
[
'url' => '/feedback',
'img' => 'https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/nhPTrSfL9qirJwXCtdDs.webp',
'title' => 'service_and_products_fdb',
],
[
'url' => '/transport',
'img' => 'https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/Ezn6hY8LL6sbAjCObZNT.webp',
'title' => 'outside_transportation',
],
[
'url' => '/serviceaward',
'img' => 'https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/sfh2rB5Al9D4u2l9XVQr.webp',
'title' => 'service_award',
],
];
@endphp


@foreach($serviceCards as $card)
<a href="{{ url($card['url']) }}" class="bg-white rounded-lg p-4 shadow text-center hover:shadow-lg transition-shadow">
    <img src="{{ $card['img'] }}"
        alt="{{ __('messages.' . $card['title']) }}"
        class="w-full h-52 md:h-72 object-cover rounded-full mx-auto mb-2">
    <p class="text-green-600 font-medium mb-1">{{ __('messages.' . $card['title']) }}</p>
    <p class="text-sm text-gray-600">
        @if(app()->getLocale() === 'en')
        ({{ __('messages.' . $card['title'], [], 'my') }})
        @else
        ({{ __('messages.' . $card['title'], [], 'en') }})
        @endif
    </p>
</a>
@endforeach
