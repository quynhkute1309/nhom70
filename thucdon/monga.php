        
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thực Đơn </title>
    <link rel="stylesheet" type ="text/css" href="menu1.css"/>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
        <div class ="main">
        <div class="sub">
            <h2>Món Gà</h2>
            <div><img src="images/line-h3.png" alt=""></div>
        </div>
        <ul>
        <div id="im"><a href="#"><img src="images/gà hấp nấm đông cô.jpg" alt=""></a> <h4> Gà hấp nấm đông cô <br><h5>Giá: 100000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/gà rang lá chanh.jpg" alt=""></a> <h4> Gà rang lá chanh <br><h5> Giá: 90000 đồng</h5></h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/gà xối mỡ.jpg" alt=""></a> <h4> Cơm gà xối mỡ <br><h5>Giá: 100000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/gà ác tiềm thuốc bắc.jpg" alt=""></a> <h4> Gà ác tiềm thuốc bắc <br> <h5>Giá: 200000 đồng</h5></h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/chân gà nướng muối ớt.jfif" alt=""></a> <h4> Gỏi gà lá chanh <br><h5>Giá: 80000 đồng</h5></h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>   
        <ul>
        </div>
      
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
       
  <button type="button" onclick="quay_lai_trang_truoc()">Menu</button>

<script>
    function quay_lai_trang_truoc(){
        history.back();
    }
</script>

</body>
    </html>     
 