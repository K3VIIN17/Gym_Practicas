<?php
include ('conexion.php');

echo $nombres = $_POST['Anombre'];
echo$apellidos = $_POST['Aapellido'];
echo$CorreoElectronico = $_POST['Acorreo'];
echo$NumTel = $_POST['Atelefono'];
echo$Direccion = $_POST['Adireccion'];
echo$Disciplina = $_POST['disciplina'];



$consulta = "INSERT INTO registrosusuarios(Nombres, Apellidos, CorreoElectronico, NumTel, Direccion,Disciplina) VALUES ('$nombres','$apellidos','$CorreoElectronico','$NumTel','$Direccion','$Disciplina')";
$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo"Registrado Correctamente";
} else {
    echo "no se pudo Registrar";
}

header('location: Registrar.php');

?>