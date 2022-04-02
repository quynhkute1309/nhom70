<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type ="text/css" href="header1.css"/>  
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
</ul>
</ul>
</header>
    <?php
  require_once 'db.php';
?>
<?php
if(isset($_GET['page_layout'])){
switch ($_GET['page_layout']){
	case 'danhsach':
	require_once 'danhsach.php';
	break;
	case 'themhinhanh':
	require_once 'themhinhanh.php';
	break;
	case 'suahinhanh':
	require_once 'suahinhanh.php';
	break;
	case 'xoahinhanh':
	require_once 'xoahinhanh.php';
	break;
	default:
	require_once 'danhsach.php';
	break;
	}
}else{
	require_once 'danhsach.php';
}
?>
</body>
</html>