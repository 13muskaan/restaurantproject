s
<head>
	<meta charset="utf-8">
	<title>USER MANAGE</title>
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
					<h3 class="panel-title">Members</h3>

					<span style="float:right;">
						<?php echo '<a href="user_manage_insertform.php?id=" class="insertbutton"><button type="btn">Insert</button></a>';?> </span>
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
										include( '../model/dbconnection.php' );
										$contentquery = "SELECT * FROM member";
										//$conn = dbConnect();
										$stmt = $conn->prepare( $contentquery );
										$stmt->execute();
										$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
										//echo '<div id="contentgroup">';
										foreach( $staticresult as $row ) {
											//echo '<div class="contentItem" dishe_id="' . '">';
											echo '<h3><span>', $row[ 'firstname' ], $row[ 'lastname' ], ' </span>';
											echo '<div class="mic-info"> <span> Member ID:', $row[ 'memberID' ], 'email:', $row[ 'email' ], 'password:' . $row[ 'password' ], '
                                    </div>
                                </div>';
											echo '<a href="user_manage_delete.php?id=' . $row[ 'memberID' ] . '" class="deletebutton"><button type="btn">Delete</button></a>';
											echo '<a href="user_manage_editform.php?id=' . $row[ 'memberID' ] . '" class="editbutton"><button type="btn">Edit</button></a>';
											echo '<a href="user_manage_viewreservation.php?id=' . $row[ 'memberID' ] . '" class="viewreservation"><button type="btn">View</button></a>

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
	<?php include('../view/pages/footer.php');?>
</body>