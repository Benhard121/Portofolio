@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="relative pt-32 pb-20 md:pt-40 md:pb-32 min-h-screen overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/3 left-1/3 w-96 h-96 bg-[#06B6D4]/10 rounded-full blur-[150px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#9333EA]/10 rounded-full blur-[120px] animate-pulse-glow animation-delay-1000"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-30"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-xs text-[#06B6D4] font-semibold uppercase tracking-[0.2em]">Let's Connect</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-4 mt-3">
                Get In <span class="gradient-text">Touch</span>
            </h1>
            <div class="section-divider justify-center">
                <span class="line"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto mt-4">
                Have a project in mind or just want to say hello? Feel free to reach out. I'd love to hear from you!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Left Side - Contact Info -->
            <div data-aos="fade-right" data-aos-duration="800">
                <div class="space-y-6">
                    <!-- Name -->
                    <div class="glass-card group">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-2xl">👦</span>
                            </div>
                            <div class="pt-1">
                                <h3 class="text-white font-semibold">Name</h3>
                                <p class="text-gray-400 text-sm">Benhard A Simamora</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="glass-card group">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#9333EA]/20 to-[#9333EA]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-2xl">📧</span>
                            </div>
                            <div class="pt-1">
                                <h3 class="text-white font-semibold">Email</h3>
                                <a href="mailto:benhardsimamora1@gmail.com" class="text-gray-400 text-sm hover:text-[#06B6D4] transition-colors">benhardsimamora1@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="glass-card group">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#06B6D4]/20 to-[#06B6D4]/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-2xl">📍</span>
                            </div>
                            <div class="pt-1">
                                <h3 class="text-white font-semibold">Location</h3>
                                <p class="text-gray-400 text-sm">Surabaya, East Java, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="glass-card">
                        <h3 class="text-white font-semibold text-lg mb-5 flex items-center gap-2">
                            <i data-lucide="share-2" class="w-5 h-5 text-[#06B6D4]"></i>
                            Connect With Me
                        </h3>
                        <div class="flex items-center gap-3">
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
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div data-aos="fade-left" data-aos-duration="800">
                <div class="glass-card p-6 md:p-8">
                    <h3 class="text-white font-semibold text-xl mb-6 flex items-center gap-2">
                        <i data-lucide="send" class="w-5 h-5 text-[#06B6D4]"></i>
                        Send Me a Message
                    </h3>
                    
                    <!-- Success Alert -->
                    <div id="success-alert" class="hidden p-4 mb-6 rounded-xl bg-gradient-to-r from-[#06B6D4]/10 to-[#9333EA]/10 border border-[#06B6D4]/20 text-[#06B6D4] text-sm animate-slide-down">
                        <div class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span id="success-message">Pesan berhasil dikirim! Terima kasih telah menghubungi saya.</span>
                        </div>
                    </div>

                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="form-label">Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" required value=""
                                class="form-input @error('name') error @enderror"
                                placeholder="Your Name">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" required value=""
                                class="form-input @error('email') error @enderror"
                                placeholder="your@email.com">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject" 
                                class="form-input"
                                placeholder="Project Collaboration">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="form-label">Message <span class="text-red-500">*</span></label>
                            <textarea name="message" id="message" rows="5" required 
                                class="form-input resize-none @error('message') error @enderror"
                                placeholder="Tell me about your project..."></textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submit-btn" 
                            class="w-full py-3.5 bg-gradient-to-r from-[#06B6D4] to-[#9333EA] text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-[#06B6D4]/30 hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2 group">
                            <span id="btn-text">Send Message</span>
                            <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" id="btn-icon"></i>
                            <svg id="btn-spinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.getElementById('contact-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const form = this;
        const btn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnIcon = document.getElementById('btn-icon');
        const btnSpinner = document.getElementById('btn-spinner');
        const successAlert = document.getElementById('success-alert');
        const successMessage = document.getElementById('success-message');
        
        // Show loading state
        btn.disabled = true;
        btnText.textContent = 'Sending...';
        btnIcon.classList.add('hidden');
        btnSpinner.classList.remove('hidden');
        
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                successMessage.textContent = data.message;
                successAlert.classList.remove('hidden');
                form.reset();
                setTimeout(() => {
                    successAlert.classList.add('hidden');
                }, 5000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        })
        .finally(() => {
            btn.disabled = false;
            btnText.textContent = 'Send Message';
            btnIcon.classList.remove('hidden');
            btnSpinner.classList.add('hidden');
        });
    });
</script>
@endpush