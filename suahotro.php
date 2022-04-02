<?php
require 'condb.php';
?>
 <?php
 $id=$_GET['id'];
if(isset($_POST["gui"])){
  $ten=$_POST["hoten"];
  $email=$_POST["email"];
  $sdt=$_POST["sdt"];
  $tieude=$_POST["tieude"];
  $noidung=$_POST["noidung"];
  
  $sql = "UPDATE `thongtin` SET `hoten` = '$ten ', `email` = '$email', `sdt` = '$sdt',`tieude` = '$tieude',`noidung` = '$noidung' WHERE `thongtin`.`id` = $id";
  $qr = mysqli_query($conn,$sql);
    header('location: qlhotro.php');
}

?>
<style>
  form{
    width:280px;
   height:500px;
   margin: 0 auto;
   background: rgba(252, 247, 0);
   padding: 15px 25px;
  }
  .the input{
    border: none;
    color: rgb(104, 33, 33);
    margin-top:11px;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    height: 49px;
    padding: 16px;
    width: 250px;
  }
  .the textarea{
     
     border: none;
     color: rgb(0, 0, 0);
     margin-top:11px;
     font-family: 'Open Sans', sans-serif;
     font-size: 20px;
     height: 120px;
     padding: 16px;
     width: 250px;
   }
   
  form h3{
    font-size: 25px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 20px;
    color: #000000;
    padding:6px;
    font-family:'sans-serif','helvetica';
  }
  .button .button1 {
    background: #fa0101;
    color: rgb(0, 0, 0);
    height: 50px;
    font-family: 'helvetica','Open Sans', sans-serif;
    font-size: 20px;
    text-align: center;
    width: 250px;
    margin-top:10px;
  }
  
</style>
<form action="" method="POST">
    <h3>sửa</h3>
	
    <div class="the">
		<input type="text" name="hoten"  placeholder="Họ và tên"  required></input>
    </div>
    <div class="the">
      <input type="text" name="email" placeholder="Email của bạn" required></input>
    </div>
    <div class="the">
   <input type="tel" name="sdt" placeholder="số điện thoại" reqired></input>
    </div>
    <div class="the">
    <input type="text" name="tieude"  placeholder="tiêu đề" required></input>
      </div>
    <div class="the">
      <textarea name="noidung" cols="20" rows="4" placeholder="Nội dung"></textarea>
    </div>
    <div class="button">
		<input type="submit" class="button1" name="gui" value="GỬI"></input>
    </div>
  </form>