<?php
require_once 'conndb.php';
//Truy vấn & tìm kiếm
    if (isset($_POST['search'])){
        $key = $_POST['keyword'];
        $sql = "SELECT * FROM `tintuc` WHERE `tieude` LIKE '%$key%' OR `mota` LIKE '%$key%' OR `noidung` LIKE '%$key%'";
        mysqli_query($conn, $sql);
    }else{
        $sql = "SELECT * FROM tintuc ORDER BY 'id'";
    }
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tin Tức</title>
        <link rel="stylesheet" type="text/css" href="news.css"/>
        <link rel="stylesheet" type="text/css" href="header.css"/>
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
                <li><p class="logo" ><img src="images/logo1-removebg-preview.png" ></p></li>
                <li><a class="home" href="index.html"><img src="images/home.png" alt="Trang chủ"></a></li>  
                <li><a href="gioithieu.html">Giới thiệu</a></li>
                <li><a class="menu" href="menu.html">Menu</a></li>   
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="order.html">Đặt tiệc</a></li>
                <li><a href="trang.html">Bộ sưu tập</a></li>
                <li><a href="event.html">Khuyến mãi</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li>
                    <a class="menu">Hỗ Trợ</a>
                  <ul class="sub-nav">
                     <li><a href="maps.html">Bản đồ</a></li>
                     <li><a href="hotro.html">Hỗ trợ thêm</a></li>
             </ul>
        </header>
        <div id="banner">
            <h1>TIN TỨC</h1>
            <img src="images/anh.png">
        </div>
        <!--Bài viết-->
        <div id="main">
            <div id ="baiviet">
                <div class="post">
                    <?php 
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <ul>
                        <div>
                            <a href="baiviet.php?id=<?php echo $row['id']?>"><img src="images/<?php echo $row['anh']?>" alt=""></a>
                        </div>
                        <div class="mota">
                            <h3><a style="text-decoration: none" href="baiviet.php?id=<?php echo $row['id'] ?>"><?php echo $row['tieude']?></a></h3>
                            <div class="desc"><p><?php echo $row['mota']?></p></div>
                            <h6>Ngày đăng: <?php echo $row['ngay']?></h6>
                        </div>
                    </ul>
                    <?php } ?>
                </div>
            </div>
            <div id="search" style="margin-top: 15px;">
                    <form action="" method="post">
                        <table>
                            <th><i class="fas fa-search"></i></th>
                            <th>
                            <input type="text" placeholder="Tìm kiếm..." name="keyword" 
                    value="<?php if (isset($_POST['keyword'])) {echo $_POST['keyword']; }?>"/>
                                <input type="submit" value="Tìm kiếm" name="search"/>
                            </th>
                        </table>
                    </form>
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
