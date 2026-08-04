<?php
  require('conexion.php');

  $nombre_recibido = $_POST["nombre_enviado"];
  $apellido_recibido = $_POST["apellido_enviado"];
  $email_recibido = $_POST["email_enviado"];

  $consulta="INSERT INTO personas (nombre, apellido, email) 
  VALUES ('$nombre_recibido','$apellido_recibido','$email_recibido')";

  $resultado = mysqli_query($conexion,$consulta);

header('Location: index.php');


?>