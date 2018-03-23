<?php
include('../model/dbconnection.php');

try {
	
	$sql = "INSERT INTO menu (dishtitle, dishdescription, dishprice)
    VALUES (:dishtitle , :dishdescription , :dishprice);";
	

	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(':dishtitle', $_POST['dishtitle'], PDO::PARAM_STR);
	$stmt->bindParam(':dishdescription', $_POST['dishdescription'], PDO::PARAM_STR);
	$stmt->bindParam(':dishprice', $_POST['dishprice'], PDO::PARAM_STR);
	
	
	$stmt->execute();
	if ( $conn->lastInsertId() > 0 ) {
		$_SESSION[ 'message' ] = 'dishID: ' . $conn->lastInsertId() . ' Created';

		$_SESSION[ 'dishID' ] = $conn->lastInsertID();
	} else {
		$_SESSION[ 'error' ] = 'Database error - Failed to insert registration data';
		echo '<p>error in submitting your reservation form, please try again</p>';
	}
	
	echo "New record created successfully";
} catch ( PDOException $e ) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('location: menuitem_manage.php');

?>

<!DOCTYPE=html>
<html>
<head>
	<title>Menu Item Inserted</title>
	</head>
<Body>
	
	<hr><a href="menuitem_manage.php"><button type="button">Go back</button></a>
	
	
	</Body>

</html>