<?php
header( 'Content-Type: application/json' );
//Menu retrieval code
//Ajax JSON object
//edit code to review

include( 'dbconnection.php' );

$retriveAverages = !isset($_GET['num']) || !isset($_GET['page']);

if ($retrieveAverages) {
	$contentquery = "SELECT (foodscore, servicescore, locationscore, pricescore, cleanlinessscore) FROM review";
} else {
	$contentquery = "SELECT * FROM review limit " . $_GET[ 'num' ] * $_GET[ 'page' ] . ", " . $_GET[ 'num' ] . ";";
}
//$conn = dbConnect();
$stmt = $conn->prepare( $contentquery );
$stmt->execute();
$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );

if ($retrieveAverages) {
	$scores = array(0,0,0,0,0,0);//food, service, location, price, cleanliness, total
	
	foreach ($staticresult as $row) {
		$scores[0] += $row['foodscore'];
		$scores[1] += $row['servicescore'];
		$scores[2] += $row['locationscore'];
		$scores[3] += $row['pricescore'];
		$scores[4] += $row['cleanlinessscore'];
	}
	
	for ($i = 0; $i < count($scores) - 1; $i++) {
		$scores[$i] /= count($staticresult); 
		$scores[5] += $scores[$i];
	}
	
	$scores[5] /= count($scores) - 1;
	
	echo json_encode( Array( 'food' => $score[0], 'service' => $score[1], 'location' => $score[2], 'price' => $score[3], 'cleanliness' => $score[4], 'total' => $score[5] ) );
	
} else {
	//echo '<div id="contentgroup">';
$html = '';
foreach ( $staticresult as $row ) {

//styling of posted reviews.

	//echo '<hr></div>';
}

echo json_encode( Array( 'html' => $html ) );
}



?>