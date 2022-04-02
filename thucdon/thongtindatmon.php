<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quản lý thực đơn </title>
    <link rel="stylesheet" type ="text/css" href="admin1.css"/>  
	
</head>
<body>
   
    <div id="header">
        <ul>  
            <li><p class="logo" ><img src="images/logo1-removebg-preview.png" ></p></li>
			<li><a href="menuadmin.php"> Menu</a></li>
            <li><a href="editmon.php">Chỉnh sửa menu</a></li>
            <li><a href="thongtindatmon.php">Thông tin đặt món</a></li>
        </ul>
    </div>
	
<?php
//Khai báo biến
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'nhom7'; 
//Tạo kết nối
$conn = mysqli_connect($server,$user,$pass) or die("error");
//Chọn cơ sở dữ liệu
$selectdb = mysqli_select_db($conn,$db) or die("error");

?>   
 <div>
     <table class="bang" border="2" width="80%" align="center" style="  border-collapse:collapse;"s>
        <tr>
                <th> Tên khách </th>
                <th> Số điện thoại </th>
                <th> Địa chỉ </th>
                <th> Thời gian </th>
                <th> Tên món </th>
        </tr>
    <?php 
//In dữ liệu ra bảng
$sql="SELECT*FROM datmon";
$query=mysqli_query($conn,$sql);
?>
            <?php 
            while($row_datmon=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row_datmon['tenkhach']?></td>
                <td><?php echo $row_datmon['sodienthoai']?></td>
                <td><?php echo $row_datmon['diachi']?></td>
                <td><?php echo $row_datmon['thoigian']?></td>
                <td><?php echo $row_datmon['tenmon']?></td>
            </tr>
            <?php } ?>
    </table>
            </div>
</body>
</html>