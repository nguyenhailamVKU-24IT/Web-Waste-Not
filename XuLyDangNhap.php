<?php
require 'KetNoi.php';
session_start();

if (isset($_POST['nutdangnhap'])) {
    $email = trim($_POST['email']);
    $matkhau = trim($_POST['pass']);

    if (empty($email) || empty($matkhau)) {
        header("Location: Login.php?error=empty_fields");
        exit();
    }

    $sql = "SELECT * FROM NguoiDung WHERE Gmail = '$email' AND MatKhau = '$matkhau'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Đăng nhập thành công
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['Gmail'];
        $_SESSION['tennguoidung'] = $row['TenNguoiDung'];
        $_SESSION['phanquyen'] = $row['PhanQuyen'];
        
        header("Location: index.php");
        exit();
    } else {
        header("Location: Login.php?error=wrong_credentials");
    }
}
?>