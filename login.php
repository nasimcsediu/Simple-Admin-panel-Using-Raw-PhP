
<?php

    require_once('connection.php');
    require_once('functions.php');
        session_start();
   if (isset($_POST['login'])) {
       $username =  $_POST['username'];
       $Password = $_POST ['pass'];
     

     $error = array();
  if (user_exitis($connection,$username)) {
  	   $query = mysqli_query("SELECT * FROM users WHERE username = '$username' ");

  	   $passquery = mysqli_fetch_assoc($query);

  	   if ($password == $passqrray['password']) {
  	   	 $_SESSION ['username'] = $username;
  	   	 $_SESSION ['password'] = $Password;

  	   	 header('location: profile.php');
  	   }
       
       else{
          	$error['username'] = "username wrong";
          }   
          
  }
      else{
          	$error['password'] = "password wrong";
          } 
   }

   if (user_logedin()) {
   header('location: profile.php');
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Dashboard </title>
</head>
<body>
    <form action="" method="POST">
    <label>Username:</label>	
    <input type="text" name="username" placeholder="Username" required >
    <p style="color: red"><?php
          if (isset($error['username'])) {
          	echo $error['username'];
          }
    ?></p>
    <label>Password:</label>
    <input type="Password" name="pass" placeholder="Password" required >
    <p style="color: red">
    	<?php
          if (isset($error['password'])) {
          	echo $error['password'];
          }
    ?>
    	
    </p>
    <input type="submit" name="login" value="Login Account">
    </form>

<br><br>
    <a href="registration.php">Create Account</a><br>
    <a href="profile.php">Dashboard</a>
</body>
</html>