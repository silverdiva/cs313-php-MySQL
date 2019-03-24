<?php
include_once "lib/config.php";

    session_start();
    if
		(!isset($_SESSION['userAuthorized'])) 
	{
        session_destroy();
	}
        
		
		else {
			header("Location: welcomeNewUser.php");
		}
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
				<h1>CS 313:02 | Project 1: Shopping Cart DB (Account Login Page)</h1>
				<?php echo date('l, F j, Y') ?>
			</div>

			<nav>
				<?php include 'modules/nav-shopping-cart.php';?>
			</nav>
		</header>
		<main>

			<?php
    if($_GET['error'] == "true") {
        echo "<h1> Uh Oh! Something went wrong, please check your username and password and try again.</h1>";
		
		//for debugging
		print_r($_GET);
    }
?>

				<div class="form">
					<h2>Log In</h2>
					<form action="checkUser-v1.php" method="post" name="username">
						<input type="text" name="username" placeholder="Username" style="width:50%" required />
						
						<br>
						<input type="password" name="password" placeholder="Password" style="width:50%" required />
						<br>
						<br>

						<!--<a class="button-thankyou" href="checkUser-v1.php"> Login To Shop</a>-->
						<input type="submit" value="Submit">
						
						<br>
						<br>
						
						<h2>Don't have an shopping account yet?</h2>
						<a class="button-thankyou" href="signUpShopping-v3.php"> Sign Up Here</a>
						
						
						<br/><br/>
					</form>
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

