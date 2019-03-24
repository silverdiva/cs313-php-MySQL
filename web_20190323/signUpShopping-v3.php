<?php
/* [INIT] */
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
?>

	<?php
include_once "lib/config.php";
?>

		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta name="description" content="Shopping Cart">
			<title>CS 313: Project 1</title>
			<script src="public/general.js"></script>
			<script src="public/cart.js"></script>
			<link href="css/thankyou.css" type="text/css" rel="stylesheet" />
			<link href="css/loginShopping.css" type="text/css" rel="stylesheet" />

			<?php include 'modules/head.php'?>
		</head>

		<body>
			<header>
				<div id="title">
					<h3>Kimberly Llanos</h3>
					<h1>CS 313:02 | Project 1: Shopping Cart DB (Account Sign Up Page)</h1>
					<?php echo date('l, F j, Y') ?>
				</div>

				<nav>
					<?php include 'modules/nav-shopping-cart.php';?>
				</nav>
			</header>
			<main>

				<div class="form">
				
				<h2>Ready to Sign Up? Click Below!</h2>
					<form name="registration" action="addUser-v6.php" method="post">

						<a class="button-thankyou" href="addUser-v6.php">Sign Up</a>
					<h2>Already have a User Account?</h2>
					
					<a class="button-thankyou" href="loginShopping-v3.php"> Login Here</a>

	
					
						<br>
					</form>
					<br><br>
				</div>
				<br><br>
			</main>
			<br><br>
			<footer>
				<?php include 'modules/footer.php'; ?>
			</footer>

			<!-- JavaScript using jQuery library -->
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
			<script src="scripts/scripts.js"></script>

		</body>

		</html>
