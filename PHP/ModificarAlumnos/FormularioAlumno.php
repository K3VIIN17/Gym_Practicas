<?php


function conectar()
{
  $host = "localhost";
  $user = "root";
  $pass = "";

  $bd = "gym";

  $con = mysqli_connect($host, $user, $pass, $bd);

  mysqli_select_db($con, $bd);

  return $con;
}

$con = conectar();

$sql = "SELECT *  FROM registrosusuarios";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Strongman Gym</title>
  <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../IMG/logogym.jpg" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



  <link rel="stylesheet" href="../../../../src/DataTables/DataTables-1.13.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../src/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

  <script type="text/javascript" src="../../../../src/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../../../../src/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../../../../src/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></link>
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
          <a class="nav-link" aria-current="page" href=""><p class="text-white">Modificar usuario</p></a>
          <a class="nav-link " href="../RegistrarPagos/FormularioPagos.php"><p class="text-white">Pagos</p></a>
          <a class="nav-link " href=""><p class="text-white"></p></a>
          <a class="nav-link active" href="../logout.php"><p class="text-white">Cerrar Sesión</p></a> 
        </div>
      </div>
    </div>
  </nav>

  <body>


<br><br>
    <div class="container ">




      <div class="container">
        <h3 class="h3ce" style="text-align:center;">Modificar Clientes</h3>
        <br>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover" id="table">
            <thead class="">
              <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo Electronico</th>
                <th>NumTel</th>
                <th>Direccion</th>
                <th>Disciplina</th>
            
                <th>
                  Opciones
                </th>
              </tr>
            </thead>

            <tbody>
              <?php
              while ($row = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <tD class="table-ligth"><?php echo $row['ID_registro'] ?></th>
                  <td class="table-ligth"><?php echo $row['Nombres'] ?></tD>
                  <td class="table-ligth"><?php echo $row['Apellidos'] ?></td>
                  <td class="table-ligth"><?php echo $row['CorreoElectronico'] ?></td>
                  <td class="table-ligth"><?php echo $row['NumTel'] ?></td>
                  <td class="table-ligth"><?php echo $row['Direccion'] ?></td>
                  <td class="table-ligth"><?php echo $row['Disciplina'] ?></td>
       

                  <!--   -->
                  <td class="table-ligth">
                    <a href="actualizar.php?id=<?php echo $row['ID_registro'] ?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php?id=<?php echo $row['ID_registro'] ?>" class="btn btn-danger">Eliminar</a>
                  </td>

                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
    <br><br>
    <!-- </div> -->

    <script>
      $(document).ready(function() {
        $('#table').DataTable({
          ordering: false,
          info: false,
          searching: false,
          language: {
            url: '../../../../src/DataTables/es-ES.json'
          },
        });
      });
    </script>
    <script src="../../../../css/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>