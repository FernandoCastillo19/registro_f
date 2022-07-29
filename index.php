<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <form  method="post">
    <h1>sistema de registo</h1>
    <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
    <p>Contrasena <input type="password" placeholder="ingrese su contrasena" name="contrasena"></p>
    <input type="submit" value="Ingresar">
    </form>
    <?php
    include("registrar.php");
    ?>
</body>
</html>