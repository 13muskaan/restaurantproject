<?php
session_start(); //YOU SHOULD REPLACE THIS WITH SESSIONHANDLER.PHP - Steve
include ('../model/dbconnection.php');
include ('registration_check_email.php');

$_SESSION['error'] = "";
if (CheckEmailAlreadyExists($_POST['email'])) {
	$_SESSION['error'] = "eMail already exists in the database! Please choose another email!";
	$_SESSION['previousPOST'] = $_POST;
	header('location: ../view/pages/register.php');
} else {



$insert_sql = "INSERT INTO member (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
//$conn = dbConnect();

// INSERT INTO member (firstname, lastname, email, password) VALUES ('first_name', 'last_name', 'email', 'user_password'

$stmt = $conn->prepare( $insert_sql );

$stmt->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
$stmt->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

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
}
//header( 'Location: navigationbar.php' );


?>
