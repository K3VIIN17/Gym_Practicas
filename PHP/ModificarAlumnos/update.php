<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="gym";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}


$con=conectar();

$ID_registro=$_POST['ID_registro'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$CorreoElectronico=$_POST['CorreoElectronico'];
$NumTel=$_POST['NumTel'];
$Direccion=$_POST['Direccion'];
$Disciplina=$_POST['Disciplina'];



$sql="UPDATE registrosusuarios SET ID_registro='$ID_registro',Nombres='$Nombres', Apellidos='$Apellidos',CorreoElectronico='$CorreoElectronico',NumTel='$NumTel ',Direccion='$Direccion ',Disciplina='$Disciplina ' WHERE ID_registro='$ID_registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./FormularioAlumno.php");
    }

?>