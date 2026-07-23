<div id="loading-spinner" class="fixed inset-0 z-[100] bg-[#09090B] flex items-center justify-center transition-opacity duration-500">
    <div class="flex flex-col items-center gap-5">
        <div class="relative">
            <!-- Outer spinner -->
            <div class="w-20 h-20 rounded-full border-4 border-white/5 border-t-[#06B6D4] border-r-[#9333EA] animate-spin"></div>
            <!-- Middle spinner -->
            <div class="absolute inset-2 w-16 h-16 rounded-full border-4 border-transparent border-t-[#9333EA] border-r-[#06B6D4] animate-spin animation-delay-150" style="animation-duration: 0.8s;"></div>
            <!-- Inner spinner -->
            <div class="absolute inset-4 w-12 h-12 rounded-full border-4 border-transparent border-t-[#3B82F6] animate-spin animation-delay-300" style="animation-duration: 0.6s;"></div>
            <!-- Center dot -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-3 h-3 rounded-full bg-gradient-to-br from-[#06B6D4] to-[#9333EA] animate-pulse"></div>
            </div>
        </div>
        <div class="text-center">
            <p class="text-gray-400 text-sm font-medium animate-pulse">Loading</p>
            <div class="flex items-center justify-center gap-1 mt-1">
                <span class="w-1.5 h-1.5 rounded-full bg-[#06B6D4] animate-bounce" style="animation-delay: 0s;"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA] animate-bounce" style="animation-delay: 0.15s;"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-[#06B6D4] animate-bounce" style="animation-delay: 0.3s;"></span>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('load', () => {
        const spinner = document.getElementById('loading-spinner');
        if (spinner) {
            spinner.style.opacity = '0';
            setTimeout(() => {
                spinner.style.display = 'none';
            }, 500);
        }
    });
</script>
@endpush