<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quản lý thực đơn </title>
    <link rel="stylesheet" type ="text/css" href="admin1.css"/>  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
	<div>
		
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
 <div style="margin-right:0%;padding:5px 16px;height:800px;">
   
    <table class="bang" border="2" width="700px" align="center" style="  border-collapse:collapse;">
        <tr>
                <th> Tên món </th>
                <th> Ảnh món </th>
                <th> Đơn giá (vnđ) </th>
               
        </tr>
    <?php 
    
//In dữ liệu ra bảng
$sql="SELECT*FROM menu";
$query=mysqli_query($conn,$sql);
?>

<?php 
            while($row_menu=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row_menu['tenmon']?></td>
                <td><img width="100px" height="100px" src="images/<?php echo $row_menu['anhmon']?>" alt=""></td>
                <td ><?php echo $row_menu['dongia']?></td>
               
            </tr>
            <?php } ?>
</div>
  <!--nút bấm lên đầu trang -->
  <button id="bttop"><i class="fas fa-angle-up fa-2x"></i></button>
      <script language="Javascript"> window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById('bttop').style.display = "block";
        } else {
        document.getElementById('bttop').style.display = "none";
        }
        }
        
        document.getElementById('bttop').addEventListener("click", function(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        });</script>

</body>
</html>
