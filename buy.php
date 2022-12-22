<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Đăng nhập</title>
	<div id="particles-js"></div>
	<script type="text/javascript" src="particles.js"></script>
	<script type="text/javascript" src="app.js"></script>
</head>
<body>
	<?php
 		include "navbar.php";
		include "database.php";
		if (!isset($_GET['id'])) {
			header("Location: index.php");
			die();
		} else{
			$sql = "SELECT * FROM products WHERE `product_id`='".$_GET['id']."'";
			$result = mysqli_query($conn,$sql);
			$row = $result->fetch_assoc();
			$product_stock = $row['product_stock'];
			$new_stock = $product_stock-1;
			$sql = "UPDATE `products` SET `product_stock`='".$new_stock."' WHERE `product_id`='".$_GET['id']."'";
			$result = mysqli_query($conn,$sql);
			}
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<div style="margin: 30px; text-align: center;">
				<?php 
					echo "<script>alert(\"Mua hàng thành công!\")</script>";
				?>
				<meta http-equiv="refresh" content="0; url=index.php" />
			</div>
		</div>
	</div>
</body>
</html>