<?php 
	include "database.php";
	include 'navbar.php';
	$ketqua = "";
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		die();
	} else{
		if ($row['role'] == "Admin" || $row['role'] == "Moderator") {
			if (isset($_POST['product_name'])) {
				if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$_POST['product_name'])) {
					$ketqua = "Tên sản phẩm hoặc mô tả chứa kí tự đặc biệt :)";
				} else{
					$sql = "SELECT * FROM products";
					if ($result=mysqli_query($conn,$sql)) {
						$rowcount=mysqli_num_rows($result);
						$product_id = $rowcount+1;
					}
					$product_name = $_POST['product_name'];
					$product_des_short = $_POST['product_des_short'];
					$product_des_long = $_POST['product_des_long'];
					$product_price = $_POST['product_price'];
					$product_stock = $_POST['product_stock'];
					$product_author = $_SESSION['username'];

					$sql = "INSERT INTO `products`(`product_name`, `product_price`, `product_stock`, `product_des_short`, `product_des_long`, `product_author`, `product_id`) VALUES ('$product_name','$product_price','$product_stock','[$product_des_short','$product_des_long','$product_author','$product_id')";
					$result = mysqli_query($conn, $sql);
                    if ($sql) {
                    	$ketqua = "Thêm sản phẩm thành công!";
                    } else{
                    	$ketqua = "Thêm sản phẩm thất bại! Vui lòng thử lại sau!";
                    }
				}
			}
		} else{
			header("Location: index.php");
			die();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Thêm sản phẩm</title>
</head>
<body>
	<div class="container" style="max-width: 720px;">
		<h1 style="color: salmon;"><?php echo $ketqua; ?></h1>
		<div class="roundcard">
			<h1>Thêm sản phẩm</h1>
			<form action="addproduct.php" method="post" style="margin: 20px; text-align: left;">
				<label for="product_name"></label>
				<h2>Tên sản phẩm:</h2>
				<input type="text" name="product_name" class="user-input" placeholder="Tên sản phẩm" maxlength="20" required>

				<label for="product_price"></label>
				<h2>Giá:</h2>
				<input type="number" name="product_price" class="user-input" placeholder="Giá" required>

				<label for="product_stock"></label>
				<h2>Số lượng:</h2>
				<input type="number" name="product_stock" class="user-input" placeholder="Số lượng" required>

				<label for="product_des_short"></label>
				<h2>Mô tả ngắn:</h2>
				<input type="text" name="product_des_short" class="user-input" placeholder="Mô tả" maxlength="40" required>

				<label for="product_des_long"></label>
				<h2>Mô tả dài:</h2>
				<input type="text" name="product_des_long" class="user-input" placeholder="Mô tả" required>

				<br>
				<input type="submit" name="submit" value="Đăng mặt hàng" class="success-btn">
			</form>
		</div>
	</div>
</body>
</html>