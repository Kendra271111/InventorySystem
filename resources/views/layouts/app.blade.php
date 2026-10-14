<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preload" href="https://fonts.gstatic.com/s/materialicons/v145/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2" as="font" crossorigin>
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name', 'MyInventory') }}</title>
</head>

<body class="bg-base-100 text-base-content">

    <div class="drawer lg:drawer-open">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <!-- PAGE CONTENT -->
        <div class="drawer-content flex flex-col min-h-screen">

            @include('layouts.header')

            <!-- Main Content -->
            <main class="flex-1 p-4 lg:p-6">
                @yield('content')
            </main>

            @include('layouts.footer')

        </div>

        <!-- SIDEBAR -->
        @include('layouts.sidebar')
    </div>

</body>
</html>
