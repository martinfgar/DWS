<?php

//TODO examen
/*
* controlador principal llamado de index.php
* visualiza la lista de los zoos en modo galeria de fotos
* 
*/

use modelo\ZooModelo;

require 'modelo/ZooModelo.php';
$zoosM = new ZooModelo(); 
$zoos = $zoosM->selectAll();
require 'vista/dashboard.php';