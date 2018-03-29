<?php
include( 'navigationbar.php' );

?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MY BANYAN TREE | RESERVATION</title>
	<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>


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
	</style>
	<script>
		$( document ).ready( function () {
			var date_input = $( 'input[name="date"]' ); //our date input has the name "date"
			var container = $( '.bootstrap-iso form' ).length > 0 ? $( '.bootstrap-iso form' ).parent() : "body";
			date_input.datepicker( {
				format: 'YYYY-MM-DD',
				container: container,
				todayHighlight: true,
				autoclose: true,
				startDate: "+0D"
			} )
		} )
	</script>
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
			<select id="guestNo" name="guestNo">
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
			</select>


			<label class="control-label" for="date">Date</label>
			<input class="form-control" id="date" name="date" placeholder="Select a date: YYYY-MM-DD" type="text"/>


			<!-- Form code ends -->
	<label for="time">Select time</label>
	<select id="time" name="time">
		<option value="09:00:00.0000">9:00am</option>
		<option value="12:00:00.0000">12:00pm</option>
		<option value="17:00:00.0000">5:00pm</option>
	</select>

	<label for="subject">Comment</label>
	<textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>

	<input type="submit" value="Submit">
	</form>
	</div>
</body>';
	}
	
	?>
</body>
<?php  include('footer.php'); ?>
</body>

</html>