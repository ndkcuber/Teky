<?php
	include "database.php";
	include 'navbar.php';
	$ketqua = "";
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		die();
	} else{
		if ($row['role'] == "Admin" || $row['role'] == "Moderator") {
	} else{
		header("Location: login.php");
		die();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tạo đơn hỗ trợ</title>
</head>
<body>
	<div class="container" style="max-width: 720px;">
		<h1>Tất cả yêu cầu hỗ trợ</h1>
	</div>
</body>
</html>