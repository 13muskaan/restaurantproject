<?php include('navigationbar.php'); include('footer.php'); ?>
<? include('../control/sessiondestroy');?>
<?php
    session_start();
//  if we destroy the session, then we lose session_id() hashing for the user's browser,
//  instead we'll unset all user-related $_SESSION values; 
//  session_destroy();
    
    unset($_SESSION['error']);
    unset($_SESSION['memberid']);
    $_SESSION['usertype'] = 0;
    $_SESSION['tries'] = 0;
    header('Location: ../view/pages/login.php');
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>