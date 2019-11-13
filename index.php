<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('MySqlDb.php');

$Db = new MySqlDb('localhost', 'db_user', 'my strong password', 'db');

// $updateData = [
//                 'title' => 'updated title',
//                 'body' => 'updated body'
//               ];

$Db->where('id',3);
$results = $Db->delete('posts');



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