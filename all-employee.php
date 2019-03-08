<?php


require_once('connection.php');


$query = $connection->query("SELECT * FROM empolye");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
         <?php while($row = $query->fetch_object()) : ?>

		Name: <?php echo $row->fullname; ?> <br>
		Position: <?php echo $row->position; ?> <br>
		<a href="update.php<?php echo $row->url; ?>">update</a>
		<a href="details.php<?php echo $row->url; ?>">details</a>
		<a href="d.php<?php echo $row->url; ?>">details</a>
		<br>
		<hr>



	<?php endwhile; ?>


	<a href="profile.php">Dashboard</a><br><hr>
	<a href="create-empoley.php">Add Employee</a>

</body>
</html>