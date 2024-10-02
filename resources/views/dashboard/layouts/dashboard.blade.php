<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('style')

</head>

<body x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="font-sans antialiased">
    <div class="bg-gradient-to-tr from-purple-600 via-transparent to-slate-500 p-px">
        <div class="bg-white  dark:bg-slate-900">
            <div class="bg-gradient-to-tl from-blue-600/[.05] via-transparent to-purple-400/[.05] dark:from-blue-600/[.1] dark:to-purple-400/[.1]">
                <header class="w-full px-3 antialiased lg:px-6 bg-white dark:bg-slate-800">
                    <div class="mx-auto max-w-7xl">
                        @include('dashboard.layouts.navbar')
                    </div>
                </header>
            </div>
        </div>
    </div>

    @include('dashboard.layouts.sidebar')

    @if (isset($header))
    <header class="w-full px-3 antialiased lg:px-6">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-4 lg:px-4">
            {{ $header }}
        </div>
    </header>
    @endif

    <main class="w-full h-screen pt-10 pb-32 px-4 sm:px-6 md:px-8 lg:ps-72">
        {{ $slot }}
    </main>
    @stack('scripts')
    <div class="fixed bottom-4 right-4 transition duration-300 ">
        <x-theme-toggle />
    </div>
</body>

</html>