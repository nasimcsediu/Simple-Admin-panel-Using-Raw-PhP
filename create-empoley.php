 <?php
      require_once('connection.php');

      if (isset($_POST['add'])) {
      	$fullname = $_POST['fullname'];
      	$position = $_POST['position'];
      	$gender   = $_POST['gender'];

        $pageid     = rand(1,1000) . rand(1,100000);

        $insert = $connection->query("INSERT INTO empolye (fullname,position,gender,pageid,url) values ('$fullname','$position','$gender','$pageid','?page=$pageid')");

          echo "<h2>" . "Add Sussesfull" ."</h2>";

      }

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>New Empoley add </title>
 </head>
 <body>
       <form action="" method="POST"> 
       	   <table>
       	   	  <tr>
       	   	  	 <td><label>Full Name</label></td>
       	   	  	 <td><input type="text" name="fullname" placeholder="Full Name" required></td>
       	   	  </tr>

       	   	  <tr>
       	   	  	 <td><label>Position</label></td>
       	   	  	 <td><input type="text" name="position" placeholder="position" required></td>
       	   	  </tr>

       	   	  <tr>
       	   	  	 <td><label>Gender</label></td>
       	   	  	 <td><input type="text" name="gender" placeholder="Gender" required></td>
       	   	  </tr>

       	   	  <tr>
       	   	  	<td><input type="submit" name="add" value="Add Empolyee"></td>
       	   	  </tr>
       	   </table>

       </form>
<br><br>
       <a href="profile.php">Dashboard</a><br><hr>
       <a href="all-employee.php">All employee</a>
 </body>
 </html>