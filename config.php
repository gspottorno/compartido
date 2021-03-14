<?php
/*** CONSTANTES FRONT ***/
define("BASE_FRONT", "local.compartir");
define("NOMBRE_DOMINIO", "local.compartir");
define("ROOTURL", "/Applications/XAMPP/xamppfiles/htdocs/compartir/");
define("ERROR_EMAIL", "gspottorno@yahoo.es");

$debug=1;

if ($debug==1){
			@ini_set('display_errors', 1);
			@ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
		} else {
			@ini_set('display_errors', 0);
			@ini_set('display_startup_errors', 0);
			error_reporting(0);
		}

?>
