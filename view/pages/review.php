<?php include('navigationbar.php'); ?>


<head>

	<script src="../javascript/review_post.js"></script>
	
	<title>MY BANYAN TREE | REVIEW</title>
	<style>
		body {
			padding-top: 70px;
		}
		
		.btn-grey {
			background-color: #D8D8D8;
			color: #FFF;
		}
		
		.rating-block {
			background-color: #FAFAFA;
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
			background-color: #FAFAFA;
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
	</style>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
	</head>

	<body>
	<div class="header">
  <div class="jumbotron">
    <h1 style="text-align:center;background-image: url(../img/headermap1.jpeg)">Reviews</h1>
  </div>     
</div>
		<div class="container">
			<h1>Our member's reviews.</h1>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onClick="review_post">
    Launch demo modal
</button>
		

			<div class="row">
				<div class="col-sm-3">
					<div class="rating-block">
						<h4>Average user rating</h4>
						<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
						<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					



						<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					



						<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					



						<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					



						<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					



					</div>
				</div>
				<div class="col-sm-3">
					<h4>Rating breakdown</h4>
					<div class="pull-left">
						<div class="pull-left" style="width:35px; line-height:1;">
							<div style="height:9px; margin:5px 0;">Food <span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="pull-left" style="width:180px;">
							<div class="progress" style="height:9px; margin:8px 0;">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
								</div>
							</div>
						</div>
						<div class="pull-right" style="margin-left:10px;">1</div>
					</div>
					<div class="pull-left">
						<div class="pull-left" style="width:35px; line-height:1;">
							<div style="height:9px; margin:5px 0;">Service <span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="pull-left" style="width:180px;">
							<div class="progress" style="height:9px; margin:8px 0;">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
								</div>
							</div>
						</div>
						<div class="pull-right" style="margin-left:10px;">1</div>
					</div>
					<div class="pull-left">
						<div class="pull-left" style="width:35px; line-height:1;">
							<div style="height:9px; margin:5px 0;">Location <span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="pull-left" style="width:180px;">
							<div class="progress" style="height:9px; margin:8px 0;">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
								</div>
							</div>
						</div>
						<div class="pull-right" style="margin-left:10px;">0</div>
					</div>
					<div class="pull-left">
						<div class="pull-left" style="width:35px; line-height:1;">
							<div style="height:9px; margin:5px 0;">Price <span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="pull-left" style="width:180px;">
							<div class="progress" style="height:9px; margin:8px 0;">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
								</div>
							</div>
						</div>
						<div class="pull-right" style="margin-left:10px;">0</div>
					</div>
					<div class="pull-left">
						<div class="pull-left" style="width:35px; line-height:1;">
							<div style="height:9px; margin:5px 0;">Cleanliness <span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="pull-left" style="width:180px;">
							<div class="progress" style="height:9px; margin:8px 0;">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
								</div>
							</div>
						</div>
						<div class="pull-right" style="margin-left:10px;">0</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-7">
					<hr/>
					<div class="review-block">
						<div class="row">
							<div class="col-sm-3">
								<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
								<div class="review-block-name"><a href="#">nktailor</a>
								</div>
								<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
							</div>
							<div class="col-sm-9">
								<div class="review-block-rate">
									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



								</div>
								<div class="review-block-title">this was nice in buy</div>
								<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-sm-3">
								<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
								<div class="review-block-name"><a href="#">nktailor</a>
								</div>
								<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
							</div>
							<div class="col-sm-9">
								<div class="review-block-rate">
									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



								</div>
								<div class="review-block-title">this was nice in buy</div>
								<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-sm-3">
								<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
								<div class="review-block-name"><a href="#">nktailor</a>
								</div>
								<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
							</div>
							<div class="col-sm-9">
								<div class="review-block-rate">
									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



									<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								



								</div>
								<div class="review-block-title">this was nice in buy</div>
								<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


		<?php
		if ( $_SESSION[ 'user_type' ] == 'member' ) {
			echo '';
		}
		?>

	</body>
	<!-- end here-->
	<?php include('footer.php');?>
	</body>

	</html>