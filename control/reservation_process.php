<?php

function DateCorrect( $date, & $dateFormatted, & $error ) {
	if ( $date == '' ) return false;

	if ( $date == '00/00/0000' ) return false;

	$year = substr( $date, 6 );
	$month = substr( $date, 0, 2 );
	$day = substr( $date, 3, 2 );

	$dateFormatted = $year . "-" . $month . "-" . $day;

	if ( ( int )Date( 'Y' ) > ( int )$year ) {
		$error = 'Chosen year is less than the current year.';
		return false;
	} else if ( ( int )Date( 'Y' ) < ( int )$year ) {
		return true;
	}

	if ( ( int )Date( 'm' ) > ( int )$month ) {
		$error = 'Chosen month is less than the current month.';
		return false;
	} else if ( ( int )Date( 'm' ) < ( int )$month ) {
		return true;
	}

	if ( ( int )Date( 'd' ) > ( int )$day ) {
		$error = 'Chosen day is less than the current day.';
		return false;
	}



	return true;
}

include( '../model/dbconnection.php' );
session_start();

$_SESSION[ 'error' ] = '';

//This is the formatted date
$date = '';

//This is the specific error that went wrong
$errorSpec = '';

// Check date is correct
if ( !DateCorrect( $_POST[ 'date' ], $date, $errorSpec ) ) {
	$_SESSION[ 'error' ] = 'Date is invalid: ' . $errorSpec;

} else {

	//Check if time already booked
	$sql = "SELECT * FROM reservation WHERE date=:date AND time=:time";

	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':date', $date, PDO::PARAM_STR );
	$stmt->bindParam( ':time', $_POST[ 'time' ], PDO::PARAM_STR );

	$stmt->execute();

	if ( count( $stmt->fetchAll() ) > 0 ) {
		$_SESSION[ 'error' ] = 'That booking time is already taken, please choose another time, or call the restaraunt for help.';

	} else {

		$sql = "INSERT INTO reservation ( date, time, guestno, comment, memberID, functionID) VALUES ( :date, :time, :guestno, :comment, :memberID, :functionID);";
		$stmt = $conn->prepare( $sql );

		print_r( "Date: " . $date );

		$stmt->bindParam( ':functionID', $_POST[ 'functionID' ], PDO::PARAM_INT );
		$stmt->bindParam( ':guestno', $_POST[ 'guestNo' ], PDO::PARAM_INT );
		$stmt->bindParam( ':date', $date, PDO::PARAM_STR );
		$stmt->bindParam( ':time', $_POST[ 'time' ], PDO::PARAM_STR );
		$stmt->bindParam( ':comment', $_POST[ 'comment' ], PDO::PARAM_STR );
		$stmt->bindParam( ':memberID', $_SESSION[ 'userID' ], PDO::PARAM_INT );

		$stmt->execute();
		if ( $conn->lastInsertId() >= 0 ) {
			$_SESSION[ 'message' ] = 'Your reservation, with id of: ' . $conn->lastInsertId() . ' was successfully created!';
			$_SESSION[ 'error' ] = '';
			$_SESSION[ 'reservationid' ] = $conn->lastInsertID();

		} else {
			$_SESSION[ 'error' ] = 'Database error - Failed to insert reservation data';

		}

	}
}
header( "location: ../view/pages/reservation.php" );
?>