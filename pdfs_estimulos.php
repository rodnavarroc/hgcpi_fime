<?php

  $conexion=mysqli_connect('localhost','root','','hgcpi');

  $mysqli = new mysqli("localhost", "root", "", "hgcpi");

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
<html lang="es">
<head>
    <title>PDF Estímulos UANL | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirEstimulos()
    {
      window.print();
    };
    </script>
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
                      <a class="nav-link" href="perfil.php#datos">Datos Personales</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="perfil.php"><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
            <div class="row-mt-4">
                <div class="col-12">
                    <br><br>
                    <h2><center>Estimulos UANL</center></h2>
                    <hr><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-12">

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="">Sección</th>
                        <th scope="">Numero de registros</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_grados_acad WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Grados académicos y capacitación</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <tr>
                        <?php
                  $sql="SELECT * FROM detalle_usuario_lenguas_e_idiomas WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                        <th class="">Lenguas e idiomas</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <tr>
                        <?php
                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                        <th class="">Tutorías</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_carga_academica WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Carga académica</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_prod_articulos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Producción de artículos</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_produccion_libros WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Producción de libros</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Proyectos de investigación</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_gestion_academica WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Gestión académica</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_gestion_cuerpos_colegiados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Gestión académica de cuerpos colegiados</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Premios y distinciones</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_servicios_prestados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Servicios prestados a la comunidad</th>
                        <td class=""><?php echo $conteo; ?></th>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
                  $result=mysqli_query($mysqli,$sql);
                  $mostrar=mysqli_fetch_array($result);
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Identificación del profesor</th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre</th>
                        <td class=""><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></td>
                      </tr>
                      <tr>
                        <th class="">Género</th>
                        <td class=""><?php echo $mostrar['sexo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">RFC</th>
                        <td class=""><?php echo $mostrar['rfc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">CURP</th>
                        <td class=""><?php echo $mostrar['curp'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título universitario</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nacido en</th>
                        <td class=""><?php echo $mostrar['ciudad_residencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número de CVU</th>
                        <td class=""><?php echo $mostrar['numero_cvu'] ?></td>
                      </tr>
                      <tr>
                        <th class="">ORCID</th>
                        <td class=""><?php echo $mostrar['orcid'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de nacimiento</th>
                        <td class=""><?php echo $mostrar['fecha_nacimiento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Ciudad de nacimiento</th>
                        <td class=""><?php echo $mostrar['ciudad_nacimiento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado Civil</th>
                        <td class=""><?php echo $mostrar['estado_civil'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Teléfono particular</th>
                        <td class=""><?php echo $mostrar['telefono_particular'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Teléfono móvil</th>
                        <td class=""><?php echo $mostrar['telefono_movil'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Correo electrónico</th>
                        <td class=""><?php echo $mostrar['correo_electronico_personal'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Correo institucional</th>
                        <td class=""><?php echo $mostrar['correo_instititucional'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Calle de residencia</th>
                        <td class=""><?php echo $mostrar['calle_dom'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número exterior</th>
                        <td class=""><?php echo $mostrar['numero_exterior_dom'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número interior</th>
                        <td class=""><?php echo $mostrar['numero_interior_dom'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Colonia de residencia</th>
                        <td class=""><?php echo $mostrar['colonia_residencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País donde reside</th>
                        <td class=""><?php echo $mostrar['pais_residencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado del país donde reside</th>
                        <td class=""><?php echo $mostrar['estado_residencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Código Postal</th>
                        <td class=""><?php echo $mostrar['codigo_postal_dom'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Ciudad</th>
                        <td class=""><?php echo $mostrar['ciudad_residencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">IES de adscripción</th>
                        <td class=""><?php echo $mostrar['ies_adscripcion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_grados_acad WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                        <th class="">Grados académicos y capacitación #<?php echo $conteo; ?></th>
                        <th class=""></th>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de capacitación</th>
                        <td class=""><?php echo $mostrar['tipo_capacitacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Descripción</th>
                        <td class=""><?php echo $mostrar['descripcion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número de horas</th>
                        <td class=""><?php echo $mostrar['numero_de_horas'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de la institución</th>
                        <td class=""><?php echo $mostrar['nombre_institucion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_lenguas_e_idiomas WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>
                  
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Lenguas e idiomas #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Idioma</th>
                        <td class=""><?php echo $mostrar['idioma'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución que otorgó el certificado</th>
                        <td class=""><?php echo $mostrar['institucion_que_otorga'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Tutorías #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de tutoría</th>
                        <td class=""><?php echo $mostrar['tipo_tutoria'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel_academico'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Programa educativo en el que participa</th>
                        <td class=""><?php echo $mostrar['programa_educativo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de periodo escolar</th>
                        <td class=""><?php echo $mostrar['tipo_periodo_escolar'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Periodo escolar</th>
                        <td class=""><?php echo $mostrar['periodo_escolar'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_de_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de término:</th>
                        <td class=""><?php echo $mostrar['fecha_de_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento de la tutoría</th>
                        <td class=""><?php echo $mostrar['area_conocimiento'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_carga_academica WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Carga académica #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Dependencia</th>
                        <td class=""><?php echo $mostrar['dependencia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Grado</th>
                        <td class=""><?php echo $mostrar['grado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Materia</th>
                        <td class=""><?php echo $mostrar['materia'] ?></td>
                      </tr>
                      <tr>
                        <th class="">No. De grupos</th>
                        <td class=""><?php echo $mostrar['num_grupos'] ?></td>
                      </tr>
                      <tr>
                        <th class="">No. De horas a la semana</th>
                        <td class=""><?php echo $mostrar['num_horas_semana'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  
                  <?php
                  $sql="SELECT * FROM detalle_usuario_prod_articulos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Producción de artículos #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">ISSN del artículo</th>
                        <td class=""><?php echo $mostrar['issn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado del artículo</th>
                        <td class=""><?php echo $mostrar['estado_art'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de la revista</th>
                        <td class=""><?php echo $mostrar['nombre_revista'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Página inicial del artículo</th>
                        <td class=""><?php echo $mostrar['pagina_inicial'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Página final del artículo</th>
                        <td class=""><?php echo $mostrar['pagina_final'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_produccion_libros WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Producción de libros #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de autor</th>
                        <td class=""><?php echo $mostrar['tipo_participacion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Proyectos de investigación #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título del proyecto</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de proyecto</th>
                        <td class=""><?php echo $mostrar['tipo_proyecto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de participación</th>
                        <td class=""><?php echo $mostrar['tipo_participacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de patrocinador</th>
                        <td class=""><?php echo $mostrar['tipo_patrocinador'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de patrocinador</th>
                        <td class=""><?php echo $mostrar['nombre_patrocinador'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Monto de apoyo</th>
                        <td class=""><?php echo $mostrar['monto_apoyo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Investigadores participantes</th>
                        <td class=""><?php echo $mostrar['investigadores_participantes'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_gestion_academica WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Gestión académica #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de gestión</th>
                        <td class=""><?php echo $mostrar['tipo_gestion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Evento</th>
                        <td class=""><?php echo $mostrar['evento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de evento</th>
                        <td class=""><?php echo $mostrar['tipo_evento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de participación</th>
                        <td class=""><?php echo $mostrar['tipo_participacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de alcance</th>
                        <td class=""><?php echo $mostrar['tipo_alcance'] ?></td>
                      </tr>
                      <tr>
                        <th class="">IES realiza gestión</th>
                        <td class=""><?php echo $mostrar['ies_realiza_gestion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de termino</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de la gestión</th>
                        <td class=""><?php echo $mostrar['estado_gestion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Calificación</th>
                        <td class=""><?php echo $mostrar['calificacion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_gestion_cuerpos_colegiados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Gestión académica de cuerpos colegiados #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de gestión académica</th>
                        <td class=""><?php echo $mostrar['tipo_gestion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clasificación</th>
                        <td class=""><?php echo $mostrar['clasificacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Función encomendada</th>
                        <td class=""><?php echo $mostrar['funcion_encomendada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Órgano colegiado presentado</th>
                        <td class=""><?php echo $mostrar['organo_colegiado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de último reporte presentado</th>
                        <td class=""><?php echo $mostrar['fecha_ultimo_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Aprobado?</th>
                        <td class=""><?php echo $mostrar['aprobado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Horas a la semana</th>
                        <td class=""><?php echo $mostrar['horas_semana'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Resultados obtenidos en la gestión</th>
                        <td class=""><?php echo $mostrar['resultado_obtenido'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de la gestión</th>
                        <td class=""><?php echo $mostrar['estado_gestion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">IES realiza gestión</th>
                        <td class=""><?php echo $mostrar['ies_realiza_gestion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Premios y distinciones #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de distinción o reconocimiento</th>
                        <td class=""><?php echo $mostrar['tipo_distincion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Monto mensual</th>
                        <td class=""><?php echo $mostrar['monto_mensual'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_servicios_prestados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Servicios prestados a la comunidad #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de servicio</th>
                        <td class=""><?php echo $mostrar['tipo_servicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Servicio prestado</th>
                        <td class=""><?php echo $mostrar['servicio_prestado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución solicitante</th>
                        <td class=""><?php echo $mostrar['institucion_solicitante'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de servicio</th>
                        <td class=""><?php echo $mostrar['fecha_servicio'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <br>
                  <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirEstimulos()"></center>
                  <br>
                </div>
            </div>
        </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "yy/mm/dd",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha').val(dateText);
            }
        });

        <?php include("scripts/formularios/estimulos/validadoresFormulariosEstimulos.php");?>

        <?php include("scripts/formularios/estimulos/validadoresBorrarEstimulos.php");?>

        <?php include("scripts/formularios/estimulos/validadoresEditarEstimulos.php");?>

    </script>

</body>
</html>
