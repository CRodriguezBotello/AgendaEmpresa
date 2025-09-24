<?php
    // Añade el archivo config
    require_once 'php/config/configdb.php';

    // Comprueba si se esta pasando algun controlador y metodo por url y sino recoge las constantes

    if (isset($_GET['controlador']) && !empty($_GET['controlador'])) {
        $controlador = $_GET['controlador'];

        if (isset($_GET['metodo']) && !empty($_GET['metodo'])) {
        $metodo = $_GET['metodo'];
        }
    }else{
        $controlador=CONTROLADOR;
        $metodo=METODO;
    }

    // Abre el controlador
    require_once ('php/controlador/'.strtolower($controlador).'.php');

    // Llama a dicho controlador
    $objC = new $controlador();

    // LLama al metodo del controlador
    $resul = $objC->$metodo();

    // Comprueba si se devuelven datos
    if (isset($resul) && !empty($resul)) {
        $datos=$resul;
    }

    // Comprueba si se devuelve un mensaje
    if (isset($objC->msg) && !empty($objC->msg)) {
        $mensaje=$objC->msg;
    }


    // Comprueba si se devuelve una vista
    if (isset($objC->vista) && !empty($objC->vista)) {
        $vista=$objC->vista;
    }

    // Incluye dicha vista
    include_once('php/vista/'.$vista.'.php');
?>