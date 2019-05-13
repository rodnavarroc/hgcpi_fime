<?php 

  $conexion=mysqli_connect('localhost','root','','hgcpi');

  $mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }

  /*scripts de sesion*/

  session_start();

  if(!isset($_SESSION['usuario'])) { header("Location: index.php"); }
  
  $usuario = $_SESSION['usuario'];

  $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
  $result=mysqli_query($conexion,$sql);
  $mostrar=mysqli_fetch_array($result);

  /*scripts de sesion*/

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perfil personal | HGCPI FIME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120" height="40" class="d-inline-block align-top"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convocatorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="estimulos.php">Estímulos UANL</a>
                          <a class="dropdown-item" href="prodep.php">PRODEP</a>
                          <a class="dropdown-item" href="sni.php">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link " href="perfil.php#datos">Datos Personales</a>
                      </li>
                      </ul>
                      <span class="navbar-text"><a class="nav-link" href="perfil.php"><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></a></span>
                  </div>
            </nav>
    </header>

        <div class="row-mt-4">
          <br><hr>
          <center><h4>Perfil Personal del Usuario</h4></center><br>
          <center><h5 style="font-weight: normal; font-size: 26px;"><b><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></b></h5></center>
          <center><h5 style="font-weight: normal; font-size: 18px;"><i><?php echo $mostrar['ies_adscripcion']?></i></h5></center>
        <br><hr><br>

        <div class="container" id="convocatorias">
          <h5><b>Estatus de convocatorias al momento</b></h5><br>
          <table class="table table-bordered">
            <tbody>

               <?php
                  $sql="SELECT * FROM convocatorias WHERE nombre='PRODEP'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);
              ?>

              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">PRODEP</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="#101010"><?php echo $mostrar['estatus']?></font></b> | <i>Cierra: <?php echo $mostrar['fecha_cierre']?></i></a></td>
                <td class="bg-success"><a href="estimulos.php" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-secondary"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>

              <?php
                  $sql="SELECT * FROM convocatorias WHERE nombre='SNI'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);
              ?>

              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">Sistema Nacional de Investigadores</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="#101010"><?php echo $mostrar['estatus']?></font></b> | <i>Cierra: <?php echo $mostrar['fecha_cierre']?></a></td>
                <td class="bg-success"><a href="sni.php" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-secondary"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>

              <?php
                  $sql="SELECT * FROM convocatorias WHERE nombre='Estimulos'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);
              ?>

              <tr>
                <td class="bg-dark"><a href="" style="display: block; color: #f2f2f2; text-decoration: none; text-align: center;">Estímulos UANL</a></td>
                <td class="bg-light"><a href="" style="display: block; color: #111; text-decoration: none; text-align: center;">Estatus de convocatoria: <b><font color="#101010"><?php echo $mostrar['estatus']?></font></b> | <i>Cierra: <?php echo $mostrar['fecha_cierre']?></a></td>
                <td class="bg-success"><a href="estimulos.php" style="display: block; color: white; text-decoration: none; text-align: center;">Ir al llenado</a></td>
                <td class="bg-secondary"><a href="" style="display: block; color: white; text-decoration: none; text-align: center;">Imprimir formato</a></td>
              </tr>
            </tbody>
          </table><br>
          <h6><center>El estatus de las convocatorias puede cambiar <b>en cualquier momento</b> cercano a la apertura o cierre de las mismas.</center>
        </div>

        <?php
          $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
          $result=mysqli_query($mysqli,$sql);
          $mostrar=mysqli_fetch_array($result);
        ?>

        <div class="container">
          <?php
          if($mostrar['tipo_usuario'] == "admin")
          {
          ?>
          <br><br>
          <center><a href="admin.php" style="padding: 10px 15px; background-color: #dc3545; color: white; font-size: 16px; text-decoration: none; border-radius: 6px">Ingresar al Panel Administrativo</a></center>
          <?php
          }
          ?>
          <br><br>
          <center><a href="scripts/logout.php" style="padding: 10px 15px; background-color: darkorange; color: white; font-size: 16px; text-decoration: none; border-radius: 6px">Cerrar Sesión</a></center>

        </div>

        <div class="container" id="datos"><br><br>
            
            <h5><b>Datos generales del afiliado</b></h5>
            <table class="table">
          <tbody>
            <?php 
            $sql="SELECT * FROM usuario WHERE idusuario='1815906'";
            $result=mysqli_query($conexion,$sql);
            $contador = 0;
            while($mostrar=mysqli_fetch_array($result)){
             ?>
            <tr>
              <tr>
              <td>Nombre: <?php echo $mostrar['nombre'] ?></td>
              <td>Primer Apellido: <?php echo $mostrar['ap_paterno'] ?></td>
              <td>Segundo Apellido: <?php echo $mostrar['ap_materno'] ?></td>
            </tr>
            <tr>
              <td>RFC: <?php echo $mostrar['rfc'] ?></td>
              <td>ORCID: <?php echo $mostrar['orcid'] ?></td>
              <td>CURP: <?php echo $mostrar['curp'] ?></td>
            </tr>
            <tr>
              <td>Fecha Nacimiento: <?php echo $mostrar['fecha_nacimiento'] ?></td>
              <td>CVU: <?php echo $mostrar['numero_cvu'] ?></td>
              <td>Sexo: <?php echo $mostrar['sexo'] ?></td>
            </tr>
              <?php
              }
            ?>
          </tbody>
        </table>

        <br>

         <h5><b>Domicilio y contacto personal</b></h5>
            <table class="table">
          <tbody class="">
            <?php 
            $sql="SELECT * FROM usuario WHERE idusuario='1815906'";
            $result=mysqli_query($conexion,$sql);
            $contador = 0;
            while($mostrar=mysqli_fetch_array($result)){
             ?>
            <tr>
              <td>País de nacimiento: <?php echo $mostrar['pais_residencia'] ?></td>
              <td>Ciudad de nacimiento: <?php echo $mostrar['ciudad_nacimiento'] ?></td>
              <td>Estado civil: <?php echo $mostrar['estado_civil'] ?></td>
            </tr>
            <tr>
              <td>Teléfono: <?php echo $mostrar['telefono_particular'] ?></td>
              <td>Teléfono móvil particular: <?php echo $mostrar['telefono_movil'] ?></td>
              <td>Correo electrónico personal: <?php echo $mostrar['correo_electronico_personal'] ?></td>
            </tr>
            <tr>
              <td>Calle de residencia: <?php echo $mostrar['calle_dom'] ?></td>
              <td>Número: <?php echo $mostrar['numero_exterior_dom'] ?></td>
              <td>Colonia: <?php echo $mostrar['colonia_residencia'] ?></td>
            </tr>
            <tr>
              <td>Ciudad de residencia: <?php echo $mostrar['ciudad_residencia'] ?></td>
              <td>Estado de residencia: <?php echo $mostrar['estado_residencia'] ?></td>
              <td>País de residencia: <?php echo $mostrar['pais_residencia'] ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table> 
        <br><hr><br>
        </div>

        <div class="container">
         <h6><center>Si desea hacer un cambio en sus datos personales, por favor póngase en contacto con <a href="mailto:hgcpi_fime@gmail.com">la administración de la plataforma</a>.</center></h6><br>

        </div>

        </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>