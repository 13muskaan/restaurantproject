<?php
//session_start(); //YOU SHOULD REPLACE THIS WITH SESSIONHANDLER.PHP - Steve
include ('../model/dbconnection.php');
session_start();

$sql = "INSERT INTO reservation ( date, time, guestno, comment, memberID, functionID) VALUES ( :date, :time, :guestno, :comment, :memberID, :functionID);";
	$stmt = $conn->prepare( $sql );

	$stmt->bindParam(':functionID', $_POST['functionID'], PDO::PARAM_INT);
	$stmt->bindParam(':guestno', $_POST['guestNo'], PDO::PARAM_INT);
	$stmt->bindParam(':date', $_POST['date'], PDO::PARAM_STR);
	$stmt->bindParam(':time', $_POST['time'], PDO::PARAM_STR);
	$stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
	$stmt->bindParam(':memberID', $_SESSION['userID'], PDO::PARAM_INT);

$stmt->execute();
if ( $conn->lastInsertId() > 0 ) {
	$_SESSION[ 'message' ] = 'reservationid: ' . $conn->lastInsertId() . ' Created';
	
	$_SESSION['reservationid'] = $conn->lastInsertID();
} else {
	$_SESSION[ 'error' ] = 'Database error - Failed to insert reservation data';
		echo 'error in submitting your reservation form, please try again';
}


//header( 'Location: navigationbar.php' );


?>