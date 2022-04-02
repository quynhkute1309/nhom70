<?php
session_start();
?>
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
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admins WHERE `email`='$email' AND `password`='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['admin'] = [
                'id'=>$row['id'],
                'email'=>$row['email']
            ];
        header('Location:admin1.php');
    } }else {
        $errorLogin = true;
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
<div class="container">
    <form class="pt-5" method="POST" action="">
        <h3>Đăng nhập</h3>
        <hr/>
        <?php if(isset($errorLogin)){?>
        <div class="alert alert-danger" role="alert">
            Tài khoản hoặc mật khẩu không chính xác
        </div>
        <?php }?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Địa Chỉ email</label>
            <input type="email" required class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $_POST['email'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
            <input type="password" required name="password" class="form-control" id="exampleInputPassword1"  >
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Kiểm tra</label>
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
</body>
</html>