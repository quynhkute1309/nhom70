<?php
include"ketnoi.php";
$anh=$_GET['anh'];
$delete_sql="DELETE FROM sukienkhuyenmai where anh='$anh'";
$delete_check=mysqli_query($conn,$delete_sql);
if($delete_check){
    header("Location:sukienkhuyenmai.php");
}else 
{
    echo "Xóa thất bại";
}
?>