(function() {
  const root = document.querySelector('.page-events');
  if (!root) return;

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('on');
      revealObserver.unobserve(entry.target);
    });
  }, { threshold: 0.06, rootMargin: '0px 0px -16px 0px' });

  root.querySelectorAll('.r, .rc').forEach((element) => revealObserver.observe(element));

  const progress = root.querySelector('#scrollProgress');
  const whatsapp = root.querySelector('#waFloat');

  function syncFloatingUi() {
    const pageHeight = document.body.scrollHeight - window.innerHeight;
    const progressValue = pageHeight > 0 ? Math.min((window.scrollY / pageHeight) * 100, 100) : 0;
    if (progress) {
      progress.style.width = progressValue + '%';
    }
    if (whatsapp) {
      whatsapp.classList.toggle('visible', window.scrollY > 400);
    }
  }

  document.querySelectorAll('#nav .nav-item').forEach((item) => {
    const link = item.querySelector(':scope > a');
    if (link && link.getAttribute('href') === '/services') {
      item.classList.add('active-page');
    }
  });

  const gallery = root.querySelector('#galleryScroll');
  const dots = root.querySelectorAll('.gallery-dot');
  const label = root.querySelector('#galleryLbl');
  let isPointerDown = false;
  let startX = 0;
  let startScrollLeft = 0;

  function syncGalleryState() {
    if (!gallery) return;
    const items = gallery.querySelectorAll('.gallery-item');
    if (!items.length) return;

    const maxScroll = gallery.scrollWidth - gallery.clientWidth;
    const ratio = maxScroll > 0 ? gallery.scrollLeft / maxScroll : 0;
    const activeIndex = Math.round(ratio * (items.length - 1));

    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === activeIndex);
    });

    if (label) {
      label.textContent = (activeIndex + 1) + ' / ' + items.length;
    }
  }

  if (gallery) {
    gallery.addEventListener('mousedown', (event) => {
      isPointerDown = true;
      gallery.classList.add('grabbing');
      startX = event.pageX - gallery.offsetLeft;
      startScrollLeft = gallery.scrollLeft;
    });

    gallery.addEventListener('mouseleave', () => {
      isPointerDown = false;
      gallery.classList.remove('grabbing');
    });

    gallery.addEventListener('mouseup', () => {
      isPointerDown = false;
      gallery.classList.remove('grabbing');
    });

    gallery.addEventListener('mousemove', (event) => {
      if (!isPointerDown) return;
      event.preventDefault();
      const currentX = event.pageX - gallery.offsetLeft;
      gallery.scrollLeft = startScrollLeft - (currentX - startX) * 1.5;
    });

    gallery.addEventListener('scroll', syncGalleryState, { passive: true });
    syncGalleryState();
  }

  root.querySelectorAll('.faq-item').forEach((item) => {
    const trigger = item.querySelector('.faq-q');
    if (!trigger) return;

    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      root.querySelectorAll('.faq-item').forEach((entry) => entry.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  root.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (event) => {
      const target = root.querySelector(link.getAttribute('href'));
      if (!target) return;
      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  const form = root.querySelector('.c-form');
  const success = root.querySelector('.form-success');
  if (form && success) {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      form.style.display = 'none';
      success.classList.add('active');
    });
  }

  window.addEventListener('scroll', syncFloatingUi, { passive: true });
  syncFloatingUi();
})();
