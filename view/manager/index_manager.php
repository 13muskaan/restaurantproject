<?php
include( '../pages/navigationbar.php' );
?>
<?php

//$contentquery = "SELECT * FROM member WHERE memberID:id";
$contentquery = "SELECT * FROM users WHERE userID=:id";
$stmt = $conn->prepare( $contentquery );
$stmt->bindParam( ':id', $_SESSION[ 'userID' ], PDO::PARAM_INT );

$stmt->execute();
$results = $stmt->fetchAll();

$email = $results[0]['email'];
$password = $results[0]['password'];

?>

<!doctype html>
<html>

<head>
	<title>MY BANYAN TREE | PROFILE</title>
<style>
	/*reservation*/
	
			body {
			padding-top: 30px;
		}
		
		.widget .panel-body {
			padding: 0px;
		}
		
		.widget .list-group {
			margin-bottom: 0;
		}
		
		.widget .panel-title {
			display: inline
		}
		
		.widget .label-info {
			float: right;
		}
		
		.widget li.list-group-item {
			border-radius: 0;
			border: 0;
			border-top: 1px solid #ddd;
		}
		
		.widget li.list-group-item:hover {
			background-color: rgba(86, 61, 124, .1);
		}
		
		.widget .mic-info {
			color: #666666;
			font-size: 11px;
		}
		
		.widget .action {
			margin-top: 5px;
		}
		
		.widget .comment-text {
			font-size: 12px;
		}
		
		.widget .btn-block {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
		}
	</style>
</head>

<body>

	<div class="container" style="padding-top: 1px;">
		<h1 class="page-header" style="text-align: center;">
			Welcome, Valued manager.
		</h1>
		<div class="row">
			<!-- edit form column -->
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
				<?php if (isset ($_SESSION ['error'])){
	if ($_SESSION['error'] != ""){
		echo 'div class="alert alert-danger"<strong>ERROR:</strong>' . $_SESSION['error'] . '</div>';
	}
}
				?>
			</div>
		</div>
	</div>
	<h4 style="text-align: center;">Upcoming reservations:</h4>
	<?php
	$contentquery = "SELECT * FROM reservation WHERE date >= CURRENT_DATE";
	$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	foreach ( $staticresult as $row ) {
		echo '<h3><span>', 'Reservation ID:', $row[ 'reservationID' ], ' Date:', $row[ 'date' ], ' </span>';
		echo '<div class="mic-info"> <span> Time:', $row[ 'time' ], ' Guest No:', $row[ 'guestno' ], ' Comments:' . $row[ 'comment' ], '
                                    </h3>
                                </span>';
	}
	?>
	<br>
	<h4 style="text-align: center;">Past reservations:</h4>
	<?php
	$contentquery = "SELECT * FROM reservation WHERE date < CURRENT_DATE ORDER BY date DESC";
	//$conn = dbConnect();
	$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//echo '<div id="contentgroup">';
	foreach ( $staticresult as $row ) {
		//echo '<div class="contentItem" dishe_id="' . '">';
		echo '<h3><span>', 'Reservation ID:', $row[ 'reservationID' ], ' Date:', $row[ 'date' ], ' </span>';
		echo '<div class="mic-info"> <span> Time:', $row[ 'time' ], ' Guest No:', $row[ 'guestno' ], ' Comments:' . $row[ 'comment' ], '
                                    </h3>
                                </span>';
	}
	?>
	</div>
	<?php include('../pages/footer.php');?>
</body>

</html>