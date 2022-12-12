<?php 
	include "database.php";
	include 'navbar.php';
	$ketqua = "";
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		die();
	} else{

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tạo đơn khiếu nại</title>
</head>
<body>
	<div class="container" style="max-width: 720px;">
		<h1 style="color: salmon;"><?php echo $ketqua; ?></h1>
		<div class="roundcard">
			<h1>Tạo đơn khiếu nại</h1>
			<form action="login.php" method="post" style="margin: 20px; text-align: left;">
				<label for="login-username"></label>
				<h2>Username:</h2>
				<input type="text" name="login-username" class="user-input" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" readonly required>

				<label for="login-username"></label>
				<h2>Miêu tả vấn đề của bạn:</h2>
				<input type="text" name="login-username" class="user-input" placeholder="Nhập vấn đề" readonly required>

				<label for="login-password"></label>
				<h2>Password:</h2>
				<input type="password" name="login-password" class="user-input" placeholder="Password" required>

				<br>
				<input type="submit" name="submit" value="Tạo" class="success-btn">
			</form>
		</div>
	</div>
</body>
</html>