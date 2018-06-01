<?php
//User privilage defender

function DefendPage( ) {
	include ('../../model/dbconnection.php');
	
	$userTypeName = $usertype ['usertypename'];
	
	$uri = $_SERVER[ 'REQUEST_URI' ];

	$admin = strpos( $uri, 'admin' ) > 0;
	$manager = strpos( $uri, 'manager' ) > 0;

	if ( ( $admin && $userTypeName != 'admin' ) || ( $manager && $userTypeName != 'manager' ) ) {
		$_SESSION[ 'error' ] = "404 - Page you were tyring to access doesn't exist";
		
		header( 'Location: ../pages/index.php' );
		return false;
	}

return true;
}

?>