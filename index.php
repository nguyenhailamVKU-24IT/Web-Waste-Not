<?php
session_start();

$show_otp_email = isset($_GET['show_otp']) ? urldecode($_GET['show_otp']) : null;
$show_reset_email = isset($_GET['show_reset']) ? urldecode($_GET['show_reset']) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website with Slideshow</title>
  <link rel="stylesheet" href="CSS/style.css">
  <script src="Script/scriptHome.js" defer></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="Anh/logo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .menu-login.logout-link,
    .dropdown-toggle.logout-link {
      color: #007BFF !important; /* Thay #007BFF bằng mã màu bạn muốn (xanh dương) */
    }
    /* Nếu cần thêm hover effect */
    .menu-login.logout-link:hover,
    .dropdown-toggle.logout-link:hover {
      color: #0056b3 !important; /* Màu khi hover, tối hơn một chút */
    }
  </style>
</head>
<body>
  <section class="panel1" id="panel1">
    <nav class="navbar">
  <div class="logo"><a href="index.php">Eagles</a></div>

  <div class="menu" id="menu">
    <a href="index.php">Home</a>
    <a href="About.php">About</a>
    <a href="Stacts_&_Facts.php">Stats & Facts</a>
    <a href="Tips_&_Solutions.php">Tips & Solutions</a>
    <a href="Contact.php">Contact</a>
     <?php if (isset($_SESSION['tennguoidung'])): ?>
        <a href="#" class="menu-login logout-link"><?php echo htmlspecialchars($_SESSION['tennguoidung']); ?> <i class="uil uil-signin"></i></a>
      <?php else: ?>
        <a href="Login.php" class="menu-login"><i class="uil uil-signin"></i> Login</a>
      <?php endif; ?>
  </div>

  <div class="more">
        <!-- Kiểm tra nếu đã đăng nhập thì hiển thị tên người dùng và menu đổ xuống -->
                <?php if (isset($_SESSION['tennguoidung'])): ?>
                    <div class="dropdown">
                        <span class="dropdown-toggle"><?php echo htmlspecialchars($_SESSION['tennguoidung']); ?></span>
                        <div class="dropdown-menu">
                            <a href="DangXuat.php">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <span><a class="uil uil-signin" href="Login.php">Login</a></span>
                <?php endif; ?>
      </div>

  <div class="hamburger" id="hamburger">
    <i class="fas fa-bars"></i>
  </div>
</nav>

    <div class="slideshow">
      <img src="Anh/anh15.jpeg" class="slide active" alt="Slide 1">
      <img src="Anh/anh2.jpg" class="slide" alt="Slide 2">
      <img src="Anh/anh3.jpg" class="slide" alt="Slide 3">
      <img src="Anh/anh13.webp" alt="Slide 4" class="slide">
      <img src="Anh/anh16.webp" alt="Slide 5" class="slide">
    </div>
    <div class="caption">
      <h2>SAVE FOOD. SAVE THE FUTURE</h2>
      <p>Together, we fight food waste</p>
      <button class="button-panel">LEARN MORE</button>
    </div>
    <div class="progress-bar"></div>
  </section>

  <section class="related-resources-section animate-on-scroll">
    <h2 class="related-resources-title">RELATED RESOURCES</h2>
    <div class="resources-grid">
      <div class="resource-card">
        <img src="Anh/anh15.jpeg" alt="The Courtauld Commitment 2030">
        <h3>The Courtauld Commitment 2030: Progress and Insights Report 2022</h3>
        <a href="#" class="resource-button">Find out more</a>
      </div>
      <div class="resource-card">
        <img src="Anh/anh6.jpg" alt="Food Waste Action Week">
        <h3>Food Waste Action Week</h3>
        <a href="#" class="resource-button">Find out more</a>
      </div>
      <div class="resource-card">
        <img src="Anh/anh7.jpeg" alt="Surplus Food Redistribution">
        <h3>Surplus Food Redistribution in the UK 2015 to 2021</h3>
        <a href="#" class="resource-button">Find out more</a>
      </div>
      <div class="resource-card">
        <img src="Anh/anh20.jpg" alt="Surplus Food Redistribution">
        <h3>Surplus Food Redistribution in the UK 2015 to 2021</h3>
        <a href="#" class="resource-button">Find out more</a>
      </div>
    </div>
  </section>
  <!-- New Section: Content Left, Image Right -->
  <section class="content-image-section animate-on-scroll">
    <div class="content-image-container">
      <div class="content-left">
        <h2 class="content-title">Our Mission to Reduce Food Waste</h2>
        <p class="content-text">
          We are committed to tackling food waste by promoting sustainable practices, raising awareness, and empowering
          communities to take action. Together, we can create a future where no food goes to waste.
        </p>
        <a href="#" class="content-button1">Find out more</a>
      </div>
      <div class="image-right">
        <img src="Anh/anh18.jpg" alt="Food Waste Reduction">
      </div>
    </div>
  </section>
  <section class="content-image-section animate-on-scroll">
    <div class="content-image-container">
      <div class="image-right">
        <img src="Anh/anh19.jpg" alt="Food Waste Reduction">
      </div>
      <div class="content-left">
        <h2 class="content-title">Our Mission to Reduce Food Waste</h2>
        <p class="content-text">
          We are committed to tackling food waste by promoting sustainable practices, raising awareness, and empowering
          communities to take action. Together, we can create a future where no food goes to waste.
        </p>
        <a href="#" class="content-button2">Find out more</a>
      </div>
    </div>
  </section>

  <section class="panel2" id="panel2">
    <h2 class="gallery-title animate-on-scroll">DON’T WASTE FOOD. DON’T WASTE LIVES</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto px-4 py-8 bg-gray-900">
      <!-- Card 1 -->
      <div class="relative group overflow-hidden rounded-2xl shadow-lg animate-on-scroll">
        <img src="Anh/anh8.webp"
          class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="">
        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4 animate-on-scroll">
          <h3 class="text-xl font-semibold text-black animate-on-scroll">Home delivery driver</h3>
          <p class="text-gray-700 text-sm animate-on-scroll">Deliver meals to the elderly or people with disabilities or
            health conditions.</p>
          <div class="mt-2 h-1 w-120 bg-gray-600"></div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="relative group overflow-hidden rounded-2xl shadow-lg animate-on-scroll">
        <img src="Anh/anh9.webp"
          class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="R 1300 RS">
        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4 animate-on-scroll">
          <h3 class="text-xl font-semibold text-black animate-on-scroll">Cooking and meal prep</h3>
          <p class="text-gray-700 text-sm animate-on-scroll">Cook and serve dinner at a soup kitchen or community meal.
          </p>
          <div class="mt-2 h-1 w-120 bg-gray-600"></div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="half-image-text animate-on-scroll">
    <div class="image-container animate-on-scroll">
      <img src="Anh/anh10.jpg" alt="Namibia Landscape">
      <div class="text-box animate-on-scroll">
        <h2>The International GS Trophy 2025</h2>
        <p>Namibia gave us the adventure of a lifetime. Thank you for the roads, the stories, and the spirit of freedom.
        </p>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="animate-on-scroll">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Connect with our mission to reduce food waste:</span>
      </div>
      <div>
        <a href="https://www.facebook.com/nvhndpckl.51006" class="me-4 text-reset" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/ide_jaodev/" class="me-4 text-reset" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" class="me-4 text-reset"><i class="fab fa-linkedin"></i></a>
      </div>
    </section>

    <section>
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-seedling me-3"></i>Save the Planet
            </h6>
            <p>
              Our mission is to fight food waste by raising awareness, providing tools and inspiring actions that lead
              to a more sustainable world.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Programs</h6>
            <p><a href="#" class="text-reset">Food Rescue</a></p>
            <p><a href="#" class="text-reset">Educational Events</a></p>
            <p><a href="#" class="text-reset">Community Outreach</a></p>
            <p><a href="#" class="text-reset">Sustainability Tips</a></p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Resources</h6>
            <p><a href="#" class="text-reset">Volunteer</a></p>
            <p><a href="#" class="text-reset">Donate</a></p>
            <p><a href="#" class="text-reset">Blog</a></p>
            <p><a href="#" class="text-reset">FAQs</a></p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Ngu Hanh Son, Da Nang</p>
            <p><i class="fas fa-envelope me-3"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                data-cfemail="4e262f212038607c7a273a0e38253b603b2a20603820">[email&#160;protected]</a></p>
            <p><i class="fas fa-phone me-3"></i> +84 982 658 020</p>
            <p><i class="fas fa-globe me-3"></i></p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2025 Save Food Initiative. All rights reserved.
    </div>
  </footer>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Gán sự kiện cho tất cả phần tử có class "logout-link"
      const logoutLinks = document.querySelectorAll(".logout-link");
      logoutLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
          event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
          window.location.href = "DangXuat.php"; // Chuyển hướng đến DangXuat.php
        });
      });
    });
  </script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>

</html>