export default function initNav() {
  const nav = document.querySelector('[data-nav]');
  const btn = document.querySelector('[data-nav-toggle]');
  if (!nav || !btn) return;

  // Create backdrop element
  const backdrop = document.createElement('div');
  backdrop.className = 'nav-backdrop';
  backdrop.style.cssText = `
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s;
    z-index: 999;
    pointer-events: none;
  `;
  document.body.appendChild(backdrop);

  const openMenu = () => {
    nav.classList.add('is-open');
    btn.setAttribute('aria-expanded', 'true');
    const isMobile = window.innerWidth < 1024;
    if (isMobile) {
      backdrop.style.opacity = '1';
      backdrop.style.visibility = 'visible';
      backdrop.style.pointerEvents = 'auto';
    }
  };

  const closeMenu = () => {
    nav.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
    backdrop.style.opacity = '0';
    backdrop.style.visibility = 'hidden';
    backdrop.style.pointerEvents = 'none';
  };

  // Mobile menu toggle
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = nav.classList.contains('is-open');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Close menu when clicking backdrop
  backdrop.addEventListener('click', closeMenu);

  // Close mobile menu when clicking outside
  document.addEventListener('click', (e) => {
    const isMobile = window.innerWidth < 1024;
    if (isMobile && nav.classList.contains('is-open')) {
      if (!nav.contains(e.target) && !btn.contains(e.target)) {
        closeMenu();
      }
    }
  });

  // Close mobile menu on ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('is-open')) {
      closeMenu();
    }
  });

  // Close menu on window resize if it switches to desktop
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      if (window.innerWidth >= 1024 && nav.classList.contains('is-open')) {
        closeMenu();
      }
    }, 150);
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
