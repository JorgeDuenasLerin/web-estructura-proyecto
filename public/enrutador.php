<?php

if (preg_match('/\.(?:css|js|ico|png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])){
    return false;    // servir la petición tal cual es.
}else {

    $ROOT = realpath(__DIR__."/..");

    require_once("$ROOT/config/configuracion.php");

    // Requerir los ficheros necesarios
    require_once("$ROOT/src/db.php");

    // Enruto la petción
    $uri = $_SERVER['REQUEST_URI'];
    $partes = explode("?", $uri);

    $titulo = $config['title'];

    $fichero = $partes[0];


    if($fichero == "/"){
      header("Location: ".$config['ruta_defecto']);
      die();
    }



    // Aquí es dónde la magia ocurre
    // ver también resources/templates/template.php
    $ruta_contenido = str_replace("..", "", $fichero);
    //echo "<pre>";
    //print_r($_SERVER);
    //echo "</pre>";
    if(
        // Según SO servirá en servidor real
        (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        ||
        // Verificado en el servidor de desarrollo de php
        ($_SERVER['HTTP_SEC_FETCH_MODE'] == 'cors')
      ) {
        require_once("$ROOT/resources/templates/contenido$ruta_contenido");
    } else {
        require_once("$ROOT/resources/templates/template.php");
    }
}

?>
