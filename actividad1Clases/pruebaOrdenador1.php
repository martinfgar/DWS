<?php

require_once 'Dependencias.php';
echo "<h1>Ordenador</h1>";
$pc = new Ordenador();
$pc->setOS('RHEL');
$pc->setEsSobremesa(true);
$pc->setCodigoHZ('HZ114451');
$pc->imprimirHTML();