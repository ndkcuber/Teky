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
		include "database.php";
		if (!isset($_SESSION['username'])) {
			header("Location: login.php?redirect=profile.php");
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
			$ip = $row['ip'];
			}
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<h1>Trang cá nhân</h1>
			<div style="margin: 30px; text-align: left;">
				<h2 style="color:grey;">Username: <span style="color:black;"><?php echo $username ?></span></h2>
				<h2 style="color:grey;">Họ và tên: <span style="color:black;"><?php echo $fullname ?></span></h2>
				<h2 style="color:grey;">Vai trò: <span style="color:black;"><?php echo $rank ?></span></h2>
				<h2 style="color:grey;">Ngày đăng kí: <span style="color:black;"><?php echo $regdate ?></span></h2>
				<h2 style="color:grey;">UID: <span style="color:black;"><?php echo $uid ?></span></h2>
				<h2 style="color:grey;">IP: <span style="color:black;" class="ip"><?php echo $ip ?></span></h2>
			</div>
	
		</div>
		<a href="logout.php?confirm=yes" class="defaultbtn">Đăng xuất</a>
	</div>
</body>
</html>