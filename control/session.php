<?php //TODO JOHNS CODE - MODIFY CODE
session_start();

// Set user to anonymous if not already
if (!isset($_SESSION['user_type']) || !isset($_SESSION['userID']) || 
											 ($_SESSION["user_type"] != 0 && $_SESSION["user_type"] != 1 && $_SESSION["user_type"] != 2 && $_SESSION["user_type"] != 3 )) {
	$_SESSION[ 'user_type' ] = 0;
	$_SESSION['userID'] = -1;
}

//RESET LOGIN RETRIES
if ( !isset( $_SESSION[ 'reset_time' ] ) ) {
	$_SESSION[ 'reset_time' ] = time() + (60 * 15);
}
if ( $_SESSION[ 'reset_time' ] < time() ) {
	$_SESSION[ 'tries' ] = 0;
	$_SESSION[ 'reset_time' ] = time() + (60 * 15);
}
//LOG activities
$log_sql = "INSERT INTO logdata (sessionID, url, ip, userID) VALUES ('" . session_id() . "', '" .
$_SERVER[ 'REQUEST_URI' ] . "',  '" . $_SERVER[ 'HTTP_HOST' ] . "'," . $_SESSION['userID'] . ");";
// $log
include('../../model/dbconnection.php');

$stmt = $connroot->prepare( $log_sql );
$stmt->execute();

?>