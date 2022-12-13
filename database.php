<?php
   $host = 'localhost';
   $db = 'teky';
   $username = 'root';
   $password = '';
   date_default_timezone_set('Asia/Bangkok');
   $conn = new mysqli($host, $username, $password, $db);
   if ($conn) {
      $db_result = "Connected to database";
   } else{
      $db_result = "Cannot connect to database";
      header("Location: con_db.php");
      die();
   }
   
   if (isset($_SESSION['username'])) {
      $sql = "SELECT * FROM logindb WHERE username='".$_SESSION['username']."'";
      $result = mysqli_query($conn,$sql);
      $row = $result->fetch_assoc();
      if ($row['banned'] == 1) {
         header("Location: logout.php?confirm=yes");
         die();
      }
   }

   $current_date_and_time = date("d/m/Y");
?>