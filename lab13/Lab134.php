<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Laboratorio 13</title>
</head>
<body>
    <h1>Eliminar Cookie</h1>
    <?php
        if(isset($_COOKIE["user"])){
            setcookie("user", "", time()+60*5);
            echo "<h3>La cookie 'user' ha sido eliminada satisfactoriamente</h3><br>";
        }else{
            echo "<h3>La cookie 'user' no existe</h3><br>";
        }
        if(isset($_COOKIE["contador"])){
            setcookie("contador","", time()+365*24*60*60);
            echo "<h3>La cookie 'contador' ha sido eliminada satisfactoriamente</h3><br>";
        }else{
            echo "<h3>La cookie 'contador' no existe</h3><br>";
        }
    ?>
    <a href="Lab131.php">Volver al contador de visitar</a>
    <a href="Lab132.php">volver al saludo a usuario</a>
</body>
</html>