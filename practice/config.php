<?php
$servername = "lenachiutw.com";
$username = "lenachiu";
$password = "Archwing123!";
$dbname = "lenachiu_places";
$conn = new mysqli($servername,$username,$password,$dbname);
	
if(!$conn){die("Error in database connection: ". $conn->connect_error);}



?>