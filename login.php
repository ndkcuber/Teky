<?php 
	include "database.php";
	$ketqua = "";
	if (isset($_SESSION['username'])) {
		header("Location: index.php");
		die();
	} else{
		if (isset($_POST['login-username']) && isset($_POST['login-password'])) {
			$username = $_POST['login-username'];
			$password = $_POST['login-password'];
			if (ctype_alnum($username) && strlen($username)<=50 && strlen($username)>3){
				if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
					$sql = "SELECT * FROM logindb WHERE username='".$username."'";
					$result = mysqli_query($conn,$sql);
		            if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						$hash = $row['password'];
						if (password_verify($password, $hash)) {
							echo "<script>alert(\"Đăng nhập thành công!\")</script>";
							$_SESSION['username'] = $row['username'];
							header("Location: index.php");
							die();
						}
					}
				} else{
					$ketqua = "Rồi mày tính phá web hay gì?";
				}
			} else{
				$ketqua = "Rồi mày tính phá web hay gì?";
			}
		}
	}

?>

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
		<h1 style="color: salmon;"><?php echo $ketqua; ?></h1>
		<div class="roundcard">
			<h1>Login</h1>
			<form action="login.php" method="post" style="margin: 20px; text-align: left;">
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