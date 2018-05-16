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
  background-color:#AD1C1E;
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
  <div class="jumbotron">
    <h1 style="text-align:center;background-image: url(../img/headermap1.jpeg)">Reviews</h1>
  </div>     
</div>
<div class="container">
	<div class="row" style="margin-top:40px;width:60%;background-color: white;">
		<div class="col-md-6">
    	<div class="well well-sm">
            <div class="text-right">
				 <a class="" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                   <span class="glyphicon glyphicon-remove"></span></a>
                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
            </div>
        
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="" method="post">
                        
						<label for="ReviewTitle">Review Title</label>
                        <input type="text" class="form-control animated" cols="50" id="reviewTitle" name="ReviewTitle" placeholder="Review Tite..." rows="10"></input><br>
        
					<label for="ReviewContent">Review Content</label>
						<input type="text" class="form-control animated" cols="50" id="new-review" name="ReviewContent" placeholder="Enter your review here..." rows="10"></input><br>
						
						<label for="guests">Food Quality</label>
			<div class="slidecontainer">
  <input name="food" type="range" min="0" max="5" value="5" class="slider" id="FoodRange">
  <br><p style="text-align: center">Rating: <span id="FoodNumber"></span></p>
</div><br>
						<label for="guests">Service</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div><br>
						<label for="guests">Location</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div><br>
						<label for="guests">Price</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div><br>
						<label for="guests">Cleanliness</label>
			<div class="slidecontainer">
  <input name="guestNo" type="range" min="0" max="5" value="5" class="slider" id="GuestSlider">
  <br><p style="text-align: center">Value: <span id="GuestNumber"></span></p>
</div><br>
						
                        <div class="text-right">
                            <button class="btn btn-success btn-lg" type="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
         
		</div>
	</div>
</div>
		

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
					<h4>Rating.</h4>
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
<div class="container">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll Up</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
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