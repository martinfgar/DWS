<?php

//TODO examen
/*
 * controlador que recibe una id de zoo
 * y muestra la información del zoo 
 * con sus animales.
*/

use modelo\AnimalModelo;
use modelo\ZooModelo;

require 'modelo/ZooModelo.php';
require 'modelo/AnimalModelo.php';
$zoosM = new ZooModelo(); 
$zoo = $zoosM->selectById($_GET['id']);
$animalesM = new AnimalModelo();
$animalesZoo = $animalesM->selectAnimalsByZoo($_GET['id']);
require 'vista/zoo.php';