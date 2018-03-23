<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurantproject";
$id = htmlspecialchars($_GET["id"]);


try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	// sql to delete a record
	$sql = "DELETE FROM menu WHERE dishID=".$id; // use get here.

	// use exec() because no results are returned
	$conn->exec( $sql );
	echo "Record deleted successfully";
} catch ( PDOException $e ) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

echo '<hr><a href="menuitem_manage.php"><button type="button">Return To List</button></a>'; //another method 

header('location: menuitem_manage.php');
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>