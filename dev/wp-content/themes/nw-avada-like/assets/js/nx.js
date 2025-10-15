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

// Testimonials slider
(function(){
  const root = document.querySelector('[data-nx-slider]');
  if(!root) return;
  const track = root.querySelector('.nx-slider__track');
  const dots = [...root.querySelectorAll('.nx-dot')];
  if(!track || !dots.length) return;
  let idx = 0;
  const go = (i)=>{
    idx = i;
    track.style.transform = `translateX(calc(${i * -100}%))`;
    dots.forEach((dot,k)=>dot.classList.toggle('is-active',k===i));
  };
  dots.forEach((dot,i)=>dot.addEventListener('click',()=>go(i)));
  go(0);
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
