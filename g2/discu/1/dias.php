<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Dias vividos</title>
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
                    <h2 class="contact">Te diré cuántos días has vivido</h2>
                    <span class="contact">
                        <label for="txtdato">Ingresa tu año de nacimiento</label>&nbsp;&nbsp;
                    </span>
                    <input type="date" name="year" id="year" value="" maxlength="20" placeholder="Ingrese su fecha" required/><br />
                    <span id="numbersOnly">Ingrese números enteros</span>
                    <input type="submit" name="enviar" id="enviar" value="Probar" />
                </form>
            <?php
                else:
                    $fecha1= new DateTime(  isset($_POST['year']) ? $_POST['year'] : 0); 
                    $fecha2= new DateTime(date("Y-m-d"));
                    $diferencia=$fecha1->diff($fecha2);
                    //echo $diferencia->days;
                    echo "<p class=\"bisiesto\">\n";
                    echo "\t<span style=\"color:Green;font:bold 15px 'Lucida Sans';\">La cantidad de días es $diferencia->days </span><br />\n";
                    echo "\t<span style=\"color:Green;font:bold 15px 'Lucida Sans';\">\n\t\t<a href=\"{$_SERVER['PHP_SELF']}\">Probar otra fecha</a>\n\t</span>\n";
                    echo "</p>\n"; 
                endif;
            ?>
        </div>
        <a href=".." type="button">Arriba</a>
        </br>
    </body>
</html>