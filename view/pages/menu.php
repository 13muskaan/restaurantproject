	<?php
	include( '../../model/dbconnection.php' );?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MY BANYAN TREE | MENU</title>
	
	<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<?php include('../../view/pages/navigationbar.php');?>
<body>
	<!--restaurant menu will appear here-->
	<div class="menuitem_view">
		<h1 style="text-align: center;"> My Banyan menu.</h1>

		
		
		<div class="container">

			<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "restaurantproject";

	$contentquery = "SELECT * FROM menu";
	//$conn = dbConnect();
	$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//echo '<div id="contentgroup">';
	foreach ( $staticresult as $row ) {
		//echo '<div class="contentItem" dishe_id="' . '">';
		echo '<h3><span>', $row['dishtitle'], '</span>';
		echo '<span style="float: right;">', $row[ 'dishprice' ], '</span></h3>'; //How to get the numbers on the right
		
		echo '<p>', $row['dishdescription'], '</p>';
		
		//echo '<hr></div>';
	}
	?>
		</div>
	</div>
	<script> $('h3 span:first-child').after("<span class=\"dots\"> </span>");</script>
	
		
	<?php  include('footer.php');?>
</body>

</html>