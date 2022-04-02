<h2>Thêm hình ảnh</h2>
<?php 
include "db.php";
$sql="SELECT * FROM themsuaxoa";
$query = mysqli_query($conn,$sql);
if(isset($_POST['sbm'])){
	$tenanh = $_FILES['tenanh']['name'];
	$tenanh_tmp = $_FILES['tenanh']['tmp_name'];
	$noidung = $_POST['noidung'];
	
	$sql = "INSERT INTO themsuaxoa ( tenanh, noidung) VALUES ( '$tenanh', '$noidung')";
$query= mysqli_query($conn, $sql);
move_uploaded_file($tenanh_tmp, 'images/'.$tenanh);
header('location:anh.php?page_layout=danhsach');
}
?>
<div class ="container-fluid">
<div class ="card">
<div class="card-body">
<form method="POST" enctype ="multipart/form-data">
<div class="form-group">
<label for=""> Ảnh:</label>
<input type="file" name="tenanh" >
</div>
<div class="form-group">
<label for=""> Nội dung: </label>
<input type="text" name="noidung" class ="form-control" required>
</div>
<button name="sbm" class="btn btn-success" type="Submit">Thêm mới</button>
</form>
</div>
</div>
</div>
<style>
h2{
	text-align: center;
	margin: 65 auto;
}
form{
	margin: 75 auto;
	padding:25px;
    background-clip:padding-box;
	border:1px solid black;
	background-color:white;
	box-shadow: 2px 2px 2px white inset;
	font-family: Arial, Helvetica, sans-serif;
	font-size:20px;
	text -align:center;
	width:600px;
}
body {
	 background-color:#F3F0D7;
	}
</style>



