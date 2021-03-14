<?php

class Servicio extends General
{

	var $descripcion = '';

		public function __construct($descipcion) {
				parent::__construct();
				$this->descripcion = $descipcion;
		}

/*
Calculamos el precio del servicio */
public function servicioPrecio($horas) {
		$precioHoraServicio = $this->precioHoraServicio;
		$precioFinal = $precioHoraServicio*$horas;
		return $precioFinal;
	}
}
?>
