<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            @layer theme{
                :root,:host{
                    --font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                    --font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;
                    --font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
                }
            }
            @layer base{
                body{
                    font-family:var(--font-sans);
                }
            }
        </style>
    @endif
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <header class="bg-white dark:bg-[#161615] border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Portfolio</a>
            <nav class="hidden md:flex gap-6">
                <a href="{{ route('home') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#F53003] dark:hover:text-[#FF4433]">Home</a>
                <a href="{{ route('projects') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#F53003] dark:hover:text-[#FF4433]">Projects</a>
                <a href="{{ route('certificates') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#F53003] dark:hover:text-[#FF4433]">Certificates</a>
                <a href="{{ route('contact.index') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#F53003] dark:hover:text-[#FF4433]">Contact</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="bg-white dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A] py-6">
        <div class="max-w-6xl mx-auto px-6 text-center text-[#706f6c] dark:text-[#A1A09A]">
            &copy; {{ date('Y') }} Portfolio. All rights reserved.
        </div>
    </footer>
</body>
</html>