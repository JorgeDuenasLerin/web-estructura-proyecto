# Ficheros de configuración

En este directorio estará la información de configuración necesaria para la ejecución del proyecto en distintos entornos.

## Ejemplos de uso
No es una listado completo, solo algunos ejemplos

- Conexiones de base de datos
- Credenciales para API
  - API google, twitter, facebook, github, etc.

## Ejemplo de contenido
```
# fichero db.config.php
$db_config = [
  'server'  => 'localhost',
  'port'    => 7685,
  'user'    => 'admin',
  'pass'    => '1234'
];
```


## ¡¡¡Importante!!!
Este fichero no estará en el control de versiones ya que expone información sensible

```

# fichero .gitignore
./config/*
./config/!*.md

```
