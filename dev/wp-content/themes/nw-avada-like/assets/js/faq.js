document.addEventListener('DOMContentLoaded', () => {
  const items = Array.from(document.querySelectorAll('[data-faq-item]'));
  if (!items.length) {
    return;
  }

  items.forEach((item, idx) => {
    const question = item.querySelector('[data-faq-question]');
    const answer = item.querySelector('[data-faq-answer]');
    if (!question || !answer) {
      return;
    }

    const questionId = question.id || `faq-question-${idx + 1}`;
    const answerId = answer.id || `faq-answer-${idx + 1}`;

    question.id = questionId;
    answer.id = answerId;

    question.setAttribute('aria-controls', answerId);
    question.setAttribute('aria-expanded', 'false');
    question.setAttribute('type', 'button');

    if (!answer.hasAttribute('role')) {
      answer.setAttribute('role', 'region');
    }
    answer.setAttribute('aria-labelledby', questionId);

    const openItem = (target) => {
      target.classList.add('active');
      const btn = target.querySelector('[data-faq-question]');
      if (btn) {
        btn.setAttribute('aria-expanded', 'true');
      }
    };

    const closeItem = (target) => {
      target.classList.remove('active');
      const btn = target.querySelector('[data-faq-question]');
      if (btn) {
        btn.setAttribute('aria-expanded', 'false');
      }
    };

    const toggle = () => {
      const isActive = item.classList.contains('active');

      items.forEach((other) => {
        if (other !== item) {
          closeItem(other);
        }
      });

      if (isActive) {
        closeItem(item);
      } else {
        openItem(item);
      }
    };

    question.addEventListener('click', toggle);
  });

  const ctaButton = document.querySelector('.faq-cta-button');
  if (ctaButton && ctaButton.getAttribute('href') === '#final-cta') {
    ctaButton.addEventListener('click', () => {
      // smooth scrolling handled globally; this keeps the CTA focused after navigation.
      ctaButton.blur();
    });
  }
});
