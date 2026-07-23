@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="relative pt-32 pb-20 md:pt-40 md:pb-32 min-h-screen overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#06B6D4]/10 rounded-full blur-[150px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-[#9333EA]/10 rounded-full blur-[150px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-xs text-[#06B6D4] font-semibold uppercase tracking-[0.2em]">My Portfolio</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-4 mt-3">
                My <span class="gradient-text">Projects</span>
            </h1>
            <div class="section-divider justify-center">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto mt-4">
                Explore my collection of projects showcasing expertise in Web Development, Machine Learning, and AI Engineering.
            </p>
        </div>

        <!-- Search & Filter -->
        <div class="flex flex-col sm:flex-row gap-4 mb-10" data-aos="fade-up" data-aos-delay="100">
            <!-- Search -->
            <div class="relative flex-1 group">
                <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 group-focus-within:text-[#06B6D4] transition-colors"></i>
                <input type="text" id="search-project" placeholder="Search projects by name, tech, or description..." 
                    class="w-full pl-12 pr-4 py-3.5 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-[#06B6D4]/50 focus:ring-2 focus:ring-[#06B6D4]/10 transition-all">
            </div>

            <!-- Category Filter -->
            <div class="flex gap-2 flex-wrap">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="Web App">Web</button>
                <button class="filter-btn" data-filter="Machine Learning">ML</button>
                <button class="filter-btn" data-filter="Machine Learning / NLP">ML / NLP</button>
                <button class="filter-btn" data-filter="AI Engineer & Fullstack">AI & Fullstack</button>
                <button class="filter-btn" data-filter="Python">Python</button>
                <button class="filter-btn" data-filter="UI/UX Design">UI/UX</button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($projects as $project)
            <div class="project-card group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}" data-category="{{ $project['category'] }}">
                <!-- Thumbnail -->
                <div class="relative h-48 overflow-hidden rounded-t-xl">
                    <div class="project-overlay"></div>
                    <img src="{{ $project['thumbnail'] ?? 'https://placehold.co/800x600/1e293b/06b6d4?text=Project' }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent z-[1]"></div>
                    <span class="absolute top-3 right-3 z-[2] px-3 py-1 text-xs font-medium rounded-full {{ $project['status_badge'] }}">
                        {{ ucfirst($project['status']) }}
                    </span>
                    <div class="absolute top-3 left-3 z-[2] px-3 py-1 text-xs font-medium rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/10">
                        {{ $project['category'] }}
                    </div>
                </div>

                <!-- Content -->
                <div class="p-5 relative z-[1]">
                    <h3 class="text-white font-semibold text-lg mb-2 group-hover:text-[#06B6D4] transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">
                        {{ $project['description'] }}
                    </p>

                    <!-- Tech Stack -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project['tech_stack'] as $tech)
                            <span class="px-2.5 py-1 text-xs rounded-md bg-white/5 text-gray-400 border border-white/10 hover:bg-[#06B6D4]/10 hover:text-[#06B6D4] hover:border-[#06B6D4]/20 transition-all">{{ trim($tech) }}</span>
                        @endforeach
                    </div>

                    <!-- Date & Actions -->
                    <div class="flex items-center justify-between pt-3 border-t border-white/10">
                        <span class="text-xs text-gray-500 flex items-center gap-1.5">
                            <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#06B6D4]"></i>
                            {{ $project['project_date'] ? \Carbon\Carbon::parse($project['project_date'])->format('M Y') : 'N/A' }}
                        </span>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('projects.show', $project['id']) }}" class="px-3 py-1.5 text-xs font-medium text-white bg-gradient-to-r from-[#06B6D4]/10 to-[#9333EA]/10 rounded-lg hover:from-[#06B6D4]/20 hover:to-[#9333EA]/20 transition-all">
                                Detail
                            </a>
                            @if($project['github_url'])
                            <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="p-1.5 text-gray-400 hover:text-white hover:bg-white/10 rounded-lg transition-all">
                                <i data-lucide="github" class="w-4 h-4"></i>
                            </a>
                            @endif
                            @if($project['live_url'])
                            <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="p-1.5 text-gray-400 hover:text-white hover:bg-white/10 rounded-lg transition-all">
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-[#06B6D4]/10 to-[#9333EA]/10 flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="folder-open" class="w-10 h-10 text-gray-500"></i>
                </div>
                <h3 class="text-2xl text-gray-400 font-medium mb-2">No projects found</h3>
                <p class="text-gray-600">Check back later for new projects.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Project Filter
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            const cards = document.querySelectorAll('.project-card');

            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.4s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Search
    document.getElementById('search-project')?.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        const cards = document.querySelectorAll('.project-card');

        cards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const techs = card.querySelector('.flex-wrap')?.textContent.toLowerCase() || '';
            const desc = card.querySelector('.line-clamp-2')?.textContent.toLowerCase() || '';
            
            if (title.includes(query) || techs.includes(query) || desc.includes(query)) {
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.3s ease';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
@endpush