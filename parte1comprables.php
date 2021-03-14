<?php
session_start();
require($_SERVER['DOCUMENT_ROOT']."/config.php");
require_once (ROOTURL."class/class.general.php");
require_once (ROOTURL."class/class.producto.php");
require_once (ROOTURL."class/class.servicio.php");

$general = new General();
$producto = new Producto();
$servicio = new Servicio('peluqeria');

$precioHoraServicio = $general->precioHoraServicio;
$precioSabanaBase = $general->precioSabanaBase;
$precioColchonBase = $general->precioColchonBase;
$moneda = $general->moneda;

//Servicio
$descripcion = $servicio->descripcion;
$horas = 4;
$precioServicio = $servicio->servicioPrecio($horas );

//Producto
$ancho = 2;
$largo = 3;
$alto = 0.5;
$precioSabana = $producto->productoSabanaPrecio($ancho,$largo);
$precioColchon = $producto->productoColchonPrecio($ancho,$largo,$alto);

?>

<p>El precio de servicio de <?=$descripcion?> por <?=$horas?> horas es: <?=$precioServicio?><?=$moneda?>. (Precio hora: <?=$precioHoraServicio?><?=$moneda?>).</p>

<p>El precio de la s&aacute;bana de <?=$ancho?>x<?=$largo?> es: <?=$precioSabana?><?=$moneda?>. (Precio base: <?=$precioSabanaBase?><?=$moneda?>)</p>

<p>El precio del colch&oacute;n de <?=$ancho?>x<?=$largo?>x<?=$alto?> es: <?=$precioColchon?><?=$moneda?>. (Precio base: <?=$precioColchonBase?><?=$moneda?>)</p>
