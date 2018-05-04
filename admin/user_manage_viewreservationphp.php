<head>
	<meta charset="utf-8">
	<title>MEMBER RESERVATION</title>
	<style>
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
<?php include('../view/pages/navigationbar.php');?>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default widget">
				<div class="panel-heading">
					<?php 
						include( '../model/dbconnection.php' );
										$contentquery = "SELECT * FROM reservation WHERE memberID=:id";

										//$conn = dbConnect();
										$stmt = $conn->prepare( $contentquery );
										$stmt->bindParam( ':id', $_GET[ 'id' ], PDO::PARAM_INT );
										$stmt->execute();
										$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );$stmt-> execute();
					$stmt-> execute();
$firstname = $stmt->fetchAll();
					$stmt-> execute();
$lastname = $stmt->fetchAll();
					?>
					<h3 class="panel-title" value="<? echo $firstname?> <?php echo $lastname?>" </h3>

				

					<span style="float:right;"></span>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="row">
								<div class="col-xs-2 col-md-1">
									<!--<img src="http://placehold.it/80" class="img-circle img-responsive" alt=""/>-->
								</div>
								<div class="col-xs-10 col-md-11">
									<div>
										<?php
										//echo '<div id="contentgroup">';
										foreach ( $staticresult as $row ) {
											//echo '<div class="contentItem" dishe_id="' . '">';
											echo '<h3> <span>', $row[ 'reservationID' ], $row[ 'date' ], $row[ 'time' ], $row[ 'guestno' ], $row[ 'comment' ], $row[ 'functionID' ], '</h3> </span>';
											',
                            </div>
                        </div>
                    </li>
										

                            </div>
                        </div>
                    </li>';}
										?>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<a href="user_manage.php"><button type="button">Go back</button></a>
	<?php include('../view/pages/footer.php');?>
</body>