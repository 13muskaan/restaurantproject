<head>
	<meta charset="utf-8">
	<title>Menu Manage</title>
	<link href="../view/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>


<body>
	<?php  include('../view/pages/navigationbar.php');?>
	<!--restaurant menu will appear here-->
	<div class="menuitem_view">
		<h1 style="text-align: center;"> My Banyan menu.</h1>
		<div class="container">
			<?php
			include( '../model/dbconnection.php' );
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
				echo '<h3><span>', $row[ 'dishtitle' ], '</span>';
				echo '<span style="float: right;">', $row[ 'dishprice' ], '</span></h3>'; //How to get the numbers on the right

				echo '<p>', $row[ 'dishdescription' ], '</p>';

				//echo '<hr></div>';
				echo '<a href="menuitem_manage_delete.php?id=' . $row[ 'dishID' ] . '" class="deletebutton"><button type="btn">Delete</button></a>';
				echo '<a href="menuitem_manage_editform.php?id=' . $row[ 'dishID' ] . '" class="editbutton"><button type="btn">Edit</button></a>';

			}
			?>
			<hr>
			<a href="menuitem_manage_insertform.php" class="insertbutton"><button type="btn">Insert New Menu Item</button></a>
		</div>

	</div>
	<script>
		$( 'h3 span:first-child' ).after( "<span class=\"dots\"> </span>" );
	</script>

	<?php include('../view/pages/footer.php');?>
</body>