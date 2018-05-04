<?php//control
//$target_dir = "uploads/";
$target_dir = "restaurantproject_muskaanbakshi_9105462916/view/img";
$target_file = $target_dir . basename( $_FILES[ "fileToUUpload" ][ "name" ] );
$uploadOk = 1;
$imageFileType = strolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
// check if file is image
if ( isset( $_POST[ "submit" ] ) ) {
	$check = getimagesize( $_FILES[ "fileToUpload" ][ "tmp_name" ] );
	if ( $check !== false ) {
		echo "file is an image - " . $check[ "mime" ] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
// check if file already exists
if ( file_exists( $target_file ) ) {
	echo "sorry, file already exists.";
	$_uploadOk = 0;
}
//check file size
if ( $_FILES[ "fileToUpload" ][ "size" ] > 50000 ) {
	echo "Sorry, file is too large.";
	$uploadOk = 0;
}
//allow certain file types
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
	echo "Sorry, only jpeg, png, jpeg & gif files are allowed to upload";
		$uploadOk = 0;
}
?>