<?php
include( "../../model/dbconnection.php" );

// sql to delete a record
$sql = "DELETE FROM menu WHERE dishID=" . $_GET[ 'id' ]; // use get here.

// use exec() because no results are returned
$conn->exec( $sql );
$_SESSION[ 'message' ] = "Menu item deleted successfully!";

header( 'location: menuitem_manage.php' );
?>