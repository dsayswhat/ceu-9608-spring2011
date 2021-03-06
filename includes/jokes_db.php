<?php

function listJokes($page=1) {
	global $db;

	$limit = $_SESSION['records_per_page'];
	$offset = $limit * ($page-1);

// $qry = "select j.id, j.joketext, a.name, a.email from joke j, author a where j.authorid = a.id limit $limit";
// select * from table inner join other table on id = foreign_key_id
  $qry = "select j.id, j.joketext, a.name, a.email from joke j inner join author a on j.authorid = a.id limit $offset,$limit";
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

function countJokes() {
	// use count sql function to get total number of jokes in db.
	return 5;
}

function getJoke($id=0) {
	global $db;
	
	if ($id) {
		
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
	}else{
		return array(
			'id' => 0,
			'joketext' => '',
			'authorid' => 0,
		);
		
	}
}



function saveJoke($data) {
  global $db;
  
  $data = scrubData($data);
  
  if ($data['jokeid']) {
    $qry = "update joke set joketext = '{$data['joketext']}', authorid = {$data['authorid']}, jokedate = curdate() where id = {$data['jokeid']}";
  }else{
    $qry = "insert into joke values (NULL, '{$data['joketext']}', curdate(), {$data['authorid']})";
  }
 
  if (!mysqli_query($db, $qry))
	{
	$error = "Error saving joke {$data['jokeid']}: " . mysqli_error($db);
		include 'error.php';
		exit();
	}else{
    return TRUE;
  }
}

function deleteJoke($data) {
  $data = scrubData($data);
  $qry = "delete from joke where id = {$data['id']}";
  
  if (!mysqli_query($db, $qry))
	{
    $error = "Error saving joke {$data['jokeid']}: " . mysqli_error($db);
		include 'error.php';
		exit();
	}else{
    return TRUE;
  }
}
