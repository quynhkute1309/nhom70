<?php
//Khai báo biến
$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'nhom7'; 
//Tạo kết nối

$conn = mysqli_connect($server,$username,$pass,$dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
if ($conn->connect_error) {
	die("Kết nối lỗi:" . $conn->connect_error);
	exit();
}
//Kiểm tra biến vừa thu được từ form
if(isset($_POST['datban'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
	$time = $_POST["time"];
    $people = $_POST["people"];
    if ( empty($name) ||empty($email) || empty($phone) || empty($date) || empty($time) || empty($people)){
        echo "Please complete all data";
    }else{
     $ket_qua = mysqli_query($conn,"INSERT INTO `datban` (`name`, `email`, `phone`, `date`, `time`, `people` ) VALUES ('$name', '$email', '$date', '$thoigian', '$time', '$people)");
        echo "Succes";
}; }
?>
<!--form người dùng đặt bàn-->
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Party</title>
        
        <link rel="stylesheet" href="party1.css">
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
    &nbsp;&nbsp;
	
	<div>
    <form  action="" method="POST">
        <h2>ĐẶT BÀN ONLINE</h2>
		<div class="anh_1"><img src="images/line-h3.png" alt=""/></div>
	<div class="wrap">
		<div class="form-group">
        <input type="text" name="name" placeholder="Họ và tên" required>
		</div>
		&nbsp;&nbsp;
		<div class="form-group">
        <input type="text" name="email" placeholder="Email" required>
		</div>
		&nbsp;
		<div class="form-group">
        <input type="text" name="phone" placeholder="Số điện thoại"required>
		</div>
	</div>
	<div class="wrap">
		<div class="form-group">
        <input type="date" name="date" placeholder="Ngày tháng"required>
		</div>
		
		<div class="form-group">
        <input type="time" name="time" placeholder="Thời gian"required>
		</div>
		<div class="form-group">
        <input type="number" name="people" placeholder="Số người"required>
		</div>
	</div>
		<div class="button">
        <input type="submit" class="choose" name="datban" value="Đặt bàn" onclick="hello()">
		<script>function hello(){alert("Đặt bàn thành công");}</script>
		</div

    </form>
	</div>
	
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

    
</body>

</html>