<?php
session_start();
if(empty($_SESSION["id"])){
  header("location:index.php");#estas lineas de codigo son para validar usuario y no pueda acceder directamente con linnk

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
      <script src="https://unpkg.com/video.js/dist/video.js"></script>
      <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <title>Hola Cliente</title>
</head>
<body>
    <h1><font color="#800080">Hola Cliente</font></h1>
<link rel="stylesheet" href="./css/master-admin.css">
    <?php
    echo  $_SESSION["id"];#imprime datos de usuario como nombre,id y si es admin o user
    echo "bienvenido\n\n";
    echo $_SESSION["nombre"];
    echo"";
    echo $_SESSION["cargo"];    


    ?>
    <a href="control2/controlador_cerrar_cesion.php">salir</a>
    <video id="my_video_1" class="video-js " controls="controls" preload="auto" width="550" height="400"
      data-setup='{}'>
        <source src="3157002721.mp4" autoplay controls>
      </video>
      
      
    <script>
    var player = videojs('my_video_1');
    player.play();
    </script>
</body>
</html>