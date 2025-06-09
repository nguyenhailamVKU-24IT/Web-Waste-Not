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
  <title>About Us</title>
  <link rel="stylesheet" href="CSS/About.css">
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

  <!-- <div class="login-desktop">
    <a href="#"><i class="uil uil-signin"></i> Login</a> login riêng biệt 
  </div> -->

  
  <div class="hamburger" id="hamburger">
    <i class="fas fa-bars"></i>
  </div>
</nav>

  <section class="about-section">
    <div class="about-container">
      <h1 class="about-heading">About Us</h1>
      <p class="about-quote">“A meal wasted is a chance lost.”</p>
      <p class="about-text">This website was created to raise awareness about food waste — a serious yet often
        overlooked issue. We share insights, solutions, and inspiration to help you take small actions that lead to a
        more sustainable world.</p>
      <ul class="about-list">
        <li>✔ Verified facts about food waste and its impact</li>
        <li>✔ Tips, recipes, and tech to help reduce waste</li>
        <li>✔ A space to connect and inspire change</li>
      </ul>
      <p class="about-ending">For a world where no meal is wasted. For a future where no one is left behind.</p>
    </div>
  </section>

  <section class="stats-section">
    <div class="stats-button-wrapper">
      <a href="#" class="stats-button">Explore Now</a>
    </div>
    <div class="stats-grid">
      <div class="stat-box">
        <h3>1/3</h3>
        <p>of all food is wasted globally</p>
      </div>
      <div class="stat-box">
        <h3>830 million</h3>
        <p>people still go hungry</p>
      </div>
      <div class="stat-box">
        <h3>8–10%</h3>
        <p>of global emissions come from food waste</p>
      </div>
    </div>
  </section>

  <section class="impact-section">
    <div class="impact-container">
      <div class="impact-content">
        <div class="impact-tabs">
          <a href="#" class="tab active">Impact</a>
          <a href="#" class="tab">Solutions</a>
          <a href="#" class="tab">Education</a>
          <a href="#" class="tab">Sustainability</a>
        </div>
        <h1 class="impact-heading">A world without food waste. <span class="impact-highlight">It’s Possible.</span></h1>
        <p class="impact-description">We’re fighting food waste with actionable insights, innovative solutions, and
          community efforts to create a sustainable future where every meal counts.</p>
        <a href="#" class="impact-button">Explore Solutions</a>
      </div>
      <div class="impact-image">
        <img src="Anh/anh10.jpg" alt="Food Waste Impact Image">
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
        <a href="#" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
        <a href="#" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
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
            <p><i class="fas fa-envelope me-3"></i> haonv.24it@vku.udn.vn</p>
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
  <script src="Script/script.js"></script>
</body>

</html>