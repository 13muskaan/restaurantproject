<?php include('navigationbar.php');?>
	<title>MY BANYAN TREE | HOME </title>
	<!--- this is home/index page-->
	<!-- Buttons for online food ordering companies-->
	<div id="buttons" style="align-content: center;float: right;">
	<h4> Order online. Enjoy meal at home.</h4>
		<p> Or give us a call and we can deliveroo at your home.</p>
	<a href="https://deliveroo.com.au/menu/brisbane/teneriffe/my-banyan-tree?day=today&time=ASAP" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"style="background: url(../img/deliveroo.png)"><!--Deliveroo--></a>
	<a href="https://www.menulog.com.au/restaurants-my-banyan-tree/menu" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background: url(../img/menulog.png)"><!--Menulog--></a>
	<a href="https://www.eatnow.com.au/restaurant-7531/My-Banyan-Tree.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background: url(../img/eatnow.jpg)"><!--Eatnow--></a>
	</div>

	<div class="container" style="width: 500px;">
		<h2 style="text-align: center;">View our latest.</h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active" style="height: 500px">
					<img src="../img/spices.jpg" alt="spices" style="width:100%;">
					<div class="carousel-caption">
						<h3>Los Angeles</h3>
						<p>LA is always so much fun!</p>
					</div>
				</div>

				<div class="item">
					<img src="../img/family.jpg" alt="family" style="width:100%;">
					<div class="carousel-caption">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>
				</div>

				<div class="item">
					<img src="../img/mybanyantree.jpg" alt="mybanyantree" style="width:100%;">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>We love the Big Apple!</p>
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


	<?php include( 'footer.php' );?>

</body>

</html>