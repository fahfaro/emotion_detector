<?php

include_once("db_connection.php");
function dbSelectAllItem()
{
	$conn = DBConnection();
	$query = "SELECT * FROM music";
	$result = mysqli_query($conn, $query);
	return $result;
}

function dbSelectItemByID($item_id)
{
	
}
//CREATE & UPDATE ITEM
function dbInsertUpdateItem($item_id,$item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks)
{
	$conn = DBConnection();
	if($item_id == 0)
	{
		$query = "INSERT INTO playlist VALUE(NULL,'$item_title', '$path_link', '$added_by_id', '$is_enabled', '$added_date_time', '$remarks')";
		mysqli_query($conn, $query);
	}
	else
	{
		$query = " WHERE item_id = $item_id";
		mysqli_query($conn, $query);
	}
}

?>