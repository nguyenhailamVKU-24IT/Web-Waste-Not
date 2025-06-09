<?php
session_start();

$show_otp_email = isset($_GET['show_otp']) ? urldecode($_GET['show_otp']) : null;
$show_reset_email = isset($_GET['show_reset']) ? urldecode($_GET['show_reset']) : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tips & Solutions - Eagles</title>
  <link rel="stylesheet" href="CSS/TipsAndSolutions.css" />
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
  <!-- Navbar -->
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

    <!-- <div class="login-desktop">
      <a href="#"><i class="uil uil-signin"></i> Login</a> <!-- login riêng biệt -->
    <!-- </div> -->

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
  <div class="hero animate-on-scroll">
    <div class="hero-text">
      <h1>BUY LOOSE, WASTE LESS</h1>
      <p>Buying loose fruit and veg can make such a difference, but we can’t get it all loose! Find out more and get
        tailored advice, hints and tips.</p>
      <a href="#">FIND OUT MORE</a>
    </div>
  </div>
  <!-- Tips & Solutions Section -->
  <section class="tips-solutions-section animate-on-scroll">
    <h2 class="content-title">Tips & Solutions</h2>

    <div class="tips-container">
      <div class="tip-item">
        <h3>Smart Storage: Guides & Short Videos</h3>
        <p>
          Learn how to store food effectively with detailed guides and short
          videos.
        </p>
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/Z2afFuNzmBc" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="tip-item">
        <h3>Recycling Recipes: Delicious Meals from Leftovers</h3>
        <p>Discover creative recipes to turn leftovers into tasty meals.</p>
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/MwWdlNamxN0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="tip-item">
        <h3>Helpful Apps: Discover Apps & Online Tools</h3>
        <p>Explore apps and tools designed to help reduce food waste.</p>
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/qbS_R-t5-Ws?si=LFV8I3fvdxYepgPm" frameborder="0"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <section class="additional-tips-section animate-on-scroll">
    <h2 class="content-title">Additional Tips to Avoid Food Waste</h2>
    <ul class="tip-list">
      <li>
        Plan your meals weekly to buy only what you need and avoid
        over-purchasing.
      </li>
      <li>
        Store fruits and vegetables separately to prevent them from spoiling
        faster.
      </li>
      <li>
        Freeze leftovers in small portions for quick meals later in the week.
      </li>
      <li>
        Use vegetable scraps to make homemade broth or compost them instead of
        throwing away.
      </li>
      <li>
        Check expiration dates but also trust your senses—smell and look at
        food before discarding.
      </li>
      <li>
        Buy imperfect or discounted produce to reduce waste and save money.
      </li>
      <li>Portion your meals to avoid cooking more than you can eat.</li>
      <li>
        Donate excess food to local charities or food banks if still edible.
      </li>
      <li>
        Learn to preserve food by canning or drying for long-term storage.
      </li>
      <li>
        Keep a food inventory to track what you have and use it before it
        expires.
      </li>
    </ul>
    <a href="https://www.fao.org" class="learn-more">Learn More</a>
  </section>

  <!-- Footer -->
  <footer class="animate-on-scroll animate-on-scroll">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Connect with our mission to reduce food waste:</span>
      </div>
      <div>
        <a href="https://www.facebook.com/nvhndpckl.51006" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/ide_jaodev/" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
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
              Our mission is to fight food waste by raising awareness,
              providing tools and inspiring actions that lead to a more
              sustainable world.
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
            <p>
              <i class="fas fa-envelope me-3"></i>
              <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                data-cfemail="4e262f212038607c7a273a0e38253b603b2a20603820">[email&#160;protected]</a>
            </p>
            <p><i class="fas fa-phone me-3"></i> +84 982 658 020</p>
            <p><i class="fas fa-globe me-3"></i></p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
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