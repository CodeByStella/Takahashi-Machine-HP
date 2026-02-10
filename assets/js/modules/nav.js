export default function initNav() {
  const nav = document.querySelector('[data-nav]');
  const btn = document.querySelector('[data-nav-toggle]');
  if (!nav || !btn) return;

  // Mobile menu toggle
  btn.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  // Dropdown menu functionality
  const dropdownToggles = nav.querySelectorAll('[data-dropdown-toggle]');

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      const parentLi = toggle.closest('li');
      const submenu = parentLi.querySelector('.sub-menu');
      
      if (!submenu) return;

      const isOpen = !submenu.classList.contains('hidden');

      // Close all other dropdowns at the same level
      const siblings = Array.from(parentLi.parentElement.children);
      siblings.forEach((sibling) => {
        if (sibling !== parentLi) {
          const siblingSubmenu = sibling.querySelector('.sub-menu');
          const siblingToggle = sibling.querySelector('[data-dropdown-toggle]');
          
          if (siblingSubmenu && !siblingSubmenu.classList.contains('hidden')) {
            siblingSubmenu.classList.add('hidden');
            sibling.classList.remove('dropdown-open');
            if (siblingToggle) {
              siblingToggle.setAttribute('aria-expanded', 'false');
            }
          }
        }
      });

      // Toggle current dropdown
      if (isOpen) {
        submenu.classList.add('hidden');
        parentLi.classList.remove('dropdown-open');
        toggle.setAttribute('aria-expanded', 'false');
      } else {
        submenu.classList.remove('hidden');
        parentLi.classList.add('dropdown-open');
        toggle.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', (e) => {
    if (!nav.contains(e.target)) {
      const openDropdowns = nav.querySelectorAll('.dropdown-open');
      openDropdowns.forEach((dropdown) => {
        const submenu = dropdown.querySelector('.sub-menu');
        if (submenu) {
          submenu.classList.add('hidden');
        }
        dropdown.classList.remove('dropdown-open');
        const toggle = dropdown.querySelector('[data-dropdown-toggle]');
        if (toggle) {
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }
  });
}
