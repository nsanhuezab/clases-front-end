
<?php
  include("auth.php"); 
 ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <div class="form">
      <p>Bienvenid@ <b><?php echo $_SESSION['username']; ?></b>!</p>
      <p>Acabas de iniciar sesión</p>
    



      <a href="logout.php">Cerrar Sesión</a>
    </div>
  </body>
</html>

