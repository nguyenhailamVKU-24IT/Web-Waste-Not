const navbar = document.querySelector('.navbar');
let lastScrollTop = 0;

// Throttle function to optimize scroll
const throttle = (func, limit) => {
  let inThrottle;
  return (...args) => {
    if (!inThrottle) {
      func.apply(this, args);
      inThrottle = true;
      setTimeout(() => (inThrottle = false), limit);
    }
  };
};

window.addEventListener(
  'scroll',
  throttle(() => {
    let currentScroll = window.scrollY;
    if (currentScroll > lastScrollTop && currentScroll > 80) {
      navbar.classList.add('hidden');
    } else {
      navbar.classList.remove('hidden');
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  }, 100)
);
const hamburger = document.getElementById('hamburger');
  const menu = document.getElementById('menu');

  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('active');
  });

  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
      menu.classList.remove('active');
    }
  });

  document.querySelectorAll('.menu a').forEach(link => {
    link.addEventListener('click', () => {
      menu.classList.remove('active');
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
  const currentPath = window.location.pathname;
  const menuLinks = document.querySelectorAll('.menu a');

  menuLinks.forEach(link => {
    const linkPath = new URL(link.href).pathname;
    if (currentPath === linkPath) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const dropdownMenu = this.nextElementSibling;
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Ẩn dropdown khi nhấp ra ngoài
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
        }
    });
});
