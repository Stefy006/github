<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $constrasena = $_POST['constrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE ccorreo='$correo' and constraseña = '$constraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: bienvenido.php");
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verfique los datos introducidos");
                window.location = ../index.php";
            </script>
        ';
        exit;
    }
?>