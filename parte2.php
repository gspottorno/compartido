<?php
require("config.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prueba AJAX</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Prueba parte II " />
<meta name="keywords" content="Prueba" />
<meta name="lang" content="es" />
<base href="/" />

<!-- CSS PROPIA -->
<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body>
<main>

    <div class="caja_centrada" id="caja_centrada" onClick="mostrarCoordenadas(); return false;"></div>

    <div class="caja_hija" id="caja_hija"></div>

</main>
<!-- JQUERY -->
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/ajax-functions.js" type="text/javascript" language="javascript"></script>

</body>
</html>
