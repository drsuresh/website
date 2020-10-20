<?php 
include_once('db.php');
echo "<table>";
if($result=$mysqli->query("select id, first_name, last_name, state from People")){
	while($obj=$result->fetch_object()){
		echo "<tr>";
		echo "<td data-target='id'>".htmlspecialchars($obj->id)."</td>";
		echo "<td data-target='first_name'>".htmlspecialchars($obj->first_name)."</td>";
		echo "<td data-target='last_name'>".htmlspecialchars($obj->last_name)."</td>";
		echo "<td data-target='state'>".htmlspecialchars($obj->state)."</td>";
		echo '<td><a href="/practice/phpPractice.php?delete='.$obj->id.'#database" data-role="update" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
	}
	$result->close();

}
echo "</table>";
if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	$query = "DELETE FROM People WHERE id ='$delete_id'";

	$result = mysqli_query($mysqli,$query);

	if($result){
		echo "<p style='weight:140%;color:lightred;'>Data deletion successful! Currently need to refresh the page. AJAX is being developed!</p>";
	}
	mysqli_close($mysqli);
}
mysqli_close($mysqli);
?>