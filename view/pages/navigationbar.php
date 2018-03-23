<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">MY BANYAN TREE (LOGO)</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="menu.php">Menu</a>
				</li>
				<li class="active"><a href="function.php">Function</a>
				</li>
				<li class="active"><a href="review.php">Review</a>
				</li>
				<li class="active"><a href="contact.php">Contact</a>
				</li>
				<li class="active"><a href="reservation.php">Reservation</a>
				</li>
				<?php
				session_start();
				
				$_SESSION['user_type'] = 'anon';
				
				
					?>
				
			</ul>
		<?php
		if ($_SESSION['user_type'] == 'anon') {
			echo '<ul class="nav navbar-nav navbar-right" style="align-content: center padding:10%" ;>
			<li class="active"><a href="register.php">Register</a> </li>
				
				<li class="active"><a href="login.php">Login</a> </li>
			</ul>';
} else {
	echo '<ul class="nav navbar-nav navbar-right" style="align-content: center padding:10%" ;> <li class="active"><a href="logout.php">Logout</a>';
}
		?>	
		
		</div>
	</nav>

</body>
</html>