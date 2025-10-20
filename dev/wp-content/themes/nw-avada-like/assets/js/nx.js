// Smooth scroll for anchor CTAs
document.addEventListener('click', (e)=>{
  const a = e.target.closest('a[href^="#"]');
  if(!a) return;
  const href = a.getAttribute('href');
  if(!href || href === '#') return;
  const el = document.querySelector(href);
  if(!el) return;
  e.preventDefault();
  const y = el.getBoundingClientRect().top + window.scrollY - 90;
  window.scrollTo({top:y, behavior:'smooth'});
});

// FAQ: close siblings when opening one
document.querySelectorAll('section#faq details summary')
  .forEach(s => s.addEventListener('click', ()=>{
    const cur = s.parentElement;
    document.querySelectorAll('section#faq details').forEach(d=>{ if(d!==cur) d.removeAttribute('open'); });
  }));

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
if (window.IntersectionObserver && revealEls.length) {
  const io = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
      if(entry.isIntersecting){
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      }
    });
  },{threshold:0.15});
  revealEls.forEach(el=>io.observe(el));
} else {
  revealEls.forEach(el=>el.classList.add('is-in'));
}

// Testimonials carousel
(function(){
  const root = document.querySelector('[data-nx-testimonials]');
  if(!root) return;

  const viewport = root.querySelector('[data-nx-testimonials-viewport]');
  const track = root.querySelector('[data-nx-testimonials-track]');
  const cards = [...root.querySelectorAll('[data-nx-testimonials-card]')];
  const dots = [...root.querySelectorAll('[data-nx-testimonials-dot]')];
  const prevBtn = root.querySelector('[data-nx-testimonials-prev]');
  const nextBtn = root.querySelector('[data-nx-testimonials-next]');

  if(!viewport || !track || !cards.length) return;

  const getGap = ()=>{
    const style = window.getComputedStyle(track);
    const raw = style.columnGap || style.gap || '0';
    return Number.parseFloat(raw) || 0;
  };

  const getCardsPerView = ()=>{
    const width = window.innerWidth;
    if(width <= 768) return 1;
    if(width <= 1024) return 2;
    return 3;
  };

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  let observer = null;
  let allowAutoplay = !prefersReducedMotion.matches;
  let inView = false;
  let index = 0;
  let cardsPerView = getCardsPerView();
  let maxIndex = Math.max(cards.length - cardsPerView, 0);
  let autoplayId = null;

  const setAriaForCards = ()=>{
    cards.forEach((card,i)=>{
      const hidden = i < index || i > index + cardsPerView - 1;
      card.setAttribute('aria-hidden', hidden ? 'true' : 'false');
      if(hidden){
        card.setAttribute('tabindex', '-1');
      } else {
        card.removeAttribute('tabindex');
      }
    });
  };

  const updateDots = ()=>{
    if(!dots.length) return;
    dots.forEach((dot,i)=>{
      const isActive = i === index;
      dot.classList.toggle('is-active', isActive);
      dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });
  };

  const applyTransform = ()=>{
    const cardWidth = cards[0].getBoundingClientRect().width;
    const offset = -(index * (cardWidth + getGap()));
    track.style.transform = `translateX(${offset}px)`;
  };

  const update = ()=>{
    applyTransform();
    setAriaForCards();
    updateDots();
  };

  const goTo = (nextIndex)=>{
    if(maxIndex === 0){
      index = 0;
    } else {
      const total = maxIndex + 1;
      index = ((nextIndex % total) + total) % total;
    }
    update();
  };

  const goBy = (delta)=>goTo(index + delta);

  const recalc = ()=>{
    cardsPerView = getCardsPerView();
    maxIndex = Math.max(cards.length - cardsPerView, 0);
    if(index > maxIndex){
      index = maxIndex;
    }
    update();
  };

  let resizeTimer = null;
  const handleResize = ()=>{
    if(resizeTimer){
      window.clearTimeout(resizeTimer);
    }
    resizeTimer = window.setTimeout(()=>recalc(), 120);
  };

  const stopAutoplay = ()=>{
    if(autoplayId){
      window.clearInterval(autoplayId);
      autoplayId = null;
    }
  };

  const startAutoplay = ()=>{
    if(!allowAutoplay || maxIndex === 0) return;
    if(observer && !inView) return;
    stopAutoplay();
    autoplayId = window.setInterval(()=>goBy(1), 5000);
  };

  const resetAutoplay = ()=>{
    stopAutoplay();
    startAutoplay();
  };

  const handleVisibility = (entries)=>{
    entries.forEach((entry)=>{
      if(entry.target !== root) return;
      inView = entry.isIntersecting;
      if(inView){
        startAutoplay();
      } else {
        stopAutoplay();
      }
    });
  };

  observer = ('IntersectionObserver' in window) ? new IntersectionObserver(handleVisibility, { threshold: 0.35 }) : null;
  if(observer){
    observer.observe(root);
  } else {
    inView = true;
    startAutoplay();
  }

  dots.forEach((dot)=>{
    dot.addEventListener('click', ()=>{
      const targetIndex = Number.parseInt(dot.dataset.index || '0', 10);
      goTo(targetIndex);
      resetAutoplay();
    });
  });

  if(prevBtn){
    prevBtn.addEventListener('click', ()=>{
      goBy(-1);
      resetAutoplay();
    });
  }

  if(nextBtn){
    nextBtn.addEventListener('click', ()=>{
      goBy(1);
      resetAutoplay();
    });
  }

  cards.forEach((card)=>{
    card.addEventListener('mouseenter', stopAutoplay);
    card.addEventListener('mouseleave', startAutoplay);
    card.addEventListener('focusin', stopAutoplay);
    card.addEventListener('focusout', startAutoplay);
  });

  root.addEventListener('focusin', stopAutoplay);
  root.addEventListener('focusout', startAutoplay);

  const handleMotionChange = (event)=>{
    allowAutoplay = !event.matches;
    if(!allowAutoplay){
      stopAutoplay();
    } else {
      startAutoplay();
    }
  };

  if(typeof prefersReducedMotion.addEventListener === 'function'){
    prefersReducedMotion.addEventListener('change', handleMotionChange);
  } else if(typeof prefersReducedMotion.addListener === 'function'){
    prefersReducedMotion.addListener(handleMotionChange);
  }

  recalc();
  window.addEventListener('resize', handleResize);
})();

// Results counters
(function(){
  const section = document.querySelector('.results-section');
  if(!section) return;

  const counters = [...section.querySelectorAll('.result-number')];
  if(!counters.length) return;

  const animateCounter = (element, target, duration = 2000, suffix = '') => {
    const startValue = 0;
    const startTime = performance.now();
    element.classList.add('counting');

    const step = (now) => {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const currentValue = Math.floor(startValue + (target - startValue) * progress);
      element.textContent = `${currentValue}${suffix}`;

      if (progress < 1) {
        requestAnimationFrame(step);
        return;
      }

      element.textContent = `${target}${suffix}`;
      setTimeout(()=>element.classList.remove('counting'), 500);
    };

    requestAnimationFrame(step);
  };

  const startCounters = () => {
    counters.forEach((counter)=>{
      const target = Number.parseInt(counter.getAttribute('data-target') || '0', 10);
      const suffix = counter.getAttribute('data-suffix') || '';
      if (Number.isNaN(target)) {
        return;
      }
      counter.textContent = `0${suffix}`;
      animateCounter(counter, target, 2000, suffix);
    });
  };

  const randomCandidates = counters.filter((counter)=>counter.dataset.random === 'true');

  const randomUpdate = () => {
    if (!randomCandidates.length) return;
    const randomCounter = randomCandidates[Math.floor(Math.random() * randomCandidates.length)];
    const currentTarget = Number.parseInt(randomCounter.getAttribute('data-target') || '0', 10);
    const suffix = randomCounter.getAttribute('data-suffix') || '';
    if (Number.isNaN(currentTarget)) {
      return;
    }
    const variation = Math.floor(Math.random() * 3);
    const newTarget = currentTarget + variation;
    randomCounter.setAttribute('data-target', String(newTarget));
    animateCounter(randomCounter, newTarget, 800, suffix);
  };

  let hasStarted = false;
  let randomTimer = null;

  const kickOff = () => {
    if (hasStarted) return;
    hasStarted = true;
    startCounters();
    setTimeout(()=>{
    if (randomCandidates.length && !randomTimer) {
        randomTimer = setInterval(randomUpdate, 8000);
      }
    }, 3000);
  };

  if (!('IntersectionObserver' in window)) {
    kickOff();
    return;
  }

  const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
      if (entry.isIntersecting) {
        kickOff();
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  observer.observe(section);
})();

// Scroll spy for primary navigation
(function(){
  if(!window.IntersectionObserver) return;
  const navLinks = [...document.querySelectorAll('.primary-nav__list a[href^="#"]')];
  if(!navLinks.length) return;

  const linkById = new Map();
  const sections = [];

  navLinks.forEach((link)=>{
    const hash = link.hash;
    if(!hash || hash.length <= 1) return;
    const id = hash.slice(1);
    const target = document.getElementById(id);
    if(!target) return;
    linkById.set(id, link);
    if(!target.classList.contains('section-anchor')) {
      sections.push(target);
    }
  });

  if(!sections.length) return;

  const markLink = (link, { aria = true } = {}) => {
    if(!link) return;
    if(aria) {
      link.setAttribute('aria-current', 'true');
    }
    const item = link.closest('li');
    if(item) {
      item.classList.add('is-active');
    }
  };

  const resetLinks = () => {
    navLinks.forEach((link)=>{
      link.removeAttribute('aria-current');
      const item = link.closest('li');
      if(item) {
        item.classList.remove('is-active');
        item.classList.remove('has-active-child');
      }
    });
  };

  let currentId = null;

  const setActive = (nextId) => {
    if(!nextId || currentId === nextId) return;
    currentId = nextId;
    resetLinks();

    const activeLink = linkById.get(nextId);
    if(activeLink) {
      markLink(activeLink);
      const activeItem = activeLink.closest('li');
      const parent = activeItem?.closest('.menu-item-has-children');
      if(parent && parent !== activeItem) {
        parent.classList.add('has-active-child');
        const parentLink = parent.querySelector('a[href^="#"]');
        markLink(parentLink, { aria: false });
      }
    }
  };

  const observer = new IntersectionObserver((entries)=>{
    const visible = entries
      .filter((entry)=>entry.isIntersecting)
      .sort((a,b)=>a.boundingClientRect.top - b.boundingClientRect.top);

    if(visible.length){
      setActive(visible[0].target.id);
      return;
    }

    const first = sections[0];
    if(first && window.scrollY < first.offsetTop - 160){
      setActive(first.id);
    }
  },{
    rootMargin: '-45% 0px -45%',
    threshold: 0
  });

  sections.forEach((section)=>observer.observe(section));

  const hashId = window.location.hash ? window.location.hash.slice(1) : null;
  const initialId = (hashId && linkById.has(hashId)) ? hashId : sections[0].id;
  setActive(initialId);
})();
