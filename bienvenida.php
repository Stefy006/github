<?php

  session_start();

  if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("por favor debes iniciar sessión");
        window.location = "index.php";
    </script>
    ';
    header("location: index.php");
    session_destroy();
    die();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFF-8">
    <meta bame="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Magtimuspro</title>
</head>
<body>
    <h1>bienvenida a mi mundo!</h1>
    <a herf="php/cerrar_session.php">Cerrar sesion</a>
</body>
</html>