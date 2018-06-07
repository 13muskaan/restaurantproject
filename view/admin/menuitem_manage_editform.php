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
<?php
include( '../pages/navigationbar.php' );

$sql = "SELECT * FROM menu WHERE dishID=:id";

$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':id', $_GET[ 'id' ], PDO::PARAM_INT );

$stmt->execute();
$menuitem = $stmt->fetchAll();


?>
<body>
	<form method="post" action="menuitem_manage_edit_process.php?id=<?php echo $_GET['id']; ?>">
		<h2> Update Menu Item </h2>
		<!--<label for="dishid">Dish ID</label>
		<input type="text" id="dishID" name="dishID" value="">-->

		<label for="dishtitle">Dish Title</label>
		<input type="text" id="dishtitle" name="dishtitle" value="<?php echo $menuitem[0]['dishtitle']; ?>">

		<label for="dishdescription">Dish Description</label>
		<input type="text" id="dishdescription" name="dishdescription" value="<?php echo $menuitem[0]['dishdescription']; ?>">

		<label for="dishprice">Dish Price</label>
		<input type="text" id="dishprice" name="dishprice" value="<?php echo $menuitem[0]['dishprice']; ?>">

		<a href="menuitem_manage.php"><button type="button">Go back</button></a>
		<button type="submit">Submit</button>
	</form>
	<?php include('../pages/footer.php');?>
</body>

</html>