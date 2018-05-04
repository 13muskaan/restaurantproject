<?php
header( 'Content-Type: application/json' );
//Menu retrieval code
//Ajax JSON object
//edit code to review
include( 'dbconnection.php' );

$contentquery = "SELECT * FROM review limit " . $_GET[ 'num' ] * $_GET[ 'page' ] . ", " . $_GET[ 'num' ] . ";";
//$conn = dbConnect();
$stmt = $conn->prepare( $contentquery );
$stmt->execute();
$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
//echo '<div id="contentgroup">';
$html = '';
foreach ( $staticresult as $row ) {

//styling of posted reviews.

	//echo '<hr></div>';
}

echo json_encode( Array( 'html' => $html ) );

?>