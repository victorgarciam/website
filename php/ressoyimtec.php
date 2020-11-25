<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTITUTO MARIA TERESA CANCINO</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
  <body>
    <?php
     Nombre:isset($_POST["usuario_nombre"])?print $_POST["nombre"]:"";
     Contraseña:isset($_POST["pwd"])?print $_POST["contraseña"]:"";  
    ?>

  </body>
</html>