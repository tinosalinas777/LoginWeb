<?php

session_start();#inicia cesion
if(!empty($_POST["btnLog"])){
    #si se presiona boton inicio.
    if (!empty($_POST["usuarioIn"]) and !empty($_POST["passIn"])) {
        #si usuario y pass no estan vacios.

        $usuario=$_POST["usuarioIn"];
        $contraseña=md5($_POST["passIn"]);
        $sql=$conexion->query("select * from usuarios where nombre='$usuario' and contraseña='$contraseña'");
        #guarda en $sql los resultados de la consulta.
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["cargo"]=$datos->id_cargo;   #mantiene sesion guardada
            if($_SESSION["cargo"]==1){
                header("location:admin.php");#si cargo vale 1 envia a pag admin.php
            }
            if($_SESSION["cargo"]==2){
                header("location:cliente.php");#sicargo vale 2 envia a cliente.php

            }
            
            
            
            
        } else {
            echo "<div>Aceso Denegado</div>"; #si user y pass son incorrectos.
        }
        
        
    } 
    else{
        echo "campos vacios";#imprime si user y pass estan vacios.
        
    }

}


?>