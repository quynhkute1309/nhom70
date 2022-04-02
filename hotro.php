<?php
require 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="header1.css">
<style>
  
footer{
    position: relative;
    width: 100%;
    height: 150px;
    margin-top: 40px;
    padding: 50px;
    background: #111;
}
footer .container{
    display: flex;
   align-items: stretch;
   justify-content: space-around;
}
.container{
   color: rgb(255, 255, 255);
}
.link ul li a{
   color:rgb(255, 255, 255)
}


</style>

</head>
<body>
  
  <?php
  if(isset($_POST["gui"])){
    $ten=$_POST["hoten"];
    $email=$_POST["email"];
    $sdt=$_POST["sdt"];
    $tieude=$_POST["tieude"];
    $noidung=$_POST["noidung"];
   $insert = mysqli_query($conn,"INSERT INTO `thongtin` (`hoten`,`email`,`sdt`,`tieude`,`noidung` ) VALUES ('$ten', '$email', '$sdt', '$tieude', '$noidung')");
  }
?>
    <header>
        
        <ul>  
            <li><p class="logo" ><img style="height:75px;width:75px"src="images/logo1-removebg-preview.png" ></p></li>
            <li><a class="home" href="index.php"><img src="images/home.png" alt="Trang chủ"></a></li>  
            <li><a href="gioithieu.php">Giới thiệu</a></li>
            <li><a class="menu" href="menu1.php">Menu</a></li>   
            <li><a href="news.php">Tin tức</a></li>
            <li><a href="datban.php">Đặt tiệc</a></li>
            <li><a href="trang.php">Bộ sưu tập</a></li>
            <li><a href="event.html">Khuyến mãi</a></li>
            <li><a href="liên hệ 1.php">Liên hệ</a></li>
            <li>
                <a class="menu">Hỗ Trợ</a>
              <ul class="sub-nav">
                 <li><a href="maps.html">Bản đồ</a></li>
                 <li><a href="hotro.php">Hỗ trợ thêm</a></li>
         </ul>
    </header>
<div class="p">
  <h1 style="color: rgb(204, 13, 13); margin: 30px 0px;"> Hỗ trợ khách hàng </h1>
</div>
<div style="margin-top: 20px; background-color: #d2b48c; line-height: 46px;"  class="form0">
  
  <form action="" method="POST">
    <h2 style="color: black; text-align: center;"> Điền thông tin ở dưới </h2>
	
    <div class="the">
		<input type="text" name="hoten"  placeholder="Họ và tên"  required>
    </div>
    <div class="the">
      <input type="text" name="email" placeholder="Email của bạn" required>
    </div>
    <div class="the">
   <input type="tel" name="sdt" placeholder="số điện thoại" reqired>
    </div>
    <div class="the">
    <input type="text" name="tieude"  placeholder="tiêu đề" required>
      </div>
    <div class="the">
      <textarea name="noidung" cols="20" rows="4" placeholder="Nội dung"></textarea>
    </div>
    <div class="button">
		<input style="background-color: #39a388; color: #fff" type="submit" class="button1" name="gui" value="GỬI" onclick="hello()">
    <script>function hello(){alert("Đã gửi");}</script>

    </div>
  </form>

</div>
<footer>
        <div class="container">
    
        <div class="tt">
             <h2 style="color:white">Về Chúng Tôi</h2>
            <p>Chúng tôi luôn cảm thấy vinh dự <br>
            khi được phục vụ quý khách.Sự <br>
            đánh giá tốt từ quý khách là niềm <br>
            vui của chúng tôi.Chúng tôi cam <br>kết
            đem đến cho quý khách phục <br>
             vụ tốt nhất.</p>
         </div>
            <div class="link">
                <h2 style="color:white">Đường Dẫn</h2>
                <ul>
					<li><a href="index.php">Trang Chủ</a></li>
					<li><a href="gioithieu.php">Giới thiệu</a></li>
					<li><a href="liên hệ 1.php">Liên Lạc</a></li>
					<li><a href="hotro.php">Hỗ Trợ</a></li>
					
                </ul>
            </div>
    
            <div class="contact">
                <h2 style="color:white">Thông Tin Liên Hệ</h2>
                <ul class="info">
                    <li>
                        79, Hồ Tùng Mậu,Mai Dịch, Cầu Giấy, Hà Nội
                    </li>
                    <li>
                        <p>+84 123 969 696<br />+84 985 868 999</p>
                    </li>
                    <li>
                        <p>nhahangviet@gmail.com</p>
                   </li>
    
                </ul>
            </div>
    
        </div>
    </footer>
</body>
</html>