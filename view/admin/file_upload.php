<?php
session_start();
include('../../model/dbconnection.php');
include('../../control/session.php');

// code to upload files for members/anon to view 

if (isset($_POST['submit'])){
	$file = $_FILES['fileToUpload'];
	//print_r ($file);
	$fileName = $_FILES['fileToUpload']['name'];
	$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
	$fileSize = $_FILES['fileToUpload']['size'];
	$fileError = $_FILES['fileToUpload']['error'];
	$fileType = $_FILES['fileToUpload']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('pdf', 'docx');
	
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){	
			if($fileSize < 100000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = '../../../files/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location:function_manage.php?uploadsuccess");
			}else{
				echo "Your file is too large.";
			}
		}else{
			echo "There is an error uploading the file.";
		}
	}else{
		echo "You can't upload this file. File type is not supported.";
	}
}
//Insert file link into database.
	$sql = "INSERT INTO file (name, file, dateinserted)
    VALUES (:name , :file , :dateinserted);";
?>