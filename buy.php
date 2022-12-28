	<?php
		include "database.php";
		if (!isset($_GET['id'])) {
			header("Location: index.php");
			die();
		} else{
			$sql = "SELECT * FROM products WHERE `product_id`='".$_GET['id']."'";
			$result = mysqli_query($conn,$sql);
			$row = $result->fetch_assoc();
			if ($row >= 1) {
				$product_stock = $row['product_stock'];
				if ($product_stock == "0") {
				echo "<script>alert(\"Hết hàng!\")</script>";
				echo "<script>window.close();</script>";
			} else{
				$new_stock = $product_stock-1;
				$sql = "UPDATE `products` SET `product_stock`='".$new_stock."' WHERE `product_id`='".$_GET['id']."'";
				$result = mysqli_query($conn,$sql);
	
				$user = $_SESSION['username'];
				$product_name = $row['product_name'];
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$date = date('d-m-Y');
	
				$sql = "INSERT INTO `prodreport`(`user`, `productname`, `date`) VALUES ('".$user."','".$product_name."','".$date."')";
				$result = mysqli_query($conn,$sql);
				echo "<script>alert(\"Mua hàng thành công!\")</script>";
				echo "<script>window.close();</script>";
			}
		} else{
			echo "<script>alert(\"Mặt hàng không tồn tại\")</script>";
			echo "<script>window.close();</script>";
		}
	}
	 ?>