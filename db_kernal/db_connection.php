<?php
function DBConnection()
{
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$db_name = "emotion_detector";
	$conn = mysqli_connect($server_name, $username, $password, $db_name);
	return $conn;
}
?>