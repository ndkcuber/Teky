<?php
	$ketqua = ""; 
	include "database.php";
	if (!isset($_SESSION['session_username'])) {
		if (isset($_POST['login-username'])) {
			$username = $_POST['login-username'];
			$password = password_hash($_POST['login-password'], PASSWORD_DEFAULT);
			$fullname = $_POST['user-name'];
			$gender = $_POST['gender'];

			#verify valid username
			if (ctype_alnum($username) && strlen($username)<=50 && strlen($username)>3) {
				if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $fullname)) {
					$result = mysqli_query($conn, "SELECT * FROM logindb WHERE username = '".$username."'");
					if (mysqli_num_rows($result)) {
						$ketqua = "Tên người dùng đã được sử dụng";
					} else{
						$regdate = date('Y-m-d');
						$ip = $_SERVER['REMOTE_ADDR'];
						$sql = "SELECT * FROM logindb";
						if ($result=mysqli_query($conn,$sql)) {
							$rowcount=mysqli_num_rows($result);
							$user_id = $rowcount+1;
						}
						$sql = "INSERT INTO `logindb`(`fullname`,`username`, `password`, `role`, `ip`, `banned`, `user_id`, `reg_date`) VALUES ('".$fullname."','".$username."','".$password."','Customer','".$ip."','0','".$user_id."','".$regdate."')";
						$result = mysqli_query($conn, $sql);
                        if ($sql) {
                        	$ketqua = "Đăng kí tài khoản thành công!";
                        } else{
                        	$ketqua = "Đăng kí tài khoản thất bại! Vui lòng thử lại sau!";
                        }
					}
						
				} else{
					$ketqua = "Họ và tên không hợp lệ";
				}
			} else{
				$ketqua = "Username không được chứa kí tự đặc biệt và dài hơn 50 kí tự";
			}
		}
	} else{
		header("Location: index.php");
    	die();
	}
?>

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
		<h1 style="color: salmon;"><?php echo $ketqua ?></h1>
		<div class="roundcard">
			<h1>Register</h1>
			<form action="register.php" method="post" style="margin: 20px; text-align: left;">
				<label for="user-name"></label>
				<h2>Tên:</h2>
				<input type="text" name="user-name" class="user-input" placeholder="Họ và tên" required>

				<label for="gender"></label>
				<h2>Giới tính:</h2>
				<select name="gender" required>
					<option></option>
					<option value="male">Nam</option>
					<option value="female">Nữ</option>
					<option value="retard">LGBT (Thiểu năng)</option>
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