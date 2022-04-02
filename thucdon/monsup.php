
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
            <h3>Món Súp</h3>
            <div><img src="images/line-h3.png" alt=""></div>
        </div>
        <ul>
            <div id="im"><a href="#"><img src="images/súp gà nấm hương.jpg" alt=""></a><h4>Súp gà nấm hương <br><h5>Giá: 20000 đồng</h5> </h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php' ">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/súp gà thập cẩm.jpg" alt=""></a><h4>Súp gà thập cẩm <br><h5>Giá: 22000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/súp tôm thịt.jpg" alt=""></a><h4>Súp tôm thịt <br><h5>Giá: 22000 đồng</h5> </h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/súp cua.jpg" alt=""></a><h4>Súp cua <br><h5>Giá: 20000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/súp chay.jpg" alt=""></a><h4>Súp chay <br><h5> Giá: 15000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
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