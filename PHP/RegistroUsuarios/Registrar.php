
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strongman Gym</title>
    <link rel="stylesheet" href="../../CSS/bootstrap/css/bootstrap.css">
    <link rel="icon" type="image/png" href="../../IMG/logogym.jpg" />
    <script src="../../JS/ValidarPagina.js"></script>
    <script>ValidarPagina();</script>
    <div id="ValidarPagina"></div>
  </head>
  <body>

    <header>

    </header>
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
   <a class="navbar-brand" href="../../principal.php"><img src="../../IMG/logogym.jpg" style="height:80px; width:80px;"></img></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href=""><p class="text-white">Ingresar Usuario</p></a>
          <a class="nav-link" aria-current="page" href="../ModificarAlumnos/FormularioAlumno.php"><p class="text-white">Modificar usuario</p></a>
          <a class="nav-link " href="../RegistrarPagos/FormularioPagos.php"><p class="text-white">Pagos</p></a>
          <a class="nav-link " href=""><p class="text-white"></p></a>
          <a class="nav-link active" href="../logout.php"><p class="text-white">Cerrar Sesión</p></a> 
        </div>
      </div>
    </div>
  </nav>


    <main class="container">
        <!-- <h3>Registro de</h3> -->
        <br><br>
        <form method="POST" action="registros.php">
            <div class="container tamanioContenedor">
            <h1 class="registro" >Registro de Cliente</h1> 
                <div class="row">
                    <div class="col-4 espacio">
                        <label for="exampleInputEmail1" class="form-label">Nombres</label>
                        <input type="text" name="Anombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                            required>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" name="Aapellido" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z ]+"
                            required>
                    </div>

                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                        <input type="text" name="Atelefono" class="form-control" id="exampleInputPassword1"
                        pattern="[0-9 ]+" required>
                    </div>
                        
                        
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                        <input type="text" name="Acorreo" class="form-control" id="exampleInputPassword1" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" >
                    </div>
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">En</label>
                        <select class="form-select" name="disciplina" required>
                            <option>Gym</option>
                           
                        </select>
                    </div>
                    <div class="col-12 espacio">
                        <label for="exampleInputPassword1" class="form-label">Dirección</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Adireccion" pattern="[A-Za-z0-9 ]+" required></textarea>
                    </div>
                 
                
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

       

      <div class="container" id="formulario" >

      </div>
    </main>

   
    <script src="../../JS/ValidarPagina.js"></script>
  </body>
</html>
