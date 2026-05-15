<?php
    require('conexion.php');
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-2">
                <form action="ingresar.php" method="POST">
                <input name="nombre" type="text" class="form-control mb-1" placeholder="Ingrese nombre">
                <input name="ap_p" type="text" class="form-control mb-1" placeholder="Ingrese apellido paterno">
                <input name="ap_m" type="text" class="form-control mb-1" placeholder="Ingrese apellido materno">
                <input type="submit" class="btn btn-success"value="Guardar">
            </form>
            </div>
            <div class="col-6">
<table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido P</th>
                <th scope="col">Apellido M</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta= "SELECT * FROM alumnos";
            $resultado=mysqli_query($conexion,$consulta);

            while($row=mysqli_fetch_assoc($resultado)){
                $id=$row["id"];
                $nombre=$row["nombre"];
                $apellido_p=$row["apellido_p"];
                $apellido_m=$row["apellido_m"];
                echo "<tr>";
                    echo "<td>".$nombre."</td>";
                    echo "<td>".$apellido_p."</td>";
                    echo "<td>".$apellido_m."</td>";
                    echo "<td>";
                    echo "<a href='eliminar.php?id=".$id."' class='mx-2'>Eliminar</a>";
                    echo "<a href='editar.php?id=".$id."'> Editar</a></td>";
                    echo "</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
</table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>