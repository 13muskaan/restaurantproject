<?php include('navigationbar.php'); ?>
<!doctype html>
<html>

<head>
	<title>MY BANYAN TREE | LOGIN</title>

	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			text-align: center;
		}
		
		form {
			border: 3px solid black;
		}
		
		input[type=text],
		input[type=password] {
			/*width: 100%; original */
			width: 30%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			text-align: center;
		}
		
		button {
			background-color: #D93033;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 10%;
			border-radius: 25px;
		}
		
		button:hover {
			opacity: 0.8;
		}	
.
		.container {
			width: 20%;
			padding: 16px;
		}
				
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}
		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}
		
		span.psw {
			float: right;
			padding-top: 16px;
		}
		/* Change styles for span and cancel button on extra small screens */
		
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
	</style>
</head>
<br> <br>
<body>
	<h2>Login</h2>
	<p> Welcome Back! Please fill in your user cresidentials.</p>
	<?php
	if ( in_Array( 'LoginMsg', $_POST ) ) {
		echo $_POST[ 'LoginMsg' ];
	}

	if ( isset( $_SESSION[ 'lastEmail' ] ) ) {
		$email = $_SESSION[ 'lastEmail' ];
	}
	?>

	<div id="loader" class="loadercontainer" align="center" style="display: none;">

		<svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
			<circle cx="170" cy="170" r="160" stroke="#E2007C"/>
			<circle cx="170" cy="170" r="135" stroke="#404041"/>
			<circle cx="170" cy="170" r="110" stroke="#E2007C"/>
			<circle cx="170" cy="170" r="85" stroke="#404041"/>
		</svg>

	</div>
	<div id="form">
		<form action="../../control/login_process.php" method="post" id="login_form">

<div class="container" align="center">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<img src="<?php echo $image ['$_SESSION']?>" class="avatar img-circle img-thumbnail" alt="avatar">

					</div>
				</div
				<br><br><br>
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" value="<?php if (isset($email)) {echo $email;}?>" required>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<?php
				if ( isset( $_SESSION[ 'error' ] ) ) {
					if ( $_SESSION[ 'error' ] != "" ) {
						echo '<div class="alert alert-danger"><strong>ERROR: </strong>' . $_SESSION[ 'error' ] . '</div>';
						$_SESSION[ 'error' ] = "";
					}
				}
				?>

				<button type="submit" onClick="SubmitButton()">Login</button>

			</div>
		</form>
	</div>
	<script src="../javascript/login.js" type="text/javascript"></script>
	<?php include('footer.php');?>
</body>

</html>