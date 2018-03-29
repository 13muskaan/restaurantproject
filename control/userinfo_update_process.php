<?php

//Check the $_POST[old_password] against the $_SESSION['user_password'] - if it's the same, then continue the change process, if not, ERROR

include( '../model/dbconnection.php' );
$insert_sql = "UPDATE member SET password = :newPass WHERE memberID=" . $_SESSION[ 'user_id' ] . ";";

$stmt = $conn->prepare( $instert_sql );
$stmt->bindParam( ':newPass', $_POST[ 'new_password' ], PDO::PARAM_STR );
$stmt->execute();

?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>THE PASSWORD CHANGED BOIIIIIII</title>
</head>

<body>
</body>

</html>