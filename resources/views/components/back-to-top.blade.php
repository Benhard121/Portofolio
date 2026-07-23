<button id="back-to-top" 
    class="fixed bottom-8 right-8 z-50 p-3.5 rounded-xl bg-gradient-to-br from-[#06B6D4] to-[#9333EA] text-white shadow-lg shadow-[#06B6D4]/25 opacity-0 invisible translate-y-4 transition-all duration-300 hover:shadow-xl hover:shadow-[#06B6D4]/30 hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#06B6D4]/50"
    aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="m18 15-6-6-6 6"/>
    </svg>
</button>

@push('scripts')
<script>
    const backToTop = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTop.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            backToTop.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            backToTop.classList.add('opacity-0', 'invisible', 'translate-y-4');
            backToTop.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endpush