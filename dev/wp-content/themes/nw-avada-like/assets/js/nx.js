// Smooth scroll para CTAs
document.addEventListener('click', (e)=>{
  const a = e.target.closest('a[href^="#"]');
  if(!a) return;
  const el = document.querySelector(a.getAttribute('href'));
  if(!el) return;
  e.preventDefault();
  const y = el.getBoundingClientRect().top + window.scrollY - 90;
  window.scrollTo({top:y, behavior:'smooth'});
});

// FAQ: fecha irmãos
document.querySelectorAll('section#faq details summary')
  .forEach(s => s.addEventListener('click', ()=>{
    const cur = s.parentElement;
    document.querySelectorAll('section#faq details').forEach(d=>{ if(d!==cur) d.removeAttribute('open'); });
  }));
