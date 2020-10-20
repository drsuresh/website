<html>
<body>
<?php 
	include_once("db.php");

	if($mysqli->connect_error){
		die('Connect Failed : '.$mysqli->connect_error);
	} else {
		$sql = ("DROP TABLE People"); 
		$mysqli->query($sql);
		$sql = ("CREATE TABLE People (
			id INT AUTO_INCREMENT PRIMARY KEY, 
			first_name VARCHAR(20), 
			last_name VARCHAR(20), 
			state VARCHAR(20))"); 
		$mysqli->query($sql);
		$sql = ("INSERT INTO People(first_name,last_name,state) 
			VALUES('Will','Smith','California'),
			('Tom','Hopper','England'),
			('Ellen','Page','Scotland'),
			('Jake','Gyllenhaal','California'),
			('Morgan','Freeman','Tennessee'),
			('Adrian','Brody','New York')");
		if ($mysqli->query($sql) === TRUE) {
		  echo "Resetting the database successful!";
		} else {
		  echo "Error creating table: " . $mysqli->error;
		}

		$mysqli->close();
	}
?>
<br><br>
<button onclick="window.history.back()">Go Back</button>
</body>
</html>
