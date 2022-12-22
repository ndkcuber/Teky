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

			$product_id = $_GET['id'];
			$product_name = $row['product_name'];
			$product_price = $row['product_price'];
			$product_des_long = $row['product_des_long'];
			$product_stock = $row['product_stock'];
			$product_author = $row['product_author'];
			
			}
	 ?>
	<div class="container" style="max-width: 720px;">
		<div class="roundcard">
			<div style="margin: 30px; text-align: left;">
				<h2 style="color:grey;">Sản phẩm: <span style="color:black;"><?php echo $product_name ?></span></h2>
				<h2 style="color:grey;">Giá: <span style="color:black;"><?php echo $product_price ?> $</span></h2>
				<h2 style="color:grey;">Mô tả: <span style="color:black;"><?php echo $product_des_long ?></span></h2>
				<h2 style="color:grey;">Trong kho: <span style="color:red;"><?php echo $product_stock ?></span></h2>
				<h2 style="color:grey;">Người bán: <span style="color:seagreen;"><?php echo $product_author ?></span></h2>
			</div>
	
		</div>
		<a href="buy.php?id=<?php echo $product_id ?>" class="defaultbtn">Mua</a>
	</div>
</body>
</html>