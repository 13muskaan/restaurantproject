<?php
session_start();
require( '../../model/dbconnection.php' );
$id = htmlspecialchars( $_GET[ "id" ] );


	try {
		// sql to delete a record
		$sql = "DELETE FROM review WHERE reviewID=" . $id; // use get here.

		// use exec() because no results are returned
		$conn->exec( $sql );
		$_SESSION[ 'message' ] = "Review deleted successfully!";
	} catch ( PDOException $e ) {
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;

	echo '<hr><a href="review_manage.php"><button type="button">Return To List</button></a>'; //another method 

	header( 'location: review_manage.php' );

?>