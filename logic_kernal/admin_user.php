<?php
include_once("./db_kernal/admin_user.php");
function SelectAllUsers()
{
	return dbSelectAllUser();
}
function SelectUserByID($user_id)
{
	return dbSelectUserByID($user_id);
}

function InsertUpdateAdminUser($user_id, $username, $user_email, $user_password, $user_phone, $user_type, $is_enabled, $added_by_id, $added_date_time, $remarks)
{
	dbInsertUpdateAdminUser($user_id, $username, $user_email, $user_password, $user_phone, $user_type, $is_enabled, $added_by_id, $added_date_time, $remarks);
}

function CheckExists($user_email)
{
	$result = dbSelectAllUser();
	while($row = mysqli_fetch_assoc($result))
	{
		if ($row['user_email'] == $user_email)
			return true;
	}
	return false;
}

?>