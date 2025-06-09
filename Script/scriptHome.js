// Slideshow logic
const slides = document.querySelectorAll('.panel1 .slide');
const progressBar = document.querySelector('.progress-bar');
let currentSlide = 0;
const totalSlides = slides.length;
let slideInterval;

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove('active'));
  slides[index].classList.add('active');
  resetProgressBar();
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

function startProgressBar() {
  progressBar.style.width = '0';
  progressBar.style.transition = 'none';
  setTimeout(() => {
    progressBar.style.transition = 'width 3s linear';
    progressBar.style.width = '100%';
  }, 10);
}

function resetProgressBar() {
  progressBar.style.transition = 'none';
  progressBar.style.width = '0';
  setTimeout(() => {
    progressBar.style.transition = 'width 3s linear';
    progressBar.style.width = '100%';
  }, 10);
}

function startSlideshow() {
  if (slideInterval) {
    clearInterval(slideInterval);
  }
  slideInterval = setInterval(nextSlide, 3000);
  startProgressBar();
}

// Start slideshow on load
startSlideshow();

// Animation for gallery items
const scrollItems = document.querySelectorAll('.animate-on-scroll');
scrollItems.forEach((item, index) => {
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, index * 100);
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });
  observer.observe(item);
});

// Navbar scroll behavior
const navbar = document.querySelector('.navbar');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop && currentScroll > 80) {
    // Scrolling down and past 80px
    navbar.classList.add('hidden');
  } else {
    // Scrolling up or at the top
    navbar.classList.remove('hidden');
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent negative scroll values
});
// Toggle mobile menu
const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.menu');

hamburger.addEventListener('click', (e) => {
  e.stopPropagation(); // Ngăn sự kiện lan ra ngoài
  menu.classList.toggle('active');
});

// Ẩn menu khi click ra ngoài
document.addEventListener('DOMContentLoaded', () => {
  const homeLink = document.querySelector('.menu a[href="index.html"]');
  if (homeLink) {
    homeLink.classList.add('active');
  }
});

// Ẩn menu khi click vào bất kỳ link trong menu
document.querySelectorAll('.menu a').forEach(link => {
  link.addEventListener('click', () => {
    menu.classList.remove('active');
  });
});
// scriptHome.js

// Highlight the Home menu item when on the home pag

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
    