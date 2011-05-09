<?php

// default action will be used in init.php...
$default_action = 'list';

require_once('includes/init.php');
require_once('includes/jokes_db.php');
require_once('includes/authors_db.php');
require_once('includes/helpers.php');

switch ($action) {
  
  case 'list':
    $jokes = listJokes();
    $title = 'Joke list';
    $output = 'jokes/list.php';    
    break;
  
  case 'edit':
    $title = 'Edit this joke';
    $joke = getJoke($_GET['jokeid']);
    $authors = listAuthors();
    $output = 'jokes/form.php';
    break;
  
  case 'new':
    $title = "New joke";
    $authors = listAuthors();
    
    $output = "jokes/form.php";
        
    break;
    
  case 'update':
    if ($result = updateJoke($_POST)) {
      header("Location: jokes_controller.php?action=list");
    }
    break;
  
  case 'delete':
    $title = 'Delete this joke';
    $output = 'jokes/confirm_delete.php';
    break;
}

include('page.php' );

