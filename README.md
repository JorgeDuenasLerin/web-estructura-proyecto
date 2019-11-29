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

## Orígenes
La estructura de este proyecto implementa las mejores prácticas para los diversos problemas que nos encontramos a la hora de estructurar código en un proyecto php.

Todas las peticiones son procesadas por el script **enrutador.php**, este fichero se encarga de cargar la configuración, inicializar la base de datos en base a esa configuración y decidir qué contenido mostrar en base a la petición que se está procesando.

### Ficheros estáticos y ficheros dinámicos
Si la petición es de un fichero css, png, js, o cualquier fichero estático este se servirá tal cual.

Si no lo es, se cargará un fichero con la estructura HTML general de la aplicación (ver **template.php**) en el que se incluye una navegación, un contenido (basado en la petición) y un pie. En esta página podemos incluir todos los ficheros necesarios.


## Base de datos
Se dejan incluidos los ficheros para integrar una base de datos orientada a objetos. Un ejemplo con alguna consulta funcionando se puede encontrar en [mini-foro-php](https://github.com/JorgeDuenasLerin/mini-foro-php).

## Ejecución

Del servidor de prueba
```
# desde la ruta raíz
$ bin/runserver.sh
```

Limpiar archivos README.md de los directorios
```
# desde la ruta raíz
$ bin/cleanreadme.sh
```
