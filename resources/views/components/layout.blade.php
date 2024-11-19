<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - Dealkan Property</title>

    <!-- Icon and Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/dealkan-favicon/favicon-48x48.png') }}"
        sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/dealkan-favicon/favicon.svg') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/dealkan-favicon/apple-touch-icon.png') }}" />

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    @yield('css')

    {{-- Vite JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar />
    <x-aside />

    <main class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            {{ $slot }}
        </div>
    </main>

    @once
        @yield('scripts')
    @endonce
</body>
</html>
