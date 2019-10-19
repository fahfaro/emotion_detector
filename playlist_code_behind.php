<?php

	include_once("logic_kernal/playlist.php");
	$playlist_id = 0;
	$playlist_name = $_POST["txtPlaylistName"];
	$mood_id = $_POST["txtMoodId"];
	$item_id = $_POST["txtItemId"];
	$added_by_id = 1;
	$added_date_time = date("d/m/y");
	$is_enabled = TRUE;
	$remarks = $_POST["txtRemarks"];
	$exists = CheckExists($playlist_name);
	if(!$exists)
		InsertUpdatePlaylist($playlist_id, $playlist_name, $mood_id, $item_id, $added_by_id, $added_date_time, $is_enabled, $remarks);
	else
		echo 'Already Exists Playlist.';
?>