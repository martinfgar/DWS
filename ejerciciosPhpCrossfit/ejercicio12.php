<?php


$personas = ['jordi' => 'Jordi Rubio', 'marta' => 'Marta Fabra', 'eva' => 'Eva Palacio', 'toni' => 'Antonio Comas', 'emilio' => 'Emilio Morales', 'foo' => 'Francisco Cascales'];
ksort($personas);
echo print_r($personas);
echo "<br>";
natsort($personas);
echo print_r($personas);