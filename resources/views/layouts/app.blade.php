<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @bukStyles()
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-blue-200">

    <x-jet-banner />

    <main class="max-w-3xl min-h-screen p-8 mx-auto mt-16 bg-white shadow-md">

        <div class="flex justify-center mb-4">
            <img src="{{ asset('img/logo/JoesWorkshop.png') }}" alt="JoesWorkshopLogo" class="w-36">
        </div>

        <x-partials.nav />

        <!-- Page Heading -->
        @if (isset($header))
        <header class="text-white bg-blue-100 shadow">
            <div class="flex px-4 py-6 mx-auto space-x-8 text-white max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}

                @if(isset($nav))
                {{ $nav }}
                @endif

            </div>
        </header>
        @endif


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </main>

    @stack('modals')

    @livewireScripts
    @bukScripts()
</body>
</html>
