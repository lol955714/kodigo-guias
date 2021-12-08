<!DOCTYPE html>
<html>
    <head>
        <title>Scripts con (X)HTML y PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,user-scalable=no,initialscale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
        <!--hoja de estilo local-->
        <link rel="stylesheet" media="screen" href="css/htmlphp.css">
        <Script src="js/modernizr.custom.lis.js"></Script>
        <script src="js/prefixfree.min.js"></script>
    </head>
    <body>
        <div>
            <header>
                <h1>
                    Demostración de HTML y PHP
                </h1>
            </header>
            <section class="main">
                <article id="html">
                    <div class="text">
                        <p>
                        &lt;!DOCTYPE html&gt; <br/>
                        &lt;html&gt;<br />
                        ...
                        </p>
                        <p>
                            Parte de HTML normal
                        </p>
                        <p>
                            &lt;/html&gt;
                        </p>
                    </div>
                    <div class="img">
                        <img src="img/html5.png" alt="logo de html5">
                    </div>
                </article>
                <?php
                    echo "<article id=\"php\">\n";
                    echo "<div class=\"text\">";
                    echo "<p>&lt;?php<br />";
                    echo "...<br />";
                    echo "Parte con PHP.</p>";
                    echo "<p>?&gt;</p>";
                    echo "</div>";
                    echo "<div class=\"img\">";
                    echo "<img src=\"img/php.png\" alt=\"Logo de HTML5\" />";
                    echo "</div>";
                    echo "\n</article>\n";
                ?>
            </section>
            <a href="..">Arriba</a>
        </div>
    </body>
</html>