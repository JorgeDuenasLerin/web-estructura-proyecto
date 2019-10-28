<?php

require_once("../config/ejemplo.php");

require_once("$ROOT/src/db.php");

$listado = listadoTemas();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$config['title']?></title>
  </head>
  <body>
    <h1><?=$config['content']?></h1>
    <p><?=$config['content_text']?></p>
  </body>
</html>
