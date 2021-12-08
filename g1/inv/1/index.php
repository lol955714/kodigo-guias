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
                            <caption>Resumen de constantes mágicas y de error</caption>
                            <thead>
                                <tr class="thead">
                                    <th scope="col">Nombre</td>
                                    <th scope="col">Descripción</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    __LINE__
                                    </td>
                                    <td>
                                    El número de línea actual en el fichero.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __FILE__
                                    </td>
                                    <td>
                                    Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __DIR__
                                    </td>
                                    <td>
                                    Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __FUNCTION__
                                    </td>
                                    <td>
                                    Nombre de la función.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __CLASS__
                                    </td>
                                    <td>
                                    Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __TRAIT__
                                    </td>
                                    <td>
                                    Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __TRAIT__
                                    </td>
                                    <td>
                                    El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __METHOD__
                                    </td>
                                    <td>
                                    Nombre del método de la clase.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    __NAMESPACE__
                                    </td>
                                    <td>
                                    Nombre del espacio de nombres actual.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    ClassName::class
                                    </td>
                                    <td>
                                    El nombre de clase completamente cualificado. Véase también ::class.
                                    </td>
                                </tr>
                                <tr class="odd" >
                                    <td id="lw">
                                    E_ERROR
                                    </td>
                                    <td id="lw">
                                    Errores Fatales en tiempo de ejecución. Éstos indican errores que no se pueden recuperar, tales como un problema de asignación de memoria. La ejecución del script se interrumpe.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_WARNING
                                    </td>
                                    <td id="lw">
                                    Advertencias en tiempo de ejecución (errores no fatales). La ejecución del script no se interrumpe.
                                    </td id="lw">
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_PARSE
                                    </td id="lw">
                                    <td id="lw">
                                    Errores de análisis en tiempo de compilación. Los errores de análisis deberían ser generados únicamente por el analizador.
                                    </td id="lw">
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_NOTICE
                                    </td>
                                    <td id="lw">
                                    Avisos en tiempo de ejecución. Indican que el script encontró algo que podría señalar un error, pero que también podría ocurrir en el curso normal al ejecutar un script.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_CORE_ERROR
                                    </td>
                                    <td id="lw">
                                    Errores fatales que ocurren durante el arranque incial de PHP. Son como un E_ERROR, excepto que son generados por el núcleo de PHP.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_CORE_WARNING
                                    </td>
                                    <td id="lw">
                                    Advertencias (errores no fatales) que ocurren durante el arranque inicial de PHP. Son como un E_WARNING, excepto que son generados por el núcleo de PHP.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_COMPILE_ERROR
                                    </td>
                                    <td id="lw">
                                    Errores fatales en tiempo de compilación. Son como un E_ERROR, excepto que son generados por Motor de Script Zend.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_COMPILE_WARNING
                                    </td>
                                    <td id="lw">
                                    Advertencias en tiempo de compilación (errores no fatales). Son como un E_WARNING, excepto que son generados por Motor de Script Zend.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_USER_ERROR
                                    </td>
                                    <td id="lw">
                                    Mensaje de error generado por el usuario. Es como un E_ERROR, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().	 
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_USER_WARNING
                                    </td>
                                    <td id="lw">
                                    Mensaje de advertencia generado por el usuario. Es como un E_WARNING, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().	
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_STRICT
                                    </td>
                                    <td id="lw">
                                    Habilítelo para que PHP sugiera cambios en su código, lo que asegurará la mejor interoperabilidad y compatibilidad con versiones posteriores de PHP de su código.	
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_RECOVERABLE_ERROR
                                    </td>
                                    <td id="lw">
                                    Error fatal capturable. Indica que ocurrió un error probablemente peligroso, pero no dejó al Motor en un estado inestable. Si no se captura el error mediante un gestor definido por el usuario (vea también set_error_handler()), la aplicación se abortará como si fuera un E_ERROR.	
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_DEPRECATED
                                    </td>
                                    <td id="lw">
                                    Avisos en tiempo de ejecución. Habilítelo para recibir avisos sobre código que no funcionará en futuras versiones.	
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_USER_DEPRECATED
                                    </td>
                                    <td id="lw">
                                    Mensajes de advertencia generados por el usuario. Son como un E_DEPRECATED, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().	
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td id="lw">
                                    E_ALL
                                    </td>
                                    <td id="lw">
                                    Todos los errores y advertencias soportados, excepto del nivel E_STRICT antes de PHP 5.4.0.	
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
