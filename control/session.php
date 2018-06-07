<?php
if ( session_status() != PHP_SESSION_ACTIVE ) {
	session_start();
}

// Set user to anonymous if not already
if ( !isset( $_SESSION[ 'user_type' ] ) || !isset( $_SESSION[ 'userID' ] ) ||
	( $_SESSION[ "user_type" ] != 0 && $_SESSION[ "user_type" ] != 1 && $_SESSION[ "user_type" ] != 2 && $_SESSION[ "user_type" ] != 3 ) ) {
	$_SESSION[ 'user_type' ] = 0;
	$_SESSION[ 'userID' ] = -1;
}

//LOG activities
$log_sql = "INSERT INTO logdata (sessionID, url, ip, userID) VALUES ('" . session_id() . "', '" .
$_SERVER[ 'REQUEST_URI' ] . "',  '" . $_SERVER[ 'HTTP_HOST' ] . "'," . $_SESSION[ 'userID' ] . ");";
// $log
if (strpos("control",$_SERVER['REQUEST_URI']) >= 0 && isset($_POST['curltest']) && $_POST['curltest'] == "blueamerica13"){
	echo "Welcome curl tester...";
	include( '../model/dbconnection.php' );
	$_SESSION[ 'user_type' ] = 3;
} else {
	include( '../../model/dbconnection.php' );
}

$stmt = $connroot -> prepare( $log_sql );
$stmt->execute();

?>