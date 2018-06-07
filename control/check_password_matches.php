<?php
	header( 'Content-Type: application/json' );
	include('../model/dbconnection.php');

	$valifySQL = "SELECT password FROM users WHERE userID=" . $_GET[ 'userID' ];

	$stmt = $conn->prepare( $valifySQL );

	$stmt->execute();

	$pass = $stmt->fetchAll()[ 0 ][ 'password' ];

	if ( password_verify( $_GET['password'], $pass ) ) {
		echo json_encode( Array( 'passwordMatches' => true) );
	} else {
		echo json_encode( Array( 'passwordMatches' => false ) );
	}
?>