<?php


/*

Interfaz que deben implementar todas los manejadores de entidades.

Pueden contener más métodos dependiendo de la lógica de negocio

*/
interface IDWESEntidadManager {
  public static function getAll();
  public static function getById($id);
  public static function insert(...$campos);
  public static function update($id, ...$campos);
  public static function delete($id);
}

 ?>
