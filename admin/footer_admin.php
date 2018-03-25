<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>footer</title>
</head>

<body>
	<!--Footer-->
	<footer class="page-footer font-small blue pt-4 mt-4">
		<!--Footer Links-->
		<div class="container-fluid text-center text-md-left" style="background-color: black;color:#AFAFAF;">
			<div class="row">

				<!--First column-->
				<div class="col-md-6">
					<h5 class="text-uppercase">Footer Content</h5>
					<p>Here you can use rows and columns here to organize your footer content.</p>
				</div>
				<!--/.First column-->

				<!--Second column-->
				<div class="col-md-6">
					<h5 class="text-uppercase">Links</h5>
					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
				</div><br><br>
			</div><hr>
				<?php
			if (isset($_SESSION['error'])) {
				if ($_SESSION['error'] != '') {
					echo '<p style="color: #ff0000;"><strong>Last error: </strong>'.$_SESSION['error']."</p>";
											  }
			}
				
			echo '<p><strong>User Type: </strong>'.$_SESSION['user_type'].'</p>';
				
			echo '<p><strong>User ID: </strong>'.$_SESSION['userID'].'</p>';
				
			echo '<p><strong>Last Server Massage: </strong>'.$_SESSION['message'].'</p>';
				
			echo '<p><strong>Current $_SESSION values: </strong></p>';
			echo "<p>".print_r($_SESSION)."</p>";
			
			?>
		</div>
			
	</footer>
</body>

</html>