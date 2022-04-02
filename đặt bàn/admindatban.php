<?php

//Khai báo biến

$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'nhom7';
//Tạo kết nối

$conn = mysqli_connect($server,$username,$pass,$dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
if ($conn->connect_error) {
	die("Kết nối lỗi:" . $conn->connect_error);
	exit();
}
//Đọc dữ liệu từ fowm
$sql="SELECT*FROM datban";
$ket_qua=$conn->query ($sql);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
	die ("không thể thực hiện câu lệnh SQL: " . $conn->connect_error);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Quản lí đặt bàn </title>
    <link rel="stylesheet" href="admindatban.css">  
</head>
<body>

    <div>
        <p text align="center"> Quản lí đặt bàn </p>
    </div>
	<form class="bang" action="" method="post">
        <table text align ="center">
		<tr>
			<td>Họ và tên</td>
			<td>Email</td>
			<td>SĐT</td>
			<td>Ngày tháng</td>
			<td>Thời gian</td>
			<td>Số người</td>
		<tr>
	
    <?php 
        while($row=mysqli_fetch_array($ket_qua)){
			?>
	    <tr>
            <td><?php echo $row['name']?></td>
	        <td><?php echo $row['email']?></td>
	        <td><?php echo $row['phone']?></td>
	        <td><?php echo $row['date']?></td>
	        <td><?php echo $row['time']?></td>
            <td><?php echo $row['people']?></td>
	    </tr>
		<?php }
		?>
	
        </table>
</body>
</html>