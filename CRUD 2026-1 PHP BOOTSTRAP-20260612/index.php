<?php
    include('conexion.php');
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion,$consulta);
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Formulario</h3>

            <form action="insertar.php" method="POST">
                <label class="form-label">Nombre</label>
                <input type="text"name="nombre" class="form-control">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control">
                <label class="form-label">RUT</label>
                <input type="number" name="rut" class="form-control">
                <input type="submit" class="btn btn-success mt-4 w-100">
            </form>
        </div>
        <div class="col-6">
               <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">RUT</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($resultado)){
                        $id=$row["id"];
                        $nombre=$row["nombre"];
                        $apellido=$row["apellido"];
                        $rut=$row["rut"];
                        echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$nombre."</td>";
                            echo "<td>".$apellido."</td>";
                            echo "<td>".$rut."</td>";
                            echo "<td>
                            <a class='mx-2' href='eliminar.php?id_enviado=".$id."'>Eliminar</a>
                            <a href='editar.php?id_enviado=".$id."'>Editar</a>
                            </td>";
                        echo "</tr>";


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