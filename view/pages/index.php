		  <?php include('navigationbar.php');?>
<head>
	<title>MY BANYAN TREE | HOME </title>
	<style>
		.center {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
		}
		
		th {
			text-align: center;
		}
		
		td {
			border-bottom: white solid 1px;
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
		
		#myBtn:hover {
			background-color: #white;
		}
		/*book now button*/
		
		.booknow {
			background-color: #AD1C1E;
			color: white;
			padding: 10px 20px;
			border-radius: 80px;
			border-color: #AD1C1E;
		}
		
		#mybutton {
			position: fixed;
			top: 55px;
			right: 20px;
		}
		
		body,
		html {
			height: 100%;
		}
		
		.parallax {
			/* The image used */
			background-image: url('../img/mybanyantreelogo1.png');
			/* Full height */
			height: 50%;
			size: 50%;
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>


<div id="body" style="width: 100%; text-align:center;"><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> (07) 3358 3006 & (07) 3358 4006<span class="glyphicon glyphicon-pushpin" style="width:50px;"></span>4/9 Doggett Street Fortitude Valley 4006
	<div id="mybutton">
		<form action="reservation.php">
			<button class="booknow"></a>Book now</button>
		</form>
	</div>
</div>
		  
<hr style="margin-bottom:5px !important; margin-top:5px !important; width:90%; "/>
<?php
		  if ( isset( $_SESSION[ 'error' ] ) ) {
		  	if ( $_SESSION[ 'error' ] != "" ) {
		  		echo '<div class="alert alert-danger"><strong>ERROR: </strong>' . $_SESSION[ 'error' ] . '</div>';
		  		$_SESSION[ 'error' ] = "";
		  	}
		  }
		  ?>
<br>
<div class="container" style="height:auto; width: 100%">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="../img/family.jpg" alt="Los Angeles" style="width:100%;height: 850px;">
				<div class="carousel-caption d-none d-md-block">
					<h2 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style:!important;">Birthday Functions.</h2>
				</div>
			</div>

			<div class="item">
				<img src="../img/tiger.jpeg" alt="Chicago" style="width:100%;height: 850px">
				<div class="carousel-caption d-none d-md-block">
					<h2 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style:!important;">Birthday Functions.</h2>
				</div>
			</div>

			<div class="item">
				<img src="../img/spices.jpg" alt="New york" style="width:100%;height:850px"><br>
				<div class="carousel-caption d-none d-md-block">
					<h2 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-style:!important;">Birthday Functions.</h2>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
	
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
	
	</div>
</div>
<div class="parallax"></div>
<div class="w3-container w3-center w3-animate-bottom" style="padding:40px;">
	<img src="../img/mybanyantreelogo1.png" class="avatar img-circle img-thumbnail" alt="avatar" size="109px;"><br>
	<img src="../img/thebanyantree.png">
	<p style="text-align: center;" class="center"> “In the centre of a small village in India, a Banyan Tree rises from the earth like a great mountain. Known as the Many Footed One, this remarkable tree has so many trunks it’s virtually a forest covering many acres. <br><br> A place for laughing and bartering, conversing and resting, romping and chasing meeting and imagining. The My Banyan Tree is not only in the heart of the village it is the heart of the village.”<br><br> The Banyan Tree, [bany-yuhn] gets its name from the Hindi word banian, meaning trader. The name appears to have been first bestowed popularly on a famous tree of this speciies growing near Gombroon, under which the Banians or Hindu traders settled at that part. <br><br> The mighty Banyan Tree is the national tree of India. It belongs to the mulberry family, Moraceae and is classified as Ficus bengalensis - a type of fig tree</p>
</div>
<div class="container" style="text-align: center;width: 50%;colour:white;">
	<h2 border-bottom: 1px black solid;text-align: center;>Our options.</h2>

	<ul class="list-inline" style="padding:20px;">
		<li class="list-inline-item">Fine Dining</li>
		<li class="list-inline-item">Functions</li>
		<li class="list-inline-item">Delivery</li>
		<li class="list-inline-item">Takeaway</li>
		<li class="list-inline-item">Online Food Ordering</li>
	</ul>
	<h2 border-bottom: 1px black solid;text-align: center;>Open Hours.</h2>
	<p>We are open on the following times.</p>
	<table class="table">
		<thead>
			<tr>
				<th>Week-day</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Monday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
			<tr>
				<td>Wednesday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
			<tr>
				<td>Friday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<th>Week-end</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Saturday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
			<tr>
				<td>Sunday</td>
				<td>5:00pm - 10:00pm</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
<div class="downloadfiles" style="text-align:center">
	<h2> Download our takeaway menu.</h2>
	<form action="../../files/menu_function.docx" method="get" download>
		<button type="button" class="btn" download><a href="../../files/menu_function.docx">Takaway Menu</a></button>
</div>
<br>
<div id="buttons" align="center" ;>
	<h2 style="text-align: center;"> Order online. Enjoy at home.</h2>
	<p style="text-align: center;"> Or give us a call and we can deliver at your home.</p>

	<ul class="list-inline" style="padding:20px;">
		<li class="list-inline-item">
			<!--Deliveroo-->
			<form style="background-color:white;border:solid white;"><a href="https://deliveroo.com.au/menu/brisbane/teneriffe/my-banyan-tree?day=today&time=ASAP"> <button> <img src="../img/deliveroo.png" style="background-repeat:no-repeat; height:40px;"></a>
				</button>
			</form>
		</li>
		<li class="list-inline-item">
			<!--Menulog-->
			<form><a href="https://www.menulog.com.au/restaurants-my-banyan-tree/menu"><button> <img src="../img/menulog.png" style="background-repeat:no-repeat; height:40px;"></a>
				</button>
			</form>
		</li>
		<li class="list-inline-item">
			<!--Eatnow-->
			<form><a href="https://www.eatnow.com.au/restaurant-7531/My-Banyan-Tree.html"> <button> <img src="../img/eatnow.jpg" style="background-repeat:no-repeat; height:40px;"></a>
				</button>
			</form>
		</li>

	</ul>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll Up</button>
</div>
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
<?php include( 'footer.php' );?>

</body>

</html>