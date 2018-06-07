<?php
require( '../../model/dbconnection.php' );
$id = htmlspecialchars( $_GET[ "id" ] );


	try {
		// sql to delete a record
		$sql = "DELETE FROM users WHERE userID=" . $id; // use get here.

		// use exec() because no results are returned
		$conn->exec( $sql );
		$_SESSION[ 'message' ] = "Member deleted successfully!";
	} catch ( PDOException $e ) {
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;

	echo '<hr><a href="user_manage.php"><button type="button">Return To List</button></a>'; //another method 

	header( 'location: user_manage.php' );

?>