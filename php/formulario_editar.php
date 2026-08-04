<?php
  require('conexion.php');
  $id_recibido = $_GET["id_enviado"];
  $consulta = "SELECT * FROM personas WHERE id=$id_recibido";
  $resultado = mysqli_query($conexion,$consulta);
  while($row=mysqli_fetch_assoc($resultado)){
    $nombre = $row["nombre"];
    $apellido = $row["apellido"];
    $email = $row["email"];
    $id = $row["id"];
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    echo "<form action='editar.php' method='POST'>";
    echo "<label>Nombre:</label>";
    echo "<input type='text' name='nombre_enviado' value=".$nombre."><br>";
    echo "<label>Apellido:</label>";
    echo "<input type='text' name='apellido_enviado' value=".$apellido."><br>";
    echo "<label>Email:</label>";
    echo "<input type='email' name='email_enviado' value=".$email."><br>";
    echo "<input type='hidden' name='id_enviado' value=".$id."><br>";
    echo "<button type='submit'>Guardar</button>";
    echo "</form>";
?>
</body>
</html>