<?php
session_start();
require "lib/config.php";
require "lib/lib-db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


	  


$result = null;
$db = new PDO('mysql:host=localhost;port=3306;dbname=id9019731_llanoskimberlyshoppingcart','id9019731_llanoskimberlyshoppingcart', 'Lak3bell');


           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  

//$PDO = $db->prepare("SELECT password from user_table WHERE username = '$_POST[username]'");
$PDO = $db->prepare("SELECT password from user_table WHERE username=:username");
$PDO->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
$PDO->execute();


$result = $PDO->fetchAll(PDO::FETCH_ASSOC);



//for debugging
//print_r($result);
//print_r($PDO);

if(password_verify($_POST['password'], $result[0]['password']) ) 
{
    $_SESSION['userAuthorized'] = $_POST['username'];
	
    header("Location: index-cart.php");

	
	//for debugging
	print_r($_SESSION);
	print_r($_POST);
	}

else {
    session_destroy(); 
}

?>
