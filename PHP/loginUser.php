<?php

 require "conexion.php";
 session_start();
$username = $_GET['email2'];
$userpass = $_GET['password2'];
$_SESSION['nombre'] = $username;
if($username && $userpass){
    $query = mysqli_query($con, "select * from registro where usuario='".$username."'");
    $numFilas = mysqli_num_rows($query);
    if ($numFilas > 0){
        while ($row = mysqli_fetch_assoc($query)) {
            $dbUsuario = $row['usuario'];
            $dbPassword = $row['password'];
        }
        if($username == $dbUsuario && $userpass == $dbPassword){
            echo "Usuario Correcto";
            
        } else {
            echo "Usuario o Contraseña incorrectos";
        }
    }else {
        echo "Usuario NO registrado";
    }
}else{
    echo "<p>Faltam datos</p>";
}
mysqli_close($con);




?>