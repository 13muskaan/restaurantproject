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
		}
		/*backgroung img header*/
		.jumbotron{
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
    <h1 style="text-align:center;">Contact Us</h1>
  </div>     
</div>
	<div class="container" style="width:60%">
		<h2 style="text-align:center;"> Locate us.</h2>
<div class="col-md-3" style="width:inherit;left:35%;position:!important;">
  <form class="navbar-form" role="search"action="http://maps.google.com/maps" method="get" target="_blank">
   <div class="input-group add-on">
   <input class ="form-control" placeholder="Enter your location..."type="text" name="saddr" />
   <input type="hidden" name="daddr" value="4/9 Doggett Street Fortitude Valley 4006" />
         <div class="input-group-btn">
   <input type="submit" class="btn btn-danger"<i class="glyphicon glyphicon-search" value="Get directions"> </i></input>
   </div></div>
</form>
  </div>
			<hr style="margin-bottom:5px !important; margin-top:5px !important; width:90%; " />

<div id="map" style="position:fixed; padding-top:10px; left:25%;"></div>
		</div>
            <div class="container1">   
				 <h2 style="text-align: center;border-bottom: black solid 1px;">Contact Details</h2>
				   <ul class="container details" style="text-align: center;">
                            <p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> (07) 3358 3006 & (07) 3358 4006</p>
                            <p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>bakshi.muskaan@gmail.com</p>
                            <p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>4/9 Doggett Street Fortitude Valley 4006</p>
                          </ul>
    </div>
	<?php include('footer.php'); ?>
</body>

</html>