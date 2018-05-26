<!doctype html>
<?php include('header.php');

if ( !isset($_SESSION[ 'user_type' ]) || ( $_SESSION[ 'user_type' ] == 0 || $_SESSION[ 'user_type' ] == 1 ) ) {
	$indexLink = '../pages/index.php';
	
} else if ( $_SESSION[ 'user_type' ] == 3 ) { //once index is compressed remove if section
	$indexLink = '/index_admin.php'; //once index is compressed --- $indexLink = '../view/pages/index.php';
	$indexLink = "../" . $usertype['usertypename'] . $indexLink;
} else { //Once index is compressed remove this section
	$indexLink = '/index_manager.php';
	$indexLink = "../" . $usertype['usertypename'] . $indexLink;
}


?>
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
				<a class="navbar-brand" style="padding-top: 5px; padding-left: 5px;" href=<?php echo $indexLink; ?>><img src="../img/mybanyantreelogonavbar.png" style=" height: 40px; width: auto; border-radius: 5px;"> <span style="display: inline-block;"</span></a>
			</div>
			<?php 
			if (!isset($_SESSION['user_type']) || ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1))  {
			echo '<ul class="nav navbar-nav">
				<li class="active"><a href="../pages/menu.php">Menu</a>
				</li>
				<li class="active"><a href="../pages/function.php">Function</a>
				</li>
				<li class="active"><a href="../pages/review.php">Review</a>
				</li>
				<li class="active"><a href="../pages/contact.php">Contact</a>
				</li>
				<li class="active"><a href="../pages/reservation.php">Reservation</a>
				</li>
				
			</ul>';
			} else if ($_SESSION['user_type'] == 2) {
					echo '<ul class="nav navbar-nav">
				<li class="active"><a href="../manager/reservation_manage.php">Reservation Manage</a>
				</li>
			</ul>';
				
			} else if ($_SESSION['user_type'] == 3) {
				echo '<ul class="nav navbar-nav">
				<li class="active"><a href="../admin/function_manage.php">Function Manage</a>
				</li>
				<li class="active"><a href="../admin/menuitem_manage.php">Menuitem Manage</a>
				</li>
				<li class="active"><a href="../admin/user_manage.php">User Manage</a>
				</li>
				<li class="active"><a href="../admin/review_manage.php">Review Manage</a>
				</li>
			</ul>';
				
			}
			?>
			<ul class="nav navbar-nav navbar-right" style="align-content: center padding:10%" ;>
				<?php
				if ( !isset( $_SESSION[ 'user_type' ] ) || $_SESSION[ 'user_type' ] == 0 ) {
					echo '<li class="active"><a href="register.php">Register</a> </li>
							<li class="active"><a href="login.php">Login</a> </li>';

				} else {

					if ( $_SESSION[ 'user_type' ] != 1 ) {
						echo '<li class="active"><a href="../pages/memberprofile.php">Profile</a>
				</li>';
						echo '<li class="active"><a href="../pages/logout.php">Logout</a></li>';
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