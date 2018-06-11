<?php
include( '../model/dbconnection.php' );

$insert_sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";

$hash = password_hash( $_POST[ 'password' ], PASSWORD_BCRYPT) ;

$stmt = $conn->prepare( $insert_sql ); // This used to use Connroot, but now that anons can just write data entries, there is no more need for using connroot.

$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
$stmt->bindParam( ':password', $hash, PDO::PARAM_STR );

$stmt->execute();
if ( $conn->lastInsertId() > 0 ) {
	$_SESSION[ 'message' ] = 'User successfully created! Welcome ' . $_POST[ 'firstname' ] . "!";
	$_SESSION[ 'userID' ] = $conn->lastInsertID();
	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION[ 'lastEmail'] = $_POST['email'];
	$_SESSION[ 'user_type' ] = 1;

	$_SESSION[ 'login_time' ] = time();
	header( 'location: ../view/pages/index.php' );
} else {
	$_SESSION[ 'error' ] = 'Database error - Failed to insert registration data';
	echo 'error in submitting your registration data, please try again';

}


?>