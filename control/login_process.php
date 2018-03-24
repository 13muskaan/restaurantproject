	<?php include('../model/dbconnection.php');	?>
	<?php 
	session_start();

	$_SESSION['error'] = '';

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
		$_SESSION['message'] = 'success!';
		
		$result = $stmt->fetchAll();
		$_SESSION['userID'] = $result[0]['memberID'];
		header( "location: ../member/index_member.php" ); // charmi said do this: index.php  //this doesn't work header("location: ../view/pages/index.php"); ../view/pages/navigationbar_member.php
	
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
		$result = $stmt->fetchAll();
		$_SESSION['userID'] = $result[0]['managerID'];
		header( "location: ../manager/index_manager.php" ); //this doesn't work header("location: ../view/pages/index.php"); 
	
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
		$_SESSION['message'] = 'success!';
		$result = $stmt->fetchAll();
		$_SESSION['userID'] = $result[0]['adminID'];
		echo '<p> you are logged in!</p>';

		header( "location: ../admin/index_admin.php" ); //this doesn't work header("location: ../view/pages/index.php")
	}

if (!$valid){
		$_SESSION[ 'error' ] = 'Email or Password is wrong!'; // put this in footer - Muskaan
		$_SESSION['previousPOST'] = $_POST;
		header('location:../view/pages/login.php');
	}
	//$_SESSION['user_type'] = 'member';
	?>