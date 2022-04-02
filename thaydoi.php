<?php
include"ketnoi.php";
$anh=$_GET['anh'];
$sql="SELECT * FROM sukienkhuyenmai where anh='$anh' ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    $anh=$row['anh'];
    $tieude=$row['tieude'];
    $noidung=$row['noidung'];
    $thoigian=$row['thoigian'];
}
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Document</title>
</head>
<body>
    

  <form action="" method="POST">
    
    <div class="input">
                <label  class="label_content" for=""> Ảnh </label>
                <input type="file" name="anh" required value="<?php echo $anh?>">
            </div>
            <div class="input">
                <label class="label_content" for=""> Tiêu đề </label>
                <input  type="text" name="tieude"  required value="<?php echo $tieude?>"> 
            </div>

            <div class="input">
                <label class="label_content" for=""> Nội dung </label>
                <input type="text" name="noidung"  required value="<?php echo $noidung?>">
            </div>

            <div class="input">
                <label class="label_content" for=""> Thời gian </label>
                <input type="date" name="thoigian" required value="<?php echo $thoigian?>">
            </div>
    
    <button name="change"> Thay doi </button>
    </form>
<?php

if(isset($_POST['change'])){
   if ($_FILES['anh']['name']==''){
	$anh=$r['anh'];
}else{
	$anh=$r['anh'];
}
    $tieude=$_POST['tieude'];
    $noidung=$_POST['noidung'];
    $thoigian=$_POST['thoigian'];
    $update_sql="UPDATE sukienkhuyenmai SET anh='$anh',tieude='$tieude',noidung='$noidung',thoigian='$thoigian' where anh='$anh'";
    $res=mysqli_query($conn,$update_sql);
    if($res){
        echo "Thay đổi thành công";
        echo "<a href='sukienkhuyenmai.php' > Trở về trang chủ";
    } else echo "Thay đổi thất bại";
}
?>
</body>
</html>