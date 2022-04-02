
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
};}

function layMonAn($conn) {
    $query = mysqli_query($conn,"SELECT * FROM `thuc_don`");
    $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $result;
}
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
                         <?php
                            $layMonAn = layMonAn($conn);
                            foreach ($layMonAn as $monAn) {
                                echo "<option value=".$monAn['id'].">".$monAn['ten_mon']."</option>";
                            }
                        ?>
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
