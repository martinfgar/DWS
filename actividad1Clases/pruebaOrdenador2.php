<?php 


require_once 'Dependencias.php';
$pcs = [];
for ($i=0; $i<10; $i++){
    $pc = new Ordenador();
    $pc->setOS('RHEL');
    $pc->setEsSobremesa(random_int(0,1));
    $pc->setCodigoHZ('HZ'.random_int(100000,999999));
    $pcs[] = $pc;
}
echo "<table><tbody>";
foreach($pcs as $pc){
    echo "<tr><td>";
    $pc->imprimirHTML();
    echo "</td></tr>";
}
echo "<tbody></table>";