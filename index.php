<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once ('MySqlDb.php');

$conn = connect();
$posts = get('posts', $conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>procedural way</title>
</head>
<body>

<?php  foreach ($posts as $post): ?>
  
  <h2> <?php echo $post['title'];  ?> </h2>
  <p> <?php echo $post['body'];  ?> </p>

<?php  endforeach; ?>
	
</body>
</html>