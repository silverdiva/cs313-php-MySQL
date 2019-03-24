<?php
    session_start();
    if(!isset($_SESSION['userAuthorized'])) {
        session_destroy();
        header("Location: loginShopping-v3.php");
    }
?>

<!DOCTYPE html>
<html>

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
            <h1>CCS 313:02 | Project 1: Shopping Cart</h1>
        </div>
        <nav>
            <?php include 'modules/nav-shopping-cart.php'; ?>
        </nav>
    </header>

    <main class="thankyou-wrapper">
        <div class="thankyou">
            <h3>Hello, Welcome to my Store. Please Log in to Shop.</h3>
            <br>
           <a class="button-thankyou" href="loginShopping-v3.php"> Log In Here</a>
            <h3> Dont' have an account? Please create one, it's free!</h3>
            <br>
            <a class="button-thankyou" href="addUser-v6.php"> Sign Up Here</a>
        </div>
        <br><br>
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

