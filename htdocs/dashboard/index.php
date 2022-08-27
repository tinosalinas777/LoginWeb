


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Streaming COV </title>
    
  </head>
  <body>
    <link rel="stylesheet" href="./css/master.css">
    

    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      
      <h1>Login COV</h1>
      <form method="post">
      
        <!-- USERNAME INPUT -->
        <label for="Usuario">Username</label>
        <input type="text"id="usuario" class="input" placeholder="Ingrese Usuario" name="usuarioIn">
        <!-- PASSWORD INPUT -->
        <label for="Contraseña">Password</label>
        <input type="password" id="password" class="input" placeholder="Ingrese Contraseña" name="passIn">
        <input type="submit" value="Log In" name="btnLog" class="btn">
        
      </form>
      <?php
      include ("control/DataBase.php"); #crea coneccion a mysql.
      include ("control2/control_login.php"); #llamo al control de variables para mysql.


      ?>
      
      
    </div>
    
  </body>
</html>
