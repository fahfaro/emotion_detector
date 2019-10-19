<?php

include_once("db_connection.php");
function dbSelectAllPlaylists()
{
	$conn = DBConnection();
	$query = "SELECT * FROM playlist";
	$result = mysqli_query($conn, $query);
	return $result;
}

function dbSelectPlaylistByID($playlist_id)
{
	$conn = DBConnection();
	$query = "SELECT * FROM playlist WHERE playlist_id = $playlist_id";
	$result = mysqli_query($conn, $query);
}
//CREATE & UPDATE Playlist
function dbInsertUpdatePlaylist($playlist_id,$playlist_name, $mood_id, $item_id, $added_by_id, $added_date_time, $is_enabled, $remarks)
{
	$conn = DBConnection();
	if($playlist_id == 0)
	{
		$query = "INSERT INTO playlist VALUE(NULL,'$playlist_name', '$mood_id', '$item_id', '$added_by_id', '$added_date_time', '$is_enabled', '$remarks')";
		mysqli_query($conn, $query);
	}
	else
	{
		$query = "UPDATE admin_user SET playlist_id = $playlist_id, playlist_name = $playlist_name, mood_id = $mood_id, item_id = $item_id,added_by_id = $added_by_id, added_date_time = $added_date_time, is_enabled = $is_enabled, remarks = $remarks WHERE playlist_id = $playlist_id";
		mysqli_query($conn, $query);
	}
}

?>