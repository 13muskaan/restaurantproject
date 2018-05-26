<?php
header( 'Content-Type: application/json' );

session_start();
include( 'dbconnection.php' );

$contentquery = "SELECT time FROM reservation WHERE date=\"" . $_GET[ 'date' ] ."\"";
//$conn = dbConnect();
$stmt = $conn->prepare( $contentquery );
$stmt->execute();
$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );

echo json_encode( $staticresult );
?>