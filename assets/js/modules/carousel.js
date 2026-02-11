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
      isDragging: false,
      startPos: 0,
      currentTranslate: 0,
      prevTranslate: 0,
      animationID: 0,
      startTime: 0,
      velocity: 0,
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

    const setPositionByIndex = () => {
      state.currentTranslate = -state.index * state.step;
      state.prevTranslate = state.currentTranslate;
      setSliderPosition();
    };

    const setSliderPosition = () => {
      track.style.transform = `translateX(${state.currentTranslate}px)`;
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
          track.style.transition = 'transform 0.3s ease-out';
          state.index = i;
          setPositionByIndex();
          updateButtons();
          updateDots();
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
      setPositionByIndex();
      updateButtons();
      updateDots();
    };

    // Drag/Swipe functionality
    const getPositionX = (event) => {
      return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
    };

    const dragStart = (event) => {
      state.isDragging = true;
      state.startPos = getPositionX(event);
      state.startTime = Date.now();
      state.velocity = 0;
      track.style.transition = 'none';
      track.style.cursor = 'grabbing';
      if (event.type === 'mousedown') {
        event.preventDefault();
      }
    };

    const dragMove = (event) => {
      if (!state.isDragging) return;
      const currentPosition = getPositionX(event);
      const diff = currentPosition - state.startPos;
      state.currentTranslate = state.prevTranslate + diff;
      
      // Calculate velocity for momentum
      const currentTime = Date.now();
      const timeDiff = currentTime - state.startTime;
      if (timeDiff > 0) {
        state.velocity = diff / timeDiff;
      }
      
      setSliderPosition();
    };

    const dragEnd = () => {
      if (!state.isDragging) return;
      state.isDragging = false;
      track.style.transition = 'transform 0.3s ease-out';
      track.style.cursor = 'grab';
      
      const movedBy = state.currentTranslate - state.prevTranslate;
      
      // Apply momentum if velocity is significant
      const momentumThreshold = 0.5;
      if (Math.abs(state.velocity) > momentumThreshold) {
        if (state.velocity > 0 && state.index > 0) {
          state.index -= 1;
        } else if (state.velocity < 0 && state.index < state.maxIndex) {
          state.index += 1;
        }
      } else {
        // Snap to nearest slide based on drag distance
        const threshold = state.step * 0.3;
        if (movedBy < -threshold && state.index < state.maxIndex) {
          state.index += 1;
        } else if (movedBy > threshold && state.index > 0) {
          state.index -= 1;
        }
      }
      
      setPositionByIndex();
      updateButtons();
      updateDots();
    };

    // Mouse events
    track.addEventListener('mousedown', dragStart);
    track.addEventListener('mousemove', dragMove);
    track.addEventListener('mouseup', dragEnd);
    track.addEventListener('mouseleave', dragEnd);
    
    // Touch events
    track.addEventListener('touchstart', dragStart, { passive: true });
    track.addEventListener('touchmove', dragMove, { passive: true });
    track.addEventListener('touchend', dragEnd);
    
    // Prevent context menu on long press
    track.addEventListener('contextmenu', (e) => {
      if (state.isDragging) {
        e.preventDefault();
      }
    });
    
    // Set cursor style
    track.style.cursor = 'grab';
    track.style.userSelect = 'none';

    if (prev) {
      prev.addEventListener('click', () => {
        track.style.transition = 'transform 0.3s ease-out';
        state.index = Math.max(0, state.index - 1);
        setPositionByIndex();
        updateButtons();
        updateDots();
      });
    }

    if (next) {
      next.addEventListener('click', () => {
        track.style.transition = 'transform 0.3s ease-out';
        state.index = Math.min(state.maxIndex, state.index + 1);
        setPositionByIndex();
        updateButtons();
        updateDots();
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
