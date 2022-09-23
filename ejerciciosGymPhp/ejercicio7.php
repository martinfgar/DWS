<?php

    $nota = 4;
    
    echo "La nota es {$nota}. ";
    switch($nota){
        case $nota <5 && $nota>=1:
            echo "Suspenso";
            break;
        case $nota <6 && $nota >=5:
            echo "Suficiente";
            break;
        case $nota <7 && $nota >=6:
            echo "Bien";
            break;
        case $nota <9 && $nota >=7:
            echo "Muy bien";
            break;
        case $nota <=10 && $nota >=9:
            echo "Sobresaliente";
            break;
        default:
            echo "ERROR";
    }