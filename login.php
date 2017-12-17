
<?php

  session_start();
  $error = "";
  include "config.php";
  include "header.php";

  if(isset($_POST['submit'])){
    if(empty($_POST['email']) || empty($_POST['pass'])) {
      $error = "Email or password is invalid";
    } else {
      $email = $_POST['email'];
      $password = $_POST['pass'];

    $sql = "SELECT u_id FROM users WHERE u_email = '$email' and u_pass='$password' ";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result); 

    if($row > 0){

      $_SESSION['login_user'] = $email;

      header("location: homepage.php");

    } else {
      $error = "Email or Password is invalid";
    }

  mysqli_close($conn);
}
}

?>

<form action="" method="POST">
  <div class="container">
  	<h2 class="login-title">Login Form</h2>
    <input type="text" placeholder="Enter email" name="email">
    <input type="password" placeholder="Enter Password" name="pass">
    <button name = 'submit' type="submit">Login</button>
    <spam><?php  echo $error; ?> </spam>
  </div>
</form>