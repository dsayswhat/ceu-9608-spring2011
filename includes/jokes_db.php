<?php

function listJokes() {
	global $db;
	
  $qry = 'select j.id, j.joketext, a.name, a.email from joke j inner join author a on j.authorid = a.id';
  $result = mysqli_query($db, $qry);
	
	if (!$result)
	{
		$error = 'Error fetching jokes: ' . mysqli_error($db);
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
		$error = "Error fetching joke $id: " . mysqli_error($db);
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



function updateJoke($data) {
  global $db;
  
  $data = scrubData($data);
 
  $qry = "update joke set joketext = '{$data['joketext']}', authorid = {$data['authorid']}, jokedate = curdate() where id = {$data['jokeid']}";
  print_r($qry);
  
  if (!mysqli_query($db, $qry))
	{
	$error = "Error saving joke {$data['jokeid']}: " . mysqli_error($db);
		include 'error.php';
		exit();
	}else{
    return TRUE;
  }
}