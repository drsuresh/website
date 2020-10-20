<html>
<body>
<?php
	include_once('db.php');

	$keys = $_POST["keys"];
	
	if(!$mysqli){
		die("Error in database connection: ". $mysqli->connect_error);
	}

	$query = "DELETE FROM People WHERE id = $keys";

	$result = mysqli_query($mysqli,$query);

	if($result){
		echo "Data deletion successful!";
	}else{
		echo "Data not deleted.";
	}
	mysqli_close($mysqli);
?>
<br><br>
<button onclick="window.history.back()">Go Back</button>;
</body>
</html>