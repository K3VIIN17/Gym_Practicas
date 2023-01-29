<?php


?>

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

  <link rel="stylesheet" href="../../src/DataTables/DataTables-1.13.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../src/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

  <script type="text/javascript" src="../../src/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../../src/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../../src/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  </link>

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
          <a class="nav-link " href=""><p class="text-white">Pagos</p></a>
          <a class="nav-link " href=""><p class="text-white"></p></a>
          <a class="nav-link active" href="../logout.php"><p class="text-white">Cerrar Sesión</p></a> 
        </div>
      </div>
    </div>
  </nav>

  <body>



    <div class="container ">
      <div class="row">
        <div class="col-sm-6">
          <br><br>
          <h3 class="h3ce">Registro de Pagos</h3>
          <br>
          <!-- Busqueda de pagos -->
          <form action="" method="get">
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control" type="text" name="busquedas" required>
              </div>
              <div class="col-sm-2">
                <input class="btn btn-primary" type="submit" name="enviare" value="Buscar"><br>
              </div>
            </div>
          </form>


          <form action="insertar.php" method="post">
            <br>

            <label for="exampleInputEmail1" class="form-label">Elija al alumno para pagar </label><br>
            <select name="ID_registro" multiple class="form-control" id="exampleFormControlSelect2" required>

              <?php
              if (isset($_GET['enviare'])) {
                $busquedas = $_GET['busquedas'];
                $consulta = $con->query("SELECT * FROM registrosusuarios WHERE ID_registro LIKE '%$busquedas%' OR CONCAT_WS(' ', Nombres, Apellidos)   LIKE '%$busquedas%'");

                while ($row = $consulta->fetch_array()) {
              ?>
                  <option value="<?php echo $row['ID_registro']  ?>"> <?php echo "ID: " . $row['ID_registro'] . ", Nombre: " . $row['Nombres'] . " " . $row['Apellidos'] . ", Disciplina: " . $row['Disciplina'] ?> </option>


              <?php

                }
              }
              ?>
            </select>

            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <br><label for="exampleInputEmail1" class="form-label">Fecha de pago</label>
                  <input type="date" name="Fecha_pago" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div><br>
              </div>

              <div class="col-sm-4">
                <div class="form-group" id="divFormpago">
                  <br><label class="form-label" for="exampleInputPassword1">Tipo de pago</label>
                  <select class="form-select" name="Cantidad" name="" id="tipoDepago" require onchange="cambiar()">
                    <option id="" value="0" default>Seleccionar</option>
                    <option value="pagonormal">Pago Normal</option>
                    
                  </select>

                </div>
              </div>

              <div class="col-sm-4 ">
                <div id="TipoPag">

                </div>
                <br>
              </div>
              <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Pagar">
          </form>


        </div>

        <div class="col-sm-6">
        <br><br>
          <h3 class="h3ce ">Buscador de Pagos</h3>
          <br>
          <form action="" method="get">
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control col-5" type="text" name="busqueda" required>
              </div>
              <div class="col-sm-2">
                <input class="btn btn-primary" type="submit" name="enviar" value="Buscar"><br>
              </div>
            </div>
          </form>
          <br><br>
          <?php
          if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta2 = $con->query("SELECT * FROM pagos WHERE ID_registro LIKE '%$busqueda%' OR CONCAT_WS(' ', Nombres, Apellidos) LIKE '%$busqueda%'");
          ?>
            <div class="table-responsive text-nowrap">
              <table class="table table-hover" id="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha</th>
                    <th>Pago</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = $consulta2->fetch_array()) {
                  ?>
                    <tr>
                      <td class="table-ligth"><?php echo $row['ID_registro'] ?></td>
                      <td class="table-ligth"><?php echo $row['Nombres'] ?></td>
                      <td class="table-ligth"><?php echo $row['Apellidos'] ?></td>
                      <td class="table-ligth"><?php echo $row['Fecha_pago'] ?></td>

                      <td class="table-ligth"><?php echo $row['Cantidad'] ?></td>
                      <td class="table-ligth">
                        <a href="actualizar.php?id=<?php echo $row['IDpago'] ?>" class="btn btn-warning">Editar</a>
                        <a href="delete.php?id=<?php echo $row['IDpago'] ?>" class="btn btn-danger">Eliminar</a>
                        <a href="../../src/reporte/invoice.php?IDpago=<?php echo $row['IDpago'] ?>" class="btn btn-info">Factura</a>
                      </td>
                    </tr>

                <?php
                  }
                } else {
                  echo "No hay datos";
                }
                ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>

  </body>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        ordering: false,
        info: false,
        searching: false,
        lengthMenu: [
          [5, 10],
          [5, 10]
        ],
        language: {
          url: '../../src/DataTables/es-ES.json'
        },
      });
    });
  </script>

</html>

<?php
?>