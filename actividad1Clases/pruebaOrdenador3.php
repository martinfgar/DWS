<?php


require_once 'Dependencias.php';
$pcs = [];
$OS = ['Windows 10', 'RHEL', 'Ubuntu', 'Arch Linux', 'CentOS', 'Fedora', 'Windows XP'];
for ($i=0; $i<10; $i++){
    $pc = new Ordenador();
    $pc->setOS($OS[random_int(0,count($OS)-1)]);
    $pc->setEsSobremesa(random_int(0,1));
    $pc->setCodigoHZ('HZ'.random_int(100000,999999));
    $pcs[] = $pc;
}
echo "<table border=1><thead></thead><tbody>";
foreach($pcs as $pc){
    echo "<tr><td>";
    $pc->imprimirHTML();
    echo "</td></tr>";
}
echo "<tbody></table>";