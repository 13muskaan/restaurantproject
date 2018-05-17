<?php

include('../model/dbconnection.php');
include('session.php');

$target_dir = "../view/img/userPictures/";
echo print_r($_POST);
echo print_r($_FILES['image']);
$target_file = $target_dir . $_SESSION['userID']. ".". strtolower( pathinfo( $_FILES[ "image" ][ "name" ], PATHINFO_EXTENSION ) );
echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
// check if file is image
if ( isset( $_POST[ "submit" ] ) ) {
	$check = getimagesize( $_FILES[ "image" ][ "tmp_name" ] );
	if ( $check !== false ) {
		echo "file is an image - " . $check[ "mime" ] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
//check file size
if ( $_FILES[ "image" ][ "size" ] > 50000 ) {
	echo "Sorry, file is too large.";
	$uploadOk = 0;
}
//allow certain file types
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
	echo "Sorry, only jpg, png, jpeg & gif files are allowed to upload";
		$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$linkCheck = $target_dir . $_SESSION['userID'];
	
	if (file_exists($linkCheck. ".png")) {
		unlink ($linkCheck. ".png");
	} else if (file_exists($linkCheck. ".jpg")) {
		unlink ($linkCheck. ".jpg");
	} else if (file_exists($linkCheck. ".jpeg")) {
		unlink ($linkCheck. ".jpeg");
	} else if (file_exists($linkCheck. ".gif")) {
		unlink ($linkCheck. ".gif");
	}
	
	
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		header('Location: memberprofile_updateprocess.php?imageLink='.$target_file);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>