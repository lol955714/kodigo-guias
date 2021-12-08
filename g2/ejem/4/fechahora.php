<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Fecha y hora del Sistema</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <link rel="stylesheet" href="css/fechahora.css" />
        <script src="js/modernizr.custom.lis.js"></script>
        <script src="js/prefixfree.min.js"></script>
    </head>
    <body>
        <?php
            //Establecer la zona horaria para el servidor web, de modo que
            //concuerde con la hora del país donde se está ejecutando el script.
            date_default_timezone_set("America/El_Salvador");
            //Obtener el día de la semana en forma de número entero
            //0: Domingo
            //1: Lunes
            //2: Martes
            //3: Miércoles
            //4: Jueves
            //5: Viernes
            //6: Sábado
            $dia = date("w");
            switch($dia){
                case 0:
                    $dia = "Domingo";
                break;
                case 1:
                    $dia = "Lunes";
                break;
                case 2:
                    $dia = "Martes";
                break;
                case 3:
                    $dia = "Miércoles";
                break;
                case 4:
                    $dia = "Jueves";
                break;
                case 5:
                    $dia = "Viernes";
                break;
                case 6:
                    $dia = "Sábado";
                break;
            }
            //Obtener el mes del año en forma de número entero
            //1: Enero
            $mes=date("n");
            switch($mes){
                case 1:
                    $mes = "Enero";
                break;
                case 2:
                    $mes = "Febrero";
                    break;
                case 3:
                    $mes = "Marzo";
                break;
                case 4:
                    $mes = "Abril";
                break;
                case 5:
                    $mes = "Mayo";
                break;
                case 6:
                    $mes = "Junio";
                break;
                case 7:
                    $mes = "Julio";
                break;
                case 8:
                    $mes = "Agosto";
                break;
                case 9:
                    $mes = "Septiembre";
                break;
                case 10:
                    $mes = "Octubre";
                break;
                case 11:
                    $mes = "Noviembre";
                break;
                case 12:
                    $mes = "Diciembre";
                break;
            }
            //Día del mes en forma numérica del mes del 0 al 31, 30, 29 o 28
            $numero = date("j");
            //Representación numérica del año en cuatro dígitos
            $anio = date("Y");
            //Representación de la hora de fácil lectura para el usuario
            $hora = date("g:i a");
            printf("<section>\n");
            printf("\t<div class=\"box box3 shadow3\">\n");
            printf("\t\t<p>Hoy es %s, %d de %s del %d \n</p>\n", $dia, $numero, $mes, $anio); printf("\t</div>\n");
            printf("\t<div class=\"box box4 shadow4\">\n"); printf("\t\t\t<p>Son las: %s \n\t\t</p>\n", $hora);
            printf("\t</div>\n");
            printf("</section>\n");
            echo "<a href=\"..\"><button>Arriba</button></a>";
            echo " </br>";
        ?>
    </body>
</html>