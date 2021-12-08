<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Contador de palabras</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="" />
        <link rel="stylesheet" href="css/font.css" />
        <link rel="stylesheet" href="css/formstyle.css" />
        <script src="js/prefixfree.min.js"></script>
        <!-- Para las versiones anteriores del IE9 -->
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <h1>
                <!-- Guardando los números ingresados en variables de PHP -->
                Resultados de la comparación de 
                <?php echo $num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0; ?>,
                <?php echo $num2 = isset($_POST['numero3']) ? $_POST['numero2'] : 0; ?> y
                <?php echo $num3 = isset($_POST['numero3']) ? $_POST['numero3'] : 0; ?>
            </h1>
        </header>
        <section>
            <article>
                <p class="msg">
                    <?php
                        //Primero se encuentra el mayor de los primeros dos números
                        $elmayor = ($num1 > $num2) ? $num1 : $num2;
                        //Luego el que resultó mayor se compara con el tercer número
                        //Así se establece cuál de los tres es el mayor
                        $elmayor = ($elmayor > $num3) ? $elmayor : $num3; printf("El número mayor es: %d", $elmayor);
                    ?>
                </p>
                <a href=".."><button>Arriba</button></a>
            <article>
        </section>
    </body>
</html>