<?php
include_once('db.php');
if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	$query = "DELETE FROM People WHERE id ='$delete_id'";

	$result = mysqli_query($mysqli,$query);

	if($result){
		echo "<p style='weight:140%;color:lightred;'>Data deletion successful!</p>";
	}
	mysqli_close($mysqli);
?>