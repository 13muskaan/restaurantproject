<?php

function CheckEmailAlreadyExists( $email ) {
	include( '../model/dbconnection.php' );
	$select_sql = "SELECT email FROM member WHERE email = :email;";

	$stmt = $conn->prepare( $select_sql );
	$stmt->bindParam( ':email', $email, PDO::PARAM_STR );
	$stmt->execute();
	$result = $stmt->fetchAll();

	return ( count( $result ) > 0 );
}
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>registration_check_email</title>
</head>

<body>
	<!--registration check email, link to register process-->
</body>

</html>