<?php
$servername = "localhost";
$username = "anon";
$password = "";

if ( session_status() != PHP_SESSION_ACTIVE ) {
	session_start();
	
	if (!isset($_SESSION[ "user_type" ])) {
		$_SESSION[ "user_type" ] = 0;
	}
}

try {
	$conn = new PDO( "mysql:host=$servername;dbname=restaurantproject", $username, $password ); //Set up as anon to be able to read database
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "Connected successfully";

	$userTypeSQL = "SELECT * FROM usertypes WHERE usertypeID = " . $_SESSION[ "user_type" ]; //Read database to get the current usertype's privilages

	$stmt = $conn->prepare( $userTypeSQL );
	$stmt->execute();
	$usertype = $stmt->fetchAll()[ 0 ];

	$username = $usertype[ "usertypename" ]; //Set the user's usertype's username and password
	$password = $usertype[ "usertypepass" ];

	$conn = new PDO( "mysql:host=$servername;dbname=restaurantproject", $username, $password ); //Login as that user.
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch ( PDOException $e ) {
	$_SESSION[ 'error' ] = "Connection failed: " . $e->getMessage();

}

if ( isset( $_GET[ 'table' ] ) ) {
	header( 'Content-Type: application/json' );

	$sql = "SELECT * FROM " . $_GET[ 'table' ] . ";";

	$stmt = $conn->prepare( $sql );
	$stmt->execute();

	$results = $stmt->fetchAll();

	echo json_encode( Array( 'count' => count( $results ) ) );
}
?>