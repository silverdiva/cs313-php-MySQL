<?php
session_start();
/* [PATH] */
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);
require "lib/config.php";
require "lib/lib-db.php";


/* [MUTE NOTIFICATIONS] */
error_reporting(E_ALL);
ini_set('display_errors', 1);

//define login fields
$username = $_POST["username"];
$password = $_POST["password"];	
			
//validate db login
$db = new PDO('mysql:host=localhost;port=3306;dbname=id9019731_llanoskimberlyshoppingcart','id9019731_llanoskimberlyshoppingcart', 'Lak3bell');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  // Validate user inputs
            if ($username == null || $password == null ) 
				{
             	echo 'You must fill in all fields.';
            	} 

				else 
					{
					//hash the password
					$hashpass = password_hash($password, PASSWORD_DEFAULT);
					//test to see if the user already exists
					// Add the user into the database
					$query = 'INSERT INTO user_table
								 (username, password)
							  VALUES
								 (:username, :password)';
					$statement = $db->prepare($query);
					$statement->bindValue(':username', $username);
					$statement->bindValue(':password', $hashpass);
								//debugging
								print_r($username);
								print_r($_SESSION);
								print_r($query);

					if ($statement->execute()) 
					{
						$statement->closeCursor();
						$_SESSION["username"] = $username;
						header("Location: loginShopping-v3.php"); 
						} 
						
						else 
						{
						echo 'User already exists.';
									//debugging
									print_r($username);
									print_r($_SESSION);
									print_r($query);
						}
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
			<div class="form">
				<h2>You've Come to the Right Place. Please create a username and password.</h2>
				<p>
					After you've created your username and password, you will log into your account on the next page.
				</p>
				<form action="addUser-v6.php" method="post">
					<input type="text" name="username" placeholder="Username" style="width:50%" required />
					<br>
					<input type="password" name="password" placeholder="Password" style="width:50%" required />
					<br>
					<br>

					<!--<a class="button-thankyou" href="welcomeNewUser.php">Submit</a>-->
					<input type="submit" value="Submit">
				</form>
			</div>
		</main>

		<footer>
			<?php include 'modules/footer.php';?>
		</footer>

		<!-- JavaScript using jQuery library -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="scripts/scripts.js"></script>

	</body>

	</html>
