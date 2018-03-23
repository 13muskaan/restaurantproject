<?php
session_start(); //YOU SHOULD REPLACE THIS WITH SESSIONHANDLER.PHP - Steve
include ('../model/dbconnection.php');
$insert_sql = "INSERT INTO member (firstname, lastname, email, password) VALUES ('" . 
	$_POST[ 'first_name' ] . "',  '" . 
	$_POST[ 'last_name' ] . "', '" .
	$_POST[ 'email' ] . "', '" . 
	$_POST['user_password']."')";
//$conn = dbConnect();

// INSERT INTO member (firstname, lastname, email, password) VALUES ('first_name', 'last_name', 'email', 'user_password'

$stmt = $conn->prepare( $insert_sql );
$stmt->execute();
if ( $conn->lastInsertId() > 0 ) {
	$_SESSION[ 'message' ] = 'memberid: ' . $conn->lastInsertId() . ' Created';
	
	$_SESSION['member_id'] = $conn->lastInsertID();
	
	
	//REPLACE THIS WITH A .php FILE THAT GRABS THIS INFORMATION WITH A SELECT STATEMENT BASED OFF OF THE user_id - Steve
	//This is just here as a quick way to set up the 'default' text for the form in the 'update user info' page.
	//$_SESSION['first_name'] = $_POST[ 'first_name' ];
	//$_SESSION['last_name'] = $_POST[ 'last_name' ];
	//$_SESSION['email'] = $_POST[ 'email' ];
	$_SESSION['user_password'] = $_POST[ 'user_password' ];
	header('location: ../member/index_member.php');
} else {
	$_SESSION[ 'error' ] = 'Database error - Failed to insert registration data';
	echo 'error in submitting your reservation form, please try again';
}
//header( 'Location: navigationbar.php' );


?>

