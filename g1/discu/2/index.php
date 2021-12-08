<?php
    $nombre = <<< nom
    Roberto Andrés Quintanilla Bonilla
    nom;
    $nacimiento = <<< nac
    San Salvador
    nac;
    $edad = <<< ed
    15
    ed;
    $carnet = <<< car
    QB13002
    car;
    $html = <<< codigo
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Scripts con (X)HTML y PHP</title>
                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile" />
                <link rel="stylesheet" href="css/tables.css" />
                <script src="js/modernizr.custom.lis.js"></script>
            </head>
            <body>
                <a href="..">Arriba</a>
                </br>
                </br>
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Información personal</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Dato</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td>Nombre</td>
                            <td>$nombre</td>
                        </tr>
                        <tr>
                            <td>Lugar de nacimiento</td>
                            <td>$nacimiento</td>
                        </tr>
                        <tr class="odd">
                            <td>Edad</td>
                            <td>$edad</td>
                        </tr>
                        <tr>
                            <td>Carnet</td>
                            <td>$carnet</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
    codigo;
    echo $html;
?>
    