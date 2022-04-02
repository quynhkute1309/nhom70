<?php
    $id=$_GET['id'];

    // Tạo kết nối
        $conn = mysqli_connect('localhost','root','') or die ("Lỗi kết nối");
        $selectdb = mysqli_select_db($conn, 'nhom7') or die("Không tồn tại CSDL");	
    
    //Truy vấn
    $sql = "DELETE FROM `binhluan` WHERE `binhluan`.`stt` = '$id'";
	if (mysqli_query($conn, $sql)) {
        header('location: admin.php');
    }else{
        $result = "Xóa không thành công" . mysqli_error($conn);
    }
    $conn->close();
?>