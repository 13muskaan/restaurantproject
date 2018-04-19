<?php include('navigationbar.php'); ?>

<!doctype html>
<html>

<head>
	<title>MY BANYAN TREE | CONTACT</title>
	<style>
/*style map*/
#map {
	height: 350px;
	width: 50%; /*fix this */
}
</style>
<script> 
	/*code for Google Maps*/
	function initMap(){
	var location = {lat: -27.456668, lng: 153.041047}; /*location, change location*/
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 15, 
			center: location
		});
		var marker = new google.maps.Marker({
			position: location,
				map: map
		})
		}
	</script> 
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctR_0ZgN-uxBHmJafdjcUdR35NuOS7O4&callback=initMap"></script>
</head>

<body>
	<!--contact page-->
	<h2> Locate us here.</h2>
	<div id="map"></div>
	
<!-- end here-->
	<?php include('footer.php'); ?>
</body>

</html>