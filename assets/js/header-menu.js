(() => {
  const headers = document.querySelectorAll('.site-header');

  headers.forEach((header) => {
    const toggle = header.querySelector('.site-header__toggle');
    const mobileMenu = header.nextElementSibling?.classList.contains('site-mobile-menu') ? header.nextElementSibling : null;
    const overlay = mobileMenu?.nextElementSibling?.classList.contains('site-header__overlay') ? mobileMenu.nextElementSibling : null;

    if (!toggle || !mobileMenu) {
      return;
    }

    const closeMenu = () => {
      header.classList.remove('site-header--menu-open');
      toggle.setAttribute('aria-expanded', 'false');
      overlay?.setAttribute('hidden', 'hidden');
      mobileMenu.setAttribute('aria-hidden', 'true');
    };

    const openMenu = () => {
      header.classList.add('site-header--menu-open');
      toggle.setAttribute('aria-expanded', 'true');
      overlay?.removeAttribute('hidden');
      mobileMenu.setAttribute('aria-hidden', 'false');
    };

    closeMenu();

    toggle.addEventListener('click', () => {
      const isOpen = header.classList.contains('site-header--menu-open');
      if (isOpen) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    overlay?.addEventListener('click', closeMenu);

    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 900) {
          closeMenu();
        }
      });
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        closeMenu();
      }
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 900) {
        closeMenu();
      }
    });
  });
})();
