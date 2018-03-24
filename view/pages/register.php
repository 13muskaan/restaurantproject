<?php include('navigationbar.php');?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MY BANYAN TREE | REGISTER</title>
	<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<style>
		* {
			box-sizing: border-box;
		}
		
		body {
			background-color: #f1f1f1;
		}
		
		#regForm {
			background-color: #ffffff;
			margin: 100px auto;
			font-family: Raleway;
			padding: 40px;
			width: 70%;
			min-width: 300px;
		}
		
		h1 {
			text-align: center;
		}
		
		input {
			padding: 10px;
			width: 100%;
			font-size: 17px;
			font-family: Raleway;
			border: 1px solid #aaaaaa;
		}
		/* Mark input boxes that gets an error on validation: */
		
		input:invalid {
			border: 3px solid #FF8888;
		}
		
		input:valid{
			border: 3px solid #88FF88;
			
		}
		/* Hide all steps by default: */
		
		.tab {
			display: none;
		}
		
		button {
			background-color: #4CAF50;
			color: #ffffff;
			border: none;
			padding: 10px 20px;
			font-size: 17px;
			font-family: Raleway;
			cursor: pointer;
		}
		
		button:hover {
			opacity: 0.8;
		}
		
		#prevBtn {
			background-color: #bbbbbb;
		}
		
		error {
			width:100%;
			background-color: #A80002;
			color: #FF7073;
			border: 3px solid #FF0004;
		}
		/* Make circles that indicate the steps of the form: */
		
		.step {
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbbbbb;
			border: none;
			border-radius: 50%;
			display: inline-block;
			opacity: 0.5;
		}
		
		.step.active {
			opacity: 1;
		}
		/* Mark the steps that are finished and valid: */
		
		.step.finish {
			background-color: #4CAF50;
		}
	</style>
</head>

<body>
	
	<?php
	if (isset($_SESSION['error'])) {
		if ($_SESSION['error'] != ""){
			
			$fname = $_SESSION['previousPOST']['firstname'];
			$lname = $_SESSION['previousPOST']['lastname'];
		}
	}
	?>
	
	<!-- register page here-->
	<div class="container">
		
		<form id="register_form" action="../../control/register_process.php" method="post">
			<h1>Registration Form</h1>
			<!-- One "tab" for each step in the form: -->
			<div>Name
				<p><input placeholder="first name" oninput="this.className = 'input'" name="firstname" pattern="[a-zA-Z\- ]*" title="Letters, dashes and spaces only." value='<?php if (isset($fname)) {echo $fname;} ?>' required>
				</p>
				<p><input placeholder="last name" oninput="this.className = 'input'" name="lastname" pattern="[a-zA-Z\- ]*" title="Letters, dashes and spaces only." value='<?php if (isset($lname)) {echo $lname;} ?>' required>
				</p>
				Email & Password (*note email will be your username)
				
				<p><input placeholder="e-mail..." oninput="this.className = 'input'" name="email" pattern="[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.(com|org|edu|gov|info).?[a-zA-Z\.]*" title="Correct eMail format." required>
				</p>
				
				
				<p><input placeholder="password" type="password" oninput="this.className = ''" name="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}" title="Must have at least:
					- 8 characters
					- 1 lowercase letter
					- 1 upper case letter
					- 1 number" required>
				</p>
				<?php
				if ( isset( $_SESSION[ 'error' ] ) ) {
					if ( $_SESSION[ 'error' ] != "" ) {
						echo '<div class="alert alert-danger"><strong>ERROR: </strong>'.$_SESSION['error'].'</div>';
						$_SESSION[ 'error' ] = "";
					}
				}
				?>
				
			</div>
			<div style="overflow:auto;">
				<div style="float:right;">
					
					<button type="submit">Submit</button>

				</div>
			</div>
		</form>
		
	</div>

	<!-- /.container -->

</body>
<?php include('footer.php');?>

</html>