<?php

  require('conexion.php');

  $id_recibido = $_GET["id_enviado"];

  $consulta="DELETE FROM personas WHERE id='$id_recibido'";
  $resultado = mysqli_query($conexion,$consulta);

  header('Location: index.php');

?>