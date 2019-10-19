<?php
include_once("db_connection.php");
function dbSelectUserByID($user_id)
{
	$conn = DBConnection();
	if($user_id != 0)
	{
		$query = "SELECT * FROM admin_user WHERE user_id = $user_id";
		$result = mysqli_query($conn, $query);
		return $result;
	}
}
function dbSelectAllUser()
{
	$conn = DBConnection();
	$query = "SELECT * FROM admin_user";
	$result = mysqli_query($conn, $query);
	return $result;
	
}
function dbInsertUpdateAdminUser($user_id, $username, $user_email, $user_password, $user_phone, $user_type, $is_enabled, $added_by_id, $added_date_time, $remarks)
{
	//to do: update query
	$conn = DBConnection();
	if($user_id == 0)
	{
		$query = "INSERT INTO admin_user VALUES(NULL, '$username', '$user_email', '$user_password', '$user_phone', $user_type, $is_enabled, $added_by_id, '$added_date_time', '$remarks')";
		mysqli_query($conn, $query);
	}
	else
	{
			$query = "UPDATE admin_user SET user_id = $user_id, username = $username, user_email = $user_email, user_password = $user_password, user_phone = $user_phone, user_type = $user_type, is_enabled = $is_enabled, added_by_id = $added_by_id, added_date_time = $added_date_time, remarks = $remarks VALUES(NULL, '$username', '$user_email', '$user_password', '$user_phone', '$user_type', '$is_enabled', '$added_by_id', '$added_date_time', '$remarks' WHERE user_id = $user_id";
			mysqli_query($conn, $query);
	}
}
?>