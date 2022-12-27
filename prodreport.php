<?php
	include "database.php";
	include 'navbar.php';
	$ketqua = "";
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		die();
	} else{
		if ($row['role'] == "Admin" || $row['role'] == "Moderator") {
	} else{
		header("Location: login.php");
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
	<title>Lịch sử đơn hàng</title>
</head>
<body>
	<div class="container" style="max-width: 720px; margin-bottom: 30px;">
		<h1>Lịch sử đơn hàng</h1>
					<?php 
				include "database.php";
				function show_reports(){
					include("database.php");
					  $sql2 = "SELECT * FROM prodreport";
				      $result2 = mysqli_query($conn,$sql2);
				      if ($result2->num_rows > 0) {
				      	while ($row2 = mysqli_fetch_array($result2)) {
				      		//foreach ($row2 as $value) { // I you want you can right this line like this: foreach($row as $value) {
						        echo "		<div style=\"width: 100%; display: inline-block; background: whitesmoke; min-width: 100%; min-height: 100px; border-radius: 30px; margin: 10px;\">
			<div style=\"margin: 50px;\">
				<h3 style=\"color:red;\">".$row2['user']."<span style=\"color:grey;\"> đã mua 1 </span>".$row2['productname']."<span style=\"color:grey;\"> vào </span>".$row2['date']."</h3>
			</div>
		</div>"; 
						    //}
				      	}
				    }
				}
				show_reports()
			?>
	</div>
</body>
</html>