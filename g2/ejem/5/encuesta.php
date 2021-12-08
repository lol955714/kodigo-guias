<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Encuesta</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <link rel="stylesheet" href="css/encuesta.css" />
        <link rel="stylesheet" href="css/cd-dropdown-menu.css" />
        <link rel="stylesheet" href="css/common.css" />
        <link rel="stylesheet" href="css/demo.css" />
        <link rel="stylesheet" href="css/icons.css" />
        <link rel="stylesheet" href="css/links.css" />
        <script src="js/modernizr.custom.lis.js"></script>
        <script src="js/prefixfree.min.js"></script>
        <script src=""></script>
        <script src="js/jquery.dropdown.js"></script>
    </head>
    <body>
        <header>
            <h1 class="extruded">Favor responder la pregunta</h1>
        </header>
        <section>
            <article>
                <?php
                    //Sintaxis alternativa de las sentencia if-else 
                    if(isset($_POST['enviar'])):
                        $contact = $_POST['contacto'];
                    //Usando sintaxis alternativa de la sentencia switch()
                    switch($contact):
                        case 'client':
                            echo "<p>Cliente que visita constantemente el sitio.</p>";
                        break;
                        case 'television':
                            echo "<p>Cliente referido por anuncio televisivo.</p>";
                        break;
                        case 'phonebook':
                            echo "<p>Cliente referido mediante guía telefónica.</p>";
                        break;
                        case 'social':
                            echo "<p>Cliente referido a través de redes sociales.</p>";
                        break;
                        case 'friend':
                            echo "<p>Cliente referido por amigos.</p>";
                        break;
                        //No parece necesario porque el ingreso es por medio de un campo select
                        default:
                            echo "<p>No se puede especificar cómo contactó el cliente con nuestro sitio web.</p>";
                        endswitch;
                    $link = "<a href=\"". $_SERVER['PHP_SELF'] ."\" class=\"a-btn\">";
                    $link .= "\t<span class=\"a-btn-symbol\">i</span>";
                    $link .= "\t<span class=\"a-btn-text\">Volver</span>";
                    $link .= "\t<span class=\"a-btn-slide-text\">al formulario</span>";
                    $link .= "\t<span class=\"a-btn-slide-icon\"></span>";
                    $link .= "</a>"; echo $link;
                    else:
                ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <select name="contacto" id="cd-dropdown" class="cd-select">
                    <option value="-1" selected>(Selecciones una opción)</option>
                    <option value="client" class="icon-chrome">Soy cliente frecuente</option>
                    <option value="television" class="icon-safari">Publicidad por televisión</option>
                    <option value="phonebook" class="icon-IE">Directorio telefónico</option>
                    <option value="social" class="icon-firefox">A través de redes sociales</option>
                    <option value="friend" class="icon-opera">Por sugerencia de amigo(s)</option>
                    </select>
                    <input type="submit" name="enviar" id="enviar" class="styled-button" value="Enviar" />
                    </form>
                <?php
                    endif;
                ?>
            </article>
        </section>
        <a href=".."><button>Arriba</button></a>
        </br>
    </body>
    <script>
        $(function() {
            $('#cd-dropdown').dropdown({ gutter : 5, stack : false, slidingIn : 100 });
        });
    </script>
</html>