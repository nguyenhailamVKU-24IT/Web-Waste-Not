<?php
session_start();

$show_otp_email = isset($_GET['show_otp']) ? urldecode($_GET['show_otp']) : null;
$show_reset_email = isset($_GET['show_reset']) ? urldecode($_GET['show_reset']) : null;
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Let&amp;apos;s Connect">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="CSS/nicepage.css" media="screen">
  <link rel="stylesheet" href="CSS/index.css" media="screen">
  <link rel="stylesheet" href="CSS/style.css">
  <meta name="generator" content="Nicepage 7.8.22, nicepage.com">
  <meta name="referrer" content="origin">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
     <link rel="icon" type="image/png" href="Anh/logo.png">
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">

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

<body data-home-page="Home.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="false"
  class="u-body u-xl-mode" data-lang="en">

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
    <a href="#"><i class="uil uil-signin"></i> Login</a>
  </div>  -->

  <div class="hamburger" id="hamburger">
    <i class="fas fa-bars"></i>
  </div>
</nav>

  <section class="u-align-center u-clearfix u-container-align-center u-grey-5 u-section-1" id="sec-521e">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-text u-text-1">Let's Connect</h2>
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div
                  class="u-align-center u-container-align-center u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                  <div class="u-container-layout u-valign-top u-container-layout-1"><span
                      class="u-icon u-icon-circle u-text-grey-40 u-icon-1"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                        <use xlink:href="#svg-097e"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-097e"
                        style="enable-background:new 0 0 512 512;">
                        <g>
                          <g>
                            <path
                              d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z">
                            </path>
                          </g>
                        </g>
                      </svg></span>
                    <h6 class="u-text u-text-2">OUR MAIN OFFICE</h6>
                    <p class="u-text u-text-3">Dong Tra 5,&nbsp; Ngu Hanh Son, Da Nang</p>
                  </div>
                </div>
                <div
                  class="u-align-center u-container-align-center u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                  <div class="u-container-layout u-valign-top u-container-layout-2"><span
                      class="u-icon u-icon-circle u-text-grey-40 u-icon-2"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 384 384" style="">
                        <use xlink:href="#svg-a781"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 384 384" x="0px" y="0px" id="svg-a781"
                        style="enable-background:new 0 0 384 384;">
                        <g>
                          <g>
                            <path
                              d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                            </path>
                          </g>
                        </g>
                      </svg></span>
                    <h6 class="u-text u-text-4">phone number</h6>
                    <p class="u-text u-text-5">0982658020<br>0795372420 (Free)
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                  <div class="u-container-layout u-valign-top u-container-layout-3"><span
                      class="u-icon u-icon-circle u-text-grey-40 u-icon-3"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                        <use xlink:href="#svg-75f9"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-75f9">
                        <path
                          d="m201 12.714v184.286h267v-184.286c0-7.022-5.692-12.714-12.714-12.714h-241.572c-7.022 0-12.714 5.692-12.714 12.714zm63.89 33.131h70.271c8.284 0 15 6.716 15 15s-6.716 15-15 15h-70.271c-8.284 0-15-6.716-15-15s6.715-15 15-15zm0 75.142h139.22c8.284 0 15 6.716 15 15s-6.716 15-15 15h-139.22c-8.284 0-15-6.716-15-15s6.715-15 15-15z">
                        </path>
                        <path
                          d="m472 227h-275c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h275c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40zm-207.5 217.5h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15z">
                        </path>
                        <path
                          d="m87 227h-47c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h47c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40z">
                        </path>
                      </svg></span>
                    <h6 class="u-align-center u-text u-text-6">fax</h6>
                    <p class="u-align-center u-text u-text-7">0786 730 860</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                  <div class="u-container-layout u-valign-top u-container-layout-4"><span
                      class="u-icon u-icon-circle u-text-grey-40 u-icon-4"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                        <use xlink:href="#svg-e8a7"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-e8a7"
                        style="enable-background:new 0 0 512 512;">
                        <g>
                          <g>
                            <path
                              d="M467,61H45c-6.927,0-13.412,1.703-19.279,4.51L255,294.789l51.389-49.387c0,0,0.004-0.005,0.005-0.007    c0.001-0.002,0.005-0.004,0.005-0.004L486.286,65.514C480.418,62.705,473.929,61,467,61z">
                            </path>
                          </g>
                        </g>
                        <g>
                          <g>
                            <path
                              d="M507.496,86.728L338.213,256.002L507.49,425.279c2.807-5.867,4.51-12.352,4.51-19.279V106    C512,99.077,510.301,92.593,507.496,86.728z">
                            </path>
                          </g>
                        </g>
                        <g>
                          <g>
                            <path
                              d="M4.51,86.721C1.703,92.588,0,99.073,0,106v300c0,6.923,1.701,13.409,4.506,19.274L173.789,256L4.51,86.721z">
                            </path>
                          </g>
                        </g>
                        <g>
                          <g>
                            <path
                              d="M317.002,277.213l-51.396,49.393c-2.93,2.93-6.768,4.395-10.605,4.395s-7.676-1.465-10.605-4.395L195,277.211    L25.714,446.486C31.582,449.295,38.071,451,45,451h422c6.927,0,13.412-1.703,19.279-4.51L317.002,277.213z">
                            </path>
                          </g>
                        </g>
                      </svg></span>
                    <h6 class="u-align-center u-text u-text-8">mail</h6>
                    <p class="u-align-center u-text u-text-9">lamnh.24it@vku.udn.vn</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-size-30">
                  <div class="u-layout-col">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-5">
                      <div class="u-container-layout u-container-layout-5">
                        <h3 class="u-text u-text-default u-text-10">Need help tackling food waste? Contact us for
                          guidance and solutions!</h3>
                        <h6 class="u-text u-text-11">AVAILABLE 24 HOURS A DAY!</h6>
                        <div class="u-form u-form-1">
                          <form action="https://forms.nicepagesrv.com/v2/form/process"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0;"
                            source="email" name="form">
                            <div class="u-form-group u-form-name">
                              <label for="name-3d90" class="u-form-control-hidden u-label">Name</label>
                              <input type="text" placeholder="Enter your Name" id="name-3d90" name="name"
                                class="u-input u-input-rectangle" required="">
                            </div>
                            <div class="u-form-email u-form-group">
                              <label for="email-3d90" class="u-form-control-hidden u-label">Email</label>
                              <input type="email" placeholder="Enter a valid email address" id="email-3d90" name="email"
                                class="u-input u-input-rectangle" required="">
                            </div>
                            <div class="u-form-group u-form-message">
                              <label for="message-3d90" class="u-form-control-hidden u-label">Message</label>
                              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3d90"
                                name="message" class="u-input u-input-rectangle" required=""></textarea>
                            </div>
                            <div class="u-align-left u-form-group u-form-submit">
                              <a href="#"
                                class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">Submit</a>
                              <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                            </div>
                            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                              errors then try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" name="formServices" value="8b7072b0-bb38-d82c-9688-fa9876d101b1">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-size-30">
                  <div class="u-layout-col">
                    <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-6">
                      <div class="u-container-layout u-container-layout-6">
                        <h3 class="u-text u-text-default u-text-12">we are here</h3>
                        <h6 class="u-text u-text-13">Mon-Fri 8:30am- 5pm / Phones are open 24/7</h6>
                        <div class="u-grey-light-2 u-map u-map-1">
                          <div class="embed-responsive">
                            <iframe class="embed-responsive-item"
                                    src="https://maps.google.com/maps?output=embed&q=Đông+Trà+5,+Hoà+Hải,+Ngũ+Hành+Sơn,+Đà+Nẵng"
                                    allowfullscreen
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer>
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
  <script src="Script/script.js"></script>
</body>

</html>