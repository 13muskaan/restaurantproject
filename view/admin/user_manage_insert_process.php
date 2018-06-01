<?php
include( '../model/dbconnection.php' );
if ( DefendPage( 'admin' ) ) {
	try {

		$sql = "INSERT INTO member (firstname, lastname, email, password)
    VALUES (:firstname , :lastname , :email, :password);";


		$stmt = $conn->prepare( $sql );
		$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
		$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
		$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
		$stmt->bindParam( ':password', $_POST[ 'password' ], PDO::PARAM_STR );


		$stmt->execute();
		if ( $conn->lastInsertId() > 0 ) {
			$_SESSION[ 'message' ] = 'memberID: ' . $conn->lastInsertId() . ' Created';

			$_SESSION[ 'memberID' ] = $conn->lastInsertID();
		} else {
			$_SESSION[ 'error' ] = 'Database error - Failed to insert a member';
			echo '<p>error in submitting your insert member form, please try again</p>';
		}

		echo "New record created successfully";
	} catch ( PDOException $e ) {
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;

	header( 'location:user_manage.php' );
}
?>