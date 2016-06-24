<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	$conn = new mysqli($dbservername, $dbusername, $dbpassword, 'methotel');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>