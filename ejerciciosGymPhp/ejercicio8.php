<?php


$duracion = 5;
$coste = $duracion >3 ? ($duracion-3)*5+10:10;
echo "Coste de la llamada: {$coste} centimos";