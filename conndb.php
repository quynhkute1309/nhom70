<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "nhom7";
    // Tạo kết nối
    $conn = mysqli_connect($servername,$username,$password) or die ("Lỗi kết nối");
    $selectdb = mysqli_select_db($conn, $db) or die("Không tồn tại CSDL");	
?>