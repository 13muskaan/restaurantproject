<?php include('../model/dbconnection.php');	?>
<?php
session_start();

$_SESSION[ 'error' ] = '';

$email = $_POST[ 'email' ];
$pass = $_POST[ "psw" ];
$msg = "";

$memberSql = "SELECT * FROM users WHERE email=:email AND password=:pass;";
$stmt = $conn->prepare( $memberSql );
$stmt->bindParam( ':email', $email, PDO::PARAM_STR );
$stmt->bindParam( ':pass', $pass, PDO::PARAM_STR );

$stmt->execute();

$valid = false;

if ( $stmt->rowCount() >= 1 ) {
	$valid = true;
	$_SESSION[ 'login_time' ] = time();
	$_SESSION[ 'message' ] = 'Login successful!';

	$result = $stmt->fetchAll();
	$_SESSION[ 'user_type' ] = $result[0]['userType'];
	
	$_SESSION['userID'] = $result[ 0 ][ 'userID' ];
	$_SESSION['firstname'] = $result[0]['firstname'];
	$_SESSION['lastEmail'] = $result[0]['email'];
	if ( isset( $_SESSION[ 'previousPOST' ] ) )unset( $_SESSION[ 'previousPOST' ] );
	if (isset($_GET['originpage'])) {
	header( "location: ../view/pages/".$_GET['originpage'].".php" );	
	} else {
		if ($_SESSION['user_type'] == 'manager') {
			header( "location: ../view/manager/index_manager.php" );
		} else if ($_SESSION['user_type'] == 'admin') {
			header( "location: ../view/admin/index_admin.php" );
		} else {
	header( "location: ../view/pages/index.php" );
	}
	}
}

if ( !$valid ) {
	$_SESSION[ 'error' ] = 'Email or Password is wrong!';
	$_SESSION[ 'previousPOST' ] = $_POST;
	header( 'location:../view/pages/login.php' );
}
//$_SESSION['user_type'] = 'member';
?>