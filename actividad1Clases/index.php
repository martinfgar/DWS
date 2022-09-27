<?php
require_once 'Dependencias.php';

echo "<h1>Ordenador</h1>";
$pc = new Ordenador();
$pc->setOS('RHEL');
$pc->setEsSobremesa(true);
$pc->setCodigoHZ('HZ114451');
$pc->imprimirHTML();

echo "<h1>Profesor</h1>";
$profe = new Docente();
$profe->setNombre('Humberto Dias Da Silva');
$profe->setDni('12345678A');
$profe->setEmail('hdds@plaiaundi.net');
$profe->setSueldo('2500€');
$profe->imprimirHTML();

echo "<h1>Alumno</h1>";
$alum = new Alumno();
$alum->setNombre('Joseba Yussef');
$alum->setDni('12345678B');
$alum->setEmail('jy@plaiaundi.net');
$alum->setCiclo('2DAW3');
$alum->setCodMatricula('12312314');
$alum->imprimir();