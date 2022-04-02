
<?php 
$sql="SELECT * FROM themsuaxoa";
$query = mysqli_query($conn,$sql);
if(isset($_POST['sbm'])){
	$STT = $_POST['STT'];
	$tenanh = $_FILES['tenanh']['name'];
	$tenanh_tmp = $_FILES['tenanh']['tmp_name'];
	$noidung = $_POST['noidung'];
	
	$sql = "INSERT INTO themsuaxoa (STT, tenanh, noidung) VALUES ('$STT', '$tenanh', '$noidung')";
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
<label for=""> STT </label>
<input type="number" name="STT" class ="form-control" required>
</div>
<div class="form-group">
<label for=""> Ảnh</label>
<input type="file" name="tenanh" class ="form-control">
</div>
<div class="form-group">
<label for=""> Nội dung </label>
<input type="text" name="noidung" class ="form-control" required>
</div>
<button name="sbm" class="btn btn-success" type="Submit">Thêm</button>
</form>
</div>
</div>
</div>
<style>
form{
	margin: 50 auto;
	width: 50px;
	
}

</style>







