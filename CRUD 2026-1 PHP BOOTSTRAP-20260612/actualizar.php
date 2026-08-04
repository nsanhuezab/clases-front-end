<?php
    include('conexion.php');
    $id=$_POST["id"];
    $nombre_recibido=$_POST["nombre"];
    $apellido_recibido=$_POST["apellido"];
    $rut_recibido=$_POST["rut"];
    $consulta = "UPDATE alumnos SET nombre = '$nombre_recibido', apellido = '$apellido_recibido', rut='$rut_recibido' WHERE id='$id';";
    $resultado = mysqli_query($conexion,$consulta);

    header('Location: index.php');
?>