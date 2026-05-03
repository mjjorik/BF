(function() {
  /**
   * GLOBAL REVEAL ANIMATION (Intersection Observer)
   * Applies to all elements with class .r
   */
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // Trigger when element is slightly in view
      if (entry.isIntersecting) {
        entry.target.classList.add('on');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { 
    threshold: 0.1, // Trigger when 10% visible
    rootMargin: '0px 0px -50px 0px' // Start animation slightly before it hits the viewport
  });

  // Observe all .r elements
  document.querySelectorAll('.r').forEach((element) => {
    revealObserver.observe(element);
  });

  /**
   * HERO PARALLAX (Home Only)
   */
  const heroBackground = document.querySelector('.hero-bg');
  if (heroBackground) {
    window.addEventListener('scroll', () => {
      if (window.scrollY < window.innerHeight) {
        heroBackground.style.transform = 'translateY(' + (window.scrollY * 0.22) + 'px)';
      }
    }, { passive: true });
  }
})();
