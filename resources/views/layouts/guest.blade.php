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
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('scripts-top')
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <x-guest.navbar />
    <div class="font-sans text-gray-900 antialiased mt-10">
        <div
            class="relative items-top justify-center md:min-h-screen sm:items-center py-4 sm:pt-0">

            {{ $slot }}

        </div>
    </div>
    <x-guest.footer :footer="$footer" />
    @stack('scripts')
    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
</body>

</html>
