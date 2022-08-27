<?php
if(!empty($_POST["btnLog"])){
    if (!empty($_POST["usuarioIn"]) and !empty($_POST["passIn"])) {

        $usuario=$_POST["usuarioIn"];
        $contraseña=$_POST["passIn"];
        $sql=$conexion->query("select * from usuario where nombre='$usuario' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location:admin.php");
        } else {
            echo "<div >Aceso Denegado</div>"; 
        }
        
        
    } 
    else{
        echo "campos vacios";
        
    }

}


?>