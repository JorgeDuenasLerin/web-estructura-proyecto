<?php

$config = [
  'site' => 'Proyecto',
  'title' => 'Estructura de proyecto web',
  'content' => 'Estructura de proyecto web',
  'content_text' => 'Información sacada del config',
  'db_engine' => 'sqlite',
  'db_file' => 'resources/test.sqlite3',
  'ruta_defecto' => '/pagina1.php'
];

spl_autoload_register(function ($name){
  global $ROOT;
  $class_file = "$ROOT/src/$name.php";
  require($class_file);
});
