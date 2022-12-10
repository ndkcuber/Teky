<?php
	session_start();
	if ($_GET['confirm'] == "yes") {
		session_destroy();
		header("Location: index.php");
		die();
		}
 ?>