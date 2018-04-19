<?php
session_start(); //YOU SHOULD REPLACE THIS WITH SESSIONHANDLER.PHP - Steve
include( '../model/dbconnection.php' );

$insert_sql = "INSERT INTO member (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
//$conn = dbConnect();

// INSERT INTO member (firstname, lastname, email, password) VALUES ('first_name', 'last_name', 'email', 'user_password'

$stmt = $conn->prepare( $insert_sql );

$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
$stmt->bindParam( ':password', $_POST[ 'password' ], PDO::PARAM_STR );

$stmt->execute();
if ( $conn->lastInsertId() > 0 ) {
	$_SESSION[ 'message' ] = 'User successfully created! Welcome ' . $_POST[ 'firstname' ] . "!";
	$_SESSION[ 'userID' ] = $conn->lastInsertID();
	$_SESSION[ 'lastEmail'] = $_POST['email'];
	$_SESSION[ 'user_type' ] = 'member';

	$_SESSION[ 'login_time' ] = time();
	header( 'location: ../view/pages/index.php' );
} else {
	$_SESSION[ 'error' ] = 'Database error - Failed to insert registration data';
	echo 'error in submitting your registration data, please try again';

}
//header( 'Location: navigationbar.php' );


?>