<html>
<head>
<title>Admin</title>
</head>
<body>
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