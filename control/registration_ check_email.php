<?php
    header('Content-Type: application/json');
    include '/control/dbconnection.php';
    $select_sql = "SELECT email from members where email = '" . $_GET['email'] . "';";
    $conn = dbConnect();
    $stmt = $conn->prepare($select_sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    if(count($result) > 0) {
        echo json_encode(Array('emailexists'=>true)); 
    } else {
        echo json_encode(Array('emailexists'=>false)); 
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