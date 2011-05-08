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

function getJoke($id) {
	global $db;
	
	$qry = "select * from joke where id = " . mysqli_real_escape_string($db, $id);
	$result = mysqli_query($db, $qry);
	
	if (!$result)
	{
		$error = "Error fetching joke $id: " . mysql_error();
		include 'error.php';
		exit();
	}
	
	$joke = mysqli_fetch_assoc($result);
	if ($joke) {
		return $joke;
	}else{
		$error = "Error: no such joke: $id";
		include 'error.php';
		exit();
	}
}