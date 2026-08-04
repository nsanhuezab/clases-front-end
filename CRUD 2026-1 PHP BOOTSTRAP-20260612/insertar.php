<?php
    include('conexion.php');

    $nombre_recibido=$_POST["nombre"];
    $apellido_recibido=$_POST["apellido"];
    $rut_recibido=$_POST["rut"];
    $consulta = "INSERT INTO alumnos (nombre, apellido, rut)  VALUES ('$nombre_recibido','$apellido_recibido','$rut_recibido')";
    $resultado = mysqli_query($conexion,$consulta);

    header('Location: index.php');
?>