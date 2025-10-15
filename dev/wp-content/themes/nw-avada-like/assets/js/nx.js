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
