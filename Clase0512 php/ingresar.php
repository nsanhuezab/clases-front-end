<?php
    require('conexion.php');

    $nombre=$_POST['nombre'];
    $apellido_p=$_POST['ap_p'];
    $apellido_m=$_POST['ap_m'];

    $consulta="INSERT INTO alumnos (nombre, apellido_p, apellido_m) VALUES('$nombre','$apellido_p','$apellido_m')";
    $resultado=mysqli_query($conexion,$consulta);
    
    header('Location: index.php');
    
    ?>