<h2>Sửa hình ảnh</h2>
<?php
include"db.php";
$id=$_GET['id'];
$sql="SELECT * FROM themsuaxoa where tenanh='$id' ";
$query=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($query);
{
    $tenanh=$r['tenanh'];
    $noidung=$r['noidung'];
}
error_reporting(0);
?>

  <form action="" method="POST">
            <div class="input">
                <label  for="">Ảnh</label>
                <input  type="file" name="tenanh"  value="<?php echo $tenanh?>"> 
            </div>
            <div class="input">
                <label  for="">Nội dung:</label>
                <input type="text" name="noidung"  value="<?php echo $noidung?>">
            </div>      
    <button name="change">Sửa</button>
    </form>
<?php

if(isset($_POST['change'])){
if ($_FILES['tenanh']['name']==''){
	$tenanh=$r['tenanh'];
}else{
	$tenanh=$r['tenanh'];
}
    $noidung=$_POST['noidung'];
    $update_sql="UPDATE themsuaxoa SET tenanh='$tenanh',noidung='$noidung' where tenanh='$tenanh'";
    $res=mysqli_query($conn,$update_sql);
    if($res){
        echo "Thay đổi thành công";
        echo "<a href='anh.php?page_layout=danhsach' > Trở về trang chủ";
    } else echo "Thay đổi thất bại";
}
?>
<style>
h2{
	text-align: center;
	margin: 65 auto;
}
form{
	margin: 70 auto;
	padding:25px;
    background-clip:padding-box;
	border:1px solid black;
	background-color:white;
	box-shadow: 2px 2px 2px white inset;
	font-family: Arial, Helvetica, sans-serif;
	font-size:20px;
	width:300px;
}
body {
	 background-color:#F3F0D7;
	}
</style>
