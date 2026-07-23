@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- ==================== HERO SECTION ==================== -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <!-- Gradient orbs -->
        <div class="absolute top-20 left-10 w-[600px] h-[600px] bg-[#06B6D4]/20 rounded-full blur-[150px] animate-pulse-glow"></div>
        <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#9333EA]/15 rounded-full blur-[130px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-[#3B82F6]/10 rounded-full blur-[100px] animate-pulse-glow animation-delay-500"></div>
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMyIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
        <!-- Stars -->
        @for($i = 0; $i < 20; $i++)
        <div class="particle" style="top: {{ rand(5, 95) }}%; left: {{ rand(5, 95) }}%; --duration: {{ rand(2, 5) }}s; --delay: {{ rand(0, 5) }}s; opacity: {{ rand(2, 6) / 10 }}; width: {{ rand(2, 4) }}px; height: {{ rand(2, 4) }}px;"></div>
        @endfor
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <!-- Profile Photo -->
            <div class="flex-shrink-0" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative group">
                    <!-- Animated border -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#06B6D4] via-[#9333EA] to-[#06B6D4] rounded-[2rem] opacity-50 group-hover:opacity-100 blur transition duration-500 animate-gradient-shift"></div>
                    <div class="absolute -inset-3 bg-[#06B6D4]/20 rounded-[2.5rem] blur-3xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative w-48 h-48 md:w-56 md:h-56 lg:w-72 lg:h-72 rounded-[2rem] overflow-hidden border-2 border-white/10 shadow-2xl shadow-[#06B6D4]/20 transition-all duration-500 group-hover:shadow-[#06B6D4]/40 group-hover:border-[#06B6D4]/30">
                        <img src="{{ asset('images/Profile.jpg') }}" alt="Benhard A Simamora" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <!-- Status indicator -->
                    <div class="absolute -bottom-2 -right-2 px-4 py-1.5 rounded-full bg-[#09090B] border border-[#06B6D4]/30 text-xs text-[#06B6D4] font-medium shadow-lg shadow-[#06B6D4]/10 flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-[#06B6D4] animate-pulse"></span>
                        Available
                    </div>
                </div>
            </div>

            <!-- Hero Text -->
            <div class="flex-1 text-center lg:text-left" data-aos="fade-left" data-aos-duration="1000">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-gray-400 mb-6 hover:border-[#06B6D4]/30 transition-all group">
                    <span class="w-2 h-2 rounded-full bg-[#06B6D4] animate-pulse"></span>
                    <span class="group-hover:text-white transition-colors">Open for Hiring</span>
                    <span class="text-gray-600">|</span>
                    <span class="text-[#06B6D4]">Available for Freelance</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold mb-4 leading-tight">
                    <span class="text-white">Hi, I'm</span>
                    <br>
                    <span class="gradient-text">Benhard A Simamora</span>
                </h1>

                <!-- Typing Text -->
                <div class="text-xl md:text-2xl text-gray-400 mb-6 h-9">
                    <span id="typing-text"></span>
                    <span class="animate-blink text-[#06B6D4]">|</span>
                </div>

                <p class="text-gray-400 text-base md:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
                    Bridging the gap between robust <span class="text-[#06B6D4] font-medium">Web Development</span> and <span class="text-[#9333EA] font-medium">AI Engineer</span> solutions. Undergraduate Informatics Engineering Student at <span class="text-white/80">State University of Surabaya (UNESA)</span>, Class of 2023. Specializing in Laravel, Python, and SQL Server.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('projects') }}" class="group relative inline-flex items-center gap-2 px-8 py-3.5 bg-gradient-to-r from-[#06B6D4] to-[#0891B2] text-white font-semibold rounded-xl overflow-hidden transition-all duration-300 hover:shadow-lg hover:shadow-[#06B6D4]/30 hover:scale-[1.02] active:scale-[0.98]">
                        <span class="relative flex items-center gap-2 z-10">
                            View Projects
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1.5 transition-transform"></i>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-[#0891B2] to-[#06B6D4] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    <a href="#" class="group relative inline-flex items-center gap-2 px-8 py-3.5 border border-white/20 text-white font-semibold rounded-xl overflow-hidden transition-all duration-300 hover:bg-white/5 hover:border-[#06B6D4]/50 hover:shadow-lg hover:shadow-[#06B6D4]/10 active:scale-[0.98]">
                        <span class="relative flex items-center gap-2">
                            <i data-lucide="download" class="w-4 h-4 group-hover:-translate-y-0.5 transition-transform"></i>
                            Download CV
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-float">
        <span class="text-xs text-gray-500">Scroll Down</span>
        <div class="w-6 h-10 rounded-full border-2 border-gray-600 flex justify-center pt-2">
            <div class="w-1 h-2 bg-[#06B6D4] rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- ==================== ABOUT SECTION ==================== -->
<section id="about" class="relative py-20 md:py-32 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#09090B] via-[#0a0a1a] to-[#09090B]"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#06B6D4]/5 rounded-full blur-[150px]"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#9333EA]/5 rounded-full blur-[150px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#06B6D4] font-semibold uppercase tracking-[0.2em]">Who I Am</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 mt-3">
                About <span class="gradient-text">Me</span>
            </h2>
            <div class="section-divider">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
            <!-- Name -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">👦</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Name</h3>
                <p class="text-gray-400 text-sm">Benhard A Simamora</p>
            </div>

            <!-- Age -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🎂</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Age</h3>
                <p class="text-gray-400 text-sm">20 Years Old</p>
            </div>

            <!-- Location -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">📍</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Location</h3>
                <p class="text-gray-400 text-sm">Surabaya, East Java, Indonesia</p>
            </div>

            <!-- Status -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🎓</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Status</h3>
                <p class="text-gray-400 text-sm">Undergraduate Student (2023)</p>
            </div>

            <!-- University -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🏛️</span>
                </div>
                <h3 class="text-white font-semibold mb-1">University</h3>
                <p class="text-gray-400 text-sm">State University of Surabaya (UNESA)</p>
            </div>

            <!-- Core Focus -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">💻</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Core Focus</h3>
                <p class="text-gray-400 text-sm">Web Dev & Machine Learning</p>
            </div>

            <!-- GPA / IPK -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-white font-semibold mb-1">GPA (IPK)</h3>
                <p class="text-gray-400 text-sm">3.7 / 4.0</p>
            </div>

            <!-- Hobby -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🧗</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Hobby</h3>
                <p class="text-gray-400 text-sm">Climbing</p>
            </div>

            <!-- Languages -->
            <div class="glass-card group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl">🌐</span>
                </div>
                <h3 class="text-white font-semibold mb-1">Languages</h3>
                <p class="text-gray-400 text-sm">Bahasa Indonesia, English</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SKILLS SECTION ==================== -->
<section id="skills" class="relative py-20 md:py-32 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#09090B] via-[#0c0c1d] to-[#09090B] pointer-events-none"></div>
    <div class="absolute top-1/3 left-1/4 w-72 h-72 bg-[#06B6D4]/10 rounded-full blur-[120px] animate-pulse-glow"></div>
    <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-[#9333EA]/10 rounded-full blur-[120px] animate-pulse-glow animation-delay-1000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#9333EA] font-semibold uppercase tracking-[0.2em]">What I Know</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 mt-3">
                My <span class="gradient-text">Skills</span>
            </h2>
            <div class="section-divider">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $skill)
            <div class="glass-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/5 flex items-center justify-center p-2.5 group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}" class="w-full h-full object-contain">
                    </div>
                    <div class="flex-1">
                        <h3 class="text-white font-semibold text-sm">{{ $skill['name'] }}</h3>
                        <div class="flex items-center justify-between mt-0.5">
                            <span class="text-xs text-gray-500">{{ $skill['level'] }}%</span>
                            <span class="text-[10px] text-[#06B6D4] font-medium">{{ $skill['level'] >= 80 ? 'Expert' : ($skill['level'] >= 65 ? 'Advanced' : 'Intermediate') }}</span>
                        </div>
                    </div>
                </div>
                <div class="w-full h-2.5 bg-white/5 rounded-full overflow-hidden p-0.5">
                    <div class="h-full rounded-full progress-bar relative" style="width: 0%" data-width="{{ $skill['level'] }}">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==================== EXPERIENCE SECTION ==================== -->
<section id="experience" class="relative py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#09090B] via-[#0a0a1a] to-[#09090B]"></div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#06B6D4] font-semibold uppercase tracking-[0.2em]">My Journey</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 mt-3">
                Work <span class="gradient-text">Experience</span>
            </h2>
            <div class="section-divider">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="relative">
            <!-- Timeline Line with gradient -->
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-[#06B6D4] via-[#9333EA] to-[#06B6D4]"></div>

            <div class="space-y-12">
                @foreach($experiences as $experience)
                <div class="relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="flex flex-col md:flex-row items-start gap-6 md:gap-12">
                        <!-- Timeline Dot -->
                        <div class="absolute left-4 md:left-1/2 w-5 h-5 -translate-x-1/2 rounded-full bg-[#09090B] border-2 border-[#06B6D4] z-10 mt-1.5 timeline-dot">
                        </div>

                        <!-- Content -->
                        <div class="ml-12 md:ml-0 md:w-1/2 {{ $loop->even ? 'md:ml-auto md:pl-12' : 'md:pr-12' }}">
                            <div class="glass-card">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider rounded-full bg-[#06B6D4]/10 text-[#06B6D4] border border-[#06B6D4]/20">{{ $experience['period'] }}</span>
                                </div>
                                <h3 class="text-white font-semibold text-lg mb-1">{{ $experience['title'] }}</h3>
                                <p class="text-[#06B6D4] text-sm font-medium mb-3">{{ $experience['company'] }}</p>
                                <p class="text-gray-400 text-sm leading-relaxed">{{ $experience['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ==================== STATISTICS SECTION ==================== -->
<section id="statistics" class="relative py-20 md:py-32 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#09090B] via-[#0c0c1d] to-[#09090B]"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-[#06B6D4]/10 rounded-full blur-[150px] animate-pulse-glow"></div>
    <div class="absolute bottom-1/2 right-1/4 w-96 h-96 bg-[#9333EA]/10 rounded-full blur-[150px] animate-pulse-glow animation-delay-1000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#9333EA] font-semibold uppercase tracking-[0.2em]">By The Numbers</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 mt-3">
                <span class="gradient-text">Statistics</span>
            </h2>
            <div class="section-divider">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100">
            <!-- Projects -->
            <div class="glass-card-gradient text-center group">
                <div class="text-4xl md:text-5xl font-bold mb-2 relative">
                    <span class="gradient-text counter" data-target="{{ $totalProjects }}">0</span>
                    <span class="gradient-text">+</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">Completed Projects</p>
                <div class="w-12 h-1 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mx-auto"></div>
            </div>

            <!-- Certificates -->
            <div class="glass-card-gradient text-center group">
                <div class="text-4xl md:text-5xl font-bold mb-2 relative">
                    <span class="gradient-text counter" data-target="{{ $totalCertificates }}">0</span>
                    <span class="gradient-text">+</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">Certificates Earned</p>
                <div class="w-12 h-1 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mx-auto"></div>
            </div>

            <!-- Tech Stack -->
            <div class="glass-card-gradient text-center group">
                <div class="text-4xl md:text-5xl font-bold mb-2 relative">
                    <span class="gradient-text counter" data-target="6">0</span>
                    <span class="gradient-text">+</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">Tech Stack Mastered</p>
                <div class="w-12 h-1 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mx-auto"></div>
            </div>

            <!-- Learning Spirit -->
            <div class="glass-card-gradient text-center group">
                <div class="text-4xl md:text-5xl font-bold mb-2 relative">
                    <span class="gradient-text counter" data-target="100">0</span>
                    <span class="gradient-text">%</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">Learning Spirit</p>
                <div class="w-12 h-1 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mx-auto"></div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== LATEST PROJECTS ==================== -->
<section class="relative py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#09090B] via-[#0a0a1a] to-[#09090B]"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#06B6D4] font-semibold uppercase tracking-[0.2em]">My Work</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 mt-3">
                Latest <span class="gradient-text">Projects</span>
            </h2>
            <div class="section-divider">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(array_slice($projects, 0, 3) as $project)
            <div class="project-card group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
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
                    <span class="absolute top-3 left-3 z-[2] px-3 py-1 text-xs font-medium rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/10">
                        {{ $project['category'] }}
                    </span>
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

                    <!-- Actions -->
                    <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                        <a href="{{ route('projects.show', $project['id']) }}" class="flex-1 text-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-[#06B6D4]/10 to-[#9333EA]/10 rounded-lg hover:from-[#06B6D4]/20 hover:to-[#9333EA]/20 transition-all">
                            View Detail
                        </a>
                        @if($project['github_url'])
                        <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="p-2 text-gray-400 hover:text-white hover:bg-white/10 rounded-lg transition-all">
                            <i data-lucide="github" class="w-4 h-4"></i>
                        </a>
                        @endif
                        @if($project['live_url'])
                        <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="p-2 text-gray-400 hover:text-white hover:bg-white/10 rounded-lg transition-all">
                            <i data-lucide="external-link" class="w-4 h-4"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if($totalProjects > 3)
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('projects') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#06B6D4]/10 to-[#9333EA]/10 border border-white/20 text-white rounded-xl hover:from-[#06B6D4]/20 hover:to-[#9333EA]/20 hover:border-[#06B6D4]/50 transition-all">
                View All Projects
                <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Typing Effect
    document.addEventListener('DOMContentLoaded', function() {
        const texts = [
            'Web Developer',
            'Laravel Enthusiast',
            'AI Engineer',
            'Python & Machine Learning',
            'SQL Server Specialist'
        ];
        let count = 0;
        let index = 0;
        let currentText = '';
        let letter = '';
        const typingElement = document.getElementById('typing-text');

        function type() {
            if (count === texts.length) {
                count = 0;
            }
            currentText = texts[count];
            letter = currentText.slice(0, ++index);
            typingElement.textContent = letter;
            if (letter.length === currentText.length) {
                setTimeout(erase, 2000);
            } else {
                setTimeout(type, 100);
            }
        }

        function erase() {
            letter = currentText.slice(0, --index);
            typingElement.textContent = letter;
            if (letter.length === 0) {
                count++;
                index = 0;
                setTimeout(type, 500);
            } else {
                setTimeout(erase, 50);
            }
        }

        setTimeout(type, 1000);
    });

    // Counter Animation
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 50;

        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            
            const increment = Math.ceil(target / 30);
            
            const updateCount = () => {
                current += increment;
                if (current > target) {
                    counter.textContent = target;
                    return;
                }
                counter.textContent = current;
                setTimeout(updateCount, speed);
            };
            
            updateCount();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });

    // Progress Bar Animation
    document.addEventListener('DOMContentLoaded', function() {
        const progressBars = document.querySelectorAll('.progress-bar');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width + '%';
                    }, 200);
                    observer.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });

        progressBars.forEach(bar => observer.observe(bar));
    });
</script>
@endpush