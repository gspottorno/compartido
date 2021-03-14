<?php
session_start();
require($_SERVER['DOCUMENT_ROOT']."/config.php");
require_once (ROOTURL."class/class.general.php");
require_once (ROOTURL."class/class.servicio.php");

$servicio = new Servicio('peluqeria');




function ajax_accion() {
  global $servicio;

    // Validar las entradas
    $x = isset($_GET['x']) ? filter_var($_GET['x'], FILTER_SANITIZE_NUMBER_INT) : null;
    $y = isset($_GET['y']) ? filter_var($_GET['y'], FILTER_SANITIZE_NUMBER_INT) : null;


    //Servicio
    $descripcion = $servicio->descripcion;
    $horas = $x;
    $precioServicio = $servicio->servicioPrecio($horas);

    try {

         if(!empty($x) && !empty($y)){
              $respuesta = array(
                   'respuesta' => 'correcto',
                        'x' => $x,
                             'y' => $y,
                                  'precioservicio' => $precioServicio



              );
            } else {
              $respuesta = array(
                   'respuesta' => 'error'
              );
            }

    } catch(Exception $e){
         $respuesta = array(
              'error' => $e->getMessage()
         );
    }

     echo json_encode($respuesta);
}

if(isset($_GET['accion']) && $_GET['accion']=='coordenadas') { ajax_accion(); }

?>
