<?php
    require('conexion.php');

    $titulo   = $_POST["titulo_enviado"];
    $director = $_POST["director_enviado"];
    $anio     = $_POST["anio_enviado"];
    $genero   = $_POST["genero_enviado"];

    $consulta = "INSERT INTO peliculas (titulo, director, anio, genero)
                 VALUES ('$titulo', '$director', '$anio', '$genero')";
    $resultado = mysqli_query($conexion, $consulta);

    header('Location: index.php');
?>
