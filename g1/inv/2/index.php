<?php
    $html= <<< codigo
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,user-scalable=no,initialscale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile" />
                <link rel="stylesheet" href="css/tables.css" />
                <script src="js/modernizr.custom.lis.js"></script>
            </head>
            <body>
                <div id="table-wrapper">
                    <div id="table-scroll">
                        <table  id="hor-zebra" summary="" border=1>
                            <caption>Resumen de funciones para determinar el tipo de dato</caption>
                            <thead>
                                <tr class="thead">
                                    <th scope="col">Nombre</td>
                                    <th scope="col">Descripción</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    empty
                                    </td>
                                    <td>
                                    Determina si una variable está vacía
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    get_resource_type
                                    </td>
                                    <td>
                                    Devuelve el tipo de recurso
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    gettype
                                    </td>
                                    <td>
                                    Obtener el tipo de una variable
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_array 
                                    </td>
                                    <td>
                                    Comprueba si una variable es un array
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_bool
                                    </td>
                                    <td>
                                    Comprueba si una variable es de tipo booleano
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_callable 
                                    </td>
                                    <td>
                                    Verificar que los contenidos de una variable puedan ser llamados como una función
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_countable
                                    </td>
                                    <td>
                                    Verifica que el contenido de una variable es un valor contable
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_double 
                                    </td>
                                    <td>
                                    Alias de is_float
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_float
                                    </td>
                                    <td>
                                    Comprueba si el tipo de una variable es float
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_int 
                                    </td>
                                    <td>
                                    Comprueba si el tipo de una variable es integer
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_integer
                                    </td>
                                    <td>
                                    Alias de is_int
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_iterable
                                    </td>
                                    <td>
                                    Verifica que el contenido de una variable es un valor iterable
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_long
                                    </td>
                                    <td>
                                    Alias de is_int
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_null
                                    </td>
                                    <td>
                                    Comprueba si una variable es null
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_numeric 
                                    </td>
                                    <td>
                                    Comprueba si una variable es un número o un string numérico
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_object 
                                    </td>
                                    <td>
                                    Comprueba si una variable es un objeto
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_real 
                                    </td>
                                    <td>
                                    Alias de is_float
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_resource
                                    </td>
                                    <td>
                                    Comprueba si una variable es un recurso
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    is_scalar 
                                    </td>
                                    <td>
                                    Comprueba si una variable es escalar
                                    </td>
                                </tr>
                                <tr id="lw">
                                    <td>
                                    is_string 
                                    </td>
                                    <td>
                                    Comprueba si una variable es de tipo string
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    isset
                                    </td>
                                    <td>
                                    Determina si una variable está definida y no es null
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </br>
                <a href=".." class="button-link">Arriba</a>
            </body>
        </html>
    codigo;
    echo $html;
?>
