<?php
    $id=$_GET['id'];

    // Tạo kết nối
        $conn = mysqli_connect('localhost','root','') or die ("Lỗi kết nối");
        $selectdb = mysqli_select_db($conn, 'nhom7') or die("Không tồn tại CSDL");	
    // kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại " . $conn->connect_error);
    }
    //Truy vấn
    $sql = "DELETE FROM `menu` WHERE `menu`.`id` = '$id'";
	if (mysqli_query($conn, $sql)) {
        header('location: editmon.php');
    }else{
        $result = "Xóa không thành công!" . mysqli_error($conn);
    }
    $conn->close();
?>