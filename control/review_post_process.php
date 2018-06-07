<?php

include("../model/dbconnection.php");

$insert_sql = "INSERT INTO review (reviewtitle, reviewcontent, foodscore, servicescore, locationscore, pricescore, cleanlinessscore, userID) VALUES (:reviewtitle, :reviewcontent, :foodscore, :servicescore, :locationscore, :pricescore, :cleanlinessscore," . $_SESSION['userID'].");";

$stmt = $connroot->prepare( $insert_sql );

$stmt->bindParam( ':reviewtitle', $_POST[ 'reviewtitle' ], PDO::PARAM_STR );
$stmt->bindParam( ':reviewcontent', $_POST[ 'reviewcontent' ], PDO::PARAM_STR );

$stmt->bindParam( ':foodscore', $_POST[ 'food' ], PDO::PARAM_INT );
$stmt->bindParam( ':servicescore', $_POST[ 'service' ], PDO::PARAM_INT );
$stmt->bindParam( ':locationscore', $_POST[ 'location' ], PDO::PARAM_INT );
$stmt->bindParam( ':pricescore', $_POST[ 'price' ], PDO::PARAM_INT );
$stmt->bindParam( ':cleanlinessscore', $_POST[ 'cleanliness' ], PDO::PARAM_INT );




$stmt->execute();

if ( $connroot->lastInsertId() > 0 ) {
	
} else {
	$_SESSION[ 'error' ] = 'Database error - Failed to insert review data';
	echo 'error in submitting your review data, please try again';

}

header( 'location: ../view/pages/review.php' );



?>