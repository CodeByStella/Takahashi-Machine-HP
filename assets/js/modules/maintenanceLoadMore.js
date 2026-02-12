/**
 * Support page: もっと見る button reveals hidden maintenance cases.
 */
function initMaintenanceLoadMore() {
  const btn = document.querySelector('.js-maintenance-load-more');
  const moreBlock = document.getElementById('maintenance-more');
  if (!btn || !moreBlock) return;

  btn.addEventListener('click', function () {
    moreBlock.classList.remove('hidden');
    moreBlock.setAttribute('aria-hidden', 'false');
    btn.setAttribute('aria-expanded', 'true');
    btn.style.display = 'none';
  });
}

export default initMaintenanceLoadMore;
