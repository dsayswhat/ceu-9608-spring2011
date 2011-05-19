<?php
session_start();
// set up default action...
if (! array_key_exists('action', $_GET)) {
  $action = $default_action;
}else{
  $action = $_GET['action'];
}

// container for messages that we'll show to the user.
$messages = array();


$db = mysqli_connect('localhost', 'test', 'Delicios0');
if (!$db)
{
	$error = 'Unable to connect to the database server.';
	include 'error.php';
	exit();
}

if (!mysqli_set_charset($db, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'output.php';
	exit();
}

if (!mysqli_select_db($db, 'dpetersen_test'))
{
	$error = 'Unable to locate the joke database.';
	include 'error.php';
	exit();
}

