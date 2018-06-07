<?php

include( '../model/dbconnection.php' );

$target_dir = "../view/img/userPictures/";
$target_file = $target_dir . $_SESSION[ 'userID' ] . "." . strtolower( pathinfo( $_FILES[ "image" ][ "name" ], PATHINFO_EXTENSION ) );
$uploadOk = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

$errorStr = "";

// check if file is image
if ( isset( $_POST[ "submit" ] ) ) {
	$check = getimagesize( $_FILES[ "image" ][ "tmp_name" ] );
	if ( $check !== false ) {
		$uploadOk = 1;
	} else {
		$errorStr .= "<p>- The file is not an image, please upload an <strong>image file</strong>.</p>";
		$uploadOk = 0;
	}
}
//check file size
if ( $_FILES[ "image" ][ "size" ] > 100000 ) {
	$errorStr .= "<p>- <em>File is too large</em>, please ensure image size is <strong>less than 100kb</strong>.</p>";
	$uploadOk = 0;
}
//allow certain file types
if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	$errorStr .= "<p>- Invalid image type: Please upload a <strong>jpg, png, jpeg or gif</strong></p>";
	$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ( $uploadOk == 0 ) {
	$_SESSION[ 'error' ] = " Your image was not uploaded because:" . $errorStr;
	header( 'Location: ../view/pages/memberprofile.php');
	// if everything is ok, try to upload file
} else {
	$linkCheck = $target_dir . $_SESSION[ 'userID' ];

	if ( file_exists( $linkCheck . ".png" ) ) {
		unlink( $linkCheck . ".png" );
	} else if ( file_exists( $linkCheck . ".jpg" ) ) {
		unlink( $linkCheck . ".jpg" );
	} else if ( file_exists( $linkCheck . ".jpeg" ) ) {
		unlink( $linkCheck . ".jpeg" );
	} else if ( file_exists( $linkCheck . ".gif" ) ) {
		unlink( $linkCheck . ".gif" );
	}

	if ( move_uploaded_file( $_FILES[ "image" ][ "tmp_name" ], $target_file ) ) {
		echo "The file " . basename( $_FILES[ "image" ][ "name" ] ) . " has been uploaded.";
		header( 'Location: memberprofile_updateprocess.php?imageLink=' . "../" . substr( $target_file, 8 ) );
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>