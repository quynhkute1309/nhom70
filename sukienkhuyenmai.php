<!DOCTYPE html>
<html lang="en">

<?php 
include "ketnoi.php";
error_reporting(0);
session_start();
if(isset($_POST['Them']))
    {
        $anh=$_POST['anh'];
        $tieude=$_POST['tieude'];
        $noidung=$_POST['noidung'];
        $thoigian=$_POST['thoigian'];
        $sql = "INSERT INTO sukienkhuyenmai (anh,tieude ,noidung, thoigian )
        VALUES ('$anh', '$tieude', '$noidung','$thoigian')";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
        echo "<script>alert('Them thanh cong.')</script>";
        }else {
        echo "<script>alert(' trung lap STT, vui long thu lai')</script>";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header1.css">
    <title>Database</title>

</head> 
<header>
    <ul>  
     
     <li><a href="admin.php">giới thiệu</a></li>
     <li><a class="menu" href="qlhotro.php">hỗ trợ</a></li>   
     <li><a href="ql_news.php">Tin tức</a></li>

     <li><a href="anh.php">Bộ sưu tập</a></li>
     <li><a href="sukienkhuyenmai.php">Khuyến mãi</a></li>
 
     <li>
         <a class="menu"> Menu</a>
       <ul class="sub-nav">
          <li><a href="editmon.php">Chỉnh sửa menu</a></li>
          <li><a href="thongtindatmon.php">Thông tin đặt món</a></li>
</header>
<body style="background-color: #f3f0d7;">
    <form style="margin-left: 600px"; action="" method="POST">
    
        <div class="box" style="margin-bottom: 80px">
            <div class="input">
            <h1 style="color: #39a388; margin-left: 70px;";>Nhập dữ liệu</h1>
            </div>
            <div  class="input">
                <label class="label_content" for=""> Ảnh </label>
                <input  type="file" name="anh"  required >
            </div>

            <div class="input">
                <label class="label_content" for=""> Tiêu đề </label>
                <input type="text" name="tieude"  required>
            </div>

            <div class="input">
                <label class="label_content" for="">Nội dung</label>
                <input type="text" name="noidung" required>
            </div>

            <div class="input">
                <label class="label_content" for="">Thời gian </label>
                <input type="text" name="thoigian"  required>
            </div>

            <div class="btn">
            <button style="background-color: #39a388; margin: 10px 10px 10px 5px; color: white; width: 60px; height: 30px; font-size: 14px;" name="Them">Thêm</button>
            
        
            <button style="background-color: #39a388; margin: 10px 10px 10px 5px; color: white; width: 60px; height: 30px; font-size: 14px;">Xóa</button>
            
            <button style="background-color: #39a388; margin: 10px 10px 10px 5px; color: white; width: 70px; height: 30px; font-size: 14px;">Thay đổi</button>
            
            </div>
            
        </div>
    </form>
    <div class="display" style="margin-left: 230px";>
    <h1 style="color: #39a388; margin-left: 390px;">Dữ liệu</h1>
    <table border="1">
    <tr>
        <th style="width: 70px; height: 30px; background-color: #167941; color: white;"> STT </th>
        <th style="width: 80px; height: 30px; background-color: #167941; color: white;"> Ảnh </th>
        <th style="width: 120px; height: 30px; background-color: #167941; color: white;">Tiêu đề </th>
        <th style="width: 200px; height: 30px; background-color: #167941; color: white;"> Nội dung </th>
        <th style="width: 150px; height: 30px; background-color: #167941; color: white;"> Thời gian </th> 
        <th style="width: 120px; height: 30px; background-color: #167941; color: white;">Xử Lí</th>
    </tr>
    <?php
    $sql_display="SELECT *FROM sukienkhuyenmai";
    $result2=mysqli_query($conn,$sql_display);
    $check=mysqli_num_rows($result2);
    $stt=1;
    if($check>0)
    {
        while($row=mysqli_fetch_assoc($result2)){
            echo"
        <tr>
        <td>$stt</td>
        <td> ".$row['anh']."</td>
        <td> ".$row['tieude']."</td>
        <td>".$row ['noidung']."</td>
        <td>".$row['thoigian']."</td>
        <td><a href='xoask.php?anh=$row[anh]'>Xoa | <a href='thaydoi.php?anh=$row[anh]'> Thay doi </td>
        </tr>
        
        ";
        $STT++;
        }
        
    }

?>
</table>
</div>
</body>
</html>