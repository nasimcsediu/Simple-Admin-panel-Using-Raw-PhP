<?php
      require_once('connection.php');

      if (isset($_POST['reg'])) {
      	 $fullname = $_POST['fullname'];
      	 $username = $_POST['username'];
      	 $password = $_POST['password'];

  $connection = mysqli_query($connection,"INSERT into users(username,password) VALUES('$username', '$password')");
      }
?>


<!DOCTYPE html>
<html>
<head>
	<title>User Registration </title>
</head>
<body>
      <form action="" method="POST">
      	     <table>
      	     	   <tr>
      	     	   	<td><label>Full Name: </label></td>
      	     	   	<td><input type="text" name="fullname" placeholder="Full Name"></td>
      	     	   </tr>
      	     	   <tr>
      	     	   	<td><label>username: </label></td>
      	     	   	<td><input type="text" name="username" placeholder="username"></td>
      	     	   </tr>
      	     	   <tr>
      	     	   	<td><label>Password: </label></td>
      	     	   	<td><input type="password" name="password" placeholder="password"></td>
      	     	   </tr>
      	     	   <tr>
      	     	   	<td><input type="submit" name="reg" value="Registration"></td>
      	     	   </tr>
      	     </table>
      	     </table>
      	     </table>
      </form>
<br><br>
      Allready Create an Account <a href="login.php">Login</a>
</body>
</html>