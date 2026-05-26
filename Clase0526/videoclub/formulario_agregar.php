<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Videoclub</span>
  </div>
</nav>
  <body>
<div class="card my-3 p-3 bg-body" style="width: 50rem;">
    <div class="card-header bg-success text-white">
        <h4>Agregar nueva película</h4>
    </div>
    <div class="card-body">
        <form action="agregar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo_enviado"
                       class="form-control" required>
                       <label class="form-label">Director</label>
                <input type="text" name="director_enviado"
                       class="form-control" required>
                       <label class="form-label">Año</label>
                <input type="number" name="anio_enviado"
                       class="form-control" required>
                       <label class="form-label">Genero</label>
                <input type="text" name="genero_enviado"
                       class="form-control" required>
            </div>
            <!-- repetir para director, anio (type=number), genero -->
            <a href="index.php" class="btn btn-secondary">← Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
