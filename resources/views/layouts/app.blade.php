<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#042f2e" />
    <link rel="apple-touch-icon" href="{{ asset('/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="font-sans antialiased">
    <header class="w-full px-3 antialiased lg:px-6">
        <div class="mx-auto max-w-7xl">
            @include('layouts.mainnav')
        </div>
    </header>
    @if (isset($header))
    <header class="w-full px-3 antialiased lg:px-6">
        <div class="mx-auto max-w-7xl">
            {{ $header }}
        </div>
    </header>
    @endif
    <main class="flex-auto">
        {{ $slot }}
    </main>
    @include('layouts.footer')
    
</body>
</html>