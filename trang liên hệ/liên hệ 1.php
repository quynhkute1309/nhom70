<?php
//Khai báo biến
$server='localhost';
$user='root';
$pass='';
$db='nhom7';
//Tạo kết nối

$conn=mysqli_connect($server, $user, $pass) or die("error");
//Chọn cơ sở dữ liệu
$selectdb=mysqli_select_db($conn, $db) or die("error");
//kiểm tra biến vừa thu được từ form
if(isset($_POST['guilienhe'])){
    $name=$_POST["name"];
    $sdt=$_POST["sdt"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $noidung=$_POST["noidung"];
if (empty($name) ||empty($sdt) ||empty($email) ||empty($website) ||empty($noidung)){
    echo "Please complete all data";
}
else{
    $insert=mysqli_query($conn,"INSERT INTO 'lienhe'('name', 'sdt', 'email', 'website', 'noidung') VALUE('$name', '$sdt', '$email', '$website', '$noidung')");
    echo "Succes";
};
}

//kiểm tra biến vừa thu được từ form
if(isset($_POST['gui'])){
    $email=$_POST["email"];
if (empty($email)){
    echo "Please complete all data";
}
else{
    $insert=mysqli_query($conn,"INSERT INTO 'email'('email') VALUE('$email')");
    echo "Succes";
};
}

?>
<!--form người điền thông tin-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LIÊN HỆ</title>
        <style>
            #wrapper{
                width: 1500px;
                margin:auto;
            }
            #ô0{
                width: 1500px;
                height: 110px;
            }
            header ul li .logo img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 150%;
            }
            header {
                width: 100%;
                height: 100px;
                background: rgba(0, 252, 34);
            }
            header ul {
                background: #1f578b00;
                list-style-type: none;
                padding-left: 0px;
                text-align: center;
            }
            header ul li {
                color: #f1f1f1;
                display: inline-table;
                width: 110px;
                height: 0px;
                line-height: 40px;
                position: relative;
            }
            header ul li a {
                text-decoration: none;
                color: rgb(0, 0, 0);
                display: block;
                border-radius: 5px;
                transition-duration: 0.3s;
            }
            header ul li a:hover {
                background: rgba(255, 255, 255, 0.836);
                color: rgb(0, 0, 0);
            }
            header ul li>.sub-nav {
                display: none;
                position: absolute;
                background-color: rgb(0, 0, 0);
            }
            header ul li:hover .sub-nav {
                display: block;
                background-color: rgb(148, 224, 138);
            }
            #ô1{
                width: 1000px;
                height: 730px;
                float: left;
            }
            #ô2{
                width: 480px;
                height: 445px;
                background-color:#66FFFF;
            }
            #ô3{
                width: 480px;
                height: 195px;
                background-color:#66FFFF;
            }
            html {
                background-color: #F3F0D7;
                background-position: center;
                background-size:cover;
                font-family: Arial ;
            }
            #left{
                width: 10px;
                height: 600px;
                float: left;
            }
            #right{
                width : 10px;
                height: 600px;
                float: left;
            }
            #ô23{
                width: 480px;
                height: 600px;
                float: left;
            }
            #ô4{
                width: 1200px;
                clear: both;
            }
            .button .button1 {
                background: #FF9900;
                color: rgb(0, 0, 0);
                height: 40px;
                font-family: 'helvetica','Open Sans', sans-serif;
                font-size: 20px;
                text-align: center;
                width: 50%;
                margin-top:10px;
            }
            .button .button2 {
                background: #FF9900;
                color: rgb(0, 0, 0);
                height: 40px;
                font-family: 'helvetica','Open Sans', sans-serif;
                font-size: 20px;
                text-align: center;
                width: 20%;
                margin-top:10px;
            }
            footer{
                position: relative;
                width: 1500px;
                height: 150px;
                padding: 50px ;
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
        <div id="wrapper">
            <div id="ô0">
                <header>
                    <ul>  
                        <li><p class="logo" ><img src="images/logo1-removebg-preview.png" ></p></li>
                        <li><a class="home" href="index.html"><img src="images/home.png" alt="Trang chủ"></a></li>  
                        <li><a href="gioithieu.php">Giới thiệu</a></li>
                        <li><a class="menu" href="menu.php">Menu</a></li>   
                        <li><a href="baiviet.php">Tin tức</a></li>
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
            </div>
            <div id="ô1">
                <img src="diachinhahang.png" width=1000 height=700 />             
            </div>
            <div id="left"></div>
            <div id="ô23">
                <div id="ô2">
                    <h1 style="font-family: Arial, Helvetica, sans-serif; color:#FF0000;" align="center">
                        <strong>Liên hệ với chúng tôi</strong>
                    </h1>
                    <form action="liên hệ 1.php" method="POST" align="center">
                        <div class="the">
                            <p>
                                <input type="text" name="name"  placeholder="Họ và tên" value size="50" required></input>
                            </p>
                        </div>
                        <div class="the">
                            <p>
                                <input type="text" name="sdt"  placeholder="Nhập số điện thoại" value size="50" required></input>
                            </p>
                        </div>
                        <div class="the">
                            <p>
                                <input type="text" name="email"  placeholder="Nhập địa chỉ email" value size="50" required></input>   
                            </p>
                        </div>
                        <div class="the">
                            <p>
                                <input type="text" name="website"  placeholder="Website" value size="50" required></input>
                            </p>     
                        </div>
                        <div class="the">
                            <p>
                                <textarea name="noidung" cols="50" rows="10" placeholder="Nội dung"></textarea>
                            </p>
                        </div>
                        <div class="button">
		                    <input type="submit" class="button1" name="guilienhe" value="GỬI LIÊN HỆ"></input>
                            <script>function hello(){alert("Liên hệ thành công");}</script>
                        </div>
                    </form>
                    <br>
                </div>
                <form action="liên hệ 1.php" method="POST" align="center">
                    <div id="ô3" align="center">
                        <h1 style="font-family: Arial, Helvetica, sans-serif; color:#FF0000;" align="center">
                            <strong>Đăng kí Email</strong>
                        </h1>
                        <p>Đăng ký email để nhận bảng tin của chúng tôi</p>
                        <div class="the">
                            <p>
                                <input type="text" name="email"  placeholder="Nhập địa chỉ email" value size="50" required></input>   
                            </p>
                        </div>
                        <div class="button">
		                    <input type="submit" class="button2" name="gui" value="GỬI" onclick="hello()"></input>
                            <script>function hello(){alert("Gửi email thành công");}</script>
                        </div>
                    </div>
                </form>
            </div>
            <div id="right"></div>
            <div id="ô4">
                <footer>
                    <div class="container">
                        <div class="tt">
                            <h2>Về Chúng Tôi</h2>
                            <p>Chúng tôi luôn cảm thấy vinh dự <br>
                            khi được phục vụ quý khách.Sự <br>
                            đánh giá tốt từ quý khách là niềm <br>
                            vui của chúng tôi.Chúng tôi cam <br>kết
                            đem đến cho quý khách phục <br>
                            vụ tốt nhất.</p>
                        </div>
                        <div class="link">
                            <h2>Đường Dẫn</h2>
                            <ul>
                                <li><a href="index.html">Trang Chủ</a></li>
                                <li><a href="gioithieu.php">Giới thiệu</a></li>
                                <li><a href="liên hệ 1.php">Liên Lạc</a></li>
                                <li><a href="hotro.php">Hỗ Trợ</a></li>
                            </ul>
                        </div>
                        <div class="contact">
                            <h2>Thông Tin Liên Hệ</h2>
                            <ul class="info">
                                <li>
                                    79, Hồ Tùng mậu,Mai Dịch, Cầu giấy, Hà Nội
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
            </div>
        </div>
    </body>
</html>
