<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'modules/head.php'; ?>
    <title>CS 313 | 07 Prove: Shopping Cart Module (Landing Page)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="css/thankyou.css" type="text/css" rel="stylesheet" />
    <link href="css/loginShopping.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<header>
		<div id="title">
			<h3>Kimberly Llanos</h3>
			<h1>CS 313:02 | Project 1: Shopping Cart (Account Portal Page)</h1>
			<?php echo date('l, F j, Y') ?>
		</div>

		<nav>
			<?php include 'modules/nav-shopping-cart.php';?>
		</nav>
	</header>

	<main class="thankyou-wrapper">
		<div class="thankyou">

			<h2>Welcome to the Accounts Portal Page.</h2>
				
				<h3>Please select one of the options below.</h3>

				<!--<div class="form">-->
					<h3>Log In below if you already have a Shopping Account.</h3>
					<br>
					<a class="button-thankyou" href="loginShopping-v4.php"> Log In Here</a>
					
					<!--<form action="loginShopping-v4.php" method="post" name="username">
	
					
						<input type="text" name="username" placeholder="Username" style="width:50%" required />
						
						<br>
						<input type="password" name="password" placeholder="Password" style="width:50%" required />
						<br>
						<br>
						-->
						

						<!--<a class="button-thankyou" href="checkUser-v1.php"> Login To Shop</a>-->
						<!--<input type="submit" value="Submit">-->
					
						
						<h3>Don't have a shopping account yet? Sign up for one, it's free!</h3>
						<br>
						<a class="button-thankyou" href="signUpShopping-v3.php"> Sign Up Here</a>
						
	
			<!--</form>-->
			
			<!--<a class="button-thankyou" href="loginShopping-v4.php"> Log In to Shop</a>-->
			
			<h3>Already Logged In? Great! Happy Shopping!</h3>
			<br>
			<a class="button-thankyou" href="index-cart.php"> Enter Shopping Site</a>
			<!--<a class="button-thankyou" href="loginShopping-v3.php"> Log In</a>-->
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
