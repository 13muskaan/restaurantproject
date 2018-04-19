<?php
include( 'navigationbar.php' ); include( 'footer.php' );
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MY BANYAN TREE | CHANGE PASSWORD</title>

</head>

<body>

	<div class="container">
		<form class="well form-horizontal" action="../../control/userinfo_update_process.php" method="post" id="register_form">
			<fieldset>

				<!-- Form Name -->
				<legend>
					<center>
						<h2><b>Change Password</b></h2>
						<p>Choose a new password!</p>
					</center>
				</legend><br>



				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Password</label>
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="old_password" placeholder="Current Password" class="form-control" type="password">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">New Password</label>
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="new_password" placeholder="New Password" class="form-control" type="password">
						</div>
					</div>
				</div>

				<!-- Select Basic -->

				<!-- Success message -->
				<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4"><br>
						<button type="submit" class="btn btn-warning"> SUBMIT <span class="glyphicon glyphicon-send"></span></button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>

</body>

</html>