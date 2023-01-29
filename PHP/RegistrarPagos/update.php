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

$IDpago=$_POST['IDpago'];
$Fecha_pago=$_POST['Fecha_pago'];
$Cantidad=$_POST['Cantidad'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Disciplina=$_POST['Disciplina'];


$sql="UPDATE pagos SET  IDpago='$IDpago',Fecha_pago='$Fecha_pago', Cantidad='$Cantidad',Nombres='$Nombres',Apellidos='$Apellidos ',Disciplina='$Disciplina ' WHERE IDpago='$IDpago'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormularioPagos.php");
    }
?>