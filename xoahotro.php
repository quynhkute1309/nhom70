<?php
require 'condb.php';
?>
<?php
    $id=$_GET['id'];
    $sql = "DELETE FROM `thongtin` WHERE `thongtin`.`id` = '$id'";
	if (mysqli_query($conn, $sql)) {
        header('location: qlhotro.php');
    }else{
        $result = "xóa thất bại!" . mysqli_error($conn);
    }
 ?>