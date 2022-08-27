
<?php
session_start();
if(empty($_SESSION["id"])){
  header("location:index.php");
}
if($_SESSION["cargo"]>1){
    header("location:../control/denegado.php");
    

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Streaming COV </title>
    
  </head>
  <body>
    <link rel="stylesheet" href="../css/master-cli.css">
    

    <div class="login-box">
      <img src="../img/logo.png" class="avatar" alt="Avatar Image">
      
      <h1>Agregar Usuario</h1>
      <form method="post">
      
        <!-- USERNAME INPUT -->
        <label for="Usuario">Username</label>
        <input type="text"id="usuario" class="input" placeholder="Ingrese Usuario" name="usuario1">
        <!-- PASSWORD INPUT -->
        <label for="Contraseña">Password</label>
        <input type="password" id="password" class="input" placeholder="Ingrese Contraseña" name="password1">
        <input type="password" id="password2" class="input" placeholder="Confirme Contraseña" name="password2">
        <input type="password" id="privilegio" class="input" placeholder="1 admin o 2 user" name="rol">
        <input type="submit" value="Agregar Usuario" name="btnAgregar" class="btn">
        
      </form>
      <?php
      include ("../control/DataBase.php"); #crea coneccion a mysql.
      include ("../control2/control-registro.php");

      ?>
      
      
    </div>
    
  </body>
</html>
