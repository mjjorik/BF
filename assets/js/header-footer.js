(function() {
  const nav = document.getElementById('nav');
  const burger = document.getElementById('burger');
  const mobileNav = document.getElementById('mNav');

  function syncNavState() {
    if (!nav) return;
    nav.classList.toggle('scrolled', window.scrollY > 60);
  }

  function closeMobileMenu() {
    if (burger) burger.classList.remove('open');
    if (mobileNav) mobileNav.classList.remove('open');
    document.querySelectorAll('.m-item.open').forEach((item) => item.classList.remove('open'));
  }

  if (burger && mobileNav && !burger.dataset.shellBound) {
    burger.dataset.shellBound = '1';

    burger.addEventListener('click', () => {
      burger.classList.toggle('open');
      mobileNav.classList.toggle('open');
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', closeMobileMenu);
    });

    mobileNav.querySelectorAll('[data-toggle]').forEach((toggle) => {
      toggle.addEventListener('click', () => {
        const item = toggle.closest('.m-item');
        const isOpen = item && item.classList.contains('open');
        document.querySelectorAll('.m-item.open').forEach((openItem) => openItem.classList.remove('open'));
        if (item && !isOpen) item.classList.add('open');
      });
    });
  }

  window.addEventListener('scroll', syncNavState, { passive: true });
  window.addEventListener('pageshow', () => {
    closeMobileMenu();
    syncNavState();
  });
  window.addEventListener('pagehide', closeMobileMenu);

  syncNavState();

  const lang = document.getElementById('langSwitcher');
  if (lang) {
    const button = lang.querySelector('.lang-btn');
    if (button) {
      button.addEventListener('click', (event) => {
        event.stopPropagation();
        lang.classList.toggle('open');
        button.setAttribute('aria-expanded', lang.classList.contains('open') ? 'true' : 'false');
      });
    }

    document.addEventListener('click', (event) => {
      if (!lang.contains(event.target)) {
        lang.classList.remove('open');
        if (button) {
          button.setAttribute('aria-expanded', 'false');
        }
      }
    });
  }
})();
