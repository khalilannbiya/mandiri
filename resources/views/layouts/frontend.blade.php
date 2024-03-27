<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- Icon Tabler -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabzler/icons-webfont@latest/tabler-icons.min.css">

    <link rel="icon" href="{{ asset('frontend/images/content/favicon.png') }}" />

    <title>Percetakan Mandiri Print | @yield('title')</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    @include('components.frontend.navbar')
    <main class="mx-auto max-w-7xl px-4 md:px-4">
        @yield('content')
    </main>
    @include('components.frontend.footer')

    @vite('resources/js/app.js')
    @stack('script')
</body>

</html>
