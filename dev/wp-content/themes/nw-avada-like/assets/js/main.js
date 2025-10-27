document.addEventListener('DOMContentLoaded', () => {
  // Legacy header navigation JS removed (global-header__*). New header has inline JS.

  // Rotacao de texto no hero
  const heroWordTarget = document.querySelector('.hero__title-dynamic');
  if (heroWordTarget) {
    try {
      const datasetValue = heroWordTarget.getAttribute('data-words');
      const words = Array.isArray(datasetValue) ? datasetValue : JSON.parse(datasetValue ?? '[]');
      if (Array.isArray(words) && words.length > 1) {
        let index = 0;
        heroWordTarget.textContent = words[index];

        const cycleWords = () => {
          heroWordTarget.classList.add('is-transitioning');
          setTimeout(() => {
            index = (index + 1) % words.length;
            heroWordTarget.textContent = words[index];
            heroWordTarget.classList.remove('is-transitioning');
          }, 200);
        };

        setInterval(cycleWords, 3200);
      }
    } catch (error) {
      console.warn('NW Avada Like: nao foi possivel rotacionar as palavras do hero.', error);
    }
  }

  // Acordeao de FAQ
  const accordionRoot = document.querySelector('[data-accordion]');
  if (accordionRoot) {
    accordionRoot.addEventListener('click', (event) => {
      const trigger = (event.target instanceof Element) ? event.target.closest('.faq__trigger') : null;
      if (!trigger) {
        return;
      }

      const parentItem = trigger.closest('.faq__item');
      const panelId = trigger.getAttribute('aria-controls');
      if (!parentItem || !panelId) {
        return;
      }

      const panel = document.getElementById(panelId);
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
      trigger.setAttribute('aria-expanded', String(!isExpanded));
      parentItem.classList.toggle('is-open', !isExpanded);
      if (panel) {
        if (isExpanded) {
          panel.setAttribute('hidden', '');
        } else {
          panel.removeAttribute('hidden');
        }
      }
    });
  }

  // Hero media slider (apenas coluna direita)
  const mediaSlider = document.querySelector('[data-hero-media-slider]');
  if (mediaSlider) {
    const track = mediaSlider.querySelector('.hero-media-slider__track');
    const slides = Array.from(mediaSlider.querySelectorAll('.hero-media-slider__slide'));
    const dots = Array.from(mediaSlider.querySelectorAll('.hero-media-slider__dot'));
    let currentIndex = 0;
    let intervalId;

    // Ajuste dinamico de largura da trilha e dos slides
    const applyDimensions = () => {
      if (!track) return;
      const count = slides.length;
      track.style.width = `${count * 100}%`;
      slides.forEach((slide) => {
        slide.style.flex = `0 0 ${100 / count}%`;
        slide.style.maxWidth = `${100 / count}%`;
      });
    };

    const ensureImageSrc = () => {
      slides.forEach((slide) => {
        const img = slide.querySelector('img');
        if (img && !img.src) {
          const ph = img.getAttribute('data-placeholder');
          if (ph) {
            img.src = ph;
          }
        }
      });
    };

    const goTo = (index) => {
      if (!track || slides.length === 0) return;
      const clamped = ((index % slides.length) + slides.length) % slides.length;
      currentIndex = clamped;
      const step = 100 / slides.length; // porcentagem por slide
      const percentage = -(step * clamped);
      track.style.transform = `translateX(${percentage}%)`;
      slides.forEach((slide, i) => {
        slide.classList.toggle('is-active', i === clamped);
        slide.setAttribute('aria-hidden', i === clamped ? 'false' : 'true');
      });
      dots.forEach((dot, i) => {
        dot.classList.toggle('is-active', i === clamped);
        dot.setAttribute('aria-selected', i === clamped ? 'true' : 'false');
      });
    };

    const start = () => {
      stop();
      intervalId = window.setInterval(() => goTo(currentIndex + 1), 5000);
    };

    const stop = () => {
      if (intervalId) {
        window.clearInterval(intervalId);
        intervalId = undefined;
      }
    };

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        goTo(i);
        start();
      });
    });

    mediaSlider.addEventListener('mouseenter', stop);
    mediaSlider.addEventListener('mouseleave', start);

    applyDimensions();
    ensureImageSrc();
    goTo(0);
    start();
  }
});
