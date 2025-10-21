(function () {
  const section = document.querySelector('.nx-next-steps');
  if (!section) {
    return;
  }

  const animatedElements = section.querySelectorAll('[data-nx-animate]');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.2,
        rootMargin: '0px 0px -80px 0px',
      }
    );

    animatedElements.forEach((element) => observer.observe(element));
  } else {
    animatedElements.forEach((element) =>
      element.classList.add('is-visible')
    );
  }

  const floatingElements = section.querySelectorAll(
    '.nx-next-steps__floating'
  );
  const parallaxHost = section.querySelector('.nx-next-steps__card');

  if (parallaxHost && floatingElements.length) {
    const handleMove = (event) => {
      const bounds = parallaxHost.getBoundingClientRect();
      const x = (event.clientX - bounds.left) / bounds.width - 0.5;
      const y = (event.clientY - bounds.top) / bounds.height - 0.5;

      floatingElements.forEach((element, index) => {
        const speed = (index + 1) * 8;
        element.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
      });
    };

    const resetMove = () => {
      floatingElements.forEach((element) => {
        element.style.transform = '';
      });
    };

    parallaxHost.addEventListener('mousemove', handleMove);
    parallaxHost.addEventListener('mouseleave', resetMove);
  }

  const faqTrigger = section.querySelector('[data-nx-next-steps-faq="true"]');
  if (faqTrigger) {
    faqTrigger.addEventListener('click', (event) => {
      const anchor = faqTrigger.getAttribute('href');
      if (anchor && anchor.startsWith('#')) {
        const target = document.querySelector(anchor);
        if (target) {
          event.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  }

  const scheduleTrigger = section.querySelector(
    '[data-nx-next-steps-schedule="true"]'
  );
  if (scheduleTrigger) {
    const whatsappUrl = scheduleTrigger.getAttribute('data-nx-whatsapp-url');
    if (whatsappUrl) {
      scheduleTrigger.addEventListener('click', (event) => {
        event.preventDefault();
        window.open(whatsappUrl, '_blank');
      });
    }
  }
})();
