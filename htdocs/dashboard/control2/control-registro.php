<?php

session_start();
if(!empty($_POST["btnAgregar"])){
    if (empty($_POST["usuario1"]) or empty($_POST["password1"]) or empty($_POST["password2"]) or empty($_POST["rol"])) {
        echo "Uno de los campos esta vacio";
    } else {
        $nombre=$_POST["usuario1"];
        $contraseña1=md5($_POST["password1"]);
        $contraseña2=md5($_POST["password2"]);
        $rol=$_POST["rol"];
        if($contraseña1==$contraseña2){
            $sql=$conexion->query("insert into usuarios(nombre,contraseña,id_cargo) values ('$nombre','$contraseña1','$rol')");
            if ($sql==1) {
                echo "Usuario registrado correctamente";
            } else {
                echo "usuario no registrado :(";
            }
            

        }
        else{
            echo "las contraseñas no coinciden";
        }
        
    }
    
    
    
    
    
    

}



?>