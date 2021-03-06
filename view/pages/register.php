<?php include('navigationbar.php');?>


<title>MY BANYAN TREE | REGISTER</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<script src="../javascript/register.js" type="text/javascript"></script>

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
		min-width: 00px;
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
	
	input.invalid {
		border: 3px solid #FF8888;
	}
	
	input.valid {
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
		width: 100%;
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

<body onload="hideAlertBoxes()">



	<!-- register page here-->
	<div class="container">
		<div id="errorDiv" class="alert alert-danger" style="display:none;"></div>

		<div id="loader" class="loadercontainer" align="center" style="display: none;">

			<svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
				<circle cx="170" cy="170" r="160" stroke="#E2007C"/>
				<circle cx="170" cy="170" r="135" stroke="#404041"/>
				<circle cx="170" cy="170" r="110" stroke="#E2007C"/>
				<circle cx="170" cy="170" r="85" stroke="#404041"/>
			</svg>

		</div>

		<form id="register_form" action="../../control/register_process.php" method="post">
			<h1>Register</h1>
			<p style="text-align:center;"> Please fill in your details, to create an account. <br><strong> Note* your email will be your username</strong>
			</p>
			<div>
				<p style="text-align:right">Your first & last name.</p>
				<p>
					<div class="input-group">
						<input id="firstNameInput" placeholder="First name..." oninput="displayFirstNameError()" name="firstname">
						<span class="input-group-addon">
							<span id="firstNameGlyph" class="glyphicon glyphicon-minus"></span>
					
						</span>
					</div>
				</p>
				<div id="firstNameAlert" class="alert alert-danger" style="display: none;"></div>
				<p>
					<div class="input-group">
						<input id="lastNameInput" placeholder="Last name..." oninput="displayLastNameError()" name="lastname">
						<span class="input-group-addon">
							<span id="lastNameGlyph" class="glyphicon glyphicon-minus"></span>
					

						</span>
					</div>
				</p>
				<div id="lastNameAlert" class="alert alert-danger" style="display: none;"></div>
				<p style="text-align:right"> Your email & password. </p>
				<div class="form-group">
					<div class="input-group">

						<input id="emailInput" placeholder="Email..." onchange="displayEmailError()" name="email">
						<span class="input-group-addon">
							<span id= "emailGlyph" class="glyphicon glyphicon-minus"></span>
					


						<div id="emailLoader" class="textloadercontainer" align="right" style="display: none;">
							<svg class="textloader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340" width="30px">
								<circle class="text" cx="170" cy="170" r="160" stroke="#E2007C"/>
								<circle cx="170" cy="170" r="135" stroke="#404041"/>
								<circle cx="170" cy="170" r="110" stroke="#E2007C"/>
								<circle cx="170" cy="170" r="85" stroke="#404041"/>
							</svg>
						</div>
						</span>
					</div>


				</div>

				<p>
				</p>


				<div id="emailAlert" class="alert alert-danger" style="display: none;"></div>

				<p>
					<div class="input-group"><input id="passwordInput" placeholder="Password..." type="password" oninput="displayPasswordError()" name="password" required>
						<span class="input-group-addon">
							<span id="passwordGlyph" class="glyphicon glyphicon-minus"></span>
					

						</span>
					</div>
				</p>

				<div id="passwordAlert" class="alert alert-danger" style="display: none;"></div>

			</div>
			<div style="float:right; display: inline-block; padding: 10px;">

				<button id="submitButton" type="submit" disabled>Submit</button>

			</div>
		</form>

		<br>
		<!-- Single line buffer -->
	</div>

	<!-- /.container -->


	<script src="../javascript/FormValidation.js"></script>
</body>
<?php include('footer.php');?>

</html>