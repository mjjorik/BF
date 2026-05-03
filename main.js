(function() {
  if (!document.body.classList.contains('home')) {
    return;
  }

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('on');
      revealObserver.unobserve(entry.target);
    });
  }, { threshold: 0.07, rootMargin: '0px 0px -28px 0px' });

  document.querySelectorAll('.r').forEach((element) => revealObserver.observe(element));

  const heroBackground = document.querySelector('.hero-bg');
  if (!heroBackground) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY < window.innerHeight) {
      heroBackground.style.transform = 'translateY(' + (window.scrollY * 0.22) + 'px)';
    }
  }, { passive: true });
})();
