<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        -->

        <title>{{ config('app.name', 'Washingtone-Aura-Portfolio') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        -->

        <!-- custom.css -->
        <link rel="stylesheet" href="{{ asset('custom.css') }}">

        <!-- Tailwind CSS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
         <div class="min-h-screen">
             <!-- Navbar -->
            <div class="bg-custom-top-menu" x-data="{ open: false }">
                <nav class="w-full px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <!-- Logo or Brand -->
                        <div class="flex-shrink-0">
                            <a href="/" class="text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        </div>
                        <!-- Navigation Links -->
                        <div :class="{ 'hidden': !open, 'flex': open }" class="md:flex items-center">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                                <a href="/portfolio" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Portfolio</a>
                                <a href="/blog" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>
                                <a href="/contact" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                            </div>
                        </div>
                        <!-- Hamburger Icon -->
                        <div class="md:hidden">
                            <button @click="open = !open" class="hamburger">
                                <!-- Hamburger icon (three horizontal lines) -->
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>