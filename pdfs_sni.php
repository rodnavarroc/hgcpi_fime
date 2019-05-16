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
    <title>PDF SNI | HGCPI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function imprimirSni()
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
                    <h2><center>Sistema Nacional de Investigadores</center></h2>
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
                        <td class=""><?php echo $conteo; ?></td>
                      </tr
                      <?php
                  $sql="SELECT * FROM detalle_usuario_lenguas_e_idiomas WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>>
                      <tr>
                        <th class="">Lenguas e idiomas</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_docencia WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Docencia</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_tesis_diplomados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Tesis y diplomados</th>
                        <td class=""><?php echo $conteo; ?></td>
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
                        <th class="">Experiencia laboral</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_estancias_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Estancias de investigación</th>
                        <td class=""><?php echo $conteo; ?></td>
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
                        <td class=""><?php echo $conteo; ?></td>
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
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_produccion_capitulos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Producción de capítulos</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_reportes_tecnicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Reportes técnicos</th>
                        <td class=""><?php echo $conteo; ?></td>
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
                        <th class="">Memorias</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_documentos_de_trabajo WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Documentos de trabajo</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_desarollos_tecnologicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Desarrollos tecnológicos</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_prod_proyectos_academicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Producción de proyectos académicos</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_innovacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Innovación</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_desarrollo_software WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Desarrollo de software</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_patentes WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Patentes</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_participacion_congresos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Participación en congresos</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_divulgacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Divulgación</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_redes_tematicas_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Redes temáticas CONACYT</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_redes_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Redes de investigación</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_redes_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Grupos de investigación</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_evaluaciones_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Evaluaciones CONACYT</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_evaluaciones_no_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Evaluaciones no CONACYT</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_distinciones_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Distinciones CONACYT</th>
                        <td class=""><?php echo $conteo; ?></td>
                      </tr>
                      <?php
                  $sql="SELECT * FROM detalle_usuario_distinciones_no_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;
                  }             
                  ?>
                      <tr>
                        <th class="">Distinciones no CONACYT</th>
                        <td class=""><?php echo $conteo; ?></td>
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
                        <td class=""><?php echo $conteo; ?></td>
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
                        <td class=""></td>
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
                      <tr>
                        <th class="">Grados académicos y capacitación #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estatus</th>
                        <td class=""><?php echo $mostrar['estatus'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Opciones de titulación</th>
                        <td class=""><?php echo $mostrar['opciones_de_titulacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución otorgante</th>
                        <td class=""><?php echo $mostrar['nombre_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de institución</th>
                        <td class=""><?php echo $mostrar['tipo_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Púbica o privada</th>
                        <td class=""><?php echo $mostrar['institucion_publica_privada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clasificación</th>
                        <td class=""><?php echo $mostrar['clasificacion_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de formación continua</th>
                        <td class=""><?php echo $mostrar['tipo_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de formación continua</th>
                        <td class=""><?php echo $mostrar['nombre_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de formación continua</th>
                        <td class=""><?php echo $mostrar['ano_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución de formación continua</th>
                        <td class=""><?php echo $mostrar['institucion_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Horas totales de formación continua</th>
                        <td class=""><?php echo $mostrar['horas_totales_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de formación continua</th>
                        <td class=""><?php echo $mostrar['area_de_conocimiento_formacion_continua'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio de estudios</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de fin de estudios</th>
                        <td class=""><?php echo $mostrar['fecha_fin'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de obtención del título o grado</th>
                        <td class=""><?php echo $mostrar['fecha_obtencion_titulo'] ?></td>
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
                        <th class="">Lenguas e idiomas #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Idioma</th>
                        <td class=""><?php echo $mostrar['idioma'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Grado de dominio</th>
                        <td class=""><?php echo $mostrar['grado_de_dominio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel de dominio</th>
                        <td class=""><?php echo $mostrar['grado_de_dominio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel conferido</th>
                        <td class=""><?php echo $mostrar['nivel_conferido'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nivel de lectura</th>
                        <td class=""><?php echo $mostrar['nivel_lectura'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución otorgante</th>
                        <td class=""><?php echo $mostrar['institucion_que_otorga'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Documento probatorio</th>
                        <td class=""><?php echo $mostrar['documento_probatorio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Puntos / porcentaje</th>
                        <td class=""><?php echo $mostrar['puntos'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Vigencia de</th>
                        <td class=""><?php echo $mostrar['vigencia_de'] ?></td>
                      </tr>
                      <tr>
                        <th class="">a</th>
                        <td class=""><?php echo $mostrar['vigencia_a'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de evaluación</th>
                        <td class=""><?php echo $mostrar['fecha_evaluacion'] ?></td>
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
                        <th class="">Docencia #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del programa educativo</th>
                        <td class=""><?php echo $mostrar['nombre_programa_educativo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del curso o asignatura</th>
                        <td class=""><?php echo $mostrar['nombre_curso'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre de institución en educación superior IES</th>
                        <td class=""><?php echo $mostrar['nombre_institucion_ies'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de institución</th>
                        <td class=""><?php echo $mostrar['tipo_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Pública o privada</th>
                        <td class=""><?php echo $mostrar['institucion_publica_privada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País donde reside la institución</th>
                        <td class=""><?php echo $mostrar['pais_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clasificación de la institución</th>
                        <td class=""><?php echo $mostrar['clasificacion_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Horas totales del curso o asignatura</th>
                        <td class=""><?php echo $mostrar['horas_totales_curso'] ?></td>
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
                  $sql="SELECT * FROM detalle_usuario_tesis_diplomados WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Tesis y diplomados #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre de institución</th>
                        <td class=""><?php echo $mostrar['institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de institución</th>
                        <td class=""><?php echo $mostrar['tipo_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Pública o privada</th>
                        <td class=""><?php echo $mostrar['institucion_publica_privada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País donde reside la institución</th>
                        <td class=""><?php echo $mostrar['pais_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clasificación de la institución</th>
                        <td class=""><?php echo $mostrar['clasificacion_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Programa PNPC</th>
                        <td class=""><?php echo $mostrar['programa_pnpc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la tesis </th>
                        <td class=""><?php echo $mostrar['titulo_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de la tesis</th>
                        <td class=""><?php echo $mostrar['estado_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento de la tesis</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo de conocimiento de la tesis</th>
                        <td class=""><?php echo $mostrar['campo_conocimiento_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina de conocimiento de la tesis</th>
                        <td class=""><?php echo $mostrar['disciplina_conocimiento_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina de conocimiento de la tesis</th>
                        <td class=""><?php echo $mostrar['subdisciplina_conocimiento_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País donde se realizó la tesis</th>
                        <td class=""><?php echo $mostrar['pais_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Grado académico de la tesis</th>
                        <td class=""><?php echo $mostrar['grado_academico_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del diplomado</th>
                        <td class=""><?php echo $mostrar['nombre_diplomado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del curso o asignatura</th>
                        <td class=""><?php echo $mostrar['nombre_curso_asignatura'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año del diplomado</th>
                        <td class=""><?php echo $mostrar['ano_diplomado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de aprobación de la tesis</th>
                        <td class=""><?php echo $mostrar['fecha_aprobacion_tesis'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de obtención de grado</th>
                        <td class=""><?php echo $mostrar['fecha_obtencion_grado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Horas totales del diplomado</th>
                        <td class=""><?php echo $mostrar['horas_diplomado'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

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
                        <th class="">Experiencia laboral #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">¿Es su empleo actual?</th>
                        <td class=""><?php echo $mostrar['empleo_actual'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Puesto</th>
                        <td class=""><?php echo $mostrar['puesto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución</th>
                        <td class=""><?php echo $mostrar['institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de inicio</th>
                        <td class=""><?php echo $mostrar['fecha_inicio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Logros</th>
                        <td class=""><?php echo $mostrar['logros'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área del puesto</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_puesto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del puesto</th>
                        <td class=""><?php echo $mostrar['campo_puesto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del puesto</th>
                        <td class=""><?php echo $mostrar['disciplina_puesto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del puesto</th>
                        <td class=""><?php echo $mostrar['subdisciplina_puesto'] ?></td>
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
                        <th class="">Producción de artículos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">ISSN del artículo</th>
                        <td class=""><?php echo $mostrar['issn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del artículo</th>
                        <td class=""><?php echo $mostrar['nombre_art'] ?></td>
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
                        <th class="">Volumen de la revista</th>
                        <td class=""><?php echo $mostrar['volumen_revista'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de edición</th>
                        <td class=""><?php echo $mostrar['ano_edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de publicación</th>
                        <td class=""><?php echo $mostrar['ano_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Página inicial del artículo</th>
                        <td class=""><?php echo $mostrar['pagina_inicial'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Página final del artículo</th>
                        <td class=""><?php echo $mostrar['pagina_final'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Recibió ayuda del CONACYT?</th>
                        <td class=""><?php echo $mostrar['apoyo_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fondo / programa</th>
                        <td class=""><?php echo $mostrar['fondo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID Thomson</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
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
                        <th class="">Producción de libros #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">ISBN</th>
                        <td class=""><?php echo $mostrar['isbn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Idioma</th>
                        <td class=""><?php echo $mostrar['idioma'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de publicación</th>
                        <td class=""><?php echo $mostrar['ano_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Volumen</th>
                        <td class=""><?php echo $mostrar['volumen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tomo</th>
                        <td class=""><?php echo $mostrar['tomo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tiraje</th>
                        <td class=""><?php echo $mostrar['tiraje'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número de página</th>
                        <td class=""><?php echo $mostrar['numero_paginas'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Editorial</th>
                        <td class=""><?php echo $mostrar['editorial'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Edición</th>
                        <td class=""><?php echo $mostrar['edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Lugar de edición</th>
                        <td class=""><?php echo $mostrar['lugar_edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de edición</th>
                        <td class=""><?php echo $mostrar['ano_edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento del libro</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_libro'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del libro</th>
                        <td class=""><?php echo $mostrar['campo_libro'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del libro</th>
                        <td class=""><?php echo $mostrar['disciplina_libro'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del libro</th>
                        <td class=""><?php echo $mostrar['subdisciplina_libro'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID Thomson</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_produccion_capitulos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Producción de capítulos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">ISBN</th>
                        <td class=""><?php echo $mostrar['isbn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Editorial</th>
                        <td class=""><?php echo $mostrar['editorial'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número de edición</th>
                        <td class=""><?php echo $mostrar['numero_edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de edición</th>
                        <td class=""><?php echo $mostrar['ano_edicion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título del capítulo</th>
                        <td class=""><?php echo $mostrar['titulo_capitulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número del capítulo</th>
                        <td class=""><?php echo $mostrar['numero_capitulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">De la página</th>
                        <td class=""><?php echo $mostrar['de_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">A la página</th>
                        <td class=""><?php echo $mostrar['a_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Resumen del capitulo</th>
                        <td class=""><?php echo $mostrar['resumen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento del capítulo</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_cap'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del capítulo</th>
                        <td class=""><?php echo $mostrar['campo_cap'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del capítulo</th>
                        <td class=""><?php echo $mostrar['disciplina_cap'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del capítulo</th>
                        <td class=""><?php echo $mostrar['subdisciplina_cap'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID Thomson</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_reportes_tecnicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Reportes técnicos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Institución a la que se presenta el reporte</th>
                        <td class=""><?php echo $mostrar['institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de publicación</th>
                        <td class=""><?php echo $mostrar['fecha_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número de páginas</th>
                        <td class=""><?php echo $mostrar['numero_paginas'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Origen del reporte técnico</th>
                        <td class=""><?php echo $mostrar['origen_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Descripción</th>
                        <td class=""><?php echo $mostrar['descripcion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Objetivos</th>
                        <td class=""><?php echo $mostrar['objetivos'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Recibió apoyo del CONACYT?</th>
                        <td class=""><?php echo $mostrar['recibio_apoyo_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento del reporte técnico</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del reporte técnico</th>
                        <td class=""><?php echo $mostrar['campo_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del reporte técnico</th>
                        <td class=""><?php echo $mostrar['disciplina_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del reporte técnico</th>
                        <td class=""><?php echo $mostrar['subdisciplina_reporte'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID Thomson</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
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
                        <th class="">Memorias #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título de la memoria</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la obra</th>
                        <td class=""><?php echo $mostrar['titulo_de_obra'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la publicación</th>
                        <td class=""><?php echo $mostrar['titulo_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">De la página</th>
                        <td class=""><?php echo $mostrar['de_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">A la página</th>
                        <td class=""><?php echo $mostrar['a_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de publicación</th>
                        <td class=""><?php echo $mostrar['ano_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento de la memoria</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_mem'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo de la memoria</th>
                        <td class=""><?php echo $mostrar['campo_mem'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina de la memoria</th>
                        <td class=""><?php echo $mostrar['disciplina_mem'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina de la memoria</th>
                        <td class=""><?php echo $mostrar['subdisciplina_mem'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_documentos_de_trabajo WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Documentos de trabajo #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título del documento de trabajo</th>
                        <td class=""><?php echo $mostrar['titulo_documento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la obra</th>
                        <td class=""><?php echo $mostrar['titulo_obra'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título de la publicación</th>
                        <td class=""><?php echo $mostrar['titulo_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">De la página </th>
                        <td class=""><?php echo $mostrar['de_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">A la página</th>
                        <td class=""><?php echo $mostrar['a_pagina'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de la publicación</th>
                        <td class=""><?php echo $mostrar['ano_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento del documento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_doc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del documento</th>
                        <td class=""><?php echo $mostrar['campo_doc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del documento</th>
                        <td class=""><?php echo $mostrar['disciplina_doc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del documento</th>
                        <td class=""><?php echo $mostrar['subdisciplina_doc'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Researcher ID</th>
                        <td class=""><?php echo $mostrar['researcher_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">arXiv ID</th>
                        <td class=""><?php echo $mostrar['arxiv_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">PubMed ID</th>
                        <td class=""><?php echo $mostrar['pubmed_id_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Open ID</th>
                        <td class=""><?php echo $mostrar['open_id_autor'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_desarollos_tecnologicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Desarrollos tecnológicos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del desarrollo</th>
                        <td class=""><?php echo $mostrar['nombre_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de desarrollo</th>
                        <td class=""><?php echo $mostrar['tipo_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Documento de respaldo</th>
                        <td class=""><?php echo $mostrar['documento_respaldo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Objetivos del desarrollo</th>
                        <td class=""><?php echo $mostrar['objetivos'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Recibió ayuda del CONACYT?</th>
                        <td class=""><?php echo $mostrar['recibio_apoyo_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del SCIAN</th>
                        <td class=""><?php echo $mostrar['sector_industrial_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subrama del SCIAN</th>
                        <td class=""><?php echo $mostrar['subrama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subsector del SCIAN</th>
                        <td class=""><?php echo $mostrar['subsector_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Rama del SCIAN</th>
                        <td class=""><?php echo $mostrar['rama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del SCIAN</th>
                        <td class=""><?php echo $mostrar['clase_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del OCDE</th>
                        <td class=""><?php echo $mostrar['sector_industrial_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">División del OCDE</th>
                        <td class=""><?php echo $mostrar['division_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Grupo del OCDE</th>
                        <td class=""><?php echo $mostrar['grupo_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del OCDE</th>
                        <td class=""><?php echo $mostrar['clase_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo</th>
                        <td class=""><?php echo $mostrar['campo_conocimiento_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Generación de valor y/o impacto para el beneficiario</th>
                        <td class=""><?php echo $mostrar['generacion_de_valor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Formación de recursos u otros resultados</th>
                        <td class=""><?php echo $mostrar['formacion_de_recursos'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_prod_proyectos_academicos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Producción de proyectos académicos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del proyecto</th>
                        <td class=""><?php echo $mostrar['nombre_proyecto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de proyecto</th>
                        <td class=""><?php echo $mostrar['tipo_proyecto'] ?></td>
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
                        <th class="">Institución</th>
                        <td class=""><?php echo $mostrar['institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento del proyecto</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_proyecto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo del proyecto</th>
                        <td class=""><?php echo $mostrar['campo_proyecto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina del proyecto</th>
                        <td class=""><?php echo $mostrar['disciplina_proyecto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina del proyecto</th>
                        <td class=""><?php echo $mostrar['subdisciplina_proyecto'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_innovacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Innovación #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Tipo de innovación OSLO</th>
                        <td class=""><?php echo $mostrar['innovacion_oslo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de innovación</th>
                        <td class=""><?php echo $mostrar['tipo_innovacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Aplicación de la innovación</th>
                        <td class=""><?php echo $mostrar['aplicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Potencial de cobertura</th>
                        <td class=""><?php echo $mostrar['potencial_cobertura'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Mecanismo de protección de propiedad intelectual</th>
                        <td class=""><?php echo $mostrar['mecanismo_proteccion_propiedad_intelectual'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Recibió apoyo del CONACYT?</th>
                        <td class=""><?php echo $mostrar['recibio_apoyo_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del SCIAN</th>
                        <td class=""><?php echo $mostrar['sector_industrial_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subrama del SCIAN</th>
                        <td class=""><?php echo $mostrar['subrama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subsector del SCIAN</th>
                        <td class=""><?php echo $mostrar['subsector_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Rama del SCIAN</th>
                        <td class=""><?php echo $mostrar['rama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del SCIAN</th>
                        <td class=""><?php echo $mostrar['clase_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del OCDE</th>
                        <td class=""><?php echo $mostrar['sector_industrial_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">División del OCDE</th>
                        <td class=""><?php echo $mostrar['division_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del OCDE</th>
                        <td class=""><?php echo $mostrar['clase_ocde'] ?></td>
                      </tr>
                      <tr>
                        <tr>
                        <th class="">Grupo del OCDE</th>
                        <td class=""><?php echo $mostrar['grupo_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_inn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo</th>
                        <td class=""><?php echo $mostrar['campo_inn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_inn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_inn'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Monto de venta anuales</th>
                        <td class=""><?php echo $mostrar['monto_venta_anuales'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Volumen de producción anuales</th>
                        <td class=""><?php echo $mostrar['volumen_prod_anuales'] ?></td>
                      </tr>
                      <tr>
                        <th class="">No. De empleados directos anuales</th>
                        <td class=""><?php echo $mostrar['no_empleos_directos_anuales'] ?></td>
                      </tr>
                      <tr>
                        <th class="">No. De empleados indirectos anuales</th>
                        <td class=""><?php echo $mostrar['no_empleos_indirectos_anuales'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_desarrollo_software WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Desarrollo de software #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título</th>
                        <td class=""><?php echo $mostrar['titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de desarrollo</th>
                        <td class=""><?php echo $mostrar['tipo_desarrollo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Cuenta con derechos de autor?</th>
                        <td class=""><?php echo $mostrar['derechos_autor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Horas hombre del proyecto</th>
                        <td class=""><?php echo $mostrar['horas_hombre'] ?></td>
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
                        <th class="">Costo</th>
                        <td class=""><?php echo $mostrar['costo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Beneficiario</th>
                        <td class=""><?php echo $mostrar['beneficiario'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Objetivo</th>
                        <td class=""><?php echo $mostrar['objetivo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Resumen</th>
                        <td class=""><?php echo $mostrar['resumen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Contribución</th>
                        <td class=""><?php echo $mostrar['contribucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Generación de valor y/o impacto para el beneficiario</th>
                        <td class=""><?php echo $mostrar['generacion_de_valor'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Formación de recursos u otros resultados</th>
                        <td class=""><?php echo $mostrar['formacion_rh'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Recibió apoyo del CONACYT?</th>
                        <td class=""><?php echo $mostrar['recibio_apoyo_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Logros</th>
                        <td class=""><?php echo $mostrar['logros'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_patentes WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Patentes #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre o título</th>
                        <td class=""><?php echo $mostrar['nombre'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de patente</th>
                        <td class=""><?php echo $mostrar['tipo_patente'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Estado de la patente</th>
                        <td class=""><?php echo $mostrar['estado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Número del trámite</th>
                        <td class=""><?php echo $mostrar['numero_tramite'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de solicitud</th>
                        <td class=""><?php echo $mostrar['fecha_solicitud'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de ingreso</th>
                        <td class=""><?php echo $mostrar['fecha_registro'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Expediente</th>
                        <td class=""><?php echo $mostrar['expediente'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clasificación internacional de patentes</th>
                        <td class=""><?php echo $mostrar['clasificacion_internacional'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Resumen</th>
                        <td class=""><?php echo $mostrar['resumen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">¿Explotación industrial?</th>
                        <td class=""><?php echo $mostrar['explotacion_industrial'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de la publicación</th>
                        <td class=""><?php echo $mostrar['ano_publicacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año de edición</th>
                        <td class=""><?php echo $mostrar['ano_edicion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_participacion_congresos WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Participación en congresos #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del congreso</th>
                        <td class=""><?php echo $mostrar['nombre_congreso'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Título del trabajo</th>
                        <td class=""><?php echo $mostrar['titulo_trabajo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de participación en el congreso</th>
                        <td class=""><?php echo $mostrar['tipo_participacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha</th>
                        <td class=""><?php echo $mostrar['fecha'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_divulgacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Divulgación #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Título del trabajo</th>
                        <td class=""><?php echo $mostrar['divulgacion_titulo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de participación</th>
                        <td class=""><?php echo $mostrar['tipo_participacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de evento</th>
                        <td class=""><?php echo $mostrar['tipo_evento'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución organizadora</th>
                        <td class=""><?php echo $mostrar['institucion_organizadora'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Dirigido a </th>
                        <td class=""><?php echo $mostrar['dirigido_a'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha</th>
                        <td class=""><?php echo $mostrar['fecha'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de medio</th>
                        <td class=""><?php echo $mostrar['tipo_de_medio'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Palabras clave</th>
                        <td class=""><?php echo $mostrar['palabras_clave'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Notas periodísticas</th>
                        <td class=""><?php echo $mostrar['notas_periodisticas'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Producto obtenido</th>
                        <td class=""><?php echo $mostrar['producto_obtenido'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_divulgacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo</th>
                        <td class=""><?php echo $mostrar['campo_divulgacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_divulgacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_divulgacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del SCIAN</th>
                        <td class=""><?php echo $mostrar['sector_industrial_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subrama del SCIAN</th>
                        <td class=""><?php echo $mostrar['subrama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subsector del SCIAN</th>
                        <td class=""><?php echo $mostrar['subsector_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Rama del SCIAN</th>
                        <td class=""><?php echo $mostrar['rama_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del SCIAN</th>
                        <td class=""><?php echo $mostrar['clase_scian'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Sector industrial del OCDE</th>
                        <td class=""><?php echo $mostrar['sector_industrial_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">División del OCDE</th>
                        <td class=""><?php echo $mostrar['division_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Grupo del OCDE</th>
                        <td class=""><?php echo $mostrar['grupo_ocde'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Clase del OCDE</th>
                        <td class=""><?php echo $mostrar['clase_ocde'] ?></td>
                      </tr>
                      </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_redes_tematicas_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Redes temáticas del CONACYT #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Red temática CONACYT</th>
                        <td class=""><?php echo $mostrar['red_tematica_conacyt'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de ingreso</th>
                        <td class=""><?php echo $mostrar['fecha_ingreso'] ?></td>
                      </tr>
                      </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_redes_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Redes de investigación #<?php echo $conteo; ?></td>
                        <td class=""></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre de red</th>
                        <td class=""><?php echo $mostrar['nombre_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de creación</th>
                        <td class=""><?php echo $mostrar['fecha_creacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de ingreso</th>
                        <td class=""><?php echo $mostrar['fecha_ingreso'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del responsable de la red</th>
                        <td class=""><?php echo $mostrar['nombre_responsable_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Primer apellido del responsable de la red</th>
                        <td class=""><?php echo $mostrar['primer_apellido_responsable_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Segundo apellido del responsable de la red</th>
                        <td class=""><?php echo $mostrar['segundo_apellido_responsable_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución del responsable de la red</th>
                        <td class=""><?php echo $mostrar['institucion_responsable_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Total de integrantes</th>
                        <td class=""><?php echo $mostrar['total_integrantes'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo</th>
                        <td class=""><?php echo $mostrar['campo_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_red'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_red'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_grupos_investigacion WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Grupos de investigación #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del grupo</th>
                        <td class=""><?php echo $mostrar['nombre_grupo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de creación</th>
                        <td class=""><?php echo $mostrar['fecha_creacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de ingreso</th>
                        <td class=""><?php echo $mostrar['fecha_ingreso'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del responsable / líder de grupo</th>
                        <td class=""><?php echo $mostrar['nombre_lider'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Primer apellido del responsable / líder de grupo</th>
                        <td class=""><?php echo $mostrar['primer_apellido_lider'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Segundo apellido del responsable / líder de grupo</th>
                        <td class=""><?php echo $mostrar['segundo_apellido_lider'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución de adscripción</th>
                        <td class=""><?php echo $mostrar['institucion_adscripcion_lider'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Total de investigadores</th>
                        <td class=""><?php echo $mostrar['total_investigadores'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Impacto</th>
                        <td class=""><?php echo $mostrar['impacto'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Colaboración</th>
                        <td class=""><?php echo $mostrar['colaboracion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_grupo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo</th>
                        <td class=""><?php echo $mostrar['campo_grupo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_grupo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_grupo'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_evaluaciones_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Evaluaciones CONACYT #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre del fondo</th>
                        <td class=""><?php echo $mostrar['nombre_del_fondo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Dictamen</th>
                        <td class=""><?php echo $mostrar['dictamen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Descripción</th>
                        <td class=""><?php echo $mostrar['descripcion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_ev'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo </th>
                        <td class=""><?php echo $mostrar['campo_ev'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_ev'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_ev'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de asignación</th>
                        <td class=""><?php echo $mostrar['fecha_asignacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de aceptación</th>
                        <td class=""><?php echo $mostrar['fecha_aceptacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha de evaluación</th>
                        <td class=""><?php echo $mostrar['fecha_evaluacion'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_evaluaciones_no_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Evaluaciones no CONACYT #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre de la institución </th>
                        <td class=""><?php echo $mostrar['nombre_institucion'] ?></td>
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
                        <th class="">Cargo desempeñado</th>
                        <td class=""><?php echo $mostrar['cargo_desempenado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de evaluación</th>
                        <td class=""><?php echo $mostrar['tipo_evaluacion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Producto evaluado</th>
                        <td class=""><?php echo $mostrar['producto_evaluado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Nombre del producto evaluado</th>
                        <td class=""><?php echo $mostrar['nombre_producto_evaluado'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Dictamen</th>
                        <td class=""><?php echo $mostrar['dictamen'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Descripción de la actividad</th>
                        <td class=""><?php echo $mostrar['descripcion_actividad'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Área de conocimiento</th>
                        <td class=""><?php echo $mostrar['area_conocimiento_ev_no'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Campo </th>
                        <td class=""><?php echo $mostrar['campo_ev_no'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Disciplina</th>
                        <td class=""><?php echo $mostrar['disciplina_ev_no'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Subdisciplina</th>
                        <td class=""><?php echo $mostrar['subdisciplina_ev_no'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_distinciones_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Distinciones CONACYT #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre de la distinción</th>
                        <td class=""><?php echo $mostrar['nombre_dist'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano'] ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <?php
                  }
                  ?>

                  <?php
                  $sql="SELECT * FROM detalle_usuario_distinciones_no_conacyt WHERE usuario_idusuario='$usuario'";
                  $result=mysqli_query($conexion,$sql);
                  $conteo = 0;
                  while($mostrar=mysqli_fetch_array($result)){     
                    $conteo++;             
                  ?>

                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th class="">Distinciones no CONACYT #<?php echo $conteo; ?></td>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="">Nombre de la distinción</th>
                        <td class=""><?php echo $mostrar['nombre_dist'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución que otorgó el premio o la distinción</th>
                        <td class=""><?php echo $mostrar['institucion_otorga'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año </th>
                        <td class=""><?php echo $mostrar['ano'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País</th>
                        <td class=""><?php echo $mostrar['pais'] ?></td>
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
                        <th class="">Premios y distinciones #<?php echo $conteo; ?></td>
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
                        <th class="">Nombre de la distinción</th>
                        <td class=""><?php echo $mostrar['nombre_distincion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución que otorgó el premio o distinción</th>
                        <td class=""><?php echo $mostrar['institucion_que_otorga'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Institución otorgante no considerada</th>
                        <td class=""><?php echo $mostrar['institucion_otorgante_no_considerada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Tipo de institución</th>
                        <td class=""><?php echo $mostrar['tipo_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Pública o privada</th>
                        <td class=""><?php echo $mostrar['institucion_publica_privada'] ?></td>
                      </tr>
                      <tr>
                        <th class="">País donde reside la institución</th>
                        <td class=""><?php echo $mostrar['pais_institucion'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Motivo</th>
                        <td class=""><?php echo $mostrar['motivo'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Año</th>
                        <td class=""><?php echo $mostrar['ano'] ?></td>
                      </tr>
                      <tr>
                        <th class="">Fecha</th>
                        <td class=""><?php echo $mostrar['fecha'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <?php
                  }
                  ?>
                  <br>
                  <center><input class="btn btn-secondary" type="button" value="Imprimir PDF" onclick="imprimirSni()"></center>
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
