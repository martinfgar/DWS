<?php

    $a = 0;
    $b = 7;
    $c = -5;
    if ($a >$c){
        if ($b >$a){
            echo "{$b}>{$a}>{$c}";
            echo "<br>";
            echo "{$c}<{$a}<{$b}";
        }else if ($b>$c){
            echo "{$a}>{$b}>{$c}";
            echo "<br>";
            echo "{$c}<{$b}<{$a}";            

        }else{
            echo "{$a}>{$c}>{$b}";
            echo "<br>";
            echo "{$b}<{$c}<{$a}"; 
        }
    }else{
        if ($b<$a){
            echo "{$c}>{$a}>{$b}";
            echo "<br>";
            echo "{$b}<{$a}<{$c}";
        }else if ($b>$c){
            echo "{$b}>{$c}>{$a}";
            echo "<br>";
            echo "{$a}<{$c}<{$b}";
        }else{
            echo "{$c}>{$b}>{$a}";
            echo "<br>";
            echo "{$a}<{$b}<{$c}";
        }
    }