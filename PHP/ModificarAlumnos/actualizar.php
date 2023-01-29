
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
$ID_registro=$_GET['id'];

$sql="SELECT * FROM registrosusuarios WHERE ID_registro='$ID_registro'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Strongman Gym</title>
  <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../img/logogym.jpg" />
  <script src="./checkbox.js"></script>

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
          <a class="nav-link" aria-current="page" href="./FormularioAlumno.php"><p class="text-white">Modificar usuario</p></a>
          <a class="nav-link " href="../RegistrarPagos/FormularioPagos.php"><p class="text-white">Pagos</p></a>
          <a class="nav-link " href=""><p class="text-white"></p></a>
          <a class="nav-link active" href="../logout.php"><p class="text-white">Cerrar Sesión</p></a> 
        </div>
      </div>
    </div>
  </nav>


  <body>

    <div class="container">

          <br>
          <h3>Actualizar de Alumnos</h3>
          <form action="update.php" method="POST">
        
                    <input type="hidden" name="ID_registro" value="<?php echo $row['ID_registro']  ?>">
                    
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?> " pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>" pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">Correo Electronico</label>
                    <input type="text" class="form-control mb-3" name="CorreoElectronico" placeholder="CorreoElectronico" value="<?php echo $row['CorreoElectronico']  ?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
                  
                    <label for="exampleInputEmail1">Numero Telefono</label>
                    <input type="text" class="form-control mb-3" name="NumTel" placeholder="Numero de Telefono" value="<?php echo $row['NumTel']  ?>" pattern="[0-9 ]+">
                  
                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>" pattern="[A-Za-z0-9 ]+">
                  
                    <label for="exampleInputEmail1">Disciplina</label>
                
                  
                    <select class="form-select" name="Disciplina" value="<?php echo $row['Disciplina']?>">
                            <option>Gym</option>
                        </select>

              
                  
                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
        </form>
        </div>

    </div>

  </body>

</html>