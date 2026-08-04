<?php
  require('conexion.php');
  $id_recibido = $_POST["id_enviado"];
  $nombre_recibido = $_POST["nombre_enviado"];
  $apellido_recibido = $_POST["apellido_enviado"];
  $email_recibido = $_POST["email_enviado"];

  $consulta="UPDATE personas 
  SET nombre = '$nombre_recibido', apellido = '$apellido_recibido', email ='$email_recibido'
  WHERE id = $id_recibido;";

  $resultado = mysqli_query($conexion,$consulta);

  header('Location: index.php');
?>