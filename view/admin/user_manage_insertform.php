<head>
	<meta charset="utf-8">
	<title>INSERT FORM</title>
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
	<form action="user_manage_insert_process.php" method="post">
		<h2> Insert New Member </h2>

		<label for="firstname">Firstname</label>
		<input type="text" id="firstname" name="firstname" value="">

		<label for="lastname">lastname</label>
		<input type="text" id="lastname" name="lastname" value="">

		<label for="email">Email</label>
		<input type="text" id="email" name="email" value="">
		
		<label for="password">Password</label>
		<input type="text" id="password" name="password" value="">

		<a href="user_manage.php"><button type="button">Go back</button></a>
		<button type="submit">Submit</button>
	</form>
	<?php include('../view/pages/footer.php');?>

</body>