<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Trang chủ</title>
	<div id="particles-js"></div>
	<script type="text/javascript" src="particles.js"></script>
	<script type="text/javascript" src="app.js"></script>
</head>
<body>
	<?php
 		include "navbar.php";
	 ?>
	<div class="container">
		<h1>SẢN PHẨM CỦA CHÚNG TÔI</h1>
		<div style="max-width: 100%; display: block; margin: 50px;">
			<?php 
				include "database.php";
				function show_products(){
					include("database.php");
					  $sql2 = "SELECT * FROM products";
				      $result2 = mysqli_query($conn,$sql2);
				      if ($result2->num_rows > 0) {
				      	while ($row2 = mysqli_fetch_array($result2)) {
				      		//foreach ($row2 as $value) { // I you want you can right this line like this: foreach($row as $value) {
						        echo "<div class=\"box\"><div class=\"title\"><h2>".$row2['product_name']."</h2></div><div class=\"image\"><img src=\"cdn/product.png\"></div><div style=\"color: grey\" class=\"description\"><h2>".$row2['product_price']." $</h2><p>".$row2['product_des_short']."</p><p>Stock: ".$row2['product_stock']."</p></div><a href=\"view.php?id=".$row2['product_id']."\" target=\"_blank\" class=\"view-more-btn\">Xem thêm</a></div>"; 
						    //}
				      	}
				    }
				}
				show_products()
			?>
		</div>
	</div>
</body>
</html>