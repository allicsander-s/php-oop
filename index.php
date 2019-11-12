<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('MySqlDb.php');

$Db = new MySqlDb('localhost', 'db_user', 'some password here', 'db');
// $results = $Db->query("INSERT INTO");

$Db->where('id', 1);
$results = $Db->get('posts');
print_r($results );

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>oop way</title>
</head>
<body>

<?php foreach ($results as $row): ?>
  <h2><?php echo $row['title']; ?></h2>
  <div><?php echo $row['body']; ?></div>
<?php endforeach; ?>

</body>
</html>