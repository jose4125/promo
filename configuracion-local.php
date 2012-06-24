<?php
if( isset($_GET['con_errores'])){
error_reporting(E_ALL);
ini_set('display_errors','On');
}
define('IPSERVIDORBD', 'localhost');
define('PUERTO', '3306');
define('USUARIOBD', 'root');
define('CLAVEBD', '');
define('BD', 'usuariosalkosto');
define('DRIVER', 'mysql.php');
require_once(DRIVER);
?>