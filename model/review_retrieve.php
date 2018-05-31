<?php
header( 'Content-Type: application/json' );
//Menu retrieval code
//Ajax JSON object
//edit code to review

include( 'dbconnection.php' );

$retrieveAverages = !isset( $_GET[ 'num' ] ) || !isset( $_GET[ 'page' ] );

if ( $retrieveAverages ) {
	$contentquery = "SELECT foodscore, servicescore, locationscore, pricescore, cleanlinessscore FROM review";
} else {
	$contentquery = "SELECT * FROM review INNER JOIN users ON review.userID = users.userID LIMIT " . $_GET[ 'num' ] * $_GET[ 'page' ] . ", " . $_GET[ 'num' ] . ";";
}
//$conn = dbConnect();
$stmt = $conn->prepare( $contentquery );
$stmt->execute();
$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );

if ( $retrieveAverages ) {
	$scores = array( 0, 0, 0, 0, 0, 0 ); //food, service, location, price, cleanliness, total

	foreach ( $staticresult as $row ) {
		$scores[ 0 ] += $row[ 'foodscore' ];
		$scores[ 1 ] += $row[ 'servicescore' ];
		$scores[ 2 ] += $row[ 'locationscore' ];
		$scores[ 3 ] += $row[ 'pricescore' ];
		$scores[ 4 ] += $row[ 'cleanlinessscore' ];
	}

	for ( $i = 0; $i < count( $scores ) - 1; $i++ ) {
		$scores[ $i ] /= count( $staticresult );
		$scores[ 5 ] += $scores[ $i ];
	}

	$scores[ 5 ] /= count( $scores ) - 1;

	echo json_encode( Array( 'total' => $scores[ 5 ], 'food' => $scores[ 0 ], 'service' => $scores[ 1 ], 'location' => $scores[ 2 ], 'price' => $scores[ 3 ], 'cleanliness' => $scores[ 4 ], 0 => $scores[ 5 ], 1 => $scores[ 0 ], 2 => $scores[ 1 ], 3 => $scores[ 2 ], 4 => $scores[ 3 ], 5 => $scores[ 4 ] ) );

} else {
	//echo '<div id="contentgroup">';

	$array = Array();

	for ( $i = 0; $i < count( $staticresult ); $i++ ) {
		$row = $staticresult[ $i ];

		$average = ( $row[ 'foodscore' ] + $row[ 'servicescore' ] + $row[ 'locationscore' ] + $row[ 'pricescore' ] + $row[ 'cleanlinessscore' ] ) / 5;



		$html = '<div class="row">
		<div class="col-sm-7">
			<hr/>
			<div class="review-block">
				<div class="row">
					<div class="col-sm-2">
						<img src="' . $row[ 'imageLink' ] . '" class="avatar img-circle img-thumbnail">
						<div class="review-block-name">' . $row[ 'firstname' ] . ' ' . $row[ 'lastname' ] . '</div>
						<div class="review-block-date">' . $row[ 'date' ] . '</div>
					</div>
					<div class="col-sm-2">
						<div class="row">Food </div>
						<div class="row" id="userfoodstar">' . $row[ 'foodscore' ] . '</div>
						
						<div class="row">Service </div>
						<div class="row" id="userservicestar">' . $row[ 'servicescore' ] . '</div>
						
						<div class="row">Location </div>
						<div class="row" id="userlocationstar">' . $row[ 'locationscore' ] . '</div>
						
						<div class="row">Price </div>
						<div class="row" id="userpricestar">' . $row[ 'pricescore' ] . ' </div>
						
						<div class="row">Cleanliness </div>
						<div class="row" id="usercleanlinessstar">' . $row[ 'cleanlinessscore' ] . '</div>

					</div>
					<div class="col-sm-8">
						<div class="review-block-rate" id="useraveragestar">' . $average . '</div>
						<div class="review-block-title">' . $row[ 'reviewtitle' ] . '</div>
						<div class="review-block-description">' . $row[ 'reviewcontent' ] . '</div>
					</div>
				</div>
				<hr/>
			</div>
		</div>
	</div>';

		//ADD HTML TO ARRAY
		$array = array_merge( $array, Array( $html ) );
	}


	echo json_encode( $array );
}



?>