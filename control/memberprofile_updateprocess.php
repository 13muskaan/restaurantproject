<?php

include('../model/dbconnection.php');

try {

	$sql = "UPDATE member SET firstname=:firstname, lastname=:lastname, email=:email, newpassword=:newpassword WHERE memberID=" . $_GET['id'];

    // Prepare statement
	$stmt->bindParam( ':firstname', $_POST[ 'firstname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':lastname', $_POST[ 'lastname' ], PDO::PARAM_STR );
	$stmt->bindParam( ':email', $_POST[ 'email' ], PDO::PARAM_STR );
	$stmt->bindParam( ':newpassword', $_POST[ 'newpassword' ], PDO::PARAM_STR );
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
?>
<body>  <a href="../view/pages/memberprofile.php"><button type="button">Go Back.</button></a></body>