<?php
include 'conexion.php';
include 'configB.php';
$conexion = mysqli_query($mysqli, "SELECT ID_registro, Nombres FROM registrosusuarios");

// if(isset($_POST['estado']))
// {
//     $estado=$_POST['estado'];
//     echo $estado;
// }
?>

<?php 

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="gymmultidiciplinario";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}


$id=$_GET['id'];

$sql="SELECT * FROM pagos WHERE IDpago='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Strongman Gym</title>
  <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../img//logogym.jpg" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
   <a class="navbar-brand" href="../../principal.php"><img src="../../IMG/logogym.jpg" style="height:80px; width:80px;"></img></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="../RegistroUsuarios/Registrar.php"><p class="text-white">Ingresar Usuario</p></a>
          <a class="nav-link" aria-current="page" href="../ModificarAlumnos/FormularioAlumno.php"><p class="text-white">Modificar usuario</p></a>
          <a class="nav-link " href="./FormularioPagos.php"><p class="text-white">Pagos</p></a>
          <a class="nav-link " href=""><p class="text-white"></p></a>
          <a class="nav-link active" href="../logout.php"><p class="text-white">Cerrar Sesión</p></a> 
        </div>
      </div>
    </div>
  </nav>

  <body>

    <div class="container">

          <br>
          <h3>Actualizar de Pagos</h3>
          <form action="update.php" method="POST">
        
          <div class="row">
              <div class="col-4 espacio">
                    <label for="exampleInputEmail1">Fecha de pagos </label>
                    <input type="hidden" name="IDpago" value="<?php echo $row['IDpago']  ?>">
                    <input type="date" class="form-control mb-3" name="Fecha_pago" placeholder="Fecha de pago" value="<?php echo $row['Fecha_pago']  ?>" >
                    
              </div>
              <div class="col-4 espacio">
                    <label for="exampleInputEmail1">Cantidad </label>
                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="cantidad" value="<?php echo $row['Cantidad']  ?>" pattern="[0-9 ]+">
                   
              </div>

              <div class="col-4 espacio">
              <label for="exampleInputEmail1">Disciplina </label>        
                    <select class="form-select" name="Disciplina" value="<?php echo $row['Disciplina']?>">
                            <option>Gym</option>
                        </select>
              </div>

              

              <div class="col-6 espacio">
                  <label for="exampleInputEmail1">Nombre </label>
                  <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre" value="<?php echo $row['Nombres']  ?>" pattern="[A-Za-z ]+">
                   
              </div>

              <div class="col-6 espacio">
              <label for="exampleInputEmail1">Apellido </label>
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellido" value="<?php echo $row['Apellidos']  ?>" pattern="[A-Za-z ]+">
                   
              </div>

             


          </div>
                    
                    
                    
                    
                   
                  

                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
        </form>
        </div>

    </div>

  </body>

</html>