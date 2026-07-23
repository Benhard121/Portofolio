@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#3B82F6]/10 rounded-full blur-[150px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-[#06B6D4]/10 rounded-full blur-[100px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-[#9333EA]/10 rounded-full blur-[100px] animate-pulse-glow animation-delay-500"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
    </div>

    <div class="relative text-center px-4" data-aos="fade-up" data-aos-duration="800">
        <!-- 404 Number -->
        <div class="text-8xl md:text-9xl font-bold mb-6 relative">
            <span class="gradient-text">404</span>
            <div class="absolute -top-4 -right-4 w-8 h-8 rounded-full bg-[#06B6D4] blur-xl animate-pulse"></div>
            <div class="absolute -bottom-4 -left-4 w-6 h-6 rounded-full bg-[#9333EA] blur-xl animate-pulse animation-delay-500"></div>
        </div>
        
        <!-- Icon -->
        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-[#06B6D4]/10 to-[#9333EA]/10 flex items-center justify-center mx-auto mb-6">
            <i data-lucide="search-x" class="w-10 h-10 text-gray-400"></i>
        </div>

        <h1 class="text-2xl md:text-4xl font-bold text-white mb-4">Page Not Found</h1>
        <p class="text-gray-400 text-lg mb-8 max-w-md mx-auto leading-relaxed">
            Oops! The page you're looking for doesn't exist or has been moved. Let's get you back on track.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="group inline-flex items-center gap-2 px-8 py-3.5 bg-gradient-to-r from-[#3B82F6] to-[#06B6D4] text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-[#3B82F6]/30 transition-all active:scale-[0.98]">
                <i data-lucide="home" class="w-4 h-4 group-hover:-translate-y-0.5 transition-transform"></i>
                Back to Home
            </a>
            <a href="{{ route('contact.index') }}" class="group inline-flex items-center gap-2 px-8 py-3.5 border border-white/20 text-white font-semibold rounded-xl hover:bg-white/5 hover:border-[#06B6D4]/50 transition-all">
                <i data-lucide="mail" class="w-4 h-4"></i>
                Contact Me
            </a>
        </div>
    </div>
</section>
@endsection