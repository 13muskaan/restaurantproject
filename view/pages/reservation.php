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
		
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
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
		
		.container {
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
	</style>
</head>

<body>
	<h2 style="text-align: center;">Reservation Form</h2>
	<p style="text-align: center;"> For any inquiries, please contact us on this number 07 3358 4006</p>

	<?php // logged in then show form.
	if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'anon') {
		echo '<p> You are not logged in. Please login, or register in order to make a reservation.
		<a href="login.php" style="float:none;"><button type="button">Login</button></a>
		<a href="register.php" style="float:none;"><button type="button">Register</button></a>
	</p>';
	} else {
		echo '<div class="container">';
		
		
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

			<label for="functions">Function Type</label>
			<select id="functionID" name="functionID">
				<option value="1">Anniversary</option>
				<option value="2">Birthday</option>
				<option value="3">Corporate</option>
			</select>

			<label for="guests">No. of guests</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="30" max="120" value="30" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div>


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
	
	<div style="display: none" id="timeSelectDiv">
	<div class="container">
	<label class="radio-inline">
      <input type="radio" name="time" onclick="EnableSubmit()" value="09:00:00" id="timeCheckboxMor" disabled>Morning<br>9am
    </label>
    <label class="radio-inline">
      <input type="radio" name="time" onclick="EnableSubmit()" value="12:00:00" id="timeCheckboxAft" disabled>Afternoon<br>12pm
    </label>
    <label class="radio-inline">
      <input type="radio" name="time" onclick="EnableSubmit()" value="17:00:00" id="timeCheckboxEve" disabled>Evening<br>5pm
    </label>
	</div>
	</div>
	
	
	<br>

	<label for="subject">Comment</label>
	<textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>

	<input type="submit" value="Submit" id="submit" disabled>
	</form>
	</div>
</body>';
	}
	?>
	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<script type="text/javascript" src="../javascript/bootstrap-datepicker.js"></script>
	<script src="../javascript/reservation.js" type="text/javascript"></script>
	<?php  include('footer.php'); ?>
</body>

</html>