<?php
    require('conexion.php');

    $nombre=$_POST['nombre'];
    $apellido_p=$_POST['ap_p'];
    $apellido_m=$_POST['ap_m'];
    $id=$_POST['id'];

    $consulta="UPDATE alumnos SET nombre='$nombre', apellido_p='$apellido_p', apellido_m='$apellido_m' WHERE id='$id';";
    $resultado=mysqli_query($conexion,$consulta);
    
    header('Location: index.php');
    
    ?>