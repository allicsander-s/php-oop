<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('Myclass.php');
$My_object_1 = new Myclass("Sasha");
echo "<br>";
$My_object_2 = new Myclass("Masha");
echo "<br>";
$My_object_1->doSomethingBeautiful();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my oop practice</title>
</head>
<body>

	
</body>
</html>