<?php 
	include "database.php";
	include 'navbar.php';
	$ketqua = "";
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		die();
	} else{
		if (isset($_POST['problem'])) {
			$user = $_POST['login-username'];
			$problem = $_POST['problem'];
			$sql = "INSERT INTO `report`(`user`, `problem`) VALUES ('".$user."','".$problem."')";
				$result = mysqli_query($conn, $sql);
	            if ($sql) {
	                $ketqua = "Đã gửi cho quản lí, chúng tôi sẽ liên hệ bạn sau";
	            } else{
	            	$ketqua = "Web đang gặp lỗi, vui lòng quay lại sau";
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
	<title>Tạo đơn hỗ trợ</title>
</head>
<body>
	<div class="container" style="max-width: 720px;">
		<h1 style="color: salmon;"><?php echo $ketqua; ?></h1>
		<div class="roundcard">
			<h1>Tạo đơn hỗ trợ</h1>
			<form action="report.php" method="post" style="margin: 20px; text-align: left;">
				<label for="login-username"></label>
				<h2>Username:</h2>
				<input type="text" name="login-username" class="user-input" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" readonly required>

				<label for="problem"></label>
				<h2>Miêu tả vấn đề của bạn:</h2>
				<input type="text" name="problem" class="user-input" placeholder="Nhập vấn đề" required>

				<br>
				<input type="submit" name="submit" value="Tạo" class="success-btn">
			</form>
		</div>
	</div>
</body>
</html>