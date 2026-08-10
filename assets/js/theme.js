(() => {
  'use strict';

  const menuButton = document.querySelector('[data-menu-button]');
  const mobileMenu = document.querySelector('[data-mobile-menu]');

  if (menuButton && mobileMenu) {
    const closeMenu = () => {
      mobileMenu.classList.add('hidden');
      menuButton.setAttribute('aria-expanded', 'false');
    };

    menuButton.addEventListener('click', () => {
      const willOpen = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden', !willOpen);
      menuButton.setAttribute('aria-expanded', String(willOpen));
    });

    mobileMenu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) closeMenu();
    });
  }

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver((entries, currentObserver) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        currentObserver.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px' });
    revealItems.forEach((item) => observer.observe(item));
  } else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
  }

  document.querySelectorAll('[data-homestay-gallery], [data-product-gallery]').forEach((gallery) => {
    const track = gallery.querySelector('[data-gallery-track]');
    const slides = track ? Array.from(track.children) : [];
    const previousButton = gallery.querySelector('[data-gallery-prev]');
    const nextButton = gallery.querySelector('[data-gallery-next]');
    if (!track || slides.length < 2) return;

    let index = 0;
    let pointerStart = null;

    const show = (nextIndex) => {
      index = (nextIndex + slides.length) % slides.length;
      track.style.transform = 'translate3d(-' + (index * 100) + '%, 0, 0)';
    };

    if (previousButton) previousButton.addEventListener('click', () => show(index - 1));
    if (nextButton) nextButton.addEventListener('click', () => show(index + 1));

    gallery.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft') show(index - 1);
      if (event.key === 'ArrowRight') show(index + 1);
    });

    gallery.addEventListener('pointerdown', (event) => {
      pointerStart = event.clientX;
    });

    gallery.addEventListener('pointerup', (event) => {
      if (pointerStart === null) return;
      const distance = event.clientX - pointerStart;
      pointerStart = null;
      if (Math.abs(distance) < 45) return;
      show(index + (distance < 0 ? 1 : -1));
    });

    gallery.addEventListener('pointercancel', () => {
      pointerStart = null;
    });

    show(0);
  });

  document.querySelectorAll('[data-gallery-marquee]').forEach((gallery) => {
    const track = gallery.querySelector('[data-gallery-marquee-track]');
    const originalSet = gallery.querySelector('[data-gallery-marquee-set]');
    if (!track || !originalSet || track.children.length > 1) return;

    const clone = originalSet.cloneNode(true);
    clone.removeAttribute('data-gallery-marquee-set');
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);

    const itemCount = originalSet.children.length;
    gallery.style.setProperty('--marquee-duration', itemCount >= 10 ? '22s' : '16s');
    requestAnimationFrame(() => gallery.classList.add('is-ready'));
  });
})();
