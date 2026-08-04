<?php
  require('conexion.php');
  $consulta = "SELECT * FROM personas";
  $resultado = mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="ingresar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre_enviado"><br>

        <label>Apellido:</label>
        <input type="text" name="apellido_enviado"><br>

        <label>Email:</label>
        <input type="email" name="email_enviado"><br>

        <button type="submit">Guardar</button>
    </form>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Opciones</th>
        </tr>
        
        <?php
        while($row=mysqli_fetch_assoc($resultado)){
            $nombre = $row["nombre"];
            $apellido = $row["apellido"];
            $email = $row["email"];
            echo "<tr>";
                echo "<td>".$nombre."</td>";
                echo "<td>".$apellido."</td>";
                echo "<td>".$email."</td>";
                echo "<td>";
                    echo "<a href='eliminar.php?id_enviado=".$row["id"]."'>Eliminar</a>";
                    echo "<a href='formulario_editar.php?id_enviado=".$row["id"]."'>Editar</a>";
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>