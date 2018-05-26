<?php
session_start();
include('../model/dbconnection.php');

if (isset($_GET['imageLink'])) {
	$sql = "UPDATE users SET imageLink=:imageLink WHERE userID=".$_SESSION['userID'];
	$stmt->bindParam( ':imageLink', $_GET[ 'imageLink' ], PDO::PARAM_STR );
	
	$stmt->execute();
	
	echo '     ' . $stmt->rowCount() . " records UPDATED successfully with image";
} else {

try {

	$sql = "UPDATE users SET firstname=:firstname, lastname=:lastname, email=:email, password=:newpassword WHERE userID=" . $_SESSION['userID'];
	
    // Prepare statement
	$stmt = $conn->prepare($sql);
	
	$pass = password_hash($_POST[ 'newpassword' ], PASSWORD_BCRYPT);
	
	// Sanitise inputs
	$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
	$stmt->bindParam( ':newpassword', $pass , PDO::PARAM_STR );
	
    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
?>
<body>  <a href="../view/pages/memberprofile.php"><button type="button">Go Back.</button></a></body>