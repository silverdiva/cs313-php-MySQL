<?php
/* [INIT] */
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
$cartLib = new Cart();
$products = $cartLib->pGet();
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta name="description" content="Shopping Cart">
		<title>CS 313: Project 1</title>
		<script src="public/general.js"></script>
		<script src="public/cart.js"></script>
		<?php include 'modules/head.php';?>
	</head>

	<body>
		<main class="products">
			<div id="noteOut"><div id="noteIn"></div></div>


			<header id="page-header">
				<div id="page-cart" onclick="cart.toggle();">
					&#128722; <span id="page-cart-count">0</span>
				</div>

				<div id="title">
					<h3>Kimberly Llanos</h3>
					<h1>CS 313:02 | Project 1: Shopping Cart DB (Select Items Page)</h1>
					<?php echo date('l, F j, Y') ?>
				</div>

				<nav>
					<?php include 'modules/nav-shopping-cart.php';?>
				</nav>
			</header>


			<div id="products">
				<?php
      if (is_array($products)) {
        foreach ($products as $id => $row) {
          ?>
					<div class="pdt">
						<img src="images/<?= $row['product_image'] ?>" />
						<h3 class="pdtName">
							<?= $row['product_name'] ?>
						</h3>
						<div class="pdtPrice">$
							<?= $row['product_price'] ?>
						</div>
						<div class="pdtDesc">
							<?= $row['product_description'] ?>
						</div>
						<input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);" />
					</div>
					<?php
        }
      } else {
        echo "No products found.";
      }
      ?>
			</div>


			<div id="cart" class="ninja"></div>

			<footer>
				<?php include 'modules/footer.php'; ?>
			</footer>
		</main>
	</body>

	</html>
