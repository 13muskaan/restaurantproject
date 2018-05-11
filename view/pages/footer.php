<footer class="page-footer font-small blue pt-4 mt-4">

	<!--Footer Links-->
	<div class="container-fluid text-center text-md-left" style="background-color: black;colour:white;">
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
		</div>


		<?php
		if ( isset( $_SESSION[ 'user_type' ] ) && $_SESSION[ 'user_type' ] != 'anon' ) {
			echo '<hr><span style="color: gray;"><h1 text-align="center">Debug Information:</h3>';

			if ( isset( $_SESSION[ 'error' ] ) ) {
				if ( $_SESSION[ 'error' ] != '' ) {
					echo '<p style="color: #ff0000;"><strong>Last error: </strong>' . $_SESSION[ 'error' ] . "</p>";
				}
			}

			echo '<p><strong>User Type: </strong>' . $_SESSION[ 'user_type' ] . '</p>';
			echo '<p><strong>User ID: </strong>' . $_SESSION[ 'userID' ] . '</p>';
			echo '<p><strong>User firstname: </strong>' . $_SESSION[ 'firstname' ] . '</p>';
			echo '<p><strong>Last Server Massage: </strong>' . $_SESSION[ 'message' ] . '</p>';
			echo '<p><strong>Current $_SESSION values: </strong></p>';
			echo "<p>" . print_r( $_SESSION ) . "</p></span>";
		}
		?>
			
			<p id="browserTest">Browser Test</p>
	
	<script>
	
		document.getElementById("browserTest").innerHTML = "Mobile: " + isMobileDevice() + "\nBrowser: " + BrowserDetection();
	
	</script>
	</div>
</footer>