@extends('layouts.app')

@section('title', $project['title'])

@section('content')
<section class="relative pt-32 pb-20 md:pt-40 md:pb-32 min-h-screen overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#06B6D4]/10 rounded-full blur-[150px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-[#9333EA]/10 rounded-full blur-[150px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <a href="{{ route('projects') }}" class="group inline-flex items-center gap-2 text-gray-400 hover:text-white transition-all mb-8 px-4 py-2 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 hover:border-[#06B6D4]/30">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Back to Projects
        </a>

        <!-- Main Content -->
        <div class="glass-card p-6 md:p-8 lg:p-10" data-aos="fade-up" data-aos-duration="800">
            @if($project['thumbnail'])
            <!-- Thumbnail -->
            <div class="relative h-64 md:h-96 rounded-2xl overflow-hidden mb-8 group">
                <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent z-10"></div>
                <img src="{{ $project['thumbnail'] }}" alt="{{ $project['title'] }}" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute bottom-4 left-4 z-20">
                    <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-[#06B6D4]/20 text-[#06B6D4] border border-[#06B6D4]/30 backdrop-blur-sm">
                        {{ ucfirst($project['category']) }}
                    </span>
                </div>
            </div>
            @endif

            <!-- Meta Info -->
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span class="px-3.5 py-1.5 text-xs font-medium rounded-full bg-gradient-to-r from-[#06B6D4]/20 to-[#9333EA]/20 text-[#06B6D4] border border-[#06B6D4]/20">
                    {{ ucfirst($project['category']) }}
                </span>
                <span class="px-3.5 py-1.5 text-xs font-medium rounded-full {{ $project['status_badge'] }}">
                    {{ ucfirst($project['status']) }}
                </span>
                @if($project['project_date'])
                <span class="text-xs text-gray-500 flex items-center gap-1.5">
                    <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#06B6D4]"></i>
                    {{ \Carbon\Carbon::parse($project['project_date'])->format('M d, Y') }}
                </span>
                @endif
            </div>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">{{ $project['title'] }}</h1>
            
            <!-- Description -->
            <div class="prose prose-invert max-w-none">
                <p class="text-gray-400 leading-relaxed text-lg mb-8">{{ $project['description'] }}</p>
            </div>

            @if($project['tech_stack'])
            <!-- Tech Stack -->
            <div class="mb-8 p-6 rounded-2xl bg-gradient-to-br from-white/[0.02] to-white/[0.05] border border-white/5">
                <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                    <i data-lucide="layers" class="w-5 h-5 text-[#06B6D4]"></i>
                    Tech Stack
                </h3>
                <div class="flex flex-wrap gap-3">
                    @foreach($project['tech_stack'] as $tech)
                        <span class="px-4 py-2 text-sm rounded-xl bg-gradient-to-r from-[#06B6D4]/10 to-[#9333EA]/10 text-gray-300 border border-white/10 hover:from-[#06B6D4]/20 hover:to-[#9333EA]/20 hover:border-[#06B6D4]/30 transition-all">
                            <span class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#06B6D4]"></span>
                                {{ trim($tech) }}
                            </span>
                        </span>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 pt-8 border-t border-white/10">
                @if($project['github_url'])
                <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" 
                   class="group inline-flex items-center gap-3 px-6 py-3.5 bg-white/5 border border-white/10 text-white rounded-xl hover:bg-gradient-to-r hover:from-[#06B6D4]/10 hover:to-[#9333EA]/10 hover:border-[#06B6D4]/30 transition-all">
                    <i data-lucide="github" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                    <span>View on GitHub</span>
                </a>
                @endif
                @if($project['live_url'])
                <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" 
                   class="group inline-flex items-center gap-3 px-6 py-3.5 bg-gradient-to-r from-[#06B6D4] to-[#0891B2] text-white rounded-xl hover:from-[#0891B2] hover:to-[#06B6D4] hover:shadow-lg hover:shadow-[#06B6D4]/30 transition-all active:scale-[0.98]">
                    <i data-lucide="external-link" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                    <span>Live Preview</span>
                </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection