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
		$conn = DBConnection();
		$query = "SELECT * FROM music WHERE item_id = $item_id";
		$result = mysqli_query($conn, $query);
		return $result;
	}
	//CREATE & UPDATE ITEM
	function dbInsertUpdateItem($item_id,$item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks)
	{

		$conn = DBConnection();
		if($item_id == 0)
		{
			$query = "INSERT INTO music VALUE(NULL,'$item_title', '$path_link', $added_by_id, $is_enabled, '$added_date_time', '$remarks')";
			mysqli_query($conn, $query);
		}
		else
		{
			$query = " UPDATE music SET item_id = $item_id, item_title = $item_title, path_link = $path_link, added_by_id = $added_by_id, is_enabled = $is_enabled, added_date_time = $added_date_time, remarks = $remarks WHERE item_id = $item_id";
			mysqli_query($conn, $query);
		}
	}

?>