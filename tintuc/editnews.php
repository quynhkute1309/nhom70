<?php
require_once 'conndb.php';
$id=$_GET['id'];
?>
<!--Truy vấn-->
<?php
$sql = "SELECT * FROM tintuc WHERE `tintuc`.`id` = '$id'";
$result = mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
?>
<!--Sửa thông tin-->
<?php
if(isset($_POST['sua'])){
    $tieude=$_POST['tieude'];
    $anh=$image=$_FILES['anh']['name'];
    $image_tmp=$_FILES['anh']['tmp_name'];
    move_uploaded_file($image_tmp,'images/'.$image);
    $mota=$_POST['mota'];
    $noidung=$_POST['noidung'];
    $sqlsua= "UPDATE `tintuc` SET `tieude` = '$tieude', `anh` = '$anh', `mota` = '$mota', `noidung` = '$noidung' WHERE `tintuc`.`id` = '$id';";
    $thucthisua=mysqli_query($conn,$sqlsua);
    header('location:ql_news.php');
}; 
?>
<!--From sửa dữ liệu-->
<!doctype html>
<html>
    <head>
        <title>Chỉnh sửa bài viết</title>
        <style>
            *{
                background: #F3F0D7;
            }
            h1{
                text-align: center;
                color: darkgreen;
            }
            .main{
                margin: auto 50px;
            }
            .main h3{
                color: darkgreen;
            }
            .main .nut{
            display:block; 
            background-color:darkgreen ; 
            width:150px; 
            height: 30px;
            color:aliceblue;
            text-decoration: none;
            text-align: center;
            line-height: 30px;
            left: 50%;
            top: 50%;
            transform: translate(600%, 30%);
            float: left;
            margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Chỉnh sửa bài viết</h1>
        <div class="main">
        <form action="editnews.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <div>
                <h3>Tiêu đề</h3>
                <textarea name="tieude" cols="90"><?php echo $rows['tieude'] ?></textarea>
            </div>
            <div>
                <h3>Thêm ảnh minh họa</h3>
                <input type="file" name="anh"/>
            </div>
            <div>
                <h3>Mô tả</h3>
                <textarea name="mota" rows="5" cols="100"><?php echo $rows['mota'] ?></textarea>
            </div>
            <div>
                <h3>Nội dung bài viết</h3>
                <textarea name="noidung" rows="5" cols="100"><?php echo $rows['noidung'] ?></textarea>
            </div>
            <div>
                <button type="submit" name="sua" class="nut">Sửa</button>
                <a class="nut" href="ql_news.php">Hủy</a>
            </div>
            <div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
                <script>
                        CKEDITOR.replace( 'mota' );
                        CKEDITOR.replace( 'noidung' );
                </script> 
            </div>
        </form>
        </div>
    </body>
</html>