<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Seinn Yaung So - စိမ်းရောင်စို</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="icon" type="image/png" sizes="32x32" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png">



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script>
    function copyPhoneNumber(phoneNumber, button) {
        // Create temporary textarea
        const textarea = document.createElement('textarea');
        textarea.value = phoneNumber;
        document.body.appendChild(textarea);
        textarea.select();

        try {
            // Copy the text
            document.execCommand('copy');

            // Get the span element within this specific button
            const buttonText = button.querySelector('.copy-button-text');

            // Update button text and icon temporarily
            buttonText.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Copied!`;

            // Reset after 2 seconds
            setTimeout(() => {
                buttonText.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-12a2 2 0 00-2-2h-2M8 5a2 2 0 002 2h4a2 2 0 002-2M8 5a2 2 0 012-2h4a2 2 0 012 2" />
                    </svg>
                    Copy Number`;
            }, 2000);
        } catch (err) {
            console.error('Failed to copy text:', err);
        }

        // Remove temporary textarea
        document.body.removeChild(textarea);
    }
    </script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/carousel.css', 'resources/js/carousel.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- LANGUAGE SWITCH FORCER -->
        @php
        // Force locale to match session at view rendering time
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
        @endphp
    
        <div class="hidden">
        Current Locale: {{ app()->getLocale() }}
        Session Locale: {{ session('locale') ?? 'not set' }}
        </div>
    
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
    
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </body>
</html>
