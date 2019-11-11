<?php

include("$ROOT/src/DWESBaseDatos.php");

$db = new DWESBaseDatos($config['db_file'], $config['db_engine']);

function listadoTemas ($titulo = '', $pagina = 1) {
    global $db;
    $db -> ejecuta("SELECT * FROM Respuesta");
    return $db -> obtenDatos();
}

 ?>
