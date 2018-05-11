<?php
include( 'navigationbar.php' );
?>

<!doctype html>
<html>

<head>
	<title>MY BANYAN TREE | RESERVATION</title>

	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		
		input[type=text],
		select,
		textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}
		
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		input[type=submit]:hover {
			background-color: #45a049;
		}
		
		input[type=submit]:disabled {
			background-color: #A3B5A4;
		}
		
		.formcontainer {
			align-self: center;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			width: 50%;
			padding: 20px;
			margin: 0 auto;
		}
		
		.slidecontainer {
			width: 100%;
		}
		
		.slider {
			-webkit-appearance: none;
			width: 100%;
			height: 5px;
			border-radius: 5px;
			background: #d3d3d3;
			outline: none;
			opacity: 0.7;
			-webkit-transition: .2s;
			transition: opacity .2s;
		}
		
		.slider:hover {
			opacity: 1;
		}
		
		.slider::-webkit-slider-thumb {
			-webkit-appearance: none;
			appearance: none;
			width: 15px;
			height: 15px;
			border: 3px solid #347737;
			border-radius: 50%;
			background: #4CAF50;
			cursor: pointer;
		}
		
		.slider::-moz-range-thumb {
			width: 25px;
			height: 25px;
			border-radius: 50%;
			background: #4CAF50;
			cursor: pointer;
		}
		
		.timeSelect {
			border: 4px solid #DDD;
			border-radius: 4px;
			background: #EEE;
		}
		/*loader*/
		
		.loadercontainer {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			min-height: 100vh;
			background-color: #ededed;
		}
		
		.loader {
			max-width: 15rem;
			width: 100%;
			height: auto;
			stroke-linecap: round;
		}
		
		circle {
			fill: none;
			stroke-width: 3.5;
			-webkit-animation-name: preloader;
			animation-name: preloader;
			-webkit-animation-duration: 3s;
			animation-duration: 3s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out;
			-webkit-transform-origin: 170px 170px;
			transform-origin: 170px 170px;
			will-change: transform;
		}
		
		circle:nth-of-type(1) {
			stroke-dasharray: 550;
		}
		
		circle:nth-of-type(2) {
			stroke-dasharray: 500;
		}
		
		circle:nth-of-type(3) {
			stroke-dasharray: 450;
		}
		
		circle:nth-of-type(4) {
			stroke-dasharray: 300;
		}
		
		circle:nth-of-type(1) {
			-webkit-animation-delay: -0.15s;
			animation-delay: -0.15s;
		}
		
		circle:nth-of-type(2) {
			-webkit-animation-delay: -0.3s;
			animation-delay: -0.3s;
		}
		
		circle:nth-of-type(3) {
			-webkit-animation-delay: -0.45s;
			-moz-animation-delay: -0.45s;
			animation-delay: -0.45s;
		}
		
		circle:nth-of-type(4) {
			-webkit-animation-delay: -0.6s;
			-moz-animation-delay: -0.6s;
			animation-delay: -0.6s;
		}
		
		@-webkit-keyframes preloader {
			50% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		
		@keyframes preloader {
			50% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		/*login modal*/
		
		@import url(http://fonts.googleapis.com/css?family=Roboto);
	</style>

	<style>
		/* MODAL STYLES */
		
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		/* Full-width input fields */
		
		input[type=text],
		input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		/* Set a style for all buttons */
		
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}
		
		button:hover {
			opacity: 0.8;
		}
		/* Extra styles for the cancel button */
		
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}
		/* Center the image and position the close button */
		
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}
		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}
		
		.mcontainer {
			padding: 16px;
		}
		
		span.psw {
			float: right;
			padding-top: 16px;
		}
		/* The Modal (background) */
		
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
			padding-top: 60px;
		}
		/* Modal Content/Box */
		
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto;
			/* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 80%;
			/* Could be more or less, depending on screen size */
			border-radius: 10px;
		}
		/* The Close Button (x) */
		
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}
		
		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}
		/* Add Zoom Animation */
		
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}
		
		@-webkit-keyframes animatezoom {
			from {
				-webkit-transform: scale(0)
			}
			to {
				-webkit-transform: scale(1)
			}
		}
		
		@keyframes animatezoom {
			from {
				transform: scale(0)
			}
			to {
				transform: scale(1)
			}
		}
		/* Change styles for span and cancel button on extra small screens */
		
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
		}
	</style>


	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<h2 style="text-align: center;">Reservation Form</h2>
	<p style="text-align: center;"> For any inquiries, please contact us on this number 07 3358 4006 <br> <strong> *Note. This form is only to book your reservation. Prior to your booking date, please finalise all your function requirements no longer than a week. </strong>
	</p>



	<?php // logged in then show form.
	if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'anon') {
		echo '<p style="text-align: center;"> You are not logged in. Please login, or register in order to make a reservation. <br>
		<!--<a href="login.php" style="float:none;"><button type="button">Login</button></a>
		<a href="register.php" style="float:none;"><button type="button">Register</button></a>-->

		<button class="btn btn-primary" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Login</button></p>

		<div id="id01" style="display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
			padding-top: 60px;">

			<div class="modal-content animate" action="/action_page.php">
				<div id="loader" class="loadercontainer" align="center" style="display: none;">

					<svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
						<circle cx="170" cy="170" r="160" stroke="#E2007C"/>
						<circle cx="170" cy="170" r="135" stroke="#404041"/>
						<circle cx="170" cy="170" r="110" stroke="#E2007C"/>
						<circle cx="170" cy="170" r="85" stroke="#404041"/>
					</svg>

				</div>
				<div id="form">
					<form action="../../control/login_process.php?originpage=reservation" method="post" id="login_form">

						<div class="mcontainer">
							<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt=""><br>
							<label for="email"><b>Email</b></label>
							<input type="text" placeholder="Enter Email" name="email" style="height: 20px;" required>

							<label for="psw"><b>Password</b></label>
							<input style="height: 20px;" type="password" placeholder="Enter Password" name="psw" required>

							<button type="submit" onClick="SubmitButton()">Login</button>

						</div>
					</form>
					
					
				</div>
				<script src="../javascript/login.js" type="text/javascript"></script>
<div class="mcontainer" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtn">Cancel</button>
				</div>
				
			</div>
		</div>
';
	} else {
		echo '<div class="formcontainer">';
		
		
				if ( isset( $_SESSION[ 'error' ] ) ) {
					if ( $_SESSION[ 'error' ] != "" ) {
						echo '<div class="alert alert-danger"><strong>ERROR: </strong>'.$_SESSION['error'].'</div>';
					}
				}
		
				if (isset($_SESSION['message'])) {
					if ($_SESSION['message'] != '') {
						echo '<div class="alert alert-success"><strong>Success! </strong>'.$_SESSION['message'].'</div>';
					}
				}
		
		
		echo '<form action="../../control/reservation_process.php" method="post">

			


			<label class="control-label" for="date">Date</label>
			<input class="form-control" id="date" name="date" placeholder="Select a date: YYYY-MM-DD" type="text">

	
	<label for="time">Select time</label>
	<div id="selectTimeMessage" class="alert alert-warning">Please select a date first.
	</div>
	
	<div id="loader" class="loadercontainer" align="center" style="display: none;">
	
	<svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
		 <circle cx="170" cy="170" r="160" stroke="#E2007C"/>
		 <circle cx="170" cy="170" r="135" stroke="#404041"/>
		 <circle cx="170" cy="170" r="110" stroke="#E2007C"/>
		 <circle cx="170" cy="170" r="85" stroke="#404041"/>
	</svg>
	
</div>
	
	<div style="display: none;" id="timeSelectDiv">
	<div>
	<label class="radio-inline">
      <input type="radio" name="time" onChange="EnableFunction()" value="09:00:00" id="timeCheckboxMor" disabled>Morning<br>9am
    </label>
    <label class="radio-inline">
      <input type="radio" name="time" onChange="EnableFunction()" value="12:00:00" id="timeCheckboxAft" disabled>Afternoon<br>12pm
    </label>
    <label class="radio-inline">
      <input type="radio" name="time" onChange="EnableFunction()" value="17:00:00" id="timeCheckboxEve" disabled>Evening<br>5pm
    </label>
	</div>
	</div>
	
	<div style="display: none" id="functionSelectDiv">
	<label for="functions">Select Function Type</label>
			<select id="functionID" name="functionID"  onChange="EnableSubmit()">
				<option value="" disabled selected>Function Type...</option>
				<option value="1">Anniversary</option>
				<option value="2">Birthday</option>
				<option value="3">Corporate</option>
			</select>
</div>
<div style="display: none" id="submitDiv">
			<label for="guests">No. of guests</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="30" max="120" value="30" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div>
	<br>


	<label for="subject">Comment</label>
	<textarea id="comment" name="comment" placeholder="Write something.." style="height:200px; width:100%"></textarea>

	<br>
	</div>
	<input type="submit" value="Submit" id="submit" disabled>
	</form>
	</div><br>';
	}
	?>
	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<script type="text/javascript" src="../javascript/bootstrap-datepicker.js"></script>
	<script src="../javascript/reservation.js" type="text/javascript"></script>

	<script>
		// Get the modal
		var modal = document.getElementById( 'id01' );

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function ( event ) {
			if ( event.target == modal ) {
				modal.style.display = "none";
			}
		}
	</script>

	<?php  include('footer.php'); ?>
	
	
</body>

</html>