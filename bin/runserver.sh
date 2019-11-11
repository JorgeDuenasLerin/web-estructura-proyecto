#!/bin/bash

if [ -z "$1" ]
  then
    echo "Usando puerto por defecto 9000"
    port=9000
else
    port="$1"
fi

php -S localhost:$port -t public public/enrutador.php 
