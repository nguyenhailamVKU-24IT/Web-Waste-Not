<?php
// Bắt đầu phiên làm việc
session_start();

// Xóa tất cả dữ liệu phiên
session_unset();
session_destroy();

// Chuyển hướng về trang chủ
header("Location: index.php");
exit();
?>
