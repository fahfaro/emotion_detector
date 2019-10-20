<?php

	include_once("logic_kernal/item.php");
	$item_id = 0;
	$item_title = $_POST["txtItemTitle"];
	$path_link = $_POST["txtPathLink"];
	$added_by_id = 1;
	$added_date_time = date("d/m/y");
	$is_enabled = TRUE;
	$remarks = $_POST["txtRemarks"];
	$exists = CheckExists($item_title);
	if(!$exists)
		InsertUpdateItem($item_id, $item_title, $path_link, $added_by_id, $is_enabled, $added_date_time, $remarks);
	else
		echo 'Already Exists Item.';
?>