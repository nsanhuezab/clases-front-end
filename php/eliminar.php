<?php
    require('conexion.php');

    $id=$_GET['id'];

    $consulta="DELETE FROM alumnos WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    
    header('Location: index.php');
    
    ?>