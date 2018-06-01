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
include( '../view/pages/navigationbar.php' );
include( '../model/dbconnection.php' );

$sql = "SELECT * from member WHERE memberID=:id";

$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':id', $_GET[ 'id' ], PDO::PARAM_INT );

$stmt->execute();
$results = $stmt->fetchAll()[0];

$firstname = $results['firstname'];
$lastname = $results['lastname'];
$email = $results['email'];
$password = $results['password'];


?>
<body>
	<form method="post" action="user_manage_edit_process.php?id=<?php echo $_GET['id']; ?>">
		<h2> Update member details </h2>
		<!--<label for="dishid">Dish ID</label>
		<input type="text" id="dishID" name="dishID" value="">-->

		<label for="firstname">Firstname</label>
		<input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">

		<label for="Lastname">Lastname</label>
		<input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>">

		<label for="email">Email</label>
		<input type="text" id="email" name="email" value="<?php echo $email; ?>">
		
		<label for="email">Password</label>
		<input type="text" id="password" name="password" value="<?php echo $password; ?>">

		<a href="user_manage.php"><button type="button">Go back</button></a>
		<button type="submit">Submit</button>
	</form>
	<?php include('../view/pages/footer.php');?>
</body>

</html>