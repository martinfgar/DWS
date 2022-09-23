<?php

    for ($i=1;$i<13;$i++){
        $meses[DateTime::createFromFormat('!m',$i)->format('F')] = cal_days_in_month(CAL_GREGORIAN,$i,2022); 
    }
    echo json_encode($meses);
?>