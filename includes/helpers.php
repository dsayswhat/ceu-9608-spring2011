<?php

function scrubData($data = array()) {
  global $db;
  foreach($data as $key => $val) {
    if (is_array($val)) {
      $cleandata[$key] = scrubData($val);
    }else{
      $cleandata[$key] = mysqli_real_escape_string($db, $val);
    }
  }
  return $cleandata;
}

function emptyJoke() {
	return array(
		'id' => 0,
		'joketext' => '',
		'authorid' => 0,
	);
}