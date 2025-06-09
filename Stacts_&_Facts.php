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
    <title>Stats & Facts - Eagles</title>
    <link rel="stylesheet" href="CSS/Stacts_&_Facts.css">
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
    <nav class="navbar animate-on-scroll">
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
    <section class="stats-header animate-on-scroll">
        <h1>Stats & Facts About Food Waste</h1>
        <p class="header-subtitle">Unveiling the Numbers Behind Food Waste</p>
    </section>

    <section class="stats-infographic animate-on-scroll">
        <h2>Infographic About Food Waste</h2>
        <p>Explore key statistics on global food waste through a visual representation.</p>
        <div class="stats-container">
            <div class="stats-image">
                <img src="Anh/anh11.webp" alt="Infographic about food waste">
            </div>
            <div class="stats-caption">
                <p>This infographic highlights the global scale of food waste, showing that 1.3 billion tons of food are wasted annually.</p>
            </div>
        </div>
    </section>

    <section class="stats-hotspots animate-on-scroll">
        <h2>Map of Food Waste 'Hotspots'</h2>
        <p>Discover the regions with the highest levels of food waste and their underlying causes.</p>
        <div class="stats-container reverse">
          <div class="stats-image">
            <img src="Anh/anh12.webp" alt="Map of food waste hotspots">
          </div>
          <div class="stats-caption">
            <p>A world map illustrating food waste hotspots, with North America and Europe leading at 95-115 kg per capita annually.</p>
          </div>
        </div>
    </section>

    <section class="stats-breakdown animate-on-scroll">
        <h2>Breakdown of Food Waste by Sector</h2>
        <p>Understand where food waste occurs across different sectors of the supply chain.</p>
        <div class="stats-container">
            <div class="stats-image">
                <img src="Anh/anh13.jpg" alt="Pie chart of food waste by sector">
            </div>
            <div class="stats-caption">
                <p>This pie chart shows that 40% of food waste occurs at the consumer level, 30% during production, and 20% in distribution.</p>
            </div>
        </div>
    </section>

    <section class="stats-impact animate-on-scroll">
        <h2>Environmental Impact of Food Waste</h2>
        <p>Learn about the environmental consequences of food waste, including greenhouse gas emissions.</p>
        <div class="stats-container reverse">
          <div class="stats-image">
            <img src="Anh/anh14.jpg" alt="Chart of environmental impact">
          </div>
          <div class="stats-caption">
            <p>Food waste contributes to 8-10% of global greenhouse gas emissions, equivalent to the emissions of the aviation industry.</p>
          </div>
        </div>
    </section>

    <section class="stats-solutions animate-on-scroll">
        <h2>Progress in Reducing Food Waste</h2>
        <p>Highlighting efforts and progress made in combating food waste globally.</p>
        <div class="stats-container">
            <div class="stats-image">
                <img src="Anh/anh16.webp" alt="Graph of food waste reduction progress">
            </div>
            <div class="stats-caption">
                <p>This graph shows a 15% reduction in food waste in some regions due to awareness campaigns and better supply chain management since 2020.</p>
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
            Our mission is to fight food waste by raising awareness, providing tools and inspiring actions that lead to a more sustainable world.
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