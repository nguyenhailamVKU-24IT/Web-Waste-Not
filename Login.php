<?php
session_start();

$show_otp_email = isset($_GET['show_otp']) ? urldecode($_GET['show_otp']) : null;
$show_reset_email = isset($_GET['show_reset']) ? urldecode($_GET['show_reset']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="CSS/Login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
     <link rel="icon" type="image/png" href="Anh/logo.png">
    <title>Sing In And Sing Up</title>
</head>
<body>
    <div class="Background_img">
        <img src="Anh/backgrourdLoginAndLogout.jpg" alt="">
    </div>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="XuLy.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="tennguoidung" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <span id="signup-error">Email already exists!</span>
                <button type="submit" name="nutdangnhap">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="XuLyDangNhap.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="pass" placeholder="Password" required />
                <span id="login-error">Wrong username or password!</span>
                <a href="#" id="forgotPasswordLink">Forgot your password?</a>
                <button type="submit" name="nutdangnhap">Sign In</button>
            </form>
        </div>
        <div class="form-container forgot-password-container">
            <form id="emailForm" action="XuLyQuenMatKhau.php" method="POST">
<div class="forgot-title">
        <span>Forgot</span>
        <span>Password</span>
    </div>     
    <span>Enter your registered email</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="hidden" name="send_otp" value="1" />
                <button type="submit">Send OTP</button>
                <a href="#" id="backToSignInFromEmail">Back to Sign In</a>
            </form>
            <form id="otpForm" action="XuLyQuenMatKhau.php" method="POST">
                <h1>Verify OTP</h1>
                <span>Enter the OTP sent to your email</span>
                <input type="text" name="otp" placeholder="OTP" required maxlength="6" />
                <p id="otp-error" style="display: none;">Wrong OTP! Please try again.</p>
                <input type="hidden" name="email" id="otpEmail" />
                <input type="hidden" name="verify_otp" value="1" />
                <button type="submit">Verify OTP</button>
                <a href="#" id="backToEmailFromOtp">Back</a>
            </form>
            <form id="newPasswordForm" action="XuLyQuenMatKhau.php" method="POST">
                <h1>Reset Password</h1>
                <span>Enter your new password</span>
                <input type="password" name="new_password" placeholder="New Password" required />
                <input type="password" name="confirm_password" placeholder="Confirm Password" required />
                <p id="reset-error" style="display: none;">Passwords do not match!</p>
                <button type="submit">Reset Password</button>
                <input type="hidden" name="email" id="resetEmail" />
                <input type="hidden" name="reset_password" value="1" />
                <a href="#" id="backToSignInFromNewPassword">Back to Sign In</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const forgotPasswordLink = document.getElementById('forgotPasswordLink');
        const emailForm = document.getElementById('emailForm');
        const otpForm = document.getElementById('otpForm');
        const newPasswordForm = document.getElementById('newPasswordForm');
        const backToSignInFromEmail = document.getElementById('backToSignInFromEmail');
        const backToEmailFromOtp = document.getElementById('backToEmailFromOtp');
        const backToSignInFromNewPassword = document.getElementById('backToSignInFromNewPassword');

        // Show specific form in forgot-password-container
        function showForm(form) {
            [emailForm, otpForm, newPasswordForm].forEach(f => f.classList.remove('active'));
            form.classList.add('active');
        }

        // Toggle between sign-up and sign-in
        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
            container.classList.remove('forgot-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
            container.classList.remove('forgot-active');
        });

        // Show forgot password form
        forgotPasswordLink.addEventListener('click', (e) => {
            e.preventDefault();
            container.classList.add('forgot-active');
            container.classList.remove('right-panel-active');
            showForm(emailForm);
        });

        // Back to sign-in from email form
        backToSignInFromEmail.addEventListener('click', (e) => {
            e.preventDefault();
            container.classList.remove('forgot-active');
        });

        // Back to email form from OTP form
        backToEmailFromOtp.addEventListener('click', (e) => {
            e.preventDefault();
            showForm(emailForm);
        });

        // Back to sign-in from new password form
        backToSignInFromNewPassword.addEventListener('click', (e) => {
            e.preventDefault();
            container.classList.remove('forgot-active');
        });

        // Functions called by backend
        function showOTP(email) {
            document.getElementById('otpEmail').value = email;
            container.classList.add('forgot-active');
            showForm(otpForm);
        }

        function showResetPassword(email) {
            document.getElementById('resetEmail').value = email;
            container.classList.add('forgot-active');
            showForm(newPasswordForm);
        }

        // Check for query parameters on page load
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const layout = urlParams.get('layout');
            const loginErrorSpan = document.getElementById('login-error');
            const signupErrorSpan = document.getElementById('signup-error');
            const otpErrorSpan = document.getElementById('otp-error');
            const resetErrorSpan = document.getElementById('reset-error');

            // Force "Sign Up" layout if specified
            if (layout === 'signup') {
                container.classList.add('right-panel-active');
                container.classList.remove('forgot-active');
            }

            // Handle forgot password flow
            <?php if ($show_otp_email) { ?>
                showOTP('<?php echo htmlspecialchars($show_otp_email); ?>');
            <?php } elseif ($show_reset_email) { ?>
                showResetPassword('<?php echo htmlspecialchars($show_reset_email); ?>');
            <?php } ?>

            // Handle errors
            <?php if (isset($_SESSION['signup_error'])) { ?>
                signupErrorSpan.style.display = 'block';
                <?php if ($_SESSION['signup_error'] === 'email_exists') { ?>
                    signupErrorSpan.textContent = 'Email already exists!';
                <?php } elseif ($_SESSION['signup_error'] === 'empty_fields') { ?>
                    signupErrorSpan.textContent = 'Please fill in all fields!';
                <?php } elseif ($_SESSION['signup_error'] === 'register_error') { ?>
                    signupErrorSpan.textContent = 'Registration error: <?php echo htmlspecialchars($_SESSION['signup_error_message']); ?>';
                <?php } ?>
                <?php unset($_SESSION['signup_error'], $_SESSION['signup_error_message']); ?>
            <?php } ?>

            // Handle forgot password errors
            if (urlParams.get('error') === 'empty_email') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Please enter an email!';
            } else if (urlParams.get('error') === 'email_not_found') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Email not found!';
            } else if (urlParams.get('error') === 'otp_send_failed') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Failed to send OTP: ' + decodeURIComponent(urlParams.get('message') || '');
            } else if (urlParams.get('error') === 'empty_otp') {
                otpErrorSpan.style.display = 'block';
                otpErrorSpan.textContent = 'Please enter the OTP!';
            } else if (urlParams.get('error') === 'invalid_otp') {
                otpErrorSpan.style.display = 'block';
                otpErrorSpan.textContent = 'Invalid OTP!';
            } else if (urlParams.get('error') === 'otp_expired') {
                otpErrorSpan.style.display = 'block';
                otpErrorSpan.textContent = 'OTP has expired!';
            } else if (urlParams.get('error') === 'wrong_otp') {
                otpErrorSpan.style.display = 'block';
                otpErrorSpan.textContent = 'Wrong OTP! Please try again.';
            } else if (urlParams.get('error') === 'empty_password') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Please fill in all password fields!';
            } else if (urlParams.get('error') === 'password_mismatch') {
                resetErrorSpan.style.display = 'block';
                resetErrorSpan.textContent = 'Passwords do not match!';
            } else if (urlParams.get('error') === 'reset_failed') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Failed to reset password: ' + decodeURIComponent(urlParams.get('message') || '');
            } else if (urlParams.get('success') === 'password_reset') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Password reset successful!';
                loginErrorSpan.style.color = 'green';
            }

            if (urlParams.get('error') === 'wrong_credentials') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Wrong username or password!';
            } else if (urlParams.get('error') === 'empty_fields') {
                loginErrorSpan.style.display = 'block';
                loginErrorSpan.textContent = 'Please fill in all fields!';
            }
        };
    </script>
</body>
</html>