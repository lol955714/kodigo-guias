<?php     
    if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"){
    extract($_POST);
    $from = !empty($valor) ? $valor : "<a href=\"index.html\">No ingresó el monto.</a>";
    $salida = $from * 0.88;
    $html = <<< sal
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width,user-scalable=no,initialscale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
            <title>Información recibida</title>
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile" />
            <link rel="stylesheet" href="css/tables.css" />
            <script src="js/modernizr.custom.lis.js"></script>
        </head>
        <body>
            <table id="hor-zebra" summary="Datos recibidos del formulario">
                <caption>Resultado de la conversión</caption>
                <thead>
                    <tr class="thead">
                        <th scope="col">USD</th>
                        <th scope="col">EURO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            $from
                        </td>
                        <td>
                            $salida
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="./index.php" class="button-link">Nueva conversión</a>
            <a href=".." class="button-link">Arriba</a>
        </body>
    </html>
    sal;
    }
    echo $html;
?>