<?php



function conectar(){

$user="root";
$pass="";
$server="localhost";
$db="login";
$con=mysql_connect() or die ("error en la base de datos".mysql_error());
mysql_select_db($db,$con);

return $con;
}

?>