<?php

// default action will be used in init.php...
$default_action = 'list';

require_once('includes/init.php');
require_once('includes/jokes_db.php');

switch ($action) {
  
  case 'list':
    $jokes = listJokes();
    $title = 'Joke list';
    $output = 'jokes/list.php';    
    break;
  
  case 'edit':
    $title = 'Edit this joke';
    $output = 'jokes/form.php';
    break;
  
  case 'delete':
    $title = 'Delete this joke';
    $output = 'jokes/confirm_delete.php';
    break;
}

include('page.php' );

