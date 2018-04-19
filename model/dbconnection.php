<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO( "mysql:host=$servername;dbname=restaurantproject", $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "Connected successfully";
} catch ( PDOException $e ) {
	$_SESSION[ 'error' ] = "Connection failed: " . $e->getMessage();

}

if(isset($_GET['table'])) {
	header( 'Content-Type: application/json' );
	
	$sql = "SELECT * FROM " . $_GET['table'] .";";
	
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	$results = $stmt->fetchAll();
	
	echo json_encode(Array('count' => count($results)));
}
?>