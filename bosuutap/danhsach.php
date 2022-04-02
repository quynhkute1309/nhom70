<html>
<head>
<title>Admin</title>
</head>
<body>
<h1 align="center">	Quản lý hình ảnh</h1>

<table align="center" width= "80%" border="2">
<thead>
   <tr> 
       <th>Ảnh</th>
       <th>Nội dung</th>
	   <th><a class="btn btn-primary"  href="anh.php?page_layout=themhinhanh"> Thêm mới</a></th>
    </tr>
	</thead>
	<tbody>
<tr>
<?php
include "db.php";
    $sql = "SELECT * FROM themsuaxoa";
    $result= mysqli_query($conn,$sql);
    
    while ($r = mysqli_fetch_assoc($result))
    {
		?>
		<tr align ="center">
		<td> <img style="width:150px;" src="images/<?php echo $r['tenanh']; ?>"> </td>
		<td> <?php echo $r['noidung']; ?> </td>
		<td><a href="anh.php?page_layout=suahinhanh&id=<?php echo $r['tenanh']; ?>">Sửa</a>|
		<a onclick="return Del('<?php echo $r['tenanh'];?>')" href="anh.php?page_layout=xoahinhanh&id=<?php echo $r['tenanh']; ?>">Xoá</a></td>
        
        </tr>
	<?php }?>
	</tbody>
	</table>
	</body>
	<style>
	body {
	 background-color:#F3F0D7;
	}
	</style>
	<script>
	function Del(name){
	 return confirm ("Bạn chắc chắn muốn xoá hình ảnh này không? ");
	}
   </script>
</html>