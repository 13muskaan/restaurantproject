<?php
include( 'navigationbar.php' );
?>
<?php

//$contentquery = "SELECT * FROM member WHERE memberID:id";
$contentquery = "SELECT * FROM member";
$stmt = $conn->prepare( $contentquery );
$stmt->execute();
$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
foreach ( $staticresult as $row )
	$stmt = $conn->prepare( $contentquery );
$stmt->bindParam( ':id', $_GET[ 'id' ], PDO::PARAM_INT );

$stmt->execute();
//$stmt->fetchAll();
$firstname = $stmt->fetchAll();
$stmt->execute();
$lastname = $stmt->fetchAll();
$stmt->execute();
$email = $stmt->fetchAll();
$stmt->execute();
$password = $stmt->fetchAll();
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
			<?php echo $firstname[0]['firstname']?> <span></span>
			<?php echo $lastname[0]['lastname']?>
		</h1>
		<div class="row">
			<!-- left column -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="text-center">
					<img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Upload a different photo...</h6>
					<input type="file" class="text-center center-block well well-sm">
				</div>
			</div>
			<!-- edit form column -->
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
				<!--<div class="alert alert-info alert-dismissable">
					<a class="panel-close close" data-dismiss="alert">×</a>
					<i class="fa fa-coffee"></i> This is an <strong>.alert</strong>. Use this to show important messages to the user.
				</div>-->
				<?php if (isset ($_SESSION ['error'])){
	if ($_SESSION['error'] != ""){
		echo 'div class="alert alert-danger"<strong>ERROR:</strong>' . $_SESSION['error'] . '</div>';
	}
}
				?>
				<form class="form-horizontal" role="form" method="post" id=action="../../control/memberprofile_updateprocess.php?id=<?php echo $_GET['id'];?>">
					<h4>Manage Your Profile.</h4>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="firstname">First name</label>
						<div class="col-lg-8">
							<input class="form-control" value="<?php echo $firstname[0]['firstname']?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="lastname">Last name</label>
						<div class="col-lg-8">
							<input class="form-control" value="<?php echo $lastname[0]['lastname']?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="email">Email</label>
						<div class="col-lg-8">
							<input class="form-control" value="<?php echo $email[0]['email']?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" id="password">Password</label>
						<div class="col-md-8">
							<input class="form-control" value="<?php echo $password[0]['password']?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<!--<a href="../../control/memberprofile_updateprocess.php" class="btn btn-primary" value="Save Changes" type="button" </a>-->
							<input class="btn btn-primary" value="save changes" type="button" onClick="../../control/memberprofile)updateprocess.php">

							<span></span>
							<input class="btn btn-default" value="Cancel" type="reset">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<h4 style="text-align: center;"> Your reservations.</h4>
	<?php
	$contentquery = "SELECT * FROM reservation LIMIT 3";
	//$conn = dbConnect();
	$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//echo '<div id="contentgroup">';
	foreach ( $staticresult as $row ) {
		//echo '<div class="contentItem" dishe_id="' . '">';
		echo '<h3><span>', 'Reservation ID:', $row[ 'reservationID' ], 'Date:', $row[ 'date' ], ' </span>';
		echo '<div class="mic-info"> <span> Time:', $row[ 'time' ], 'Guest No:', $row[ 'guestno' ], 'Comments:' . $row[ 'comment' ], '
                                    </h3>
                                </span>';
	}
	?>
	</div>
	<?php include('footer.php');?>
</body>

</html>