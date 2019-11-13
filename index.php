<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('MySqlDb.php');

$Db = new MySqlDb('localhost', 'db_user', 'some awesome password', 'db');

$insertData = [ 
  'title' => 'Inserted juicy title',
  'body' => 'Inserted body'
];

if( $Db->insert('posts', $insertData) )
    echo 'huge success!!';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>oop way</title>
</head>
<body>



</body>
</html>