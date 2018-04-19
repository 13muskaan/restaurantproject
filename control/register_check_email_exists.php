<?php
header( 'Content-Type: application/json' );
include( '../model/dbconnection.php' );

$sql = 'SELECT * FROM member where email=:email';
$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':email', $_GET[ 'email' ], PDO::PARAM_STR );
$stmt->execute();
$result = $stmt->fetchAll();

if ( count( $result ) > 0 ) {
	echo json_encode( Array( 'emailexists' => true ) );
} else {
	echo json_encode( Array( 'emailexists' => false ) );
}
?>