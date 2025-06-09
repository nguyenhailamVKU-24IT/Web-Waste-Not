<?php
require 'KetNoi.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function generateOTP() {
    return rand(100000, 999999);
}

if (isset($_POST['send_otp'])) {
    $email = trim($_POST['email']);

    if (empty($email)) {
        header("Location: Login.php?error=empty_email");
        exit();
    }

    $sql = "SELECT * FROM NguoiDung WHERE Gmail = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: Login.php?error=email_not_found");
        exit();
    }

    $otp = generateOTP();
    $_SESSION['otp'] = $otp;
    $_SESSION['otp_email'] = $email;
    $_SESSION['otp_time'] = time();

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nguyenhai0767362305@gmail.com';
        $mail->Password = 'ziek usam bqtl dfte';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('nguyenhai0767362305@gmail.com', 'Admin');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body = "Your OTP code is <b>$otp</b>. It is valid for 5 minutes.";

        $mail->send();
        header("Location: Login.php?show_otp=" . urlencode($email));
        exit();
    } catch (Exception $e) {
        header("Location: Login.php?error=otp_send_failed&message=" . urlencode($mail->ErrorInfo));
        exit();
    }
}

if (isset($_POST['verify_otp'])) {
    $otp = trim($_POST['otp']);
    $email = trim($_POST['email']);

    if (empty($otp)) {
        header("Location: Login.php?show_otp=" . urlencode($email) . "&error=empty_otp");
        exit();
    }

    if (!isset($_SESSION['otp']) || !isset($_SESSION['otp_email']) || !isset($_SESSION['otp_time'])) {
        header("Location: Login.php?error=invalid_otp");
        exit();
    }

    if (time() - $_SESSION['otp_time'] > 300) { // 5 minutes
        unset($_SESSION['otp']);
        unset($_SESSION['otp_email']);
        unset($_SESSION['otp_time']);
        header("Location: Login.php?error=otp_expired");
        exit();
    }

    if ($otp == $_SESSION['otp'] && $email == $_SESSION['otp_email']) {
        unset($_SESSION['otp']);
        unset($_SESSION['otp_time']);
        header("Location: Login.php?show_reset=" . urlencode($email));
        exit();
    } else {
        header("Location: Login.php?show_otp=" . urlencode($email) . "&error=wrong_otp");
        exit();
    }
}

if (isset($_POST['reset_password'])) {
    $email = trim($_POST['email']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($new_password) || empty($confirm_password)) {
        header("Location: Login.php?show_reset=" . urlencode($email) . "&error=empty_password");
        exit();
    }

    if ($new_password !== $confirm_password) {
        header("Location: Login.php?show_reset=" . urlencode($email) . "&error=password_mismatch");
        exit();
    }

    $sql = "UPDATE NguoiDung SET MatKhau = '$new_password' WHERE Gmail = '$email'";
    if (mysqli_query($conn, $sql)) {
        unset($_SESSION['otp_email']);
        header("Location: Login.php?success=password_reset");
        exit();
    } else {
        header("Location: Login.php?show_reset=" . urlencode($email) . "&error=reset_failed&message=" . urlencode(mysqli_error($conn)));
        exit();
    }
}
?>