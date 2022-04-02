
<?php
//Khai báo biến
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'nhom7'; 
//Tạo kết nối
$conn = mysqli_connect($server,$user,$pass) or die("error");
//Chọn cơ sở dữ liệu
$selectdb = mysqli_select_db($conn,$db) or die("error");
//Kiểm tra biến vừa thu được từ form
if(isset($_POST['datmon'])){
    $tenkhach = $_POST["tenkhach"];
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];
    $thoigian = $_POST["thoigian"];
    $tenmon = $_POST["tenmon"];
    if ( empty($tenkhach) ||empty($sodienthoai) || empty($diachi) || empty($thoigian) || empty($tenmon)){
        echo "Please complete all data";
    }else{
     $insert = mysqli_query($conn,"INSERT INTO `datmon` (`tenkhach`, `sodienthoai`, `diachi`, `thoigian`, `tenmon` ) VALUES ('$tenkhach', '$sodienthoai', '$diachi', '$thoigian', '$tenmon')");
        echo "Succes";
    header('location: menu1.php');
}; }
?>

<!--form người dùng đặt món-->
<!doctype html>
<html>
    <head>
        <Title> Thông tin đặt món</Title>
        <link rel="stylesheet" href="menu1.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    </head>
    <body>
        <p class ="span" text align ="center" >Đặt món</p>
        <form action="datmon.php" method="POST">
            <table class ="bang"  text align ="center">
            <tr>
                <td>Tên khách hàng:</td>
                <td><input type="text" name="tenkhach"/></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="text" name="sodienthoai"/></td> 
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi"/></td>
            </tr>
            <tr>
                <td>Thời gian nhận hàng:</td>
                <td><input type="date" name="thoigian"/></td>
            </tr>
                <td>Tên món:</td>
                <td>
                     <select name="tenmon" >
                        <option value ='Súp gà nấm hương'> Súp gà nấm hương </option>
                        <option value ='Súp gà thập cẩm'> Súp gà thập cẩm </option>
                        <option value ='Súp tôm thịt'> Súp tôm thịt</option>
                        <option value ='Súp cua'> Súp cua </option>
                        <option value ='Súp chay'> Súp chay</option>
                        <option value ='Lẩu bò nhúng dấm'> Lẩu bò nhúng dấm</option>
                        <option value ='Lẩu cá chép om dưa'> Lẩu cá chép om dưa </option>
                        <option value ='Lẩu cá tra chua cay'> Lẩu cá tra chua cay</option>
                        <option value ='Lẩu nấm đặc biệt'> Lẩu nấm đặc biệt</option>
                        <option value ='Lẩu Thái chuẩn vị'>Lẩu Thái chuẩn vị  </option>
                        <option value ='Bò cuộn nấm kim châm'> Bò cuộn nấm kim châm </option>
                        <option value ='Bò hầm bia'> Bò hầm bia</option>
                        <option value ='Bò xào cần tây'> Bò xào cần tây </option>
                        <option value ='Bò xốt vang cay'> Bò xốt vang cay</option>
                        <option value ='Bò xào súp lơ xanh'> Bò xào súp lơ xanh</option>
                        <option value ='Sườn ram mặn ngọt'> Sườn ram mặn ngọt</option>
                        <option value ='Sườn sào chua ngọt'> Sườn sào chua ngọt</option>
                        <option value ='Thịt kho tàu'> Thịt kho tàu </option>
                        <option value ='Thịt lợn kho tiêu'>Thịt lợn kho tiêu </option>
                        <option value ='Ba chỉ rang xả ớt'>Ba chỉ rang xả ớt</option>
                        <option value ='Gà hấp nấm đông cô '> Gà hấp nấm đông cô </option>
                        <option value =' Gà rang lá chanh '>  Gà rang lá chanh </option>
                        <option value ='Cơm gà xối mỡ'> Cơm gà xối mỡ </option>
                        <option value ='Gà ác tiềm thuốc bắc'> Gà ác tiềm thuốc bắc</option>
                        <option value ='Gỏi gà lá chanh'> Gỏi gà lá chanh</option>
                        <option value ='Cá hồi kho tộ '> Cá hồi kho tộ </option>
                        <option value =' Cá kho riềng'> Cá kho riềng</option>
                        <option value ='Cá lóc kho tiêu'> Cá lóc kho tiêu </option>
                        <option value =' Cá thu sốt cà chua'> Cá thu sốt cà chua </option>
                        <option value =' Cá chép om dưa'>  Cá chép om dưa  </option>
                        <option value ='Tôm chiên xù'> Tôm chiên xù </option>
                        <option value ='Tôm hấp xả '>Tôm hấp xả </option>
                        <option value =' Cua hấp nước dừa '> Cua hấp nước dừa </option>
                        <option value ='Cua rang me'> Cua rang me </option>
                        <option value ='Tôm sốt me '>Tôm sốt me </option> 
                     </select>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Đặt món" name="datmon" onclick="hello()"><script>function hello(){alert("Đặt món thành công");}</script></td>
            </tr>
            </table>
        </form>
       
</body>
</html>
