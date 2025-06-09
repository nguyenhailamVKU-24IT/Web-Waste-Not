<?php
require 'KetNoi.php';
session_start();

if (isset($_POST['nutdangnhap'])) {
    $email = trim($_POST['email']);
    $matkhau = trim($_POST['password']);
    $tennguoidung = trim($_POST['tennguoidung']);

    // Kiểm tra các trường rỗng
    if (empty($email) || empty($matkhau) || empty($tennguoidung)) {
        $_SESSION['signup_error'] = 'empty_fields';
        header("Location: Login.php?error=empty_fields");
        exit();
    }
    // Kiểm tra tài khoản đã tồn tại chưa
    $check_query = "SELECT * FROM NguoiDung WHERE Gmail = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
       $_SESSION['signup_error'] = 'email_exists';
        header("Location: Login.php?layout=signup");
        exit();
    }

    // Thêm tài khoản mới
    $insert_query = "INSERT INTO NguoiDung (Gmail, MatKhau, TenNguoiDung, PhanQuyen) VALUES ('$email', '$matkhau', '$tennguoidung', 0)";
    if (mysqli_query($conn, $insert_query)) {
        header("Location: Login.php");
        exit();
    } else {
        $_SESSION['signup_error'] = 'register_error';
        $_SESSION['signup_error_message'] = mysqli_error($conn);
        header("Location: Login.php?layout=signup");
        exit();
    }
}
?>