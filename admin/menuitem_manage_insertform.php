<head>
	<meta charset="utf-8">
	<title>Edit form</title>
	<style>
		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		
		input[type=text]:focus {
			border: 3px solid #555;
		}
	</style>

</head>
<?php include('../view/pages/navigationbar.php');?>

<body>
	<form action="menuitem_manage_insert_process.php" method="post">
		<h2> Make New Menu Item </h2>

		<label for="dishtitle">Dish Title</label>
		<input type="text" id="dishtitle" name="dishtitle" value="">

		<label for="dishdescription">Dish Description</label>
		<input type="text" id="dishdescription" name="dishdescription" value="">

		<label for="dishprice">Dish Price</label>
		<input type="text" id="dishprice" name="dishprice" value="">

		<a href="menuitem_manage.php"><button type="button">Go back</button></a>
		<button type="submit">Submit</button>
	</form>
	<?php include('../view/pages/footer.php');?>

</body>