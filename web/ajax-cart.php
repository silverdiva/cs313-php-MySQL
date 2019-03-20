<?php
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
$cartLib = new Cart();


/* [HANDLE AJAX REQUEST] */
switch ($_POST['req']) {
  default:
    echo "INVALID REQUEST";
    break;

  // COUNT TOTAL NUMBER OF ITEMS
  case "count":
    $total = 0;
    if (is_array($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        $total += $qty;
      }
    }
    echo $total;
    break;

  // ADD ITEM TO CART
  case "add":
    // ITEMS WILL BE STORED IN THE ORDER OF
    // $_SESSION['cart'][PRODUCT ID] = QUANTITY
    if (is_numeric($_SESSION['cart'][$_POST['product_id']])) {
      $_SESSION['cart'][$_POST['product_id']] ++;
    } else {
      $_SESSION['cart'][$_POST['product_id']] = 1;
    }
    echo "Item added to cart";
    break;

  // SHOW CART
  case "show":
    // FETCH PRODUCTS
    $products = $cartLib->pGet();

    // CART CONTENTS 
    $sub = 0;
    $total = 0;
    ?>
    <h1>MY CART</h1>
    <table class="zebra">
      <tr>
        <th>Qty</th>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php
      foreach ($_SESSION['cart'] as $id => $qty) {
        // CALCULATE THE TOTALS
        $sub = $qty * $products[$id]['product_price'];
        $total += $sub;
        // THE PRODUCT
        printf("<tr><td><input id='qty_%u' onchange='cart.change(%u);' type='number' value='%u'/></td><td>%s</td><td>$%0.2f</td></tr>", $id, $id, $qty, $products[$id]['product_name'], $sub
        );
      }
      ?>
      <tr>
        <td></td>
        <td><strong>Grand Total</strong></td>
        <td><strong>$<?= $total ?></strong></td>
      </tr>
    </table>
    <br><br>
    <a class="button" href="checkout-shoppingcart.php"> Checkout</a>
    <a class="button" href="index-cart.php"> Back to Shopping</a>
    <?php if ($total > 0) { ?>
      <form id="cart-checkout" onsubmit="return cart.checkout();">
      <br><br>
      </form>
    <?php
    }
    break;

  // CHANGE QTY
  case "change":
    if ($_POST['qty'] == 0) {
      unset($_SESSION['cart'][$_POST['product_id']]);
    } else {
      $_SESSION['cart'][$_POST['product_id']] = $_POST['qty'];
    }
    echo "Quantity updated";
    break;

  // CHECKOUT
  case "checkout":
    if ($cartLib->oAdd($_POST['name'], $_POST['email'])) {
      $_SESSION['cart'] = array();
      echo "OK";
    } else {
      echo $cartLib->error;
    }
    break;
}
?>
