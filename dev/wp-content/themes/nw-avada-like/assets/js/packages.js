(function () {
  const section = document.querySelector('#packages.packages-modern');
  if (!section) {
    return;
  }

  const cards = Array.from(section.querySelectorAll('.packages-modern__card'));
  if (!cards.length) {
    return;
  }

  section.setAttribute('data-packages-ready', 'true');

  const featureTimeouts = new WeakMap();

  const revealFeatures = (card) => {
    const features = Array.from(card.querySelectorAll('.packages-modern__feature'));
    if (!features.length) {
      return;
    }

    const existing = featureTimeouts.get(card);
    if (existing && existing.length) {
      existing.forEach((id) => window.clearTimeout(id));
    }

    const timeouts = [];
    features.forEach((feature, index) => {
      feature.classList.remove('is-active');
      void feature.offsetWidth;
      const timeoutId = window.setTimeout(() => {
        feature.classList.add('is-active');
      }, index * 60);
      timeouts.push(timeoutId);
    });
    featureTimeouts.set(card, timeouts);
  };

  const handleParallax = (() => {
    let sectionStart = 0;

    const recalcStart = () => {
      const rect = section.getBoundingClientRect();
      sectionStart = (window.scrollY || window.pageYOffset) + rect.top;
    };

    const apply = () => {
      const scrollY = window.scrollY || window.pageYOffset || 0;
      const progress = Math.max(0, scrollY - sectionStart);
      cards.forEach((card, index) => {
        const speed = (index + 1) * 0.05;
        const offset = Math.min(progress * speed * 0.18, 42);
        card.style.setProperty('--pkg-parallax', `${offset}px`);
      });
    };

    recalcStart();
    apply();

    window.addEventListener('scroll', apply, { passive: true });
    window.addEventListener('resize', () => {
      recalcStart();
      apply();
    });

    return { recalcStart, apply };
  })();

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            return;
          }
          revealFeatures(entry.target);
          observer.unobserve(entry.target);
        });
      },
      {
        threshold: 0.35,
      }
    );

    cards.forEach((card) => observer.observe(card));
  } else {
    cards.forEach((card) => revealFeatures(card));
  }

  cards.forEach((card) => {
    card.addEventListener('mouseenter', () => revealFeatures(card));
    card.addEventListener('focusin', () => revealFeatures(card));
  });

  const ctas = Array.from(section.querySelectorAll('.packages-modern__cta'));
  ctas.forEach((cta) => {
    cta.addEventListener('click', (event) => {
      const rect = cta.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const ripple = document.createElement('span');
      ripple.className = 'packages-modern__ripple';
      ripple.style.width = `${size}px`;
      ripple.style.height = `${size}px`;
      ripple.style.left = `${event.clientX - rect.left - size / 2}px`;
      ripple.style.top = `${event.clientY - rect.top - size / 2}px`;

      cta.appendChild(ripple);
      window.setTimeout(() => ripple.remove(), 600);
    });
  });
})();
