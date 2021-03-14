<?php

class Producto  extends General
{

		public function __construct() {
				parent::__construct();
		}

/*
Calculamos el precio de la sábana */
public function productoSabanaPrecio($ancho,$largo) {

			$precioSabanaBase = $this->precioSabanaBase;
			$superficie = $largo*$ancho;
			$precioFinal = $superficie*$precioSabanaBase;
			return $precioFinal;

	}

/*
Calculamos el precio del colchón */
public function productoColchonPrecio($ancho,$largo,$alto) {

		$precioColchonBase = $this->precioColchonBase;
		$volumen = $largo*$ancho*$alto;
		$precioFinal = $volumen*$precioColchonBase;
		return $precioFinal;

	}


}
?>
