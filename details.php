 <?php
         require_once('connection.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>New Empoley add </title>
 </head>
 <body>
  <?php 
$page = $_GET['page'];
  $query = $connection->query("SELECT * FROM empolye WHERE pageid='$page' "); ?>
   <?php while ($row = $query->fetch_object() ) :?>
       <form action="" method="POST"> 
       	   <table>
       	   	  <tr>
       	   	  	 <td><label>Full Name</label></td>
       	   	  	 <td><input type="text" name="fullname" value="<?php echo $row->fullname ?>" placeholder="Full Name" required></td>
       	   	  </tr>

       	   	  <tr>
       	   	  	 <td><label>Position</label></td>
       	   	  	 <td><input type="text" name="position" value="<?php echo $row->position ?>" placeholder="position" required></td>
       	   	  </tr>

       	   	  <tr>
       	   	  	 <td><label>Gender</label></td>
       	   	  	 <td><input type="text" name="gender" value="<?php echo $row->gender ?>" placeholder="Gender" required></td>
       	   	  </tr>

       	   	  
       	   </table>

       </form>
     <?php endwhile  ?>
 </body>
 </html>