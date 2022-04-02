<?php require_once 'conndb.php';
    //Truy vấn và tìm kiếm
    if (isset($_POST['search'])){
        $keyword = $_POST['keyword'];
        $sql = "SELECT * FROM `tintuc` WHERE `id` LIKE '%$keyword%' OR `tieude` LIKE '%$keyword%' OR `mota` LIKE '%$keyword%' OR `noidung` LIKE '%$keyword%' OR `ngay` LIKE '%$keyword%'";
        mysqli_query($conn, $sql);
    }else{
        $sql = "SELECT * FROM tintuc ORDER BY id DESC";
    }
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tin Tức</title>
    <style>
        #main{
            background: #F3F0D7;
        }
        h1{
            color: darkgreen;
        }
        .tim{
            margin-left: 130px;
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
        transform: translate(700%, -50%);
        }
        table{
            border-collapse:collapse;
            border-color: green;
        }
    </style>
</head>
<body>
    <div id="main">
    <h1 align="center">Quản lý bài viết</h1>
    <div class="bang">
        <form action="" method="post">
            <div class="tim">
                <input type="text" placeholder="Tìm kiếm..." name="keyword" 
                value="<?php if (isset($_POST['keyword'])) {echo $_POST['keyword']; }?>"/>
                <input type="submit" value="Tìm kiếm" name="search"/>
                <a href="ql_news.php"><input type="submit" value="Tất cả"/></a>
            </div>
        </form>
        <a class="nut" href="addnews.php">Thêm mới</a>
        <table border="1" width="80%" align="center">
            <thead>
                <tr>
                    <th>ID bài viết</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <!--In ra-->
                <?php 
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['tieude']?></td>
                    <td><img width="200px" src="images/<?php echo $row['anh']?>" alt=""></td>
                    <td><?php echo $row['mota']?></td>
                    <td><?php echo $row['noidung']?></td>
                    <td><?php echo $row['ngay']?></td>
                    <td><a href="editnews.php?id=<?php echo $row['id'] ?>">Sửa</a>||<a onclick="return check()"  href="delete.php?id=<?php echo $row['id'] ?>">Xóa</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
<script>
    function check(){
        return confirm("Bạn có chắc muốn xóa bài viết này?");
    }
</script>
</body>
</html>