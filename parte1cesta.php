<?php
session_start();
require($_SERVER['DOCUMENT_ROOT']."/config.php");
require_once (ROOTURL."class/class.cesta.php");


$compras = array('sabana'=>300,'servicio'=>500,'sabana2'=>200,'colchon'=>60);

$cesta = new Cesta();

$precioTotal = $cesta::getInstance()->calculoPrecioTotal($compras);

$sumoObjeto = isset($_GET["objeto"]) ?  $_GET["objeto"] : null;
$sumoPrecio = isset($_GET["precio"]) ?  $_GET["precio"] : null;

if($sumoObjeto) {
  $newcompras = $cesta::getInstance()->sumoValor($compras,$sumoObjeto,$sumoPrecio);
  $compras = $newcompras;
}
?>

<form action="#" method="get">
Objeto <input type="text" name="objeto"><br>
Precio <input type="text" name="precio">
<input type="submit" value="ADD">
</form>


<table>
  <tr>
    <th>TOTAL</th><td><?=$precioTotal?></td>
  </tr>
    <?php
    foreach ($compras as $obj=>$prec) { ?>
    <tr>
      <th><?=$obj?></th><td><?=$prec?></td>
    </tr>
  <?php } ?>

</table>
