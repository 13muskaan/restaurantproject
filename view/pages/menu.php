<?php include('../../view/pages/navigationbar.php');?>


<title>MY BANYAN TREE | MENU</title>

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