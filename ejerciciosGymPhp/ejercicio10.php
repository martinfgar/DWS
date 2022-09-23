<?php

$dataSalida = new DateTime("2022:12:22 18:15:00");
$ahora = new DateTime();
echo "La fecha de salida es: {$dataSalida->format('Y-m-d H:i:s')}";
echo "<br>";
echo "La fecha de ahora es: {$ahora->format('Y-m-d H:i:s')}";
echo "<br>";
echo "Quedan : <br>";
echo date_diff($dataSalida,$ahora)->format('%a días, %h horas, %i minutos, %s segundos');