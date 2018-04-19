<?php include('../model/dbconnection.php');	?>
<?php
session_start();

$_SESSION[ 'error' ] = '';

$email = $_POST[ 'email' ];
$pass = $_POST[ "psw" ];
$msg = "";

$memberSql = "SELECT * FROM member WHERE email=:email AND password=:pass;";
$stmt = $conn->prepare( $memberSql );
$stmt->bindParam( ':email', $email, PDO::PARAM_STR );
$stmt->bindParam( ':pass', $pass, PDO::PARAM_STR );

$stmt->execute();

$valid = false;

if ( $stmt->rowCount() >= 1 ) {
	$valid = true;
	$_SESSION[ 'user_type' ] = 'member';
	$_SESSION[ 'login_time' ] = time();
	$_SESSION[ 'message' ] = 'Login successful!';

	$result = $stmt->fetchAll();
	$_SESSION[ 'userID' ] = $result[ 0 ][ 'memberID' ];
	$_SESSION['lastEmail'] = $result[0]['email'];
	if ( isset( $_SESSION[ 'previousPOST' ] ) )unset( $_SESSION[ 'previousPOST' ] );
	header( "location: ../view/pages/index.php" );
}

$managerSql = "SELECT * FROM manager WHERE email=:email AND password=:pass;";
$stmt = $conn->prepare( $managerSql );
$stmt->bindParam( ':email', $email, PDO::PARAM_STR );
$stmt->bindParam( ':pass', $pass, PDO::PARAM_STR );

$stmt->execute();
echo $stmt->rowCount();

if ( $stmt->rowCount() >= 1 ) {
	$valid = true;
	$_SESSION[ 'user_type' ] = 'manager';
	$_SESSION[ 'login_time' ] = time();
	$_SESSION[ 'message' ] = 'Login Successful!';
	$result = $stmt->fetchAll();
	$_SESSION[ 'userID' ] = $result[ 0 ][ 'managerID' ];
	if ( isset( $_SESSION[ 'previousPOST' ] ) )unset( $_SESSION[ 'previousPOST' ] );
	header( "location: ../manager/index_manager.php" );

}
$adminSql = "SELECT * FROM admin WHERE email=:email AND password=:pass;";
$stmt = $conn->prepare( $adminSql );
$stmt->bindParam( ':email', $email, PDO::PARAM_STR );
$stmt->bindParam( ':pass', $pass, PDO::PARAM_STR );

$stmt->execute();

if ( $stmt->rowCount() >= 1 ) {
	$valid = true;
	$_SESSION[ 'user_type' ] = 'admin';
	$_SESSION[ 'login_time' ] = time();
	$_SESSION[ 'message' ] = 'Login Successful!';
	$result = $stmt->fetchAll();
	$_SESSION[ 'userID' ] = $result[ 0 ][ 'adminID' ];
	echo '<p> you are logged in!</p>';

	if ( isset( $_SESSION[ 'previousPOST' ] ) )unset( $_SESSION[ 'previousPOST' ] );
	header( "location: ../admin/index_admin.php" );
}

if ( !$valid ) {
	$_SESSION[ 'error' ] = 'Email or Password is wrong!';
	$_SESSION[ 'previousPOST' ] = $_POST;
	header( 'location:../view/pages/login.php' );
}
//$_SESSION['user_type'] = 'member';
?>