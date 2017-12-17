<?php

  include('./config/config.php');
  session_start();
  $user_check = $_SESSION['login_user'];
  $sql = "select u_firstname from users where u_email = '$user_check'";
   
   $ses_sql = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($ses_sql);
   $login_session = $row['u_firstname'];
   if(!isset($login_session)){
   	mysqli_close($conn);
      header("location: ../index.php");
   }
?>