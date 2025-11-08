import './bootstrap';
import Lenis from '@studio-freight/lenis'
import gsap from "gsap";

// Smooth Scroll

const lenis = new Lenis({
  smooth: true,
  lerp: 0.1,
  touchMultiplier: 2,
  normalizeWheel: true,
  smoothTouch: false,
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

window.lenis = lenis;


// Efek Scroll Navbar 

document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('navbar');
  const separator = document.getElementById('separator');
  let lastScroll = 0;

  window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > lastScroll + 3) {
      navbar.style.transform = 'translateY(-120px)';
    } else if (currentScroll < lastScroll - 4) {
      navbar.style.transform = 'translateY(0)';
    }

    if (currentScroll > 700) {
      navbar.classList.add('bg-[var(--primary-500)]', 'border-[var(--primary-500)]', 'shadow-md');
      navbar.classList.remove('bg-[#E6F2F1]/10', 'border-[#E6F2F1]/30');

      separator.classList.add('bg-gray-300')
      separator.classList.remove('bg-gray-500')
    } else {
      navbar.classList.add('bg-[#E6F2F1]/10', 'border-[#E6F2F1]/30');
      navbar.classList.remove('bg-[var(--primary-500)]', 'border-[var(--primary-500)]', 'shadow-md');

      separator.classList.remove('bg-gray-300')
      separator.classList.add('bg-gray-500')
    }

    lastScroll = currentScroll;
  })
})