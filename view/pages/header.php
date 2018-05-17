
	<html>

	<head>
		<script>
			//This is the function to check for a mobile device:
			function isMobileDevice() {
				return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test( navigator.userAgent );
			}

			function BrowserDetection() {

				// Opera 8.0+
				var isOpera = ( !!window.opr && !!opr.addons ) || !!window.opera || navigator.userAgent.indexOf( ' OPR/' ) >= 0;

				// Firefox 1.0+
				var isFirefox = typeof InstallTrigger !== 'undefined';

				// Safari 3.0+ "[object HTMLElementConstructor]" 
				var isSafari = /constructor/i.test( window.HTMLElement ) || ( function ( p ) {
					return p.toString() === "[object SafariRemoteNotification]";
				} )( !window[ 'safari' ] || ( typeof safari !== 'undefined' && safari.pushNotification ) );

				// Internet Explorer 6-11
				var isIE = /*@cc_on!@*/ false || !!document.documentMode;

				// Edge 20+
				var isEdge = !isIE && !!window.StyleMedia;

				// Chrome 1+
				var isChrome = !!window.chrome && !!window.chrome.webstore;

				// Blink engine detection
				var isBlink = ( isChrome || isOpera ) && !!window.CSS;

				//Check if browser is IE
				if ( isIE ) {

					// insert conditional IE code here
					return "INTERNET EXPLORER";

				}

				//Check if browser is Chrome
				else if (isChrome) {

					// insert conditional Chrome code here
					return "GOOGLE CHROME";

				}

				//Check if browser is Firefox 
				else if ( isFirefox ) {

					// insert conditional Firefox Code here
					return "FIREFOX";

				}

				//Check if browser is Safari
				else if (isSafari ) {

					// insert conditional Safari code here
					return "SAFARI";

				}

				//Check if browser is Opera
				else if ( isOpera ) {

					// insert conditional Opera code here
					return "OPERA";

				}
			}
		</script>
		<?php
		// inlude database connection & session files here.
		
				include('../../model/dbconnection.php');
				include('../../control/session.php');	
			
			?>
		<!-- 3rd party (BOOTSTRAP)-->
		<!-- index.php & login.php & navigatiobar.php>&register.php-->

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- use this for animation on home page-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


		<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="../css/loader.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<!--review.php-->





		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha256-JMwpUzWY+WKCPEIpvCgEh2RqJ6QqlSV8Md4bmxjzcQ8= sha384-VI5+XuguQ/l3kUhh4knz7Hxptx47wpQbVRDnp8v7Vvuhzwn1PEYb/uvtH6KLxv6d sha512-PxtG6eoPtr5QdgWieDr0Bsa0+IXe2qRAG/8gSw/pBWZWcXQRAhWU4lEumKTjmOMjgmen3q/robV+RD3sqwR36g==" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>



		<!--function.php-->



		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" integrity="sha256-SECBv+bHbXdhDrcabnEgb+UwTWLAN/BYtANZIZIGkwY= sha384-jspctxrQmizRroXAKjoWWOOhkG3aZesspL7dmISSX5+p1LfXftbGQocYmzOsv9wx sha512-nBe/MAVnca0bCImmi2/WzJoGCgaUOMVDtTXFXUcxuLuFLUc3FGdOx8LR28WxgocUumd4Db5k5Ppjqz1M1Ijy1A==" crossorigin="anonymous"></script>

		<!--contact.php-->


		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" integrity="sha256-VNIbBnZ4TQyYO71Ak4mHcK3vqTLYm3LIr9iBg6GRcqc= sha384-Zzs5x1/YUvlxpCu06c197tRCubLCMA7pCoHbZeoZuz/oEgYD6NVmvLzDSKYBoc3J sha512-LZ2DxwpD99xOV0FgvTSYhiu6oC9TX/j8LPRIeOVySMT6WgO3s436hYJaf6ztqJZKcELvGBWZPhou7lVq51JHYA==" crossorigin="anonymous"></script>



		<!--updateuserinfo-->


		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" integrity="sha256-NLECy3aJQJ/Rw8GArrH9PwuL8LR6slx0xC6v9XTmYak= sha384-vjTpnzDJYcqNw6YYaRvNDHKSy7YSfQA3/Tqf5q3D6ixmzhjViRH+KTqoQSqIFor1 sha512-z5sCgb5e0dBdaT6rDIx9dn+Ub7gumbOTX77nUxMVqaIe/SiM/N3A/cEGqRv9gTaGkN/vy54erqtT0sk8Sdw8qw==" crossorigin="anonymous" type="text/css">


		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" integrity="sha256-e+YsRqruSDLjqWPtH0eltKPmH+xGQ70kAEUqjeI9kUE= sha384-XCYxejbCpItVExvZ+3HJSi5xDEHicTqoz4qlYIFVDr5Y2Gg4ooNwGV3YW+ppvThL sha512-Du8ZXPeOMkqkKPuQB0b7URDr9JZY9fEbMdwShVJTsHmPoRg09ANpZ3rMbXr5a+/eZKFv7QcyoZs4H06F6TCpWA==" crossorigin="anonymous" type="text/css">


		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha256-IFHWFEbU2/+wNycDECKgjIRSirRNIDp2acEB5fvdVRU= sha384-CgeP3wqr9h5YanePjYLENwCTSSEz42NJkbFpAFgHWQz7u3Zk8D00752ScNpXqGjS sha512-egJ/Y+22P9NQ9aIyVCh0VCOsfydyn8eNmqBy+y2CnJG+fpRIxXMS6jbWP8tVKp0jp+NO5n8WtMUAnNnGoJKi4w==" crossorigin="anonymous"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" integrity="sha256-qMXLA5Yk/JV0sI9r6rhmma2dQWDGfkftIei4UbAyUhQ= sha384-zvMQfjRbXhrBMD2UJZW5K0txqcbUBEZygTi8PPJ3NFWE978a5zAisEiCnLjH2wmM sha512-Yau1DR0u56Ij7d770H6Omm/RTZMNRWkaLCQkt2tnCdtESJDrRWs6IgFExG/B26q/m+woFhJcxWSIl0PEDk0dMg==" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4= sha384-bPV3mA2eo3edoq56VzcPBmG1N1QVUfjYMxVIJPPzyFJyFZ8GFfN7Npt06Zr23qts sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" type="text/javascript"></script>

		<!-- reservation.php -->





	</head>