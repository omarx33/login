<?php
date_default_timezone_set('America/Lima');

define("URL","http://localhost/login/");

define("SERVER","localhost");
define("USER","root");
define("PASS","");
define("BD","bdcrud");
define("FOLDER","/login/");

$key =date('Y-m-d').$_SERVER['SERVER_NAME'].FOLDER;

define("KEY",$key);
define("ID","id");
define("NOMBRES","nombres");
define("APELLIDOS","apellidos");
 ?>
