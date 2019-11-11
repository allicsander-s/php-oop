<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('File.php');

echo '<pre>';
print_r(File::checkImage('exot_frukty.jpg'));
echo '</pre>';

echo '<pre>';
print_r(File::checkImage('README.md'));
echo '</pre>';

echo File::getTimesFileIsChecked();

$ins = new File;
echo '<pre>';
print_r($ins::checkImage('README.md'));
echo '</pre>';

echo $ins::getTimesFileIsChecked();

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