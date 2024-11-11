<!DOCTYPE html>
<html lang="en">

<head>

    @yield('meta_tag')

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <script src="https://kit.fontawesome.com/ddb90eabf1.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-wheatfield-100">

    <header class="h-[130px] shadow flex w-full bg-wheatfield-100 fixed z-50 top-0 left-0">
        <nav class="container-main flex items-center justify-between">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-[350px]">
            <div class="flex justify-between items-center text-retrophile-600 space-x-16">
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    Home
                </a>
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    About
                </a>
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    Journey
                </a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="">

    </footer>

</body>

</html>
