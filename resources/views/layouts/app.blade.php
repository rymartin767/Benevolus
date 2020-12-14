<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

    </head>
    <body class="font-nunito antialiased">
        <div class="flex flex-col min-h-screen bg-gray-50">
            <!-- Livewire Navigation -->
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-grow py-8">
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            <footer class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between">
                        <div class="text-xs">&copy 2020 NoTimeForCaution | JAFW</div>
                    </div>
                </div>
            </footer>
        </div>

        @stack('modals')
        @livewireScripts
        <script src="/js/app.js"></script>
    </body>
</html>