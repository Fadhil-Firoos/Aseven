<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
        <section class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 h-screen fixed top-0 left-0">
                <div class="text-white text-center py-4">
                    <h2 class="text-xl font-bold">Dashboard</h2>
                </div>
                <nav class="text-gray-300 text-base font-semibold px-4 py-2">
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-chart-line"></i> Analytics</a>
                    <a href="{{ route('superadmin.product') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-box-open"></i> Product</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-clipboard-list"></i> Transaction</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-bullhorn"></i> Campaign</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-truck"></i> Expedition</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fa-solid fa-file-lines"></i> Report</a>

                    <!-- Dropdown User -->
                    <div x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open" class="block py-2.5 px-4 rounded hover:bg-gray-700 cursor-pointer">
                            <i class="fa-solid fa-user-group"></i> User
                            <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fa ml-2"></i>
                        </a>
                        <div x-show="open" @click.away="open = false" class="bg-gray-700 rounded-lg mt-2 ml-4">
                            <a href="{{ route('superadmin.kelola-user') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600">Kelola User</a>
                            <a href="{{ route('superadmin.create-user') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600">Tambah User</a>
                        </div>
                    </div>
                </nav>
                <div class="absolute bottom-0 text-gray-300 text-sm font-semibold px-4 py-2">
                    <a href="#" class="block py-2.5 px-2 rounded hover:bg-gray-700"><i class="fa-solid fa-sliders"></i> Preferences</a>
                    <a href="#" class="block py-2.5 px-2 rounded hover:bg-gray-700"><i class="fa-solid fa-circle-user"></i> Adam Apple - Administrator</a>
                    <a href="#" class="block py-2.5 px-2 rounded hover:bg-gray-700"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </div>
            </div>
            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset
        </section>

        @livewireScripts
    </body>
</html>
