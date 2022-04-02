<?php
require_once 'conndb.php';
?>
<?php
$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 3";
$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MONVIET</title>
  
    <link rel="stylesheet" href="header1.css">
    
    <link rel="stylesheet" href="footer.css">
  <style>
      
    
    #gioithieu {
        color: rgb(0, 0, 0);
        text-align: center;
        line-height: 1;
        margin-bottom: 2%;;
        margin-right:200px;
        margin-left: 200px;
        margin-top: 150px;
    }

    .nutmau {
        text-align: center;
        margin-top: -100px;
        
    }

    .nutmau button {
    width: 15px; 
    height: 15px;
    margin: 10px;
    border-radius: 50%;

    }

    .float-contact {
    position: fixed;
    bottom: 40px;
    right: 20px;
    z-index: 9999;
    }
    .datbanngay {
        background: rgb(0,0,0,0);
        border: none;
        padding: 0 18px;
        display: block;
        margin-bottom: 6px;
        }
    .chat-zalo {
    background: rgb(0,0,0,0);
    border: none;
    padding: 0 18px;
    display: block;
    margin-bottom: 6px;
    }
    .chat-face {
        background: rgb(0,0,0,0);
        border: none;
        padding: 0 18px;
        display: block;
        margin-bottom: 6px;
        }
    }
   
    .chat-zalo a, .chat-face a{
    font-size: 15px;
    color: white;
    font-weight: 400;
    }
    #baiviet .tintuc {
        margin-left: 45px;
        width: 800px;
    }
    video {
        margin-left: 50px;
        width:380px;
        height:300px;
    }
    #baiviet .tintuc ul{
        margin:0;
        padding: 0;
    }
    #baiviet .tintuc ul li {
        list-style: none;
        clear: left;
        float:left;
        margin-bottom: 15px;
    }
    #baiviet .tintuc ul li h3 a{
        color: darkgreen;
    }
    #baiviet .tintuc ul li img {
        width: 150px;
        height: 150px;
        float: left;
        border-radius: 50%;
        margin-right: 20px;
    }
    #baiviet .tintuc ul li img:hover{
        transform: scale(1.1);
        transition: 0.5s ease-in-out;
    }
    #baiviet .tintuc ul li .desc{
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
    }
    #baiviet .tintuc ul li .desc p {
        margin: 0px;
    }
    #bttop {
        width: 50px;
        height: 50px;
        background-color: rgb(77, 184, 77);
        color: #fff;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: fixed;
        bottom: 40px;
        right: 20px;
        border: none;
    }
    footer{
        clear: left;
    }
    
      .item img{
  
  width: 200px;
  height: 200px;
  border-radius: 30px;
  display: block;
}
.item img:hover{
  transform: scale(1.1);
  transition: all 0.5s ease-in-out;
  
}

.item{

padding:5px;
  position: relative;
  
  display: inline-block;
margin-right: 15px;
  margin-left: 15px;
overflow: hidden;
  border-radius: 20px;
  margin-top:10px;
  margin-bottom:10px;
}
.item11 p{
font-family:Brush Script MT;
color: rgb(9, 185, 230));
position: absolute;
z-index: 1;
font-size: 50px;
top:30px;
left:30px;
}
  </style>

</head>
<body>
    <header>
        
        <ul>  
            <li><p class="logo" ><img style="height:75px;width:75px"src="images/logo1-removebg-preview.png" ></p></li>
            <li><a class="home" href="index.html"><img src="images/home.png" alt="Trang chủ"></a></li>  
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
    <div class="chon">
                    
        <div class="anh99">
            <img id="img2" src="images/nhahang7.png" style="width:100%;height:600px" >
        </div>
        <div class="nutmau">
            <button onclick="document.getElementById('img2').src='images/nhahang7.png'" style="background-color: rgb(189, 183, 183); " ></button>
            <button onclick="document.getElementById('img2').src='images/nhahang2.png'" style="background-color: rgb(189, 183, 183); "></button>
            <button onclick="document.getElementById('img2').src='images/nhahang3.png'" style="background-color:rgb(189, 183, 183); "></button>
            <button onclick="document.getElementById('img2').src='images/nhahang4.png'" style="background-color: rgb(189, 183, 183); " ></button>
            <button onclick="document.getElementById('img2').src='images/nhahang5.jpg'" style="background-color:rgb(189, 183, 183); " ></button>
            

        </div>
    </div>
   
<div id="gioithieu">
    <img src="images/logo1.jpg" style="width:190px;height:190px";>
    &nbsp;&nbsp;
    <h2 style="text-align:center;">Nhà hàng món việt</h2>
    &nbsp;&nbsp;
    <p >Món ăn truyền thống đã và đang là một phần không thể thiếu đối với mỗi người con Đất Việt. Là tinh hoa văn hóa gắn liền với lịch sử hàng nghìn năm dựng xây và phát triển. Ngày nay đời sống con người ngày càng đủ đầy no ấm, nhu cầu về ăn uống đã
        chẳng còn đơn thuần, khác hẳn ngày xưa. Thế nhưng giữa muôn vàn sự lựa chọn ấy,ẩm thực truyền thống vẫn luôn giữ được chỗ đứng riêng cho mình bởi sự thân thuộc và gần gũi, chất lượng, Với lối kiến trúc độc đáo, tinh tế, đan xen giữa nét đẹp
        truyền thống và hiện đại,...<a href="gioithieu.php">xem thêm</a></p>
</div>

<div class="item11">
<h2 style="text-align:center;">Thực đơn</h2>
    <div class="item" ><a href="monlau.php"><p>món lẩu</p><img src="images/lẩu nấm.jpg" alt=""></a></div>
    <div class="item" ><a href="monsup.php"><p>món súp</p><img src="images/súp gà thập cẩm.jpg" alt=""></a></div>
    <div  class="item" ><a href="monbo.php"><p>món bò</p><img src="images/bò sốt vang.jfif" alt=""></a></div>
    <div class="item" ><a href="monlon.php"><p>món lợn</p><img src="images/sườn sào chua ngọt.jfif" alt=""></div>
    <div class="item" ><a href="monga.php"><p>món gà</p><img src="images/gà rang lá chanh.jpg" alt=""></a></div>
    <div class="item" ><a href="monca.php"><p>món cá</p><img src="images/cá kho riềng.jpg" alt=""></a> </div>
    <div class="item" ><a href="monhaisan.php"><p>hải sản</p><img src="images/tôm xú sóc bơ tỏi.jpg" alt=""></a></div>
    <div class="item" ><a href="moncanh.php"><p>món canh</p><img src="images/canh chua cá lăng.jpg" alt=""></a></div>
    <div class="item" ><a href="monrau.php"><p>món rau</p><img src="images/cải thìa xào dầu hào.jpg" alt=""></a> </div>
    <div class="item"><a href="douong.php"><p>đồ uống</p><img src="images/cocacola.jpg" alt=""></a></div>

</div>
<div id="baiviet">
            <h2 align="center">Tin Tức & Clip</h2>
            <div class="tintuc">
                <?php 
                    while($row=mysqli_fetch_array($query)){
                ?>
                <ul>
                    <li>
                        <a href="baiviet.php?id=<?php echo $row['id']?>"><img src="images/<?php echo $row['anh']?>" alt=""></a>
                        <div class="mota">
                            <h3><a style="text-decoration: none" href="baiviet.php?id=<?php echo $row['id'] ?>"><?php echo $row['tieude']?></a></h3>
                            <p style="font-size:14px; color: grey">Ngày đăng: <?php echo $row['ngay']?></p>
                            <div class="desc"><?php echo $row['mota']?></div>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
            <div class="video">
                <video controls>
                    <source src="images/Video1.mp4">
                </video>
            </div>
        </div>
        
</div>
<div class="float-contact">
    <button class="datbanngay">
        <a href="datban.php"><img style="height:60px;width:60px;"src="images/datbanngay.png"></a>
        </button>
    <button class="chat-zalo">
    <a href="http://zalo.me/0359399020"><p>zalo</p></a>
    </button>
    <button class="chat-face">
    <a href="https://www.facebook.com/profile.php?id=100024548624752"><img style="height:60px;width:60px;"src="images/mess2.jpg"></a>
    </button>

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