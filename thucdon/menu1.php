        
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thực Đơn </title>
    <link rel="stylesheet" type ="text/css" href="menu1.css"/>
    <link rel="stylesheet" type ="text/css" href="footer.css"/>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
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
    </div>
    <div id="banner"> 
    <img src="images/banner1.jpg" alt="">  
    </div>
    <div id="main">
        <div  class="topnav">
           
                <a class ="active" > Menu </a>
               <a href="monlau.php">Món lẩu</a>
                <a href="monsup.php">Món súp</a>
                <a href="monbo.php">Món bò </a>
                <a href="monlon.php"> Món thịt lợn </a>
                <a href="monga.php"> Món gà </a>
                <a href="monca.php"> Món cá </a>
                <a href="monhaisan.php">Món hải sản</a>
                <a href="moncanh.php">Món canh</a>
                <a href="monrau.php">Món rau</a>
                <a href="douong.php">Đồ uống</a>
            </ul>    
        </div>
        <div id="right">
        <div id="im"><a href="#"><img src="images/bò cuộn nấm kim châm.jfif" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/bò sốt vang.jfif" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/thịt kho tàu.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/sườn sào chua ngọt.jfif" alt=""></div>
        <div id="im"><a href="#"><img src="images/gà rang lá chanh.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/gà xối mỡ.jpg" alt=""></a> </div>
        <div id="im"><a href="#"><img src="images/cá kho riềng.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/cá thu sốt cà chua.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/tôm chiên xù.jpg" alt=""></a> </div>
        <div id="im"><a href="#"><img src="images/cua rang me.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/cua hấp nước dừa.jpg" alt=""></a></div>
        <div id="im"><a href="#"><img src="images/tôm sốt me.jpg" alt=""></a></div>
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
            });
            </script>
        </div>
    </div>
    <div id="haha">
        <div id="content" class="container">
         <div id="col1">
             <h2>Về Chúng Tôi</h2>
             <ul class="social-icon">
                 <li><a href=""><i class="fa fa-facebook"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <div id="col2">
             <h2>Đường Dẫn</h2>
             <ul>
                <li><a href="index.html">Trang Chủ</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>
                <li><a href="liên hệ 1.php">Liên Lạc</a></li>
                <li><a href="hotro.php">Hỗ Trợ</a></li>
             </ul>
         </div>
         <div id="col3">
             <h2>Thông Tin Liên Hệ</h2>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span>Số 79, Hồ Tùng Mậu<br />
                         Mai Dịch, Cầu Giấy, Hà Nội<br />
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 123 969 696</a>
                         <br />
                         <a href="#">+84 985 868 999</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">nhahangviet@gmail.com</a></p>
                </li>
                 <li>
                     <form>
                         <input type="email" class="form__field" placeholder="Đăng ký Email" />
                         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
                     </form>
                 </li>
             </ul>
         </div>
        </div>
        </div>
        </body>
        </html>
 