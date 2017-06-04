<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','dcartek');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

require 'libs/Smarty.class.php';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}

$templateParser = new Smarty();
$templateParser->template_dir = "views";
$templateParser->compile_dir = "views/compiled";

?>
