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
    $ruta_contenido = $partes[0]; // Aquí es dónde la magia ocurre

    require_once("$ROOT/resources/templates/template.php");

}

?>
