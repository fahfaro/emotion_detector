<?php
include_once("logic_kernal/admin_user.php");
$user_id = 0;
$username = $_POST["txtUsername"];
$user_email = $_POST["txtEmail"];
$user_password = $_POST["txtPassword"];
$user_phone = $_POST["txtPhone"];
$user_type = 1;
$is_enabled = TRUE;
$added_by_id = 1;
$added_date_time = date("m/d/y");
$remarks = $_POST["txtRemarks"];
$exists = CheckExists($user_email);
if (!$exists)
	InsertUpdateAdminUser($user_id, $username, $user_email, $user_password, $user_phone, $user_type, $is_enabled, $added_by_id, $added_date_time, $remarks);
else
	echo "already exists";
?>