<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../admin/index_admin.php">MY BANYAN TREE (LOGO)</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="function_manage.php">Function Manage</a>
				</li>
				<li class="active"><a href="menuitem_manage.php">Menuitem Manage</a>
					<? include('menuitem_manage.php');?>
				</li>
				<li class="active"><a href="user_manage.php">User Manage</a>
				</li>
				<li class="active"><a href="review_manage.php">Review Manage</a>
				</li>
				<!-- Add logout_admin--><li class="active"><a href="../view/pages/logout.php">Logout</a>
				</li>
				<?php
				session_start();
				
				$_SESSION['user_type'] = 'admin';
				
				
					?>
				
			</ul>
		
		</div>
	</nav>
</body>

</html>