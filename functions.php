
<?php

 function user_exitis($connection, $username){

 	$query = mysqli_query ($connection,"SELECT * FROM users WHERE username='$username'");
 	if (mysqli_num_rows($query) == 1) {
 		return true;
 	}
 	else{
 		return false;
 	}

 }

 function user_logedin(){
  if (isset($_SESSION['password'])) {
  	return true;
  }

    else {
    	return false;
    }
 }

?>
