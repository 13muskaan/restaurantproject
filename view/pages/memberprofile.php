<?php
include( 'navigationbar.php' );
?>
<?php

//$contentquery = "SELECT * FROM member WHERE memberID:id";
$contentquery = "SELECT * FROM member WHERE memberID=:id";
$stmt = $conn->prepare( $contentquery );
$stmt->bindParam( ':id', $_SESSION[ 'userID' ], PDO::PARAM_INT );

$stmt->execute();
$results = $stmt->fetchAll();

$firstname = $results[ 0 ][ 'firstname' ];
$lastname = $results[ 0 ][ 'lastname' ];
$email = $results[ 0 ][ 'email' ];
$password = $results[ 0 ][ 'password' ];

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
		<div class="header" style="background-image: url(../img/leavesbheader.jpg);">
  <div class="jumbotron">
    <h1 style="text-align:center;color:black;"><?php echo $firstname?> <span></span>
			<?php echo $lastname?></h1>
  </div>     
</div>

	<div class="container" style="padding-top: 1px;">
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
				<?php if (isset ($_SESSION ['error'])){
	if ($_SESSION['error'] != ""){
		echo 'div class="alert alert-danger"<strong>ERROR:</strong>' . $_SESSION['error'] . '</div>';
	}
}
				?>
				<form class="form-horizontal" role="form" method="post" id=action="../../control/memberprofile_updateprocess.php?id=<?php echo $_SESSION['userID'];?>">
					<h4 style="text-align: right; margin-right: 70px;">Manage Your Profile.</h4>
					<br>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="firstname">First name</label>
						<div class="col-lg-8">
							<input class="form-control" value="<?php echo $firstname?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="lastname">Last name</label>
						<div class="col-lg-8">
							<input class="form-control" value="<?php echo $lastname?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="email">Email</label>
						<div class="col-lg-8">
							<input class="form-control" style="background-color: white;" value="<?php echo $email?>" type="text" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" id="password">Current Password</label>
						<div class="col-md-8">
							<input class="form-control" style="background-color: white;" value="<?php echo $password?>" type="password" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" id="newpassword">Update Password</label>
						<div class="col-md-8">
							<input class="form-control" value="" placeholder="new password..." type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<!--<input class="btn btn-primary" value="save changes" type="button" id="update userinfo" onClick="../../control/memberprofile_updateprocess.php">-->
							<button class="btn btn-primary" value="submit" id="updateuserinfo"><a href="../../control/memberprofile_updateprocess.php"></a>Save</button>

							<span></span>
							<input class="btn btn-default" value="Cancel" type="reset">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container" style="text-align: center;">
		<h4 style="text-align: right; margin-right: 70px;"> Your Reservations.</h4>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Reservation ID</th>
					<th>Function ID</th>
					<th> Date</th>
					<th>Time</th>
					<th> Guest No.</th>
					<th> Comments</th>
				</tr>
			</thead>
			<tbody>
				<?php 
		$contentquery = "SELECT * FROM reservation WHERE date >= CURRENT_DATE AND memberID = ". $_SESSION["userID"];
			$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//echo '<div id="contentgroup">';
	foreach ( $staticresult as $row ) {
		echo '<tr>', '<td>', $row[ 'reservationID' ], '</td>';
		echo '<td>', $row['functionID'], '</td>';
	echo '<td>', $row['date'], '</td>';
		echo '<td>', $row['time'], '</td>';
		echo '<td>', $row['guestno'], '</td>';
		echo '<td>', $row['comment'], '</td>';}
		?>
			</tbody>
		</table>
	</div>
	</div>
	<br>
	<?php include('footer.php');?>
</body>

</html>