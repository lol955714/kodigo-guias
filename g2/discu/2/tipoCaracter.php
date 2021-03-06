<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tipo caracter</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/formstyle.css" />
        <link rel="stylesheet" href="css/bisiesto.css" media="screen" />
        <script src="js/validatedata.js"></script>
        <script src="js/prefixfree.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <?php 
                if(!isset($_POST['enviar'])):
            ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" name="frmdatos">
                    <h2 class="contact">Te clasificarÃ© los caracteres de la frase</h2>
                    <span class="contact">
                        <label for="txtdato">Ingresa una frase, no importa nada</label>&nbsp;&nbsp;
                    </span>
                    <input type="string" name="year" id="year" value=""  placeholder="Ingrese un string" required/><br />
                    <input type="submit" name="enviar" id="enviar" value="Probar" />
            </form>
            <?php
                else:
                    $cadena=  isset($_POST['year']) ? $_POST['year'] : 0; 
                    $ciclos = strlen($cadena);
                    $tablap1 = <<< inicio
                        <table border ="1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Caracter</th>
                                    <th>Detalle</th>
                                <tr>
                            </thead>
                            <tbody>
                    inicio;
                    $tablap2 = <<< inicio
                            </tbody>
                        </table>
                    inicio;
                    for ($i=0; $i < $ciclos; $i++) { 
                        $temp= substr($cadena, $i, 1);
                        $hexa=ord($temp);
                        //printf( "%s </br>" ,$temp);
                        if($hexa > 96 and $hexa < 122){//minusculas
                            switch ($hexa) {
                                case ord("a"):
                                    $salida="Vocal minÃºscula sin acentuar";
                                    break;
                                case ord("e"):
                                    $salida="Vocal minÃºscula sin acentuar";
                                    break;
                                case ord("i"):
                                    $salida="Vocal minÃºscula sin acentuar";
                                    break;
                                case ord("o"):
                                    $salida="Vocal minÃºscula sin acentuar";
                                    break;
                                case ord("u"):
                                    $salida="Vocal minÃºscula sin acentuar";
                                    break;
                                default:
                                    $salida="Consonante minÃºscula";
                                    break;
                            }
                        } elseif ($hexa > 64 and $hexa < 91){//mayusculas
                            switch ($hexa) {
                                case ord("A"):
                                    $salida="Vocal mayÃºscula sin acentuar";
                                    break;
                                case ord("E"):
                                    $salida="Vocal mayÃºscula sin acentuar";
                                    break;
                                case ord("I"):
                                    $salida="Vocal mayÃºscula sin acentuar";
                                    break;
                                case ord("O"):
                                    $salida="Vocal mayÃºscula sin acentuar";
                                    break;
                                case ord("U"):
                                    $salida="Vocal mayÃºscula sin acentuar";
                                    break;
                                default:
                                    $salida="Consonante mayÃºscula";
                                    break;
                            }
                        }elseif ($hexa > 47 and $hexa < 58) {//numeros
                            echo "asd</br>";
                        }elseif (($hexa > 32 and $hexa < 48) or ($hexa >57 and $hexa <65) or ($hexa >122 and $hexa <127)) {//simbolos
                            echo "qwe</br>";
                        }elseif ($hexa == 130 or $hexa == 160 or $hexa == 161 or $hexa == 162 or $hexa == 163) {//vocales minusculas acentuadas
                            $salida="Vocal minÃºscula acentuada";
                        }elseif ($hexa == 181 or $hexa == 144 or $hexa == 214 or $hexa == 224 or $hexa == 233) {//vocales mayusculas acentuadas
                            $salida="Vocal mayÃºscula acentuada";
                        }else{
                            $salida="No se pudo clasificar";
                        }
                        $linea="<tr> <td> $i </td> <td> $temp </td> <td> $salida </td> </tr>";
                        $tablap1 = $tablap1 . $linea;
                    }
                    echo $tablap1 . $tablap2;
                endif;
                ?>
        </div>
        <a href=".." type="button">Arriba</a>
        </br>
    </body>
</html>