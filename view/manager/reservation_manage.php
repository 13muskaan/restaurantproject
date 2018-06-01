<?php
include( '../pages/navigationbar.php' );
?>
<head>
	<meta charset="utf-8">
	<title>RESERVATION MANAGE</title>
</head>

<body>
	<!-- manager manages reservations-->
	This is where reservations can be managed by the manager.
	<div class="container">
		<div class="row">
			<div class="panel panel-default widget">
				<div class="panel-heading">
					<h3 class="panel-title">Reservation</h3>

				</div>
				<div class="panel-body">
					<ul class="list-group">
						
										<?php
										include( '../../model/dbconnection.php' );
										$contentquery = "SELECT * FROM reservation";
										//$conn = dbConnect();
										$stmt = $conn->prepare( $contentquery );
										$stmt->execute();
										$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
										//echo '<div id="contentgroup">';
										foreach( $staticresult as $row ) {
											echo '<li class="list-group-item">
							<div class="row">
								<div class="col-xs-2 col-md-1">
									<!--<img src="http://placehold.it/80" class="img-circle img-responsive" alt=""/>-->
								</div>
								<div class="col-xs-10 col-md-11">
									<div>';
											//echo '<div class="contentItem" dishe_id="' . '">';
											echo '<h3><span>', $row[ 'reservationID' ], $row[ 'date' ], ' </span>';
											echo '<div class="mic-info"> <span> Function Description:', $row[ 'time' ], $row['guestno'], $row[ 'comment' ], $row[ 'userID' ], $row[ 'functionID'],'
                                    </div>
									</div>';
											echo '<a href="reservation_manage_deleteprocess.php?id=' . $row[ 'reservationID' ] . '" class="deletebutton"><button type="btn">Delete</button></a>';
											echo '</div></div></li>';}
										?>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('../pages/footer.php');?>
</body>

	<?php include('../pages/footer.php');?>
</body>