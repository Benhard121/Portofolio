import './bootstrap';
import 'lucide';
import AOS from 'aos';
import 'aos/dist/aos.css';

// ============================================
// AOS INITIALIZATION
// ============================================
AOS.init({
    duration: 800,
    once: true,
    offset: 80,
    easing: 'ease-out-cubic',
});

// ============================================
// LUCIDE ICONS
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================
const navbar = document.getElementById('navbar');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 50) {
        navbar.classList.add('bg-[#09090B]/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-black/10');
        navbar.classList.remove('bg-transparent');
    } else {
        navbar.classList.remove('bg-[#09090B]/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-black/10');
        navbar.classList.add('bg-transparent');
    }
    
    lastScroll = currentScroll;
});

// ============================================
// MOBILE MENU TOGGLE
// ============================================
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuBtn?.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    const icon = mobileMenuBtn.querySelector('i');
    if (icon) {
        icon.setAttribute('data-lucide', mobileMenu.classList.contains('hidden') ? 'menu' : 'x');
        lucide.createIcons();
    }
});

// Close mobile menu on link click
document.querySelectorAll('.mobile-nav-link').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        if (icon) {
            icon.setAttribute('data-lucide', 'menu');
            lucide.createIcons();
        }
    });
});

// ============================================
// BACK TO TOP BUTTON
// ============================================
const backToTopBtn = document.getElementById('back-to-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
        backToTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
    } else {
        backToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
        backToTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
    }
});

backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// ============================================
// LOADING SPINNER
// ============================================
window.addEventListener('load', () => {
    const spinner = document.getElementById('loading-spinner');
    if (spinner) {
        spinner.style.opacity = '0';
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 500);
    }
});

// ============================================
// COUNTER ANIMATION
// ============================================
const animateCounter = (element) => {
    const target = parseInt(element.dataset.target);
    const duration = 2000;
    const step = Math.ceil(target / (duration / 16));
    let current = 0;

    const updateCounter = () => {
        current += step;
        if (current >= target) {
            element.textContent = target;
            return;
        }
        element.textContent = current;
        requestAnimationFrame(updateCounter);
    };

    updateCounter();
};

// Intersection Observer for counters
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.counter').forEach(counter => {
    counterObserver.observe(counter);
});

// ============================================
// SKILL PROGRESS BAR ANIMATION
// ============================================
const progressObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const bar = entry.target;
            const width = bar.dataset.width;
            setTimeout(() => {
                bar.style.width = width + '%';
            }, 200);
            progressObserver.unobserve(bar);
        }
    });
}, { threshold: 0.3 });

document.querySelectorAll('.progress-bar').forEach(bar => {
    progressObserver.observe(bar);
});

