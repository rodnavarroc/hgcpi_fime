<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$conexion=mysqli_connect('localhost','root','','hgcpi');

  /*scripts de sesion*/

  session_start();

  if(!isset($_SESSION['usuario'])) { header("Location: index.php"); }
  
  $usuario = $_SESSION['usuario'];

  $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
  $result=mysqli_query($conexion,$sql);
  $mostrar=mysqli_fetch_array($result);

  if($mostrar['tipo_usuario'] != "admin") { echo 'Error. Usted no es administrador de la plataforma. <a href="index.php">Regresar.</a>'; exit; }

  /*scripts de sesion*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Panel del Administrador | HGCPI</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=egde">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120" height="40" class="d-inline-block align-top"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" name="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" name="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convocatorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="estimulos.php">Estímulos UANL</a>
                          <a class="dropdown-item" href="prodep.php">PRODEP</a>
                          <a class="dropdown-item" href="sni.php">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="perfil.php">Datos Personales</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="perfil.php"><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
        	<div class="col-md-10 offset-md-1">
        		
            <br><br>
            <center><h4>Panel del Administrador | HGCPI</h4></center>
            <br><br>
            
            <h5>Agregar nuevo usuario</h5><hr><br>
        	
          <form enctype="multipart/form-data" action="scripts/admin_agregar_usuario.php" method="POST">
          <div class="form-group">
            <label for="num_emp">Número de empleado UANL</label>
            <input type="text" class="form-control" name="empleado" placeholder="1845127" required="true">
          </div>
          <div class="form-group">
            <label for="num_emp">Contraseña</label>
            <input type="password" class="form-control" name="clave" placeholder="9c4uk19o" required="true">
          </div><br>
          <center><input type="submit" class="btn btn-primary btn-large" value="Registrar usuario"></center>
          <br><br>
        </form>

          <h5><center>Acciones sobre convocatorias</center></h5><hr><br>
          <table class="table table-success">
            <thead>
              <tr>
                  <th>Convocatoria</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  
                  <td>Sistema Nacional de Investigadores</td>
                  <?php 
                  $sql="SELECT * FROM convocatorias WHERE nombre='SNI'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);

                  if($mostrar['estatus'] == 'Activa') {
                   ?>
                  <td><center><button class="btn btn-danger" onclick="ActDesact('SNI')">Desactivar</button></center></td>
                  <?php
                  } else if($mostrar['estatus'] == 'Inactiva') {
                  ?>
                  <td><center><button class="btn btn-success" onclick="ActDesact('SNI')">Activar</button></center></td>
                  <?php 
                  }
                  ?>
                  <td><center><button class="btn btn-secondary" data-toggle="modal" data-target="#ventanaFechas" onclick="validarCambiarFecha('SNI')">Cambiar fechas</button></center></td>

              <tr>
              
              <tr>
                  
                  <td>PRODEP</td>
                  <?php 
                  $sql="SELECT * FROM convocatorias WHERE nombre='PRODEP'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);

                  if($mostrar['estatus'] == 'Activa') {
                   ?>
                  <td><center><button class="btn btn-danger" onclick="ActDesact('PRODEP')">Desactivar</button></center></td>
                  <?php
                  } else if($mostrar['estatus'] == 'Inactiva') {
                  ?>
                  <td><center><button class="btn btn-success" onclick="ActDesact('PRODEP')">Activar</button></center></td>
                  <?php 
                  }
                  ?>
                  <td><center><button class="btn btn-secondary" data-toggle="modal" data-target="#ventanaFechas" onclick="validarCambiarFecha('PRODEP')">Cambiar fechas</button></center></td>

              <tr>
              
              <tr>
                  
                  <td>Estímulos UANL</td>
                  <?php 
                  $sql="SELECT * FROM convocatorias WHERE nombre='Estimulos'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);

                  if($mostrar['estatus'] == 'Activa') {
                   ?>
                  <td><center><button class="btn btn-danger" onclick="ActDesact('Estimulos')">Desactivar</button></center></td>
                  <?php
                  } else if($mostrar['estatus'] == 'Inactiva') {
                  ?>
                  <td><center><button class="btn btn-success" onclick="ActDesact('Estimulos')">Activar</button></center></td>
                  <?php 
                  }
                  ?>
                  <td><center><button class="btn btn-secondary" data-toggle="modal" data-target="#ventanaFechas" onclick="validarCambiarFecha('Estimulos')">Cambiar fechas</button></center></td>

              <tr>
            </tbody>
          </table>
          <br><br>

          <div class="container">
            <div class="row">
            <div class="col">
              <h5><center>Usuarios registrados</center></h5><hr><br>
              
              <table class="table table-secondary">
              <thead>
                  <tr>
                      <th><center>Nombre</center></th>
                      <th><center>Número de empleado</center></th>
                  </tr>
              </thead>
              <?php 
                  $sql="SELECT * FROM usuario";
                  $result=mysqli_query($conexion,$sql);
                  while($mostrar=mysqli_fetch_array($result)){
                   ?>
                  <tr>
                    <td><center><?php 

                    if(isset($mostrar['nombre']))
                    {
                      echo $mostrar['nombre'];
                      echo " ";
                      echo $mostrar['ap_paterno'];
                    } 
                    else
                    {
                      echo '<font style="color: slategray;">Indefinido</font>';
                    }
                    ?></center></td>

                    <td><center><?php echo $mostrar['idusuario'] ?></center></td>
                  </tr>
                <?php
                }
              ?>
            </table>
          </div>

          <div class="col">

          <h5><center>Administradores Registrados</center></h5><hr><br>
            <table class="table table-danger">
              <thead>
                  <tr>
                      <th><center>Nombre</center></th>
                      <th><center>Número de empleado</center></th>
                  </tr>
              </thead>
              <?php 
                  $sql="SELECT * FROM usuario WHERE tipo_usuario = 'admin'";
                  $result=mysqli_query($conexion,$sql);
                  while($mostrar=mysqli_fetch_array($result)){
                   ?>
                  <tr>
                    <td><center><?php 

                    if(isset($mostrar['nombre']))
                    {
                      echo $mostrar['nombre'];
                      echo " ";
                      echo $mostrar['ap_paterno'];
                    } 
                    else
                    {
                      echo '<font style="color: slategray;">Indefinido</font>';
                    }
                    ?></center></td>

                    <td><center><?php echo $mostrar['idusuario'] ?></center></td>
                  </tr>
                <?php
                }
              ?>
            </table>
          </div>
        </div>
      </div>
         
          </div>
          <br><br>
        </div>

        <div class="modal fade" id="ventanaFechas" tabindex="-1" role="dialog" aria-labelledby="ventanaFechas">
            <div class="modal-dialog">
                <div class="modal-content" id="ventanaCambiarFechas">

                </div>
            </div>       
        </div>

        <script type="text/javascript">
          <?php include("scripts/validadorCambiarFecha.php"); ?>
        </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="js/bootstrap.min.js"></script>


	
</body>
</html>