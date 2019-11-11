<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once ('ParentClass.php');
require_once ('ChildClass.php');

$parent = new ParentClass();

$result = $parent->doSomething();
echo '<br>', $result, '<br>';


$child = new ChildClass();

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