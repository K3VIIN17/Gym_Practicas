<?php
$conexion = new mysqli("localhost", "root", "", "gym");
if(mysqli_connect_errno()){
    echo "no se puedo conectar";
}

?>