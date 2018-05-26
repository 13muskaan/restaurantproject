<?php include('../../view/pages/navigationbar.php');?>


<title>MY BANYAN TREE | MENU</title>
<style>
body{
	background-image:url(../img/creame.jpg)
}
</style>
<body>
	<div class="header" style="background-image:url(../img/creame.jpg);">
  <div class="jumbotron">
    <h1 style="text-align:center;)">Menu</h1>
  </div>     
</div>

<div class="menuitem_view">
	<h1 style="text-align: center;"> My Banyan menu.</h1>
	<ul class="pagination" style="position: relative; left: 48%"><li>
			<button id="backButton" onclick="decreasePage()"> Previous </button>
		</li><li>
			<button id="nextButton" onclick="increasePage()"> Next </button>
		</li>
		</ul>
	<div id="menuHtml" class="container">
	</div>
</div>
<script src='../javascript/menu_display.js'></script>

<script>
	$( 'h3 span:first-child' ).after( "<span class=\"dots\"> </span>" );
</script>


<?php  include('footer.php');?>
</body>

</html>