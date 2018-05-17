<?php
include( 'navigationbar.php' );
?>
<?php

//$contentquery = "SELECT * FROM member WHERE memberID:id";
$contentquery = "SELECT * FROM users WHERE userID=:id";
$stmt = $conn->prepare( $contentquery );
$stmt->bindParam( ':id', $_SESSION[ 'userID' ], PDO::PARAM_INT );

$stmt->execute();
$results = $stmt->fetchAll();

$firstname = $results[ 0 ][ 'firstname' ];
$lastname = $results[ 0 ][ 'lastname' ];
$email = $results[ 0 ][ 'email' ];
$password = $results[ 0 ][ 'password' ];
$image = $results[0]['imageLink'];

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
		              /*button to go up*/
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color:#AD1C1E;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 80px;
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
					<img src="<?php echo $image ?>" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Upload a different photo...</h6>
					<form action="../../control/upload_file.php" method="POST" enctype="multipart/form-data">
					<input type="file" name="image" id="fileToUpload" size="50" class="text-center center-block well well-sm">
						
						<button type="submit" class="btn btn-primary" id="imageSubmit">Submit Image</button>
					</form>
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
							<input class="form-control" style="background-color: white;" value="<?php echo $email?>" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" id="password">Current Password</label>
						<div class="col-md-8">
							<input class="form-control" style="background-color: white;" value="<?php echo $password?>" type="password">
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
					<th style="text-align: center;">Reservation ID</th>
					<th style="text-align: center;">Function Type</th>
					<th style="text-align: center;"> Date</th>
					<th style="text-align: center;">Time</th>
					<th style="text-align: center;"> Guest No.</th>
					<th style="text-align: center;"> Comments</th>
				</tr>
			</thead>
			<tbody>
				<?php 
		$contentquery = "SELECT reservation.reservationID, functions.functiontype, reservation.date, reservation.time , reservation.guestno , reservation.comment  FROM reservation INNER JOIN functions ON reservation.functionID = functions.functionID WHERE date >= CURRENT_DATE AND memberID = ". $_SESSION["userID"];
			$stmt = $conn->prepare( $contentquery );
	$stmt->execute();
	$staticresult = $stmt->fetchAll( PDO::FETCH_ASSOC );
	//echo '<div id="contentgroup">';
	foreach ( $staticresult as $row ) {
		echo '<tr>', '<td>', $row[ 'reservationID' ], '</td>';
		echo '<td>', $row['functiontype'], '</td>';
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
	 <button onclick="topFunction()" id="myBtn" title="Go to top">Scroll Up</button>
      <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
      </script>
</body>

</html>