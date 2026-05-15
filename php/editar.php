<?php
    require('conexion.php');
    $id=$_GET['id'];
    $consulta= "SELECT * FROM alumnos WHERE id=$id";
    $resultado=mysqli_query($conexion,$consulta);
    while($row=mysqli_fetch_assoc($resultado)){
                $id=$row["id"];
                $nombre=$row["nombre"];
                $apellido_p=$row["apellido_p"];
                $apellido_m=$row["apellido_m"];

            }
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
                <form action="update.php" method="POST">
                    <input name="id" type="hidden" value="<?php echo $id ?>">
                <input name="nombre" type="text" class="form-control mb-1" placeholder="Ingrese nombre" value="<?php echo $nombre ?>">
                <input name="ap_p" type="text" class="form-control mb-1" placeholder="Ingrese apellido paterno" value="<?php echo $apellido_p ?>">
                <input name="ap_m" type="text" class="form-control mb-1" placeholder="Ingrese apellido materno" value="<?php echo $apellido_m?>">
                <input type="submit" class="btn btn-success"value="Guardar">
            </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>