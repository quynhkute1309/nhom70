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
            <li><a class="home" href="index.html"><img src="images/home.png" alt="Trang ch???"></a></li>  
            <li><a href="gioithieu.php">Gi???i thi???u</a></li>
            <li><a class="menu" href="menu1.php">Menu</a></li>   
            <li><a href="news.php">Tin t???c</a></li>
            <li><a href="datban.php">?????t ti???c</a></li>
            <li><a href="trang.php">B??? s??u t???p</a></li>
            <li><a href="event.html">Khuy???n m??i</a></li>
            <li><a href="li??n h??? 1.php">Li??n h???</a></li>
            <li>
                <a class="menu">H??? Tr???</a>
              <ul class="sub-nav">
                 <li><a href="maps.html">B???n ?????</a></li>
                 <li><a href="hotro.php">H??? tr??? th??m</a></li>
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
    <h2 style="text-align:center;">Nh?? h??ng m??n vi???t</h2>
    &nbsp;&nbsp;
    <p >M??n ??n truy???n th???ng ???? v?? ??ang l?? m???t ph???n kh??ng th??? thi???u ?????i v???i m???i ng?????i con ?????t Vi???t. L?? tinh hoa v??n h??a g???n li???n v???i l???ch s??? h??ng ngh??n n??m d???ng x??y v?? ph??t tri???n. Ng??y nay ?????i s???ng con ng?????i ng??y c??ng ????? ?????y no ???m, nhu c???u v??? ??n u???ng ????
        ch???ng c??n ????n thu???n, kh??c h???n ng??y x??a. Th??? nh??ng gi???a mu??n v??n s??? l???a ch???n ???y,???m th???c truy???n th???ng v???n lu??n gi??? ???????c ch??? ?????ng ri??ng cho m??nh b???i s??? th??n thu???c v?? g???n g??i, ch???t l?????ng, V???i l???i ki???n tr??c ?????c ????o, tinh t???, ??an xen gi???a n??t ?????p
        truy???n th???ng v?? hi???n ?????i,...<a href="gioithieu.php">xem th??m</a></p>
</div>

<div class="item11">
<h2 style="text-align:center;">Th???c ????n</h2>
    <div class="item" ><a href="monlau.php"><p>m??n l???u</p><img src="images/l???u n???m.jpg" alt=""></a></div>
    <div class="item" ><a href="monsup.php"><p>m??n s??p</p><img src="images/s??p g?? th???p c???m.jpg" alt=""></a></div>
    <div  class="item" ><a href="monbo.php"><p>m??n b??</p><img src="images/b?? s???t vang.jfif" alt=""></a></div>
    <div class="item" ><a href="monlon.php"><p>m??n l???n</p><img src="images/s?????n s??o chua ng???t.jfif" alt=""></div>
    <div class="item" ><a href="monga.php"><p>m??n g??</p><img src="images/g?? rang l?? chanh.jpg" alt=""></a></div>
    <div class="item" ><a href="monca.php"><p>m??n c??</p><img src="images/c?? kho ri???ng.jpg" alt=""></a> </div>
    <div class="item" ><a href="monhaisan.php"><p>h???i s???n</p><img src="images/t??m x?? s??c b?? t???i.jpg" alt=""></a></div>
    <div class="item" ><a href="moncanh.php"><p>m??n canh</p><img src="images/canh chua c?? l??ng.jpg" alt=""></a></div>
    <div class="item" ><a href="monrau.php"><p>m??n rau</p><img src="images/c???i th??a x??o d???u h??o.jpg" alt=""></a> </div>
    <div class="item"><a href="douong.php"><p>????? u???ng</p><img src="images/cocacola.jpg" alt=""></a></div>

</div>
<div id="baiviet">
            <h2 align="center">Tin T???c & Clip</h2>
            <div class="tintuc">
                <?php 
                    while($row=mysqli_fetch_array($query)){
                ?>
                <ul>
                    <li>
                        <a href="baiviet.php?id=<?php echo $row['id']?>"><img src="images/<?php echo $row['anh']?>" alt=""></a>
                        <div class="mota">
                            <h3><a style="text-decoration: none" href="baiviet.php?id=<?php echo $row['id'] ?>"><?php echo $row['tieude']?></a></h3>
                            <p style="font-size:14px; color: grey">Ng??y ????ng: <?php echo $row['ngay']?></p>
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
         <h2 style="color:white">V??? Ch??ng T??i</h2>
        <p>Ch??ng t??i lu??n c???m th???y vinh d??? <br>
        khi ???????c ph???c v??? qu?? kh??ch.S??? <br>
        ????nh gi?? t???t t??? qu?? kh??ch l?? ni???m <br>
        vui c???a ch??ng t??i.Ch??ng t??i cam <br>k???t
        ??em ?????n cho qu?? kh??ch ph???c <br>
         v??? t???t nh???t.</p>
     </div>
        <div class="link">
            <h2 style="color:white">???????ng D???n</h2>
            <ul>
                <li><a href="index.php">Trang Ch???</a></li>
                <li><a href="gioithieu.php">Gi???i thi???u</a></li>
                <li><a href="li??n h??? 1.php">Li??n L???c</a></li>
                <li><a href="hotro.php">H??? Tr???</a></li>
                
            </ul>
        </div>

        <div class="contact">
            <h2 style="color:white">Th??ng Tin Li??n H???</h2>
            <ul class="info">
                <li>
                    79, H??? T??ng M???u,Mai D???ch, C???u Gi???y, H?? N???i
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