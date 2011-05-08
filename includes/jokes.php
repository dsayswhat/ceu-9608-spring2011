<?php

function listJokes() {
	global $db;
	
  $qry = 'select j.id, j.joketext, a.name, a.email from joke j inner join author a on j.authorid = a.id';
  $result = mysqli_query($db, $qry);
	
	if (!$result)
	{
		$error = 'Error fetching jokes: ' . mysql_error();
		include 'error.php';
		exit();
	}

	while ($row = mysqli_fetch_assoc($result))
	{
		$jokes[] = $row;
	}

	return $jokes;
}