<?php require_once 'conndb.php';
$sql="SELECT*FROM tintuc";
$query=mysqli_query($conn,$sql);
?>
<?php
    if (isset($_POST['them'])){
        $tieude= $_POST['tieude'];
        $anh=$image=$_FILES['anh']['name'];
        $image_tmp=$_FILES['anh']['tmp_name'];
        move_uploaded_file($image_tmp,'images/'.$image);
        $mota =$_POST['mota'];
        $noidung =$_POST['noidung'];

        if (empty($tieude) ||empty($anh) || empty($mota)){
            echo "<script> alert('Hãy điền đủ thông tin'); </script>";

        }else{
            $insert = mysqli_query($conn,"INSERT INTO `tintuc` (`tieude`, `anh`, `mota`,`noidung` ) VALUES ('$tieude', '$anh', '$mota','$noidung');");
            echo "<script> alert('Thêm thành công'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
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
            .nut{
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
        <h1>Thêm bài viết</h1>
        <div class="main">
        <form action ="" method="post" enctype="multipart/form-data">
            <div>
                <h3>Tiêu đề</h3>
                <textarea name="tieude" cols="90"></textarea>
            </div>
            <div>
                <h3>Thêm ảnh minh họa</h3>
                <input type="file" name="anh"/>
            </div>
            <div>
                <h3>Mô tả</h3>
                <textarea name="mota" rows="5" cols="100"></textarea>
            </div>
            <div>
                <h3>Nội dung bài viết</h3>
                <textarea name="noidung" rows="5" cols="100"></textarea>
            </div>
            <div>
                <button type="submit" name="them" class="nut">Thêm</button>
                <a class="nut" href="ql_news.php">Quay lại</a>
            </div>
            <br><br><br>
    </form>
    <div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'mota' );
                CKEDITOR.replace( 'noidung' );
        </script> 
    </div>
        </div>
    </body>
</html>
