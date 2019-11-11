<?php

/*

Clase para facilitar las conexiones y consultas a bases de datos

https://github.com/JorgeDuenasLerin/PHP-Acceso-a-datos

Por Jorge Dueñas Lerín

*/


class DWESBaseDatos {

    private $conexion = null;
    private $sentencia = null;
    private $executed = false;

    function __construct(
        $basedatos,
        $motor    = 'mysql',
        $usuario  = 'root', // Or file is sqlite
        $pass     = '1234',
        $serverIp = 'localhost',
        $charset  = 'utf8mb4',
        $options  = null
    ) {
        if($motor != "sqlite") {
          $cadenaConexion = "$motor:host=$serverIp;dbname=$basedatos;charset=$charset";
        } else {
          $cadenaConexion = "$motor:$basedatos";
        }

        if($options == null){
            $options = [
              PDO::ATTR_EMULATE_PREPARES   => false, // La preparación de las consultas no es simulada
                                                     // más lento pero más seguro
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Cuando se produce un error
                                                                      // salta una excepción
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Cuando traemos datos lo hacemos como array asociativo
            ];
        }

        try {
          if($motor != "sqlite") {
            $this->conexion = new PDO($cadenaConexion, $usuario, $pass, $options);
          } else {
            $this->conexion = new PDO($cadenaConexion, null, null, $options);
          }
        } catch (Exception $e) {
          error_log($e->getMessage());
          exit('No ha sido posible la conexión');
        }
    }

    /*
      Permite ejecutar una consulta preparada con parámetros posicionales.
        Parámetros
          1º SQL
          2º ... parámetros o array con parámetros
    */
    function ejecuta(string $sql, ...$parametros) {
        $this->sentencia = $this->conexion->prepare($sql);

        if($parametros == null){
            $this->executed = $this->sentencia->execute();
            return;
        }

        if($parametros != null && is_array($parametros[0])) {
            $parametros = $parametros[0]; // Si nos pasan un array lo usamos como parámetro
        }

        $this->executed = $this->sentencia->execute($parametros);
    }

    function obtenDatos(){
        return $this->sentencia->fetchAll();
    }

    function __destruct(){
        $this->conexion = null;
    }
}
?>
