<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Año bisiesto</title>
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
                    <h2 class="contact">Años bisiestos</h2>
                    <span class="contact">
                        <label for="txtdato">Probar año:</label>&nbsp;&nbsp;
                    </span>
                    <input type="text" name="year" id="year" value="" maxlength="20" placeholder="Ingrese el dato" /><br />
                    <span id="numbersOnly">Ingrese números enteros</span>
                    <input type="submit" name="enviar" id="enviar" value="Probar" />
                </form>
            <?php
                else:
                    //Script que determina si un año es bisiesto o no
                    $year = isset($_POST['year']) ? $_POST['year'] : 0; 
                    if(($year%4 == 0 && $year%100 != 0) || $year%400 == 0):
                        echo "<p class=\"bisiesto\">\n";
                        echo "\t<span style=\"color:Green;font:bold 15px 'Lucida Sans';\">El año $year es bisiesto</span><br />\n";
                        echo "\t<span style=\"color:Green;font:bold 15px 'Lucida Sans';\">\n\t\t<a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>\n\t</span>\n";
                        echo "</p>\n"; 
                    else:
                        echo "<p class=\"bisiesto\">\n";
                        echo "\t<span style=\"color:FireBrick;font:bold 15px 'Lucida Sans';\">El año $year no es bisiesto</span><br />\n";
                        echo "\t<span style=\"color:Green;font:bold 15px 'Lucida Sans';\">\n\t\t<a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>\n";
                        echo "\t</p>\n"; 
                    endif;
                endif;
            ?>
        </div>
        <a href=".." type="button">Arriba</a>
        </br>
    </body>
</html>