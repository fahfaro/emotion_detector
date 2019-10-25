<?php

	include_once("./db_kernal/item.php");
	function SelectAllItem()
	{
		return dbSelectAllItem();
	}
	
	function SelectItemById()
	{
		return dbSelectItemByID($item_id);
	}
	function CheckExists($item_title)
	{
		$result = dbSelectAllItem();
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["item_title"] == $item_title)
				return true;
		}
		return false;
	}
	
	function InsertUpdateItem( $item_id, $item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks)
	{
		dbInsertUpdateItem( $item_id, $item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks);
	}
?>