// Aguardar o carregamento completo do DOM
document.addEventListener('DOMContentLoaded', function() {
  
  // Animação de fade-in para seções ao rolar a página
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observar todas as seções
  const sections = document.querySelectorAll('.privacy-section');
  sections.forEach(section => {
    observer.observe(section);
  });

  // Botão de voltar ao topo
  const scrollTopBtn = document.getElementById('scrollTop');
  
  if (scrollTopBtn) {
    // Mostrar/ocultar botão baseado na posição do scroll
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    });

    // Função de scroll suave ao clicar
    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Animação suave para links internos
  const internalLinks = document.querySelectorAll('a[href^="#"]');
  internalLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId !== '#' && targetId !== '#scrollTop') {
        e.preventDefault();
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });

  // Efeito parallax suave no hero
  const hero = document.querySelector('.privacy-hero');
  if (hero) {
    window.addEventListener('scroll', function() {
      const scrolled = window.pageYOffset;
      const parallaxSpeed = 0.5;
      if (scrolled < hero.offsetHeight) {
        hero.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
      }
    });
  }

  // Adicionar animação de hover nos cards
  const infoItems = document.querySelectorAll('.info-item, .rights-card, .info-card');
  infoItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
      this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
    });
  });

  // Animação de contagem para os números das seções
  const sectionNumbers = document.querySelectorAll('.section-number');
  sectionNumbers.forEach((num, index) => {
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          let start = 0;
          const end = index + 1;
          const duration = 800;
          const increment = end / (duration / 16);
          
          const counter = setInterval(() => {
            start += increment;
            if (start >= end) {
              num.textContent = String(end).padStart(2, '0');
              clearInterval(counter);
            } else {
              num.textContent = String(Math.floor(start)).padStart(2, '0');
            }
          }, 16);
          
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    observer.observe(num);
  });

  // Adicionar efeito de ripple aos botões e links
  const clickableElements = document.querySelectorAll('a, .scroll-top');
  clickableElements.forEach(element => {
    element.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      
      ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        left: ${x}px;
        top: ${y}px;
        pointer-events: none;
        transform: scale(0);
        animation: ripple 0.6s ease-out;
      `;
      
      this.style.position = 'relative';
      this.style.overflow = 'hidden';
      this.appendChild(ripple);
      
      setTimeout(() => ripple.remove(), 600);
    });
  });

  // Adicionar estilo de animação ripple
  const style = document.createElement('style');
  style.textContent = `
    @keyframes ripple {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(style);

  // Lazy loading para imagens (se houver)
  const images = document.querySelectorAll('img[data-src]');
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        imageObserver.unobserve(img);
      }
    });
  });
  images.forEach(img => imageObserver.observe(img));

  // Melhorar a performance do scroll
  let ticking = false;
  let lastScrollY = 0;
  window.addEventListener('scroll', function() {
    lastScrollY = window.scrollY;
    
    if (!ticking) {
      window.requestAnimationFrame(function() {
        // Executar funções relacionadas ao scroll aqui
        ticking = false;
      });
      ticking = true;
    }
  });

  // Console log para debug (opcional - remover em produção)
  console.log('Privacy Policy page initialized successfully');
});

