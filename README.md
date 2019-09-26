# web-estructura-proyecto
Estructura de un proyecto completo web

```
\- bin
    ^- Comandos ejecutables de nuestra aplicación
       Ejemplo: limpiar base de datos, crear base de datos,
                crar administrador web, etc.
\- config
    ^- Archivos con configuración
       Ejemplo: base de datos, API google, rutas, etc.
\- docs
    ^- Información y documentación del proyecto
\- public
    ^- Esto es lo que servirá el servidor
       Pero puede incluir otros archivos
       (Se puede incluir desde php, no accesible desde fuera)
\- resources
    ^- Recursos web, pueden ser muy variados...
        templates, scripts de base de datos, imágenes del proyecto, etc.
\- src
    ^- Código fuente de la aplicación
\- test
    ^- Pruebas automatizadas
```

## Ejecución

Del servidor de prueba
```
# desde la ruta raíz
$ bin/runserver.sh
```

Limpiar archivos README.md de los directorios
