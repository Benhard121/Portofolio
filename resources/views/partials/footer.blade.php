<footer class="relative border-t border-white/10 bg-[#09090B] overflow-hidden">
    <!-- Background Gradient & Effects -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#06B6D4]/[0.03] to-transparent pointer-events-none"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#06B6D4]/5 rounded-full blur-[150px]"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#9333EA]/5 rounded-full blur-[150px]"></div>
    
    <!-- Grid Pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-50"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-8">
            <!-- Brand -->
            <div class="lg:col-span-1 space-y-5">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-[#06B6D4]/50 transition-all duration-300 group-hover:border-[#06B6D4] group-hover:shadow-lg group-hover:shadow-[#06B6D4]/25">
                            <img src="{{ asset('images/Profile.jpg') }}" alt="Benhard" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -top-0.5 -right-0.5 w-2.5 h-2.5 bg-[#06B6D4] rounded-full border-2 border-[#09090B]"></div>
                    </div>
                    <span class="text-white font-bold text-xl gradient-text">Portofolio</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Undergraduate Informatics Engineering Student at State University of Surabaya (UNESA), Class of 2023. Bridging the gap between robust Web Development and AI Engineer solutions.
                </p>
                <!-- Social Links -->
                <div class="flex items-center gap-2.5 pt-2">
                    <a href="https://github.com/Benhard121" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="GitHub">
                        <img src="{{ asset('images/github.jpg') }}" alt="GitHub" class="w-5 h-5 object-contain">
                    </a>
                    <a href="https://www.linkedin.com/in/benhard-simamora/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="LinkedIn">
                        <img src="{{ asset('images/linkedlin.jpg') }}" alt="LinkedIn" class="w-5 h-5 object-contain">
                    </a>
                    <a href="https://www.instagram.com/benhaard_?igsh=MW9kYzFraTVkdmw3cA==" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                        <img src="{{ asset('images/instagram.jpg') }}" alt="Instagram" class="w-5 h-5 object-contain">
                    </a>
                    <a href="http://wa.me/6282277340039" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="WhatsApp">
                        <img src="{{ asset('images/whatapps.jpg') }}" alt="WhatsApp" class="w-5 h-5 object-contain">
                    </a>
                    <a href="mailto:benhardsimamora1@gmail.com" class="social-link" aria-label="Email">
                        <img src="{{ asset('images/gmail.jpg') }}" alt="Gmail" class="w-5 h-5 object-contain">
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-5">
                <h3 class="text-white font-semibold text-lg relative inline-block">
                    Quick Links
                    <span class="block w-8 h-0.5 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mt-1"></span>
                </h3>
                <ul class="space-y-3.5">
                    <li>
                        <a href="{{ route('home') }}" class="footer-link">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-[#06B6D4]"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="footer-link">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-[#06B6D4]"></i>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('certificates') }}" class="footer-link">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-[#06B6D4]"></i>
                            Certificates
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" class="footer-link">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-[#06B6D4]"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Expertise -->
            <div class="space-y-5">
                <h3 class="text-white font-semibold text-lg relative inline-block">
                    Expertise
                    <span class="block w-8 h-0.5 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mt-1"></span>
                </h3>
                <ul class="space-y-3.5">
                    <li class="flex items-center gap-3 text-gray-400">
                        <div class="w-2 h-2 rounded-full bg-[#06B6D4]"></div>
                        <span class="text-sm">Laravel / PHP Development</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-400">
                        <div class="w-2 h-2 rounded-full bg-[#9333EA]"></div>
                        <span class="text-sm">Python & Machine Learning</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-400">
                        <div class="w-2 h-2 rounded-full bg-[#06B6D4]"></div>
                        <span class="text-sm">SQL Server & Data Analysis</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-400">
                        <div class="w-2 h-2 rounded-full bg-[#9333EA]"></div>
                        <span class="text-sm">Deep Learning & NLP</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-400">
                        <div class="w-2 h-2 rounded-full bg-[#06B6D4]"></div>
                        <span class="text-sm">Fullstack Web Development</span>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-5">
                <h3 class="text-white font-semibold text-lg relative inline-block">
                    Get In Touch
                    <span class="block w-8 h-0.5 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] rounded-full mt-1"></span>
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3.5 text-gray-400 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-lg">📍</span>
                        </div>
                        <div class="pt-0.5">
                            <span class="text-xs text-gray-500 block">Location</span>
                            <span class="text-sm text-gray-300">Surabaya, East Java, Indonesia</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5 text-gray-400 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-lg">📧</span>
                        </div>
                        <div class="pt-0.5">
                            <span class="text-xs text-gray-500 block">Email</span>
                            <a href="mailto:benhardsimamora1@gmail.com" class="text-sm text-gray-300 hover:text-[#06B6D4] transition-colors">benhardsimamora1@gmail.com</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5 text-gray-400 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-lg">🎓</span>
                        </div>
                        <div class="pt-0.5">
                            <span class="text-xs text-gray-500 block">Education</span>
                            <span class="text-sm text-gray-300">UNESA - Informatics Engineering</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider with gradient -->
        <div class="relative my-10 md:my-12">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-white/5"></div>
            </div>
            <div class="relative flex justify-center">
                <div class="px-4 bg-[#09090B]">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#06B6D4]/20 to-[#9333EA]/20 border border-white/10 flex items-center justify-center">
                        <i data-lucide="sparkles" class="w-5 h-5 text-[#06B6D4]"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <p class="text-gray-500 text-sm text-center md:text-left">
                &copy; {{ date('Y') }} Benhard A Simamora. Crafted with 
                <span class="text-red-500 animate-pulse inline-block">❤</span> using 
                <span class="text-[#06B6D4] font-medium">Laravel</span> 
                <span class="text-gray-600">&</span> 
                <span class="text-[#9333EA] font-medium">AI Engineer</span>
            </p>
            <div class="flex items-center gap-4 text-xs text-gray-500">
                <span class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#06B6D4]"></span>
                    Web Development
                </span>
                <span class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                    Machine Learning
                </span>
                <span class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#06B6D4]"></span>
                    AI Engineer
                </span>
            </div>
        </div>
    </div>
</footer>