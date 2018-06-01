<title>FUNCTION MANAGE</title>
</head>
<?php include('../pages/navigationbar.php'); ?>
<body>
<div class="container">
		<div class="row">
			<div class="panel panel-default widget">
				<div class="panel-heading">
					<h3 class="panel-title">Function</h3>

				</div>
				<div class="panel-body">
					<ul class="list-group">
						
										<?php
										include( '../../model/dbconnection.php' );
										$contentquery = "SELECT * FROM function";
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
											echo '<h3><span>', $row[ 'functionID' ], $row[ 'functiontype' ], ' </span>';
											echo '<div class="mic-info"> <span> Function Description:', $row[ 'functiondescription' ], 'ApproverID:', $row[ 'userID' ], '
                                    </div>
									</div>';
											echo '<a href="function_manage_deleteprocess.php?id=' . $row[ 'userID' ] . '" class="deletebutton"><button type="btn">Delete</button></a>';
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