
<?php
require 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>quan li ho tro</title>
        <link rel="stylesheet" href="header1.css">
        <link rel="stylesheet" href="adminht.css">
        <style>
            table{
             width:100%;
            }
            table, td, th{
                border-collapse:collapse;
            }
            td, th{
                padding: 6px 10px;
            }
        </style>
</head>
<body>
<header>
    <ul>  
     
     <li><a href="admin.php">giới thiệu</a></li>
     <li><a class="menu" href="qlhotro.php">hỗ trợ</a></li>   
     <li><a href="ql_news.php">Tin tức</a></li>

     <li><a href="anh.php">Bộ sưu tập</a></li>
     <li><a href="sukienkhuyenmai.php">Khuyến mãi</a></li>
 
     <li>
         <a class="menu"> Menu</a>
       <ul class="sub-nav">
          <li><a href="editmon.php">Chỉnh sửa menu</a></li>
          <li><a href="thongtindatmon.php">Thông tin đặt món</a></li>
</header>


    <table class="thes1" border="1" align="center">
        <tr>
           
            <th>Họ tên</th>
            <th>Email</th>
            <th>Sdt</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Edit</th>

        </tr>
        
        <?php 
        //In dữ liệu ra bảng
        $sql="SELECT*FROM thongtin";
        $query=mysqli_query($conn,$sql);
        ?>
                    <?php 
                    while($row=mysqli_fetch_array($query)){
                    ?>
        <tr>
        <td><?php echo $row['hoten']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['sdt']?></td>
        <td><?php echo $row['tieude']?></td>
        <td><?php echo $row['noidung']?></td>

        <th><a href="suahotro.php?id=<?php echo $row['id'] ?>">sửa</a>|<a id="xoa"  href="xoahotro.php?id=<?php echo $row['id'] ?>">xóa</a></th>
        </tr>';
    
    <?php }?>

    </table>
</body>
</html>