<?php include('navigationbar.php'); ?>

<!doctype html>
<html>

<head>
	<title>MY BANYAN TREE | CONTACT</title>
	<style>
		/*style map*/
		
		#map {
			height: 350px;
			width: 50%;
			/*fix this */
		}
		/*backgroung img header*/
		.jumbotron{
			background-image: url(../img/headermap1.jpeg) solid{
				width: auto;
				height: 100%;	
			}
		}
	</style>
	<script>
		/*code for Google Maps*/
		function initMap() {
			var location = {
				lat: -27.456668,
				lng: 153.041047
			}; /*location, change location*/
			var map = new google.maps.Map( document.getElementById( "map" ), {
				zoom: 15,
				center: location
			} );
			var marker = new google.maps.Marker( {
				position: location,
				map: map
			} )
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctR_0ZgN-uxBHmJafdjcUdR35NuOS7O4&callback=initMap"></script>
</head>

<body>
	<div class="header">
  <div class="jumbotron">
    <h1 style="text-align:center;background-image: url(../img/headermap1.jpeg);">Contact Us</h1>
  </div>     
</div>

	<div class="container" style="width:60%">
		<h2 style="text-align:center;"> Locate us.</h2>
		<div class="form-group">
			<form action="http://maps.google.com/maps" method="get" target="_blank">
				<label class="col-lg-3 control-label" id="searchdirections"></label>
				<div class="col-lg-8">
					<input class="form-control" value="" type="text" placeholder="search directions...">
				<button type="submit" class="btn btn-primary" a href="http://maps.google.com/maps"><span class="glyphicon glyphicon-search"></span></button>
				</div>
			</form>
		</div>
	</div>
	<hr style="margin-bottom:5px !important; margin-top:5px !important; width:90%; " />

			<!--<div class="span8">
				<h2 style="text-align:left; padding-left: 250px;"> Locate us.</h2>
				<div id="map"></div>
			</div>-->
<div class="container">
	<div class="row-fluid">
        <div class="span8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d56646.471818570026!2d153.006027437271!3d-27.456664021325793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6b91598d9ce523bb%3A0xe96341f947fa04da!2s4%2F9+Doggett+Street%2C+Fortitude+Valley+QLD%2C+Australia!3m2!1d-27.456668399999998!2d153.041047!5e0!3m2!1sen!2sus!4v1526271187569" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<!--<div id="map"></div>-->
			</div>
    	</div>

            <div class="container1">   
				 <h2 style="text-align: center;border-bottom: black solid 1px;">Contact Details</h2>
				   <ul class="container details" style="text-align: center;">
                            <p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> (07) 3358 3006 & (07) 3358 4006</p>
                            <p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>bakshi.muskaan@gmail.com</p>
                            <p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>4/9 Doggett Street Fortitude Valley 4006</p>
                          </ul>
    </div>
	</div>
	<!-- end here-->
	<?php include('footer.php'); ?>
</body>

</html>