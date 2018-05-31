<?php
$servername = "localhost";
$username = "";
$password = "";

$rootuser = "root";
$rootpassword = "";

if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}

try {
	$connroot = new PDO( "mysql:host=$servername;dbname=restaurantproject", $rootuser, $rootpassword );
	// set the PDO error mode to exception
	$connroot->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "Connected successfully";
	
	$userTypeSQL = "SELECT * FROM usertypes WHERE usertypeID = " . $_SESSION["user_type"];
	
	$stmt = $connroot->prepare($userTypeSQL);
	$stmt->execute();
	$usertype = $stmt->fetchAll()[0];
	
	$username = $usertype["usertypename"];
	$password = $usertype["usertypepass"];
	
	$conn = new PDO( "mysql:host=$servername;dbname=restaurantproject", $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	
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