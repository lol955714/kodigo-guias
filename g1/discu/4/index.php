<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,user-scalable=no,initialscale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
        <title>Formulario de Conversión</title>
        <link rel="stylesheet" href="css/forms.css" />
        <script src="js/validar.js"></script>
        <script src="js/modernizr.custom.lis.js"></script>
        <script src="js/validar.js"></script>
        <script src="js/modernizr.custom.lis.js"></script>
    </head>
    <body>
        <header>
            <h1>Ingrese la cantidad de dólares a convertir</h1>
        </header>
        <section>
            <article>
                <form action="conversor.php" method="POST">
                    <label>Monto en USD:</label>
                    <input type="number" id="valor" min="0.01" name="valor"  step="0.01" required/>
                    <input type="submit" id="enviar" name="submit" value="Enviar" class="submit" />
                </form>
            </article>
        </section>
        <a href=".." class="button-link">Arriba</a>
    </body>
</html>