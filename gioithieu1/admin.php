<h1>REVIEWS VỀ NHÀ HÀNG</h1>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="comment.css">

<div id="well">
    <form method="post" class="123" align="center" >
   
    Người gửi: <div style="height: 70px;">
        <input style="height: 50px; width: 500px;" type="text" name="nguoigui"><br>
    </div>
    Reviews về nhà hàng: <div >
    <input style="height: 50px; width: 500px;" type="text" name="comment"><br>
        
    </div>

        <br>
        <input class="456" type="submit" name="insert" value="Thêm mới" onclick="checkform(); return ">
        
    </form>
    <?php
    $link = new MySQLi("127.0.0.1","root","","nhom7");
    if(isset($_POST['insert'])){
             $stt = $_POST['stt'];
             $nguoigui = $_POST['nguoigui'];
             $comment = $_POST['comment'];
           
             $query = "INSERT INTO `binhluan` value ('$stt', '$nguoigui', '$comment')";
             
             mysqli_query($link, $query) or die('khong sua duoc');
    header('location:admin.php');
            
    }
?>  
    <br/>

    <table id="moon" align="center" border="1">
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
                    <td><a onclick="return check()"  href="xoa.php?id=<?php echo $r['stt'] ?>">Xóa</a></td>
                </tr>
                <?php } ?>

</table>
<script>
    function check(){
        return confirm("Bạn có chắc muốn xóa bài viết này?");
    }
</script>
</div>