<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ config('app.name', 'Laravel') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">

    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
        class="fixed top-0 left-0 flex items-center justify-center w-screen h-screen  z-999999">
        <div class="w-16 h-16 border-4 border-solid rounded-full animate-spin border-primary border-t-transparent">
        </div>
    </div>
    <div class="min-h-screen">
        <div class="flex h-screen overflow-hidden">
            @include('dashboard.layouts.sidebar')
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                @include('dashboard.layouts.header')
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>