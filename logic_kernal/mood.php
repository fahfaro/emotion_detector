<?php

	include_once("./db_kernal/mood.php");
	function SelectAllMood()
	{
		return dbSelectAllMood();
	}
	function SelectMoodById($mood_id)
	{
		return dbSelectMoodByID();
	}
	function CheckExists($mood_name)
	{
		$result = dbSelectAllMood();
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["moodname_associated_emotion"] == $mood_name)
				return true;
		}
		return false;
	}
	
	function InsertUpdateMood($mood_id,$mood_name, $added_by_id, $added_date_time, $is_enabled, $remarks)
	{
		dbInsertUpdateMood($mood_id,$mood_name, $added_by_id, $added_date_time, $is_enabled, $remarks);
	}
?>