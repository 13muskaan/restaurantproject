<?php
header( 'Content-Type: application/json' );
//Menu retrieval code
//Ajax JSON object

include( 'dbconnection.php' );

$contentquery = "SELECT * FROM menu limit " . $_GET['num'] * $_GET['page'] . ", " . $_GET['num'] . ";";
		//$conn = dbConnect();
		$stmt = $conn->prepare( $contentquery );
		$stmt->execute();
		$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
		//echo '<div id="contentgroup">';
		$html = '';
		foreach ( $staticresult as $row ) {
			//echo '<div class="contentItem" dishe_id="' . '">';
			
			$html = $html . '<h3><span>'. $row[ 'dishtitle' ] . '</span>';
			$html = $html . '<span style="float: right;">'. $row[ 'dishprice' ]. '</span></h3>'; //How to get the numbers on the right

			$html = $html . '<p>'. $row[ 'dishdescription' ]. '</p>';

			//echo '<hr></div>';
		}

		echo json_encode(Array('html' => $html));
?>