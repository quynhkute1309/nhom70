<?php
require_once 'conndb.php';
$id=$_GET['id'];
?>
<!--Truy vấn-->
<?php
$sql = "SELECT * FROM tintuc WHERE `tintuc`.`id` = '$id'";
$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bài viết</title>
        <link rel="stylesheet" type="text/css" href="baiviet.css"/>
        <link rel="stylesheet" type="text/css" href="header1.css"/>
        <link rel="stylesheet" type="text/css" href="footer.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <style>
            footer {
                clear: left;
            }
        </style>
    </head>
    <body>
        <!--Thanh menu-->
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
        <div id="banner">
            <h1>TIN TỨC</h1>
            <img src="images/anh.png">
        </div>
        <!--Bài viết-->
        <div id="main">
            <div class="post">
                <?php 
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <h2 style ="margin: auto 100px;"><a href="baiviet.php?id=<?php echo $row['id'] ?>"><?php echo $row['tieude']?></a></h2>
                    <h6 style="margin: 10px 100px">Ngày đăng: <?php echo $row['ngay']?></h6><br>
                    <img src="images/<?php echo $row['anh']?>" alt="">
                    <div class="nd"><?php echo $row['noidung']?></div>
                <?php } ?>
            </div>
        </div>
        <!--Nút cuộn lên đầu trang-->
        <button id="bttop"><i class="fas fa-angle-up fa-2x"></i></button>
        <script>
            window.onscroll = function() {scrollFunction()};
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
            });
        </script>
        <?php require 'footer.php' ?>
    </body>
</html>
