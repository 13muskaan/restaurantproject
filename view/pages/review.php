<?php include('navigationbar.php'); ?>
<head>

	<script src="../javascript/review_post.js"></script>

	<title>MY BANYAN TREE | REVIEW</title>
	<style>
		body {
			padding-top: 70px;
		}
		
		.btn-grey {
			background-color: white;
			color: white;
		}
		
		.rating-block {
			background-color: white;
			border: 1px solid #EFEFEF;
			padding: 15px 15px 20px 15px;
			border-radius: 3px;
		}
		
		.bold {
			font-weight: 700;
		}
		
		.padding-bottom-7 {
			padding-bottom: 7px;
		}
		
		.review-block {
			background-color: white;
			border: 1px solid #EFEFEF;
			padding: 15px;
			border-radius: 3px;
			margin-bottom: 15px;
		}
		
		.review-block-name {
			font-size: 12px;
			margin: 10px 0;
		}
		
		.review-block-date {
			font-size: 12px;
		}
		
		.review-block-rate {
			font-size: 13px;
			margin-bottom: 15px;
		}
		
		.review-block-title {
			font-size: 15px;
			font-weight: 700;
			margin-bottom: 10px;
		}
		
		.review-block-description {
			font-size: 13px;
		}
		
		.animated {
			-webkit-transition: height 0.2s;
			-moz-transition: height 0.2s;
			transition: height 0.2s;
		}
		
		.stars {
			margin: 20px 0;
			font-size: 24px;
			color: #d17581;
		}
		/*button to go up*/
		
		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #AD1C1E;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 80px;
		}
		/*post a review*/
		
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
		/*css for stars*/
		
		.glyphicon-star {
			font-size: 36px;
			color: #e67e22;
		}
		
		.green {
			color: #008000;
		}
		
		.red {
			color: #800080;
		}
		
		.blue {
			color: #000080;
		}
		
		.cyan {
			color: #008080
		}
		
		.yellow {
			color: #080800
		}
		
		.small {
			font-size: 16px;
		}
		
		.empty {
			color: #bdc3c7;
		}
		
		.quarter {
			position: relative;
		}
		
		.quarter:before {
			position: relative;
			z-index: 9;
			width: 23%;
			display: block;
			overflow: hidden;
		}
		
		.quarter:after {
			content: '\e006';
			position: absolute;
			z-index: 8;
			color: #bdc3c7;
			top: 0;
			left: 0;
		}
		
		.half {
			position: relative;
		}
		
		.half:before {
			position: relative;
			z-index: 9;
			width: 47%;
			display: block;
			overflow: hidden;
		}
		
		.half:after {
			content: '\e006';
			position: absolute;
			z-index: 8;
			color: #bdc3c7;
			top: 0;
			left: 0;
		}
		
		.threequarter {
			position: relative;
		}
		
		.threequarter:before {
			position: relative;
			z-index: 9;
			width: 72%;
			display: block;
			overflow: hidden;
		}
		
		.threequarter:after {
			content: '\e006';
			position: absolute;
			z-index: 8;
			color: #bdc3c7;
			top: 0;
			left: 0;
		}
	</style>
	<!--<html lang="en">-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
</head>

<body>
	<div class="header">
		<div class="jumbotron" style="background-image: url(../img/headermap1.jpeg)">
			<h1 style="text-align:center;">Reviews</h1>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px; background-color: white;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="well well-sm">
					<div class="text-right">
						<a class="" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                   <span class="glyphicon glyphicon-remove"></span></a>
					



						<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
					</div>

					<div class="row" id="post-review-box" style="display:none;">
						<div class="col-md-12">
							<form accept-charset="UTF-8" action="../../control/review_post_process.php" method="post">

								<label for="ReviewTitle">Review Title</label>
								<input type="text" class="form-control animated" cols="50" id="reviewTitle" name="reviewtitle" placeholder="Review Tite..." rows="10"></input><br>

								<label for="ReviewContent">Review Content</label>
								<input type="text" class="form-control animated" cols="50" id="new-review" name="reviewcontent" placeholder="Enter your review here..." rows="10"></input><br>

								<label for="guests">Food Quality</label>
								<div class="slidecontainer">
									<input name="food" type="range" min="0" max="5" value="5" class="slider" id="FoodRange">
									<br>
									<p style="text-align: center">
										<div class="container container-star" id="formFood"></div>
									</p>
								</div><br>
								<label for="guests">Service</label>
								<div class="slidecontainer">
									<input name="service" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
									<br>
									<p style="text-align: center">
										<div class="container container-star" id="formService"></div>
									</p>
								</div><br>
								<label for="guests">Location</label>
								<div class="slidecontainer">
									<input name="location" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
									<br>
									<p style="text-align: center">
										<div class="container container-star" id="formLocation"></div>
									</p>
								</div><br>
								<label for="guests">Price</label>
								<div class="slidecontainer">
									<input name="price" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
									<br>
									<p style="text-align: center">
										<div class="container container-star" id="formPrice"></div>
										</span>
									</p>
								</div><br>
								<label for="guests">Cleanliness</label>
								<div class="slidecontainer">
									<input name="cleanliness" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
									<br>
									<p style="text-align: center">
										<div class="container container-star" id="formCleanliness"></div>
									</p>
								</div><br>

								<div class="text-right">
									<button class="btn btn-success btn-lg" type="submit">Post Review</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<div class="rating-block">
				<h4>Average user rating</h4>
				<h2 class="bold padding-bottom-7"><span id="totalscoreaverage">4.3</span> <small>/ 5</small></h2>
				<div class="container container-star" id="totalstaraverage">

				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="rating-block">
				<h4>Average user rating for each area</h4>
				<div class="row">
					Food
				</div>
				<div class="row">
					<div id="totalstarfood"></div>

					<div class="pull-right" style="margin-left:10px;"><span id="totalscorefood"></span>
					</div>
				</div>
				<div class="row">
					Service
				</div>
				<div class="row">
					<div id="totalstarservice"></div>

					<div class="pull-right" style="margin-left:10px;"><span id="totalscoreservice"></span>
					</div>
				</div>
				<div class="row">
					Location
				</div>
				<div class="row">
					<div id="totalstarlocation"></div>

					<div class="pull-right" style="margin-left:10px;"><span id="totalscorelocation"></span>
					</div>
				</div>
				<div class="row">
					Price
				</div>
				<div class="row">
					<div id="totalstarprice"></div>

					<div class="pull-right" style="margin-left:10px;"><span id="totalscoreprice"></span>
					</div>
				</div>
				<div class="row">
					Cleanliness
				</div>
				<div class="row">
					<div id="totalstarcleanliness"></div>

					<div class="pull-right" style="margin-left:10px;"><span id="totalscorecleanliness"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
<div class="container">
		<ul class="pagination">
			<li class="page-item disabled"><a class="page-link" id="backButton"  onclick="decreasePage()">Previous</a></li>
			<!--<li class="page-item"><a class="page-link" href="#">1</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">2</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">3</a>
			</li>-->
			<li class="page-item" id="nextButton"><a class="page-link" id="nextButton"  onclick="increasePage()">Next</a></li>
		</ul>
	</div>
	<div id="userReviews"></div>
		</div>

</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll Up</button>
	<script src="../javascript/review.js" type="text/javascript"></script>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
				document.getElementById( "myBtn" ).style.display = "block";
			} else {
				document.getElementById( "myBtn" ).style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>

	<br>

	<?php
	if ( $_SESSION[ 'user_type' ] == 'member' ) {
		echo '';
	}
	?>
	<!-- end here-->
	<?php include('footer.php');?>
</body>

</html>