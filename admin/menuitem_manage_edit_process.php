<?php
include('../model/dbconnection.php');

try {
    $sql = "UPDATE menu SET dishtitle=:dishtitle, dishdescription=:dishdescription, dishprice=:dishprice WHERE dishID=".$_GET['id'];

    // Prepare statement
    $stmt = $conn->prepare($sql);
	$stmt->bindParam(':dishtitle', $_POST['dishtitle'], PDO::PARAM_STR);
	$stmt->bindParam(':dishdescription', $_POST['dishdescription'], PDO::PARAM_STR);
	$stmt->bindParam(':dishprice', $_POST['dishprice'], PDO::PARAM_STR);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header('location: menuitem_manage.php');
?>
<!DOCTYPE=html>
<html>
<head>
	<title>Menu Item Edited</title>
	</head>
<Body>
	
	<a href="menuitem_manage.php"><button type="button">Go back</button></a>
	
	
	</Body>

</html>