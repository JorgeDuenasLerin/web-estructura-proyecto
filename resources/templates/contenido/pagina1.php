<?php

$resultados = listadoTemas();

 ?>

<h1>Pag1</h1>
<div class="">
  Contenido 1
  <p>
    <?php
    foreach($resultados as $fila) {
      print_r($fila);
    }
    ?>
  </p>
</div>
