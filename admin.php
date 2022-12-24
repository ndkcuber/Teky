<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Trang quản lí</title>
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
			<h1>Quản lí</h1>
			<div style="margin: 30px; text-align: left;">
				<a href="addproduct.php" class="defaultbtn" style="margin: 10px;">Thêm sản phẩm</a>
				<a href="" class="defaultbtn" style="margin: 10px;">Quản lí đơn hàng</a>
				<a href="viewreport.php" class="defaultbtn" style="margin: 10px;">Yêu cầu hỗ trợ 
					<span style="color: orangered; display: inline-block;min-height: 25px; min-width: 25px; max-width: 25px; max-height: 25px; border-radius: 1500px; background: lightgrey;">					<?php
						$sql = "SELECT * FROM report";
						if ($result=mysqli_query($conn,$sql)) {
							$rowcount=mysqli_num_rows($result);
							echo $rowcount;
						}
					?>	</span>

					</a>
			</div>
	
		</div>
	</div>
</body>
</html>