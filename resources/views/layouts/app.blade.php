<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Portfolio - Fullstack Web Developer & Laravel Expert">
    <meta name="keywords" content="Laravel, Fullstack Developer, Web Development, Portfolio, PHP, React">
    <meta name="author" content="Your Name">

    <title>@yield('title', config('app.name', 'Portfolio')) - Portfolio</title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Devicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-[#09090B] text-white font-['Poppins'] antialiased">
    <!-- Loading Spinner -->
    <x-loading-spinner />

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <x-back-to-top />

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    @stack('scripts')
</body>
</html>

