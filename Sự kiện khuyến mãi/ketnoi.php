<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "khuyenmai";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Kết nối thất bại.')</script>");
    exit();    
}
?>