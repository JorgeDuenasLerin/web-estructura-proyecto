<?php

$ROOT = realpath(__DIR__."/..");
require("$ROOT/config/ejemplo.php");
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
