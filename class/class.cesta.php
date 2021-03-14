<?php

class Cesta
{

  private static $instance;
  private $counter;

  public function __construct()
  {
  }

  public static function getInstance()
      {
          if (!self::$instance instanceof self) {
              self::$instance = new self();
          }

          return self::$instance;
      }

  public function calculoPrecioTotal($compras)
  {
    	$counter = 0;
    	foreach ($compras as $pr1=>$pr2) {
    		$counter += $pr2;
    	}
    	return $counter;
  }

  public function sumoValor($compras,$sumoObjeto,$sumoPrecio)
  {
    $compras = $compras;
    $compras[$sumoObjeto]=$sumoPrecio;
    return $compras;
  }

}

?>
