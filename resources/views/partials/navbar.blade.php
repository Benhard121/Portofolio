<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Logo - Profile Photo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="relative">
                    <div class="w-9 h-9 md:w-11 md:h-11 rounded-full overflow-hidden border-2 border-[#06B6D4]/50 transition-all duration-300 group-hover:border-[#06B6D4] group-hover:shadow-lg group-hover:shadow-[#06B6D4]/25">
                        <img src="{{ asset('images/Profile.jpg') }}" alt="Benhard" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-0.5 -right-0.5 w-3 h-3 bg-[#06B6D4] rounded-full border-2 border-[#09090B] animate-pulse"></div>
                </div>
                <div class="flex flex-col">
                    <span class="text-white font-bold text-lg md:text-xl leading-tight gradient-text">Portofolio</span>
                    <span class="text-[10px] text-gray-500 leading-tight">Web Dev & AI Engineer</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-1 bg-white/[0.03] backdrop-blur-md border border-white/5 rounded-2xl p-1.5">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects*') ? 'active' : '' }}">
                    <i data-lucide="folder-kanban" class="w-4 h-4"></i>
                    <span>Projects</span>
                </a>
                <a href="{{ route('certificates') }}" class="nav-link {{ request()->routeIs('certificates*') ? 'active' : '' }}">
                    <i data-lucide="award" class="w-4 h-4"></i>
                    <span>Certificates</span>
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">
                    <i data-lucide="mail" class="w-4 h-4"></i>
                    <span>Contact</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2.5 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 hover:border-[#06B6D4]/30 transition-all duration-300" aria-label="Toggle menu">
                <i data-lucide="menu" class="w-5 h-5 text-white"></i>
            </button>
        </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-4 py-4 space-y-2 bg-[#09090B]/95 backdrop-blur-xl border border-white/10 rounded-2xl mt-2 shadow-2xl shadow-[#06B6D4]/5">
            <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('projects') }}" class="mobile-nav-link {{ request()->routeIs('projects*') ? 'active' : '' }}">
                <i data-lucide="folder-kanban" class="w-5 h-5"></i>
                <span>Projects</span>
            </a>
            <a href="{{ route('certificates') }}" class="mobile-nav-link {{ request()->routeIs('certificates*') ? 'active' : '' }}">
                <i data-lucide="award" class="w-5 h-5"></i>
                <span>Certificates</span>
            </a>
            <a href="{{ route('contact.index') }}" class="mobile-nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">
                <i data-lucide="mail" class="w-5 h-5"></i>
                <span>Contact</span>
            </a>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            navbar.classList.add('bg-[#09090B]/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-[#06B6D4]/5', 'border-b', 'border-white/5');
        } else {
            navbar.classList.remove('bg-[#09090B]/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-[#06B6D4]/5', 'border-b', 'border-white/5');
        }
        
        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        const icon = this.querySelector('i');
        if (menu.classList.contains('hidden')) {
            icon.setAttribute('data-lucide', 'menu');
        } else {
            icon.setAttribute('data-lucide', 'x');
        }
        lucide.createIcons();
    });
</script>
@endpush