<?php
   
   session_start();

   include 'conexion_be.php'; 
   
    $nombre_completo = $_POST ['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES('$nombre_completo', '$correo', '$usuario', '$contraseña')";

    //verficar que el correo no se repita en la bsae de datos 
    $verficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verficar_correo) > 0){
        echo '
            <script>
                 alert("Este correo ya esta registrado, intenta con otro diferente");
                 window.localtion = "../index.php";
            </script>

        '; 
        exit();
    }
    //verficar que el nombre de usuario no se repita en la bsae de datos 
    $verficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verficar_correo) > 0){
        echo '
            <script>
                 alert("Este usuario ya esta registrado, intenta con otro diferente");
                 window.localtion = "../index.php";
            </script>

        '; 
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
              <script>
                    alet("Intentalo de nuevo, usuario almacenado exitosamente");
                    window.localtion = "../index.php";
              </script>
        ';
    }

    mysqli_close($conexion);
?>