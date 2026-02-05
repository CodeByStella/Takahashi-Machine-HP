/* global document */
(() => {
  const nav = document.querySelector('[data-nav]');
  const btn = document.querySelector('[data-nav-toggle]');
  if (!nav || !btn) return;

  btn.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });
})();

