
 <?php
 $id=$_GET['id'];
 $conn = mysqli_connect('localhost','root','') or die("error");
 $selectdb = mysqli_select_db($conn, 'nhom7') or die("error");
?>
<?php
$sql="SELECT*FROM menu WHERE `menu`. `id` = '$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
?>
<?php
if(isset($_POST['sua'])){
    $tenmon = $_POST["tenmon"];
    $anhmon=$_FILES['anhmon']['name'];
    $anhmon_tmp=$_FILES['anhmon']['tmp_name'];
    move_uploaded_file($anhmon_tmp,'images/'.$anhmon);
    $dongia = $_POST["dongia"];
    $sqlsua = "UPDATE `menu` SET `tenmon` = '$tenmon', `anhmon` = '$anhmon', `dongia` = '$dongia' WHERE `menu`.`id` = $id"; 
    $thucthisua = mysqli_qu thì sao chạy dery($conn,$sqlsua);
    header('location: editmo.php');
}; 
?>
<!--form sửa dữ liệu-->
<!doctype html>
<html>
    <head>
        <Title> Chỉnh sửa thực đơn </Title>
        <style>
        body{
            text-align: center;
            width: 1366px;
        }
        div.form{
            margin: 0px auto;
            position: relative;
        }
        form{
            position: absolute;
            padding-top: 70px;
            width: 300px;
            height: 300px;
            background-color: #F3F0D7;
            align-items: center;
            text-align: center;
            left: 40%;
        }
        label{
            color: #A9333A;
        }
        #gui{
            cursor: pointer;
            width: 50px;
            padding: 2px 5px;
            border: 1px solid green;
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        #gui:hover{
            color: white;
            background-color:#39A388 ;
        }
        #file{
            display: none;
        }
        #img{
            width:80px;
            background-color: white;
            padding: 0px 5px;
            color: black;
            position:relative;
            cursor: pointer;

        }
        input{
            margin-bottom: 10px;
        }
    </style>
        
    </head>
    <body>
   
<div class="form">
    <form action="suamenu.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <label for="">Tên món</label>
        <input type="text" name="tenmon" value="<?php echo $rows['tenmon']  ?>"><br>
        <label for="">Đơn giá</label>
        <input type="text" name="dongia" value="<?php echo $rows['dongia']  ?>"><br>
        <label id="img" for="file">Ảnh món</label>
        <input width="50px" id="file" type="file" name="anhmon" value=""><br>
        <input id="gui" type="submit" name="sua">
    </form>
</div> 
</body>
</html>
