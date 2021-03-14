<?php

class General
{
	var $precioHoraServicio;
	var $precioSabanaBase;
	var $precioColchonBase;
	var $moneda;
	var $debug = false;

	public function __construct() {

			$this->precioHoraServicio = 25;
			$this->precioSabanaBase  = 10;
			$this->precioColchonBase  = 50;
			$this->moneda = 'Euros';
			$this->debug = true;

		if ($this->debug){
			@ini_set('display_errors', 1);
			@ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
		} else {
			@ini_set('display_errors', 0);
			@ini_set('display_startup_errors', 0);
			error_reporting(0);
		}

	}

/*
Calculamos el precio del servicio */
public function servicioPrecio($horas) {

	}

/*
Calculamos el precio de la sábana */
public function productoSabanaPrecio($ancho,$largo) {

	}

/*
Calculamos el precio del colchón */
public function productoColchonPrecio($ancho,$largo,$alto) {

	}


}
?>
