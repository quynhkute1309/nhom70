
<?php
include"db.php";
$id=$_GET['id'];
$delete_sql="DELETE FROM themsuaxoa where tenanh='$id'";
$delete_check=mysqli_query($conn,$delete_sql);
if($delete_check){
    header("Location:anh.php?page_layout=danhsach");
}else 
{
    echo "Xóa thất bại";
}
?>