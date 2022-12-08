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
	<div class="container">
		<div class="roundcard">
			<h1>Login</h1>
			<form action="login.php" style="margin: 20px; text-align: left;">
				<label for="login-username"></label>
				<h2>Username:</h2>
				<input type="text" name="username" class="user-input" placeholder="Username" required>

				<label for="login-password"></label>
				<h2>Password:</h2>
				<input type="password" name="password" class="user-input" placeholder="Password" required>

				<br>
				<input type="submit" name="submit" class="success-btn">
			</form>
		</div>
	</div>
</body>
</html>