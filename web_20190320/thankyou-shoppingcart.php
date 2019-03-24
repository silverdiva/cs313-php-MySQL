<!DOCTYPE html>
<html lang="en">


<head>
	<title>CS 313:02 | Project 1: Shopping Cart DB (Thank You Page)</title>
	<link href="css/thankyou.css" type="text/css" rel="stylesheet" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php include 'modules/head.php';?>
</head>

<body>
	<header>
		<div id="title">
			<h3>Kimberly Llanos</h3>
			<h1>CS 313:02 | Project 1: Shopping Cart (Thank You Page)</h1>
			<?php echo date('l, F j, Y') ?>
		</div>

		<nav>
			<?php include 'modules/nav-shopping-cart.php';?>
		</nav>
	</header>

	    <main class="thankyou-wrapper">
        <div class="thankyou">

            <h2>Thank you for your order!</h2>
            <p>
                We have received your order, and will get back to you with shipment updates soon!.
            </p>
            <a class="button-thankyou" href="index-cart.php"> Back to Shopping</a>
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
