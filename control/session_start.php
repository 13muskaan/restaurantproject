<?php
include( '../model/dbconnection.php' );
?>
<?php

session_start();
//LOG activities
$log_sql = "INSERT INTO  logdata (memberID, url, ip) VALUES ('" . session_id() . "', '" .
$_SERVER[ 'REQUEST_URI' ] . "',  '" . $_SERVER[ 'HTTP_HOST' ] . "');";
$conn = dbConnect();
$stmt = $conn->prepare( $log_sql );
$stmt->execute();
// Set user to anonymous if not already
if ( !isset( $_SESSION[ 'member' ] ) ) {
	$_SESSION[ 'member' ] = 0;
}
?>
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>session start</title>
</head>

<body>
	<!-- session start here link to navigation bar for login-->

</body>

</html>