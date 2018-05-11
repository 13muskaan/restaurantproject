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

		<form id="register_form">
			<h1>Registration Form</h1>
			<!-- One "tab" for each step in the form: -->
				<!--Please upload a Display Image.
		<input type="file" name="fileToUpload" id="fileToUpload" size="50" onChange="displayImageError()"><br>
			<div id="imageAlert" class="alert alert-danger" style="display: none;"></div>-->
			<div>Name
				<p><input id="firstNameInput" placeholder="First name..." oninput="displayFirstNameError()" name="firstname">
				</p>
				<div id="firstNameAlert" class="alert alert-danger" style="display: none;"></div>

				<p><input id="lastNameInput" placeholder="Last name..." oninput="displayLastNameError()" name="lastname">
				</p>
				<div id="lastNameAlert" class="alert alert-danger" style="display: none;"></div>

				Email & Password (*note email will be your username)


				<div class="form-group">
					<div class="input-group">

						<input id="emailInput" placeholder="Email..." onchange="displayEmailError()" name="email">
						<span class="input-group-addon">
							<div id="emailLoader" class="textloadercontainer" align="right">
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

				<p><input id="passwordInput" placeholder="Password..." type="password" oninput="displayPasswordError()" name="password" required>
				</p>

				<div id="passwordAlert" class="alert alert-danger" style="display: none;"></div>

			</div>
			<p></p>
		</form>

		<div style="overflow:auto;">
				<div id="container" style="float:none">
					<div style="float: left"><input id="firstNameCheck" type="checkbox" class="checkerBox" disabled>First Name</input>
					</div>
					<div style="float: left"><input id="lastNameCheck" type="checkbox" class="checkerBox" disabled>Last Name</input>
					</div>
					<div style="float: left"><input id="eMailCheck" type="checkbox" class="checkerBox" disabled>eMail</input>
					</div>
					<div style="float: left"><input id="passwordCheck" type="checkbox" class="checkerBox" disabled>Password</input>
					</div>
				</div>
				<div style="float:right; display: inline-block">

					<button id="submitButton" type="submit" onClick="submitData()" disabled>Submit</button>

				</div>
			</div>
		
		<br>
		<!-- Single line buffer -->
	</div>

	<!-- /.container -->


	<script src="../javascript/FormValidation.js"></script>
</body>
<?php include('footer.php');?>

</html>