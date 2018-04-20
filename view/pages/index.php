<?php include('navigationbar.php');?>
<title>MY BANYAN TREE | HOME </title>
<!--- this is home/index page-->
<!-- Buttons for online food ordering companies-->
<div id="body" style="width: 100%;">

	<div class="restaurantinfo">
		<img src="../img/mybanyantreelogo.png" style="width: 500px; height: 300px;align-content: center;">
		<p style="text-align: center;"> “In the centre of a small village in India, a Banyan Tree rises from the earth like a great mountain. Known as the Many Footed One, this remarkable tree has so many trunks it’s virtually a forest covering many acres. <br><br> A place for laughing and bartering, conversing and resting, romping and chasing meeting and imagining. The My Banyan Tree is not only in the heart of the village it is the heart of the village.”<br><br> The Banyan Tree, [bany-yuhn] gets its name from the Hindi word banian, meaning trader. The name appears to have been first bestowed popularly on a famous tree of this speciies growing near Gombroon, under which the Banians or Hindu traders settled at that part. <br><br> The mighty Banyan Tree is the national tree of India. It belongs to the mulberry family, Moraceae and is classified as Ficus bengalensis - a type of fig tree</p>
		<br>
		<h4> Our opening hours <br>
	Mon-Fri 	5pm-10pm<br>
	Sat-Sun 	5pm-10pm</h4>
	</div>
	<div id="buttons" style="align-content: center;float:center;">
		<h2> Order online. Enjoy at home.</h2>
		<p> Or give us a call and we can deliver at your home.</p>
		<a href="https://deliveroo.com.au/menu/brisbane/teneriffe/my-banyan-tree?day=today&time=ASAP" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background: url(../img/deliveroo.png)">
			<!--Deliveroo-->
		</a>
		<a href="https://www.menulog.com.au/restaurants-my-banyan-tree/menu" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background: url(../img/menulog.png)">
			<!--Menulog-->
		</a>
		<a href="https://www.eatnow.com.au/restaurant-7531/My-Banyan-Tree.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background: url(../img/eatnow.jpg)">
			<!--Eatnow-->
		</a>
	</div>
	<div class="container" style="height: auto; width: 50">
		<h2>View our latest. </h2>
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
					<img src="../img/family.jpg" alt="Los Angeles" style="width:100%;">
				</div>

				<div class="item">
					<img src="../img/tiger.jpeg" alt="Chicago" style="width:100%;">
				</div>

				<div class="item">
					<img src="../img/spices.jpg" alt="New york" style="width:100%;">
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
</div>

<?php include( 'footer.php' );?>

</body>

</html>