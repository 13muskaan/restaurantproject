	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
		$conn = new PDO( "mysql:host=$servername;dbname=restaurantproject", $username, $password );
		// set the PDO error mode to exception
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		//echo "Connected successfully";
	} catch ( PDOException $e ) {
		$_SESSION['error'] = "Connection failed: " . $e->getMessage();
		
	}
	?>