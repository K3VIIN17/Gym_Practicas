
<?php
// error_reporting(0);
include('conexion.php');



echo $ID_registro = $_POST['ID_registro'];
echo "<br>";
echo $Fecha_pago = $_POST['Fecha_pago'];
echo "<br>";
echo $Cantidad = $_POST['Cantidad'];



$sql = "SELECT Nombres, Apellidos, Disciplina From registrosusuarios WHERE ID_registro = $ID_registro";
$resultado1 = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($resultado1)) {
    $Nombres = $row['Nombres'];
    $Apellidos = $row['Apellidos'];
    $Disciplina = $row['Disciplina'];
}
$consulta = "INSERT INTO pagos(Nombres, Apellidos,Disciplina, Fecha_pago, Cantidad, ID_registro) VALUES ('$Nombres','$Apellidos','$Disciplina','$Fecha_pago','$Cantidad','$ID_registro')";
$resultado2 = mysqli_query($mysqli, $consulta);
if ($resultado2) {
    header("location: FormularioPagos.php");
} else {
}




?>