       
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
            <h2>Món Canh </h2>
            <div><img src="images/line-h3.png" alt=""></div>
        </div>
        <ul>
        <div id="im"><a href="#"><img src="images/canh bí tôm tươi.jpg" alt=""></a> <h4> Canh bí tôm tươi <br><h5>Giá: 40000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/canh chua cá lăng.jpg" alt=""></a> <h4>Canh chua cá lăng <br><h5>Giá: 50000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/canh chua cá lóc.jpg" alt=""></a> <h4> Canh chua cá lóc <br> <h5>Giá: 50000 đồng</h5></h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/canh cua đồng.jpg" alt=""></a> <h4> Canh cua đồng <br><h5>Giá: 35000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
		    <div id="im"><a href="#"><img src="images/canh ngao.jpg" alt=""></a> <h4> Canh ngao cải xanh <br><h5>Giá: 20000 đồng</h5> </h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
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
 