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
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<h1>Login</h1>
			<form action="login.php" style="margin: 20px; text-align: left;">
				<label for="login-username"></label>
				<h2>Username:</h2>
				<input type="text" name="login-username" class="user-input" placeholder="Username" required>

				<label for="login-password"></label>
				<h2>Password:</h2>
				<input type="password" name="login-password" class="user-input" placeholder="Password" required>

				<br>
				<input type="submit" name="submit" value="Đăng nhập" class="success-btn">
			</form>
			<p>Chưa có tài khoản? <a href="register.php" style="text-decoration: none; color: red;">Đăng kí</a> ngay!</p>
		</div>
	</div>
</body>
</html>