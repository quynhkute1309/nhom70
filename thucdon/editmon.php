
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
//Kiểm tra biến vừa thu được từ form
if(isset($_POST['themmon'])){
    $tenmon = $_POST["tenmon"];
    $anhmon = $_POST["anhmon"];
    $dongia = $_POST["dongia"];
    if ( empty($tenmon) ||empty($anhmon) || empty($dongia) ){
        echo "Please complete all data";
    }else{
     $insert = mysqli_query($conn,"INSERT INTO `menu` (`tenmon`, `anhmon`, `dongia` ) VALUES ('$tenmon', '$anhmon', '$dongia')");
        echo "Succes";
  
}; }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Quản lí thực đơn </title>
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
    <div>      
    <form action="editmon.php" method="post">
        <table class="bang1" text align ="center">
            <tr>
                <th> Tên món </th>
                <td><input  type="text" name="tenmon"/></td>
            </tr>
            <tr>
                <th>  Ảnh món </th>
                <td><input  type="file" name="anhmon"/></td>
            </tr>  
            <tr>
                <th> Đơn giá(vnđ)</th>
                <td><input  type="text" name="dongia"/></td>
            </tr></br>
            <tr>
                <td></td>
                <td> <input  style="display:block; background-color: #39A388 ; width: 100px; color:aliceblue;
                text-decoration: none;text-align: center;" type="submit" value=" Thêm món" name="themmon"></td>
        </table>
    </form></br></br>
    </div>
    <div>
        <table class="bang" border="2" width="80%" align="center" style=" border-collapse:collapse;">
        <tr>
                <th> Tên món </th>
                <th> Ảnh món </th>
                <th> Đơn giá(vnđ) </th>
                <th> Tác vụ </th>
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
                <td><img width="70px" height="70px" src="images/<?php echo $row_menu['anhmon']?>" alt=""></td>
                <td><?php echo $row_menu['dongia']?></td>
                <td><a href="suamenu.php?id=<?php echo $row_menu['id'] ?>">sửa</a>||<a id="xoa" onclick="return check()"  href="xoamenu.php?id=<?php echo $row_menu['id'] ?>">xóa</a></td>
            </tr>
<?php } ?>
    </table>
    <script>
    function check(){
        return confirm("bạn có chắc muốn xóa chứ?");
    }
    </script>
    </div>
</body>
</html>