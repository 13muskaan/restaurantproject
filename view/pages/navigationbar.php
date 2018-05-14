<!doctype html>
<?php
session_start();

if ( !isset( $_SESSION[ 'user_type' ] ) || ( $_SESSION[ 'user_type' ] == 'anon' || $_SESSION[ 'user_type' ] == 'member' ) ) {
	$indexLink = 'index.php';
} else if ( $_SESSION[ 'user_type' ] == 'admin' ) { //once index is compressed remove if section
	$indexLink = 'index_admin.php'; //once index is compressed --- $indexLink = '../view/pages/index.php';
} else { //Once index is compressed remove this section
	$indexLink = 'index_manager.php';
}

?>

<?php include('header.php');?>
<head> 
<style> 
	img{
		border-bottom-radius: 75%;
	}
	</style>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href=<?php echo $indexLink; ?>><img src="../img/mybanyantreelogonavbar.png" style=" height: 100px; width: auto;"> <span style="display: inline-block;"</span></a>
			</div>
			<?php 
			if (!isset($_SESSION['user_type']) || ($_SESSION['user_type'] == 'anon' || $_SESSION['user_type'] == 'member'))  {
			echo '<ul class="nav navbar-nav">
				<li class="active"><a href="menu.php">Menu</a>
				</li>
				<li class="active"><a href="function.php">Function</a>
				</li>
				<li class="active"><a href="review.php">Review</a>
				</li>
				<li class="active"><a href="contact.php">Contact</a>
				</li>
				<li class="active"><a href="reservation.php">Reservation</a>
				</li>
				
			</ul>';
			} else if ($_SESSION['user_type'] == 'manager') {
					echo '<ul class="nav navbar-nav">
				<li class="active"><a href="reservation_manage.php">Reservation Manage</a>
				</li>
			</ul>';
				
			} else if ($_SESSION['user_type'] == 'admin') {
				echo '<ul class="nav navbar-nav">
				<li class="active"><a href="function_manage.php">Function Manage</a>
				</li>
				<li class="active"><a href="menuitem_manage.php">Menuitem Manage</a>
				</li>
				<li class="active"><a href="user_manage.php">User Manage</a>
				</li>
				<li class="active"><a href="review_manage.php">Review Manage</a>
				</li>
			</ul>';
				
			}
			?>
			<ul class="nav navbar-nav navbar-right" style="align-content: center padding:10%" ;>
				<?php
				if ( !isset( $_SESSION[ 'user_type' ] ) || $_SESSION[ 'user_type' ] == 'anon' ) {
					echo '<li class="active"><a href="register.php">Register</a> </li>
							<li class="active"><a href="login.php">Login</a> </li>';

				} else {

					if ( $_SESSION[ 'user_type' ] != 'member' ) {
						echo '<li class="active"><a href="memberprofile.php">Profile</a>
				</li>';
						echo '<li class="active"><a href="../view/pages/logout.php">Logout</a></li>';
					} else {
						echo '<li class="active"><a href="memberprofile.php">'. $_SESSION['firstname'] .'</a></li>';
						echo '<li class="active"><a href="logout.php">Logout</a></li>';

					}
				}

				?>
			</ul>
		</div>
	</nav>

	<?php

	if ( isset( $_SESSION[ 'message' ] ) ) {
		if ( $_SESSION[ 'message' ] != '' ) {
			echo '<div class="alert alert-success"><strong>Success! </strong>' . $_SESSION[ 'message' ] . '</div>';

			$_SESSION[ 'message' ] = '';
		}
	}

	?>