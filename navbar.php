

<div class="navbar">
	<ul>
		<li><a href="index.php" class="item">HOME</a></li>
		<li><a href="products.php" class="item">PRODUCTS</a></li>
		<li><a href="posts.php" class="item">POSTS</a></li>
		<li><a href="about.php" class="item">ABOUT</a></li>
		<?php 
		session_start();
		include "database.php";
			if (!isset($_SESSION['username'])) {
				echo "		<div style=\"float: right;\">
								<li><a href=\"login.php\" class=\"item\" style=\"margin-right: 10px;\">Login</a></li>
								<li><a href=\"register.php\" class=\"item\" style=\"margin-right: 10px;\">Register</a></li>
							</div>";
			} else{
				echo "		<div style=\"float: right;\">
								<li><a href=\"profile.php\" class=\"item\" style=\"margin-right: 10px;\">".$_SESSION['username']."</a></li>";
				if ($row['role'] == "Admin") {
						echo "		<div style=\"float: right;\">
					<li><a href=\"admin.php\" class=\"item\" style=\"margin-right: 10px;\">Quản lí</a></li>";
				}
			}
		?>
	</ul>
</div>
