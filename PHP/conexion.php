<?php

$servidor = "localhost";
$dbUsuario = "root";
$dbPassword = "";
$dbName = "gym";

$con = mysqli_connect($servidor, $dbUsuario, $dbPassword, $dbName);

if(mysqli_connect_errno()){
    echo "No se pudo conectar";
}


?>