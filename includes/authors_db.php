<?php

function listAuthors() {
	global $db;
	
  $qry = 'select * from author';
  $result = mysqli_query($db, $qry);
	
	if (!$result)
	{
		$error = 'Error fetching authors: ' . mysql_error();
		include 'error.php';
		exit();
	}

	while ($row = mysqli_fetch_assoc($result))
	{
		$authors[] = $row;
	}

	return $authors;
}