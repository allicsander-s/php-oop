<?php

  function connect()
  {
  	$conn = new mysqli('localhost', 'db_user', 'some password goes here:)', 'db') or die('there was a connecting problem');
  	return $conn;
  }

  function get($tableName, $conn)
  {
    $st = $conn->prepare("SELECT id, title , body FROM $tableName") or die('problem with query');
    $st->execute();
    $st->bind_result($id, $title, $body);
    
    $rows = array(); 

    while ($row = $st->fetch()) {
      $item = array(
          'id' => $id,
          'title' => $title,
          'body' => $body
      	);
      $rows[] = $item;
    }

    return $rows;

  }