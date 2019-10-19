<?php

	include_once("./db_kernal/item.php");
	function SelectAllItem()
	{
		return dbSelectAllItem();
	}
	function CheckExists($item_id)
	{
		$result = dbSelectAllItem();
		while($row = mysql_fetch_assoc($result))
		{
			if($row["item_id"] == $item_id)
				return true;
		}
		return false;
	}
	
	function InsertUpdateItem( $item_id, $item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks)
	{
		dbInsertUpdateItem( $item_id, $item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks);
	}
?>