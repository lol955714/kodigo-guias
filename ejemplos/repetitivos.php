<?php
    $i=0;
    while($i<25){
        echo "hola, esto es un ejemplo de funcionamiento de while";
        echo "este es el ciclo #  $i "."\n";
        $i++;
        if($i == 10){
            echo "estamos en el ciclo" . $i+1 ."\n";
            echo "esto no se va a mostrar";
            continue;
        }
        if($i == 20){
            echo "estamos en el ciclo" . $i+1 ."\n";
            echo "esto no se va a mostrar";
            break;
        }
        
    }

?>