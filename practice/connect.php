<html>
<body>
<?php 
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$state = $_POST["state"];

	include_once("db.php");

	if($mysqli->connect_error){
		die('Connect Failed : '.$mysqli->connect_error);
	} else {
		$stmt = $mysqli->prepare("insert into People(first_name,last_name,state) values(?,?,?)");
		$stmt->bind_param("sss",$fname,$lname,$state);
		$execval = $stmt->execute();
		echo "Registration successful!";
		$stmt->close();
		$mysqli->close();
	}
?>
<br><br>
<button onclick="window.history.back()">Go Back</button>
</body>
</html>
