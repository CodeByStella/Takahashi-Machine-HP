export default function initCarousel() {
  const carousels = document.querySelectorAll('[data-carousel]');
  if (!carousels.length) return;

  const activeDotClass = 'h-[10px] w-[24px] rounded-full bg-[#6eba38] opacity-80 transition-all duration-300 ease-out';
  const inactiveDotClass = 'h-[10px] w-[10px] rounded-full bg-[#1f1c1a] opacity-20 transition-all duration-300 ease-out';

  carousels.forEach((carousel) => {
    const track = carousel.querySelector('[data-carousel-track]');
    const viewport = carousel.querySelector('[data-carousel-viewport]');
    const prev = carousel.querySelector('[data-carousel-prev]');
    const next = carousel.querySelector('[data-carousel-next]');
    const dotsWrap = carousel.querySelector('[data-carousel-dots]');
    const cards = track ? Array.from(track.children).filter((el) => el.tagName === 'ARTICLE') : [];

    if (!track || !viewport || cards.length === 0) return;

    const state = {
      index: 0,
      perView: 3,
      maxIndex: 0,
      step: 0,
      dots: [],
    };

    const updateButtons = () => {
      if (prev) prev.disabled = state.index === 0;
      if (next) next.disabled = state.index === state.maxIndex;
    };

    const updateDots = () => {
      if (!dotsWrap || state.dots.length === 0) return;
      state.dots.forEach((dot, idx) => {
        dot.className = idx === state.index ? activeDotClass : inactiveDotClass;
      });
    };

    const update = () => {
      track.style.transform = `translateX(${-state.index * state.step}px)`;
      updateButtons();
      updateDots();
    };

    const renderDots = () => {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      state.dots = [];
      const count = state.maxIndex + 1;
      for (let i = 0; i < count; i += 1) {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        dot.className = i === state.index ? activeDotClass : inactiveDotClass;
        dot.addEventListener('click', () => {
          state.index = i;
          update();
        });
        dotsWrap.appendChild(dot);
        state.dots.push(dot);
      }
    };

    const updateMetrics = () => {
      const card = cards[0];
      const cardWidth = card.getBoundingClientRect().width;
      const styles = window.getComputedStyle(track);
      const gapValue = parseFloat(styles.columnGap || styles.gap || 0);
      const gap = Number.isNaN(gapValue) ? 0 : gapValue;
      state.step = cardWidth + gap;
      state.maxIndex = Math.max(0, cards.length - state.perView);
      if (state.index > state.maxIndex) state.index = state.maxIndex;
      renderDots();
      update();
    };

    if (prev) {
      prev.addEventListener('click', () => {
        state.index = Math.max(0, state.index - 1);
        update();
      });
    }

    if (next) {
      next.addEventListener('click', () => {
        state.index = Math.min(state.maxIndex, state.index + 1);
        update();
      });
    }

    let resizeTimer;
    window.addEventListener('resize', () => {
      window.clearTimeout(resizeTimer);
      resizeTimer = window.setTimeout(updateMetrics, 150);
    });

    updateMetrics();
  });
}
