<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Đăng nhập</title>
</head>
<body>
	<?php
 		include "navbar.php";
	 	$ketqua = "";
		include "database.php";
		if (!isset($_SESSION['username'])) {
			header("Location: login.php");
			die();
		} else{
			$sql = "SELECT * FROM logindb WHERE username='".$_SESSION['username']."'";
			$result = mysqli_query($conn,$sql);
			$row = $result->fetch_assoc();
			$username = $row['username'];
			$fullname = $row['fullname'];
			$rank = $row['role'];
			$regdate = $row['reg_date'];
			$uid = $row['user_id'];
			
			}
	 ?>
	<div class="container" style="max-width: 720px;">
		<h1 style="color: salmon;"><?php echo $ketqua; ?></h1>
		<div class="roundcard">
			<h1>Trang cá nhân</h1>
			<h2>Username: <?php echo $username ?></h2>
			<h2>Họ và tên: <?php echo $fullname ?></h2>
			<h2>Vai trò: <?php echo $rank ?></h2>
			<h2>Ngày đăng kí: <?php echo $regdate ?></h2>
			<h2>UID: <?php echo $uid ?></h2>	
		</div>
	</div>
</body>
</html>