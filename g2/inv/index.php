<?php
    $i =0;
    a:
        echo "Selecciona operación a realizar \n";
        echo "1-Imprimir un \"Hola mundo\" \n";
        echo "2-Recibir un saludo \n";
        echo "3-Recibir un consejo \n";
        echo "4-Salir \n";
        fscanf(STDIN, "%i", $op);
        $i++;
        switch ($op) {
            case 1:
                system ('clear');
                echo "\"Hola mundo\" \n \n";
                goto a;
                break;
            case 2:
                system ('clear');
                echo "Hola, cómo estás? \n \n";
                goto a;
                break;
            case 3:
                system ('clear');
                echo "Recuerda lavarte los dientes luego de cada comida \n \n";
                goto a;
                break;
            case 4:
                system ('clear');
                echo "Ha sido un gusto atenderte \n \n \n";
                echo "Has visto un loop, sin usar una estructura de control para repetir \n";
                echo "Veces que se repitió el ciclo: " . $i . "\n";
                break;
            default:
                # code...
                break;
        }        
?>