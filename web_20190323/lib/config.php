<?php
/* [DATABASE SETTINGS] */
define('DB_HOST', 'localhost');
define('DB_NAME', 'id9019731_llanoskimberlyshoppingcart');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'id9019731_llanoskimberlyshoppingcart');
define('DB_PASSWORD', 'Lak3bell');

/* [MUTE NOTIFICATIONS] */
error_reporting(E_ALL & ~E_NOTICE);

/* [PATH] */
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);

function getDB() 
{
$dbhost=DB_HOST;
$dbuser=DB_USER;
$dbpass=DB_PASSWORD;
$dbname=DB_NAME;
	
try {
$this->db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
	
$this->db->exec("set names utf8");
	
$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $this->db;
	//debugging
	print_r($this->db);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}


?>
