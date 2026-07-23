@extends('layouts.app')

@section('title', 'Certificates')

@section('content')
<section class="relative pt-32 pb-20 md:pt-40 md:pb-32 min-h-screen overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-[#06B6D4]/10 rounded-full blur-[120px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-[#9333EA]/10 rounded-full blur-[120px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#9333EA] font-semibold uppercase tracking-[0.2em]">Achievements</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-4 mt-3">
                My <span class="gradient-text">Certificates</span>
            </h1>
            <div class="section-divider justify-center">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto mt-4">
                Professional certifications and achievements that validate my expertise and commitment to continuous learning.
            </p>
        </div>

        <!-- Stats Bar -->
        <div class="flex flex-wrap items-center justify-center gap-6 mb-12" data-aos="fade-up" data-aos-delay="50">
            <div class="px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-center">
                <span class="text-2xl font-bold gradient-text">{{ count($certificates) }}</span>
                <p class="text-xs text-gray-500 mt-0.5">Total Certificates</p>
            </div>
            <div class="px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-center">
                <span class="text-2xl font-bold gradient-text">{{ collect($certificates)->pluck('organization')->unique()->count() }}</span>
                <p class="text-xs text-gray-500 mt-0.5">Organizations</p>
            </div>
            <div class="px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-center">
                <span class="text-2xl font-bold gradient-text">{{ collect($certificates)->pluck('category')->unique()->count() }}</span>
                <p class="text-xs text-gray-500 mt-0.5">Categories</p>
            </div>
        </div>

        <!-- Certificates Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($certificates as $certificate)
            <div class="cert-card group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <!-- Ribbon for verified -->
                <div class="cert-ribbon">Verified</div>
                
                <!-- Thumbnail -->
                <div class="relative h-44 overflow-hidden rounded-t-xl">
                    <img src="{{ $certificate['thumbnail'] ?? 'https://placehold.co/600x400/1e293b/06b6d4?text=Certificate' }}" 
                         alt="{{ $certificate['title'] }}" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent z-[1]"></div>
                    @if($certificate['category'])
                    <div class="absolute top-3 left-3 z-[2] px-2.5 py-1 text-[10px] font-medium rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/10">
                        {{ $certificate['category'] }}
                    </div>
                    @endif
                </div>

                <!-- Content -->
                <div class="p-5 relative z-[1]">
                    <h3 class="text-white font-semibold text-base mb-1.5 group-hover:text-[#06B6D4] transition-colors line-clamp-2">
                        {{ $certificate['title'] }}
                    </h3>
                    <p class="text-[#06B6D4] text-sm font-medium mb-2.5">{{ $certificate['organization'] }}</p>
                    
                    @if($certificate['description'])
                    <p class="text-gray-400 text-xs leading-relaxed mb-4 line-clamp-2">
                        {{ $certificate['description'] }}
                    </p>
                    @endif

                    <div class="flex items-center justify-between pt-3 border-t border-white/10">
                        @if($certificate['issued_at'])
                        <span class="text-xs text-gray-500 flex items-center gap-1.5">
                            <i data-lucide="calendar-check" class="w-3.5 h-3.5 text-[#9333EA]"></i>
                            {{ \Carbon\Carbon::parse($certificate['issued_at'])->format('M d, Y') }}
                        </span>
                        @endif

                        @if($certificate['credential_url'])
                        <a href="{{ $certificate['credential_url'] }}" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center gap-1.5 px-3.5 py-2 text-xs font-medium text-white bg-gradient-to-r from-[#06B6D4] to-[#0891B2] rounded-lg hover:from-[#0891B2] hover:to-[#06B6D4] hover:shadow-lg hover:shadow-[#06B6D4]/20 transition-all active:scale-95">
                            View Certificate
                            <i data-lucide="external-link" class="w-3 h-3"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-[#06B6D4]/10 to-[#9333EA]/10 flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="award" class="w-10 h-10 text-gray-500"></i>
                </div>
                <h3 class="text-2xl text-gray-400 font-medium mb-2">No certificates yet</h3>
                <p class="text-gray-600">Certificates will be displayed here once added.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection