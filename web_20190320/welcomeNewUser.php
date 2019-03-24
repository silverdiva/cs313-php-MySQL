<!DOCTYPE html>
<html lang="en">


<head>
	<title>CS 313:02 | Project 1: Shopping Cart DB (Welcome New User Page)</title>
	<link href="css/thankyou.css" type="text/css" rel="stylesheet" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="css/thankyou.css" type="text/css" rel="stylesheet" />
	<link href="css/loginShopping.css" type="text/css" rel="stylesheet" />
	<?php include 'modules/head.php';?>
</head>

<body>
	<header>
		<div id="title">
			<h3>Kimberly Llanos</h3>
			<h1>CS 313:02 | Project 1: Shopping Cart (Welcome New User Page)</h1>
			<?php echo date('l, F j, Y') ?>
		</div>

		<nav>
			<?php include 'modules/nav-shopping-cart.php';?>
		</nav>
	</header>

	<main class="thankyou-wrapper">
		<div class="thankyou">

			<h2>Thank you for Signing Up!</h2>
			<p>
				 Please Login to Shop.
			</p>
			<a class="button-thankyou" href="loginShopping-v3.php"> Log In</a>
		</div>
	</main>

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
