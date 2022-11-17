<?php
//TODO examen
/*
 * controlador que inserta los datos
 * del zoo recibidos por post.
 * y abre:
 *  opcion 1: la pantalla del zoo que acabamos de insertar VER_ZOO
 *  opcion 2: el panel principal donde aparecen todos los zoos 
 */

use modelo\ZooModelo;

require 'modelo/ZooModelo.php';

$zoosM = new ZooModelo();
$id = $zoosM->maxIdZoo() +1;
$zooData = $_POST;
$zooData['id'] = $id;
$zoosM->insert($zooData);
header("Location: c_verZoo.php?id={$id}");
die();
