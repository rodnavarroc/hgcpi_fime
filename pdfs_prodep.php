<?php

  $conexion=mysqli_connect("localhost", "root", "", "hgcpi");

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
    <title>PDF PRODEP | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirProdep(el)
    {
      var restorpage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorpage;
    }
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
      <div id="imprimir">
        <div class="container">
            <div class="row-mt-4">
                <div class="col-12">
                    <br><br>
                    <h2><center>PRODEP</center></h2>
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
                        <th class="">Estudios realizados</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_experiencia_laboral WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Datos laborales</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>       
                      <tr>
                        <th class="">Gestión académica</th>
                        <?php
                  $sql="SELECT * FROM detalle_usuario_gestion_academica WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <tr>
                        <?php
                  $sql="SELECT * FROM detalle_usuario_docencia WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                        <th class="">Clases docentes</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_tutoria WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Tutoría</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_direccion_individualizada WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Dirección individualizada</th>
                        <td class=""><?php echo $conteo;?></td>
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
                        <td class=""><?php echo $conteo;?></td>
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
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_memorias WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Producción de memorias en extenso</th>
                        <td class=""><?php echo $conteo;?></td>
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
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_lgac WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Líneas de generación o aplicación innovadora del conocimiento</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_cuerpo_academico WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Cuerpo académico</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_actualizacion_pe WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Actualización de programas educativos</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_beneficios_promep WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Beneficios PROMEP</th>
                        <td class=""><?php echo $conteo;?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_beneficios_externos_promep WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Beneficios externo a PROMEP</th>
                        <td class=""><?php echo $conteo;?></td>
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
                        <td class=""><?php echo $conteo;?></td>
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
                  $sql="SELECT * FROM detalle_usuario_experiencia_laboral WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Datos laborales #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombramiento</th>
                        <td class=""><?php echo $mostrar['puesto']?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de nombramiento</th>
                        <td class=""><?php echo $mostrar['tipo_nombramiento']?></td>
                      </tr>
                      <tr>
                        <th class="">Asociado</th>
                        <td class=""><?php echo $mostrar['asociado_a']?></td>
                      </tr>
                      <tr>
                        <th class="">Dedicación</th>
                        <td class=""><?php echo $mostrar['logros']?></td>
                      </tr>
                      <tr>
                        <th class="">Institución de Educación Superior</th>
                        <td class=""><?php echo $mostrar['institucion']?></td>
                      </tr>
                      <tr>
                        <th class="">Dependencia de Educación Superior</th>
                        <td class=""><?php echo $mostrar['dependencia']?></td>
                      </tr>
                      <tr>
                        <th class="">Unidad Académica</th>
                        <td class=""><?php echo $mostrar['unidad_academica']?></td>
                      </tr>
                      <tr>
                        <th class="">Inicio de contrato</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fin del contrato</th>
                        <td class=""><?php echo $mostrar['fecha_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Cronología</th>
                        <td class=""><?php echo $mostrar['cronologia']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_docencia WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Clases docentes #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del curso</th>
                        <td class=""><?php echo $mostrar['nombre_curso']?></td>
                      </tr>
                      <tr>
                        <th class="">Institución en educación superior (IES)</th>
                        <td class=""><?php echo $mostrar['nombre_institucion_ies']?></td>
                      </tr>
                      <tr>
                        <th class="">Dependencia de educación superior</th>
                        <td class=""><?php echo $mostrar['dependencia']?></td>
                      </tr>
                      <tr>
                        <th class="">Programa educativo</th>
                        <td class=""><?php echo $mostrar['nombre_programa_educativo']?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio de estudios</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Número de alumnos</th>
                        <td class=""><?php echo $mostrar['numero_alumnos']?></td>
                      </tr>
                      <tr>
                        <th class="">Duración de semanas</th>
                        <td class=""><?php echo $mostrar['duracion_semanas']?></td>
                      </tr>
                      <tr>
                        <th class="">Horas de asesorías al mes</th>
                        <td class=""><?php echo $mostrar['horas_asesoria_mes']?></td>
                      </tr>
                      <tr>
                        <th class="">Horas semanales dedicadas a este curso</th>
                        <td class=""><?php echo $mostrar['horas_semanales_curso']?></td>
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
                        <td class=""><?php echo $mostrar['tipo_tutoria']?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel_academico']?></td>
                      </tr>
                      <tr>
                        <th class="">Programa educativo en el que participa</th>
                        <td class=""><?php echo $mostrar['programa_educativo']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_de_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de término:</th>
                        <td class=""><?php echo $mostrar['fecha_de_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de tutelaje</th>
                        <td class=""><?php echo $mostrar['tipo_de_tutelaje']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de tutelaje</th>
                        <td class=""><?php echo $mostrar['estado_tutoria']?></td>
                      </tr>
                      <tr>
                        <th class="">Número de Estudiantes</th>
                        <td class=""><?php echo $mostrar['numero_estudiantes']?></td>
                      </tr>
                      </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_grados_acad WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Estudios realizados #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nivel de estudios</th>
                        <td class=""><?php echo $mostrar['nivel_estudios']?></td>
                      </tr>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de término</th>
                        <td class=""><?php echo $mostrar['fecha_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de obtención de título o grado</th>
                        <td class=""><?php echo $mostrar['fecha_obtencion_titulo']?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de institución</th>
                        <td class=""><?php echo $mostrar['nombre_institucion']?></td>
                      </tr>
                      <tr>
                        <th class="">País de institución</th>
                        <td class=""><?php echo $mostrar['pais_institucion']?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina']?></td>
                      </tr>
                      <tr>
                        <th class="">Area del conocimiento de formación continua</th>
                        <td class=""><?php echo $mostrar['area_de_conocimiento_formacion_continua']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_direccion_individualizada WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Dirección individualizada #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título de la tesis o proyecto individual</th>
                        <td class=""><?php echo $mostrar['titulo_proyecto_dirigido']?></td>
                      </tr>
                      <tr>
                        <th class="">Grado académico</th>
                        <td class=""><?php echo $mostrar['grado_academico']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_de_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin</th>
                        <td class=""><?php echo $mostrar['fecha_de_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">No. Alumnos</th>
                        <td class=""><?php echo $mostrar['numero_estudiantes']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de la dirección individualizada</th>
                        <td class=""><?php echo $mostrar['estado_de_direccion']?></td>
                      </tr>
                      <tr>
                        <th class="">Para considerar en el currículum de cuerpo académico</th>
                        <td class=""><?php echo $mostrar['considerar_curriculum']?></td>
                      </tr>
                      <tr>
                        <th class="">Miembros</th>
                        <td class=""><?php echo $mostrar['miembros']?></td>
                      </tr>
                      <tr>
                        <th class="">LGACs</th>
                        <td class=""><?php echo $mostrar['lgacs']?></td>
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
                        <th class="">Autor(es)</th>
                        <td class=""><?php echo $mostrar['autores']?></td>
                      </tr>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['nombre_art']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado actual</th>
                        <td class=""><?php echo $mostrar['estado_art']?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais']?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de la revista</th>
                        <td class=""><?php echo $mostrar['nombre_revista']?></td>
                      </tr>
                      <tr>
                        <th class="">Editorial</th>
                        <td class=""><?php echo $mostrar['editorial']?></td>
                      </tr>
                      <tr>
                        <th class="">Volumen</th>
                        <td class=""><?php echo $mostrar['volumen_revista']?></td>
                      </tr>
                      <tr>
                        <th class="">ISSN</th>
                        <td class=""><?php echo $mostrar['issn']?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano_publicacion']?></td>
                      </tr>
                      <tr>
                        <th class="">Propósito</th>
                        <td class=""><?php echo $mostrar['proposito']?></td>
                      </tr>
                      <tr>
                        <th class="">Para considerar en el curriculum de cuerpo académico</th>
                        <td class=""><?php echo $mostrar['considerar_curriculum']?></td>
                      </tr>
                      <tr>
                        <th class="">Miembros</th>
                        <td class=""><?php echo $mostrar['miembros']?></td>
                      </tr>
                      <tr>
                        <th class="">LGACs</th>
                        <td class=""><?php echo $mostrar['lgacs']?></td>
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
                        <td class=""><?php echo $mostrar['titulo']?></td>
                      </tr>
                      <tr>
                        <th class="">Autor(es)</th>
                        <td class=""><?php echo $mostrar['autores']?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de participación</th>
                        <td class=""><?php echo $mostrar['tipo_participacion']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado actual</th>
                        <td class=""><?php echo $mostrar['estado_actual']?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais']?></td>
                      </tr>
                      <tr>
                        <th class="">Editorial</th>
                        <td class=""><?php echo $mostrar['editorial']?></td>
                      </tr>
                      <tr>
                        <th class="">Páginas</th>
                        <td class=""><?php echo $mostrar['numero_paginas']?></td>
                      </tr>
                      <tr>
                        <th class="">Número de edición</th>
                        <td class=""><?php echo $mostrar['edicion']?></td>
                      </tr>
                      <tr>
                        <th class="">Total de ejemplares</th>
                        <td class=""><?php echo $mostrar['tiraje']?></td>
                      </tr>
                      <tr>
                        <th class="">ISBN</th>
                        <td class=""><?php echo $mostrar['isbn']?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano_publicacion']?></td>
                      </tr>
                      <tr>
                        <th class="">Propósito</th>
                        <td class=""><?php echo $mostrar['proposito']?></td>
                      </tr>
                      <tr>
                        <th class="">Para considerar en el currículum de cuerpo académico</th>
                        <td class=""><?php echo $mostrar['considerar_curriculum']?></td>
                      </tr>
                      <tr>
                        <th class="">Miembros</th>
                        <td class=""><?php echo $mostrar['miembros']?></td>
                      </tr>
                      <tr>
                        <th class="">LGACs</th>
                        <td class=""><?php echo $mostrar['lgacs']?></td>
                      </tr>
                      </tbody>
                    </table>

                    <?php
                    }
                    ?>

                    <?php
                    $sql="SELECT * FROM detalle_usuario_memorias WHERE usuario_idusuario='$usuario'";
                    $result=mysqli_query($conexion,$sql);
                    $conteo = 0;
                    while($mostrar=mysqli_fetch_array($result)){     
                      $conteo++;             
                    ?>

                    <table class="table table-bordered">
                      <thead class="thead-dark">
                      <tr>
                        <th class="">Producción de memorias en extenso #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                      <tbody>
                      <tr>
                        <th class="">Autor(es)</th>
                        <td class=""><?php echo $mostrar['autores_colaboradores']?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la presentación</th>
                        <td class=""><?php echo $mostrar['titulo_publicacion']?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del congreso donde se presentó</th>
                        <td class=""><?php echo $mostrar['congreso_donde_se_presento']?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado</th>
                        <td class=""><?php echo $mostrar['estado']?></td>
                      </tr>
                      <tr>
                        <th class="">Ciudad</th>
                        <td class=""><?php echo $mostrar['ciudad']?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano_publicacion']?></td>
                      </tr>
                      <tr>
                        <th class="">De la página</th>
                        <td class=""><?php echo $mostrar['de_pagina']?></td>
                      </tr>
                      <tr>
                        <th class="">A la página</th>
                        <td class=""><?php echo $mostrar['a_pagina']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado actual</th>
                        <td class=""><?php echo $mostrar['estado_actual']?></td>
                      </tr>
                      <tr>
                        <th class="">Propósito</th>
                        <td class=""><?php echo $mostrar['proposito']?></td>
                      </tr>
                      <tr>
                        <th class="">Para considerar en el curriculum de cuerpo académico</th>
                        <td class=""><?php echo $mostrar['considerar_curriculum']?></td>
                      </tr>
                      <tr>
                        <th class="">Miembros</th>
                        <td class=""><?php echo $mostrar['miembros']?></td>
                      </tr>
                      <tr>
                        <th class="">LGACs</th>
                        <td class=""><?php echo $mostrar['lgacs']?></td>
                      </tr>
                    </tbody>

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

                  </table>
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Proyectos de investigación #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título de proyecto</th>
                        <td class=""><?php echo $mostrar['titulo']?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del patrocinador</th>
                        <td class=""><?php echo $mostrar['nombre_patrocinador']?></td>
                      </tr>
                      <tr>
                        <th class="">Alumnos participantes</th>
                        <td class=""><?php echo $mostrar['nombre_alumnos_participantes']?></td>
                      </tr>
                      <tr>
                        <th class="">Actividades realizadas</th>
                        <td class=""><?php echo $mostrar['actividades_realizadas']?></td>
                      </tr>
                      <tr>
                        <th class="">Para considerar el curriculum del cuerpo académico</th>
                        <td class=""><?php echo $mostrar['considerar_curriculum']?></td>
                      </tr>
                      <tr>
                        <th class="">Miembros</th>
                        <td class=""><?php echo $mostrar['miembros']?></td>
                      </tr>
                      <tr>
                        <th class="">LGACs</th>
                        <td class=""><?php echo $mostrar['lgacs']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de término</th>
                        <td class=""><?php echo $mostrar['fecha_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de patrocinador</th>
                        <td class=""><?php echo $mostrar['tipo_patrocinador']?></td>
                      </tr>
                      <tr>
                        <th class="">Investigadores participantes</th>
                        <td class=""><?php echo $mostrar['investigadores_participantes']?></td>
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
                        <td class=""><?php echo $mostrar['tipo_gestion']?></td>
                      </tr>
                      <tr>
                        <th class="">Cargo dentro de la comisión o cuerpo colegiado</th>
                        <td class=""><?php echo $mostrar['cargo_comision']?></td>
                      </tr>
                      <tr>
                        <th class="">Función encomendada</th>
                        <td class=""><?php echo $mostrar['funcion_encomendada']?></td>
                      </tr>
                      <tr>
                        <th class="">Órgano colegiado al que fue presentado</th>
                        <td class=""><?php echo $mostrar['organo_colegiado']?></td>
                      </tr>
                      <tr>
                        <th class="">Aprobado</th>
                        <td class=""><?php echo $mostrar['aprobado']?></td>
                      </tr>
                      <tr>
                        <th class="">Resultados obtenidos</th>
                        <td class=""><?php echo $mostrar['resultados_obtenidos']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado</th>
                        <td class=""><?php echo $mostrar['estado_gestion']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de termino</th>
                        <td class=""><?php echo $mostrar['fecha_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de último informe presentado</th>
                        <td class=""><?php echo $mostrar['fecha_ultimo_informe']?></td>
                      </tr>
                      <tr>
                        <th class="">Horas dedicadas a la semana a esta gestión</th>
                        <td class=""><?php echo $mostrar['horas_dedicadas_semana']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_lgac WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Línea de generación y aplicación del conocimiento (LGAC) #<?php echo $conteo; ?></th>
                        <td class=""><?php echo $mostrar['']?></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Línea</th>
                        <td class=""><?php echo $mostrar['']?></td>
                      </tr>
                      <tr>
                        <th class="">Actividades que realiza</th>
                        <td class=""><?php echo $mostrar['']?></td>
                      </tr>
                      <tr>
                        <th class="">Horas a la semana dedicadas a esta LGAC</th>
                        <td class=""><?php echo $mostrar['']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_cuerpo_academico WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Cuerpo académico #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del cuerpo académico</th>
                        <td class=""><?php echo $mostrar['nombre_cuerpo_academico']?></td>
                      </tr>
                      <tr>
                        <th class="">Clave</th>
                        <td class=""><?php echo $mostrar['cuerpo_academico_clave']?></td>
                      </tr>
                      <tr>
                        <th class="">Grado de consolación</th>
                        <td class=""><?php echo $mostrar['grado_consolacion']?></td>
                      </tr>
                      <tr>
                        <th class="">Línea(s) que cultiva el cuerpo académico</th>
                        <td class=""><?php echo $mostrar['linea_cultiva_cuerpo_academico']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_actualizacion_pe WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Programas Educativos Actualizados #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Programa educativo</th>
                        <td class=""><?php echo $mostrar['nombre_pe']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha</th>
                        <td class=""><?php echo $mostrar['fecha_implementacion_cambio']?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de actualización</th>
                        <td class=""><?php echo $mostrar['en_que_consiste_actualizacion']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_beneficios_promep WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Beneficios PROMEP #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">IES de la solicitud</th>
                        <td class=""><?php echo $mostrar['ies_solicitud']?></td>
                      </tr>
                      <tr>
                        <th class="">Solicitud</th>
                        <td class=""><?php echo $mostrar['solicitud']?></td>
                      </tr>
                      <tr>
                        <th class="">Vigencia</th>
                        <td class=""><?php echo $mostrar['vigencia']?></td>
                      </tr>
                      <tr>
                        <th class="">Estado</th>
                        <td class=""><?php echo $mostrar['estado']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_beneficios_externos_promep WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Beneficios externos a PROMEP #<?php echo $conteo; ?></th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de apoyo</th>
                        <td class=""><?php echo $mostrar['tipo_apoyo']?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel</th>
                        <td class=""><?php echo $mostrar['nivel']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha inicial</th>
                        <td class=""><?php echo $mostrar['fecha_inicio']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha final</th>
                        <td class=""><?php echo $mostrar['fecha_fin']?></td>
                      </tr>
                      <tr>
                        <th class="">Monto</th>
                        <td class=""><?php echo $mostrar['monto']?></td>
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
                        <th class="">Nombre</th>
                        <td class=""><?php echo $mostrar['nombre_distincion']?></td>
                      </tr>
                      <tr>
                        <th class="">Motivo</th>
                        <td class=""><?php echo $mostrar['motivo']?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha</th>
                        <td class=""><?php echo $mostrar['fecha']?></td>
                      </tr>
                      <tr>
                        <th class="">Institución otorgante</th>
                        <td class=""><?php echo $mostrar['institucion_que_otorga']?></td>
                      </tr>
                      <tr>
                        <th class="">Institución otorgante no considerada en el catálogo</th>
                        <td class=""><?php echo $mostrar['institucion_otorgante_no_considerada']?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>
                </div>
            </div>
          </div>
          <br>
          <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirProdep('imprimir')"></center>
          <br>
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
