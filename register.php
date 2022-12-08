<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Đăng kí</title>
</head>
<body>
	<?php
 		include "navbar.php";
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<h1>Register</h1>
			<form action="register.php" style="margin: 20px; text-align: left;">
				<label for="user-name"></label>
				<h2>Tên:</h2>
				<input type="text" name="user-name" class="user-input" placeholder="Họ và tên" required>

				<label for="gender"></label>
				<h2>Giới tính:</h2>
				<select for="gender" required>
					<option></option>
					<option value="male">Nam</option>
					<option value="female">Nữ</option>
					<option value="retard">Hamburger</option>
				</select>

				<label for="login-username"></label>
				<h2>Username:</h2>
				<input type="text" name="login-username" class="user-input" placeholder="Username" required>

				<label for="login-password"></label>
				<h2>Password:</h2>
				<input type="password" name="login-password" class="user-input" placeholder="Password" required>

				<br>
				<input type="submit" name="submit" value="Đăng kí" class="success-btn">
			</form>
			<p>Là thành viên? <a href="login.php" style="text-decoration: none; color: red;">Đăng nhập</a> ngay!</p>
		</div>
	</div>
</body>
</html>