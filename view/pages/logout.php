<?php
session_start();

$_SESSION[ 'error' ] = '';
$_SESSION[ 'userID' ] = -1;
$_SESSION[ 'user_type' ] = 'anon';
$_SESSION[ 'tries' ] = 0;
$_SESSION[ 'message' ] = 'You have logged out successfully.';

header( 'Location: login.php' );
?>