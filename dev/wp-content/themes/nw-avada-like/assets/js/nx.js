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
