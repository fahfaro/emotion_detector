<?php

	include_once("logic_kernal/mood.php");
	$mood_id = 0;
	$mood_name = $_POST["txtMoodName"];
	$added_by_id = 1;
	$added_date_time = date("d/m/y");
	$is_enabled = TRUE;
	$remarks = $_POST["txtRemarks"];
	$exists = CheckExists($mood_name);
	if(!$exists)
		InsertUpdateMood($mood_id, $mood_name, $added_by_id, $added_date_time, $is_enabled, $remarks);
	else
		echo 'Already Exists Mood.';
?>