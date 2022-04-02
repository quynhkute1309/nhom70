<h1>REVIEWS VỀ NHÀ HÀNG</h1>
<link rel="stylesheet" href="vd.css">
<?php
$link = new MySQLi("127.0.0.1","root","","nhahang");
?>
<table align="center" border="1">
   <tr> 
       <th>Người gửi</th>
       <th>Reviews về nhà hàng</th>
       <th>Tác vụ</th>
    </tr>
<?php 
 $query = "SELECT * FROM `binhluan`" or die ('loi truy van');
 $result= mysqli_query($link,$query);
                while($r=mysqli_fetch_array($result)){
                ?>
                <tr>
                     
                    <td><?php echo $r['nguoigui']?></td>
                    <td><?php echo $r['comment']?></td>
                    <td><a onclick="return check()"  href="xoaadmin.php?id=<?php echo $r['stt'] ?>">Xóa</a></td>
                </tr>
                <?php } ?>

</table>

<script>
    function check(){
        return confirm("Bạn có chắc muốn xóa bài viết này?");
    }
</script>
