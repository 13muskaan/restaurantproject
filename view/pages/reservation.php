<?php include('navigationbar.php'); //include('../../control/session_start.php');?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MY BANYAN TREE | RESERVATION</title>
	<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<script src="../javascript/reservation.js" type="text/javascript"></script>-->

	<!-- frame work by bootsrap-->
	<!-- Include jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
		
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		/*reservation.php*/
		
		p {
			color: #black;
			font-family: 'Raleway', sans-serif;
			font-size: 18px;
			font-weight: 500;
			line-height: 32px;
			margin: 0 0 24px;
			text-align: center;
		}
	</style>

</head>

<body>
	<h2 style="text-align: center;">Reservation Booking Form</h2>
	<p style="text-align: center;"> For any inquiries, please contact us on this number 07 3358 4006</p>
	<p> You are not logged in. Please login, in order to make a reservation.
		<a href="login.php" style="float:none;"><button type="button">Login</button></a>
	</p>

</body>
<?php  include('footer.php'); ?>
</body>

</html>