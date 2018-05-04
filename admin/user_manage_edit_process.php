<?php
include( '../model/dbconnection.php' );

try {
	$sql = "UPDATE member SET firstname=:firstname, lastname=:lastname, email=:email, password=:password WHERE memberID=" . $_GET[ 'id' ];

	// Prepare statement (Bindparam)
	$stmt = $conn->prepare( $sql );

	$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
	$stmt->bindParam( ':password', $_POST[ 'password' ], PDO::PARAM_STR );

	// execute the query
	$stmt->execute();

	// echo a message to say the UPDATE succeeded
	echo $stmt->rowCount() . " records UPDATED successfully";
} catch ( PDOException $e ) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header( 'location: user_manage.php' );
?>

<body>
	<a href="user_manage.php"><button type="button">Go back</button></a>
</body>