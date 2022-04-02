        
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
            <h2>Món Lẩu</h2>
            <div><img src="images/line-h3.png" alt=""></div>
        </div>
        <ul>
            <div id="im"><a href="#"><img src="images/lẩu bò nhúng dấm.JFIF" alt=""></a><h4>Lẩu bò nhúng dấm <br><h5>Giá: 500000 đồng</h5> </h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/lẩu cá chép om dưa.JPG" alt=""></a><h4>Lẩu cá chép om <br><h5> Giá: 420000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/lẩu cá tra chua cay.JPG" alt=""></a><h4>Lẩu cá tra chua cay <br><h5> Giá: 450000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/lẩu nấm.JPG" alt=""></a><h4>Lẩu nấm đặc biệt <br><h5> Giá: 380000 đồng</h5></h4><button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
            <div id="im"><a href="#"><img src="images/lẩu thái.JFIF" alt=""></a><h4>Lẩu Thái chuẩn vị <br><h5> Giá: 400000 đồng</h5></h4> <button name="button" value="OK" type="button" onclick="location.href='datmon.php'">Đặt món</button></div>
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
 