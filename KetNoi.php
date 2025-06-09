<?php
$host = 'localhost';
$username = 'h6d077a525_BWD';
$password = 'AkaWLMRnc6WWuXP2g8wr';
$dbname = 'h6d077a525_BWD';

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn -> connect_error){
    die("Kết nối thất bại: " . $conn -> connect_error);
}
?>