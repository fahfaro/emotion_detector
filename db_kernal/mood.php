<?php

include_once("db_connection.php");
function dbSelectAllMood()
{
	$conn = DBConnection();
	$query = "SELECT * FROM mood";
	$result = mysqli_query($conn, $query);
	return $result;
}

function dbSelectMoodByID($mood_id)
{
	
}
//CREATE & UPDATE Mood
function dbInsertUpdateMood($mood_id,$mood_name, $added_by_id, $added_date_time, $is_enabled, $remarks)
{
	$conn = DBConnection();
	if($mood_id == 0)
	{
		$query = "INSERT INTO mood VALUE(NULL,'$mood_name', $added_by_id, $added_date_time, $is_enabled, '$remarks')";
		echo $query;
		return;
		mysqli_query($conn, $query);
	}
	else
	{
		$query = " WHERE mood_id = $mood_id";
		mysqli_query($conn, $query);
	}
}

?>