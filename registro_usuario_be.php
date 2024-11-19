<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo =$_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña =$_POST['contraseña'];

    $query = INSERT INTO usuarios(Id, Nombre_completo, Correo, Usuario, Contraseña) 
            VALUES (`Id`, `Nombre_completo`, `Correo`, `Usuario`, `Contraseña`);


    $ejecutar = mysqli_query($conexion, $query);
?>