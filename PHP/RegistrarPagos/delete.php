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

$IDpago=$_GET['id'];

$sql="DELETE FROM pagos  WHERE IDpago='$IDpago'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormularioPagos.php");
    }
?>
