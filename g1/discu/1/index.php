<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scripts con (X)HTML y PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="..">Arriba</a>
    </br>
    <?php
    echo "desde el contenedor de docker será: " . stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"];
    ?>
    </br>
</body>
</html>