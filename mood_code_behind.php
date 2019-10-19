<?php

	include_once("logic_kernal/mood.php");
	$mood_id = 0;
	$mood_name = $_POST["txtMoodName"];
	$added_by_id = 1;
	$added_date_time = date("m/d/y");
	$is_enabled = TRUE;
	$remarks = $_POST["txtRemarks"];
	$exists = CheckExists($mood_name);
	if(!exists)
		InsertUpdateItem($mood_id, $mood_name, $added_by_id, $is_enabled, $added_date_time, $remarks);
	else
		echo 'Already Exists Mood.';
?>