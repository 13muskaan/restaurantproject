<?php  include('navigationbar.php');?>
<!doctype html>
<html>
<head>
<script src="../javascript/review_post.js"></script>
	
	<style>

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
	
</head>

<body>

	<div class="container">
	<div class="row" style="margin-top:40px;">
		<div class="col-md-6">
    	<div class="well well-sm">
            <div class="text-right">
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
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
         
		</div>
	</div>
</div>
                                
</body>
</html>