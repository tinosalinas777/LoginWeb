
<?php
session_start();
if(empty($_SESSION["id"])){
  header("location:index.php");#controla que exista una esion iniciada para acceder.
}
if($_SESSION["cargo"]>1){
  header("location:control/denegado.php");#controla que usuario comun noacceda a recursos de admin.
  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Admin</title>
</head>
<body>
<link rel="stylesheet" href="./css/master-admin.css">
    <?php
    echo  $_SESSION["id"];
    echo "bienvenido\n\n";
    echo $_SESSION["nombre"];
    echo"";
    echo $_SESSION["cargo"];    


    ?>
    <a href="control2/controlador_cerrar_cesion.php">salir</a>
    <a href="agregarCliente/agregarCli.php"><h1>agregar usuario</h1></a>
    <a href="cliente.php"><h1>video streaming</h1></a>
</body>
</html>