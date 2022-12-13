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
			if ($row['role'] == "Admin" || $row['role'] == "Moderator") {
				
			} else{
				header("Location: index.php");
				die();
			}
		}
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<h1>Trang cá nhân</h1>
			<div style="margin: 30px; text-align: left;">

			</div>
	
		</div>
	</div>
</body>
</html>