<?php include('navigationbar.php');?>


	<title>MY BANYAN TREE | REGISTER</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

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

		<form id="register_form" action="../../control/register_process.php" method="post">
			<h1>Registration Form</h1>
			<!-- One "tab" for each step in the form: -->
			<div>Name
				<p><input id="firstNameInput" placeholder="First name..." oninput="displayFirstNameError()" name="firstname">
				</p>
				<div id="firstNameAlert" class="alert alert-danger" style="display: none;"></div>

				<p><input id="lastNameInput" placeholder="Last name..." oninput="displayLastNameError()" name="lastname">
				</p>
				<div id="lastNameAlert" class="alert alert-danger" style="display: none;"></div>

				Email & Password (*note email will be your username)

				<p><input id="emailInput" placeholder="Email..." onchange="displayEmailError()" name="email">
				</p>
				<div id="emailAlert" class="alert alert-danger" style="display: none;"></div>

				<p><input id="passwordInput" placeholder="Password..." type="password" oninput="displayPasswordError()" name="password" required>
				</p>

				<div id="passwordAlert" class="alert alert-danger" style="display: none;"></div>

			</div>
			<p></p>
			<div style="overflow:auto;">
				<div id="container" style="float:none">
						<div style="float: left"><input id="firstNameCheck" type="checkbox" class="checkerBox" disabled>First Name</input></div>
					<div style="float: left"><input id="lastNameCheck" type="checkbox" class="checkerBox" disabled>Last Name</input></div>
					<div style="float: left"><input id="eMailCheck" type="checkbox" class="checkerBox" disabled>eMail</input></div>
					<div style="float: left"><input id="passwordCheck" type="checkbox" class="checkerBox" disabled>Password</input></div>
						</div>
				<div style="float:right; display: inline-block">
					
					<button id="submitButton" type="submit">Submit</button>
					
				</div>
			</div>
		</form>
		<p></p> <!-- Single line buffer -->
	</div>

	<!-- /.container -->



</body>
<?php include('footer.php');?>

</html>