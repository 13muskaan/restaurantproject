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
		/*style search bar*/
		
		#custom-search-input {
			padding: 3px;
			border: solid 1px #E4E4E4;
			border-radius: 6px;
			background-color: #fff;
		}
		
		#custom-search-input input {
			border: 0;
			box-shadow: none;
		}
		
		#custom-search-input button {
			margin: 2px 0 0 0;
			background: none;
			box-shadow: none;
			border: 0;
			color: #666666;
			padding: 0 8px 0 10px;
			border-left: solid 1px #ccc;
		}
		
		#custom-search-input button:hover {
			border: 0;
			box-shadow: none;
			border-left: solid 1px #ccc;
		}
		
		#custom-search-input .glyphicon-search {
			font-size: 23px;
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
	<!--contact page-->

	<div class="container">
		<div class="containersearch" style="float: right;">
			<div class="row">
				<div class="col-md-6">
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="form-control input-lg" placeholder="Search directions..."/>
							<span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
						

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span8">
				<h2> Locate us here.</h2>
				<div id="map"></div>
			</div>

			<div class="span4">
				<h4>Our Contact details.</h4>
				<address>
    			<strong>My Banyan Tree</strong><br>
    			4/9 Doggett Street<br>
    			Fortitude Valley
    			Brisbane
    			4006<br>
    			<abbr title="Phone">P:</abbr> 07 3358 4006<br>
    			<abbr title="Phone">P:</abbr> 07 3358 4009<br>
				<abbr title="Email">E: </abbr> bakshi.muskaan@gmail.com<br>
   				<abbr title="OpeingTime"> <strong> Open Hours</strong></abbr> <br>
   				Mon-Fri 	5pm-10pm 	<br>
   				Sat-Sun 	5pm-10pm<br>
    		</address>
			


			</div>
		</div>
	</div>
	<!-- end here-->
	<?php include('footer.php'); ?>
</body>

</html>