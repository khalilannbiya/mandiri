<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.frontend.meta')

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}" />

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet" />

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Title --}}
    <title>@yield('title', '')Percetakan Mandiri Print — Jasa Digital Printing & Percetakan Di Jakarta</title>

    <link rel="canonical" href="{{ URL::current() }}">

    @vite('resources/css/app.css')
</head>

<body class="font-rubik">
    {{-- Header --}}
    @include('components.frontend.navbar')

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.frontend.footer')

    @vite('resources/js/app.js')
    @stack('script')
</body>

</html>
