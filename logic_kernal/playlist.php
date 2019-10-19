<?php

	include_once("./db_kernal/playlist.php");
	
	function SelectAllPlaylist()
	{
		return dbSelectAllPlaylists();
	}
	
	function SelectPlaylistById($playlist_id)
	{
		return dbSelectPlaylistByID($playlist_id);
	}
	function CheckExists($playlist_name)
	{
		$result = dbSelectAllPlaylists();
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["playlist_name"] == $playlist_name)
				return true;
		}
		return false;
	}
	
	function InsertUpdatePlaylist($playlist_id,$playlist_name, $mood_id, $item_id, $added_by_id, $added_date_time, $is_enabled, $remarks)
	{
		dbInsertUpdatePlaylist($playlist_id,$playlist_name, $mood_id, $item_id, $added_by_id, $added_date_time, $is_enabled, $remarks);
	}
?>