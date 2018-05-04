<?
session_start();
include( '../model/dbconnection.php' );
?>
<title>FUNCTION MANAGE</title>
</head>
<?php include('../view/pages/navigationbar.php'); ?>
<body>
	<!-- admin manages the function page and function data-->
	Edit function page here.
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
	Select a file to upload.
		<input type="file" name="fileToUpload" id="fileToUpload" size="50"><br>
		<input type="submit" value="Uploadfile" name="submit">
	</form>
	<?php include('../view/pages/footer.php');?>

</body>