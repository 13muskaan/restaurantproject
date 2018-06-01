<p style="text-align: center;"> You are not logged in. Please login, or register in order to make a reservation. <br>
	<!--<a href="login.php" style="float:none;"><button type="button">Login</button></a>
		<a href="register.php" style="float:none;"><button type="button">Register</button></a>-->

	<button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block';" style="width:auto;"> Login </button>
</p>

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
			<form action="../../control/login_process.php?originpage=<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" id="login_form">

				<div class="mcontainer">
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