
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
      require('db.php'); //llamado a archivo conexión
      session_start(); //instancia las variables session
        if (isset($_POST['username'])){
      	
			$username = stripslashes($_REQUEST['username']); // removes backslashes
			$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
			
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: index.php"); // Redirect user to index.php
			}else{
				echo "<div class='form'><h3>Usuario/Contraseña Incorrecto</h3><br/>Haz click aquí para <a href='login.php'>Logearte</a></div>";
			}

        }else{
        ?>
	    <div class="form">
	      <h1>Inicia Sesión</h1>
	      <form action="" method="post" name="login">
	        <input type="text" name="username" placeholder="Usuario" required />
	        <input type="password" name="password" placeholder="Contraseña" required />
	        <input name="submit" type="submit" value="Entrar" />
	      </form>
	      <p>No estas registrado aún? <a href='registration.php'>Registrate Aquí</a></p>
	    </div>
    <?php } ?>
  </body>
</html>

