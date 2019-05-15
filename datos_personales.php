<?php

  /*scripts de sesion*/

  session_start();
  $conexion=mysqli_connect('localhost','root','','hgcpi');

  if(!isset($_SESSION['usuario'])) { header("Location: index.php"); }
  
  $usuario = $_SESSION['usuario'];

  $sql="SELECT * FROM usuario WHERE idusuario='$usuario'";
  $result=mysqli_query($conexion,$sql);
  $mostrar=mysqli_fetch_array($result);

  /*scripts de sesion*/

if(!isset($_GET["user"]))
{
    header("Location: index.php");
}
else
{
    $user = $_GET["user"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Datos Personales | HGCPI FIME</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
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
                        <div class="dropdown-menu disabled" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Estímulos UANL</a>
                          <a class="dropdown-item" href="#">PRODEP</a>
                          <a class="dropdown-item" href="#">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="perfil.php"><?php echo $mostrar['nombre']." ".$mostrar['ap_paterno']." ".$mostrar['ap_materno']; ?></a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
        	<div class="col-md-10 offset-md-1">
        		<br><br>
        		<h2><center>Datos Personales</center></h2><br>
                <p style="text-align: justify;">Por favor, llene la información cuidadosamente. Para dudas y aclaraciones sobre la información y su llenado <!--<a href="#">consulte aquí.</a> O en su caso, -->acuda personalmente a la Coordinación de Sistemas de la FIME.</p>
        		<br><hr>
        		<form enctype="multipart/form-data" action="scripts/guardar_datos_personales.php?user=<?php echo($user)?>" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1"><b>Nueva contraseña:</b> <i>(Recomendado 8 caracteres, mayúsculas y minúsculas.)</i></label>
            <input type="password" class="form-control" name="nueva_clave" placeholder="" required="true" style="background-color: #e0f0ff;">
          </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nombre(s)</label>
				    <input type="text" class="form-control" name="nombre" placeholder="Roberto" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Apellido Paterno</label>
				    <input type="text" class="form-control" name="ap_paterno" placeholder="Pérez" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Apellido Materno</label>
				    <input type="text" class="form-control" name="ap_materno" placeholder="López" required="true">
				  </div>
                  <div class="form-group">
                   <label for="datepicker" class="control-label">Fecha de Nacimiento</label>
                   <div class="controls">
                       <input type="text" name="fecha_nacimiento" class="tuiker form-control" required>
                       <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                   </div>
               </div>
				  <div class="form-group">
				  <label for="exampleFormControlInput1">Sexo</label>
				  <select name="sexo" class="form-control custom-select" required>
            <option selected>Seleccione...</option>
					  <option value="Masculino">Masculino</option>
					  <option value="Femenino">Femenino</option>
				  </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nacionalidad</label>
				    <input type="text" class="form-control" name="nacionalidad" placeholder="Mexicana" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Ciudad de Nacimiento</label>
				    <input type="text" class="form-control" name="ciudad_nacimiento" placeholder="Monterrey" required="true">
				  </div>
				  <div class="form-group">
				  <label for="exampleFormControlInput1">Estado civil</label>
				  <select name="estado_civil" class="form-control custom-select" required>
            <option selected>Seleccione...</option>
					  <option value="soltero">Soltero/a</option>
					  <option value="casado">Casado/a</option>
					  <option value="divorciado">Divorciado/a</option>
				  </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Teléfono <em>(8 dígitos sin LADA)</em></label>
				    <input type="text" class="form-control" name="telefono" placeholder="80164072" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Teléfono móvil particular <em>(10 dígitos sin LADA)</em></label>
				    <input type="text" class="form-control" name="telefono_particular" placeholder="8117426670" required="true">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Correo electronico personal</label>
				    <input type="email" class="form-control" name="correo_personal" placeholder="alguien@gmail.com" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Calle de residencia</label>
				    <input type="text" class="form-control" name="calle_dom" placeholder="Golfo de México" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de residencia exterior</label>
				    <input type="text" class="form-control" name="numero_exterior_dom" placeholder="310">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de residencia interior</label>
				    <input type="text" class="form-control" name="numero_interior_dom" placeholder="205">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Colonia de residencia</label>
				    <input type="text" class="form-control" name="colonia_residencia" placeholder="Cumbres Segundo Sector" required="true">
				  </div>
				  <div class="form-group">
                 <label for="pais_residencia" required>País de residencia</label>
                 <select name="pais_residencia" class="form-control custom-select" required>
                   <option selected>Seleccione...</option>
                                                                            <option value="Afganistán">Afganistán</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Alemania">Alemania</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antártida">Antártida</option>
                                                                            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                                            <option value="Antillas Holandesas">Antillas Holandesas</option>
                                                                            <option value="Arabia Saudí">Arabia Saudí</option>
                                                                            <option value="Argelia">Argelia</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaiyán">Azerbaiyán</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrein">Bahrein</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Bélgica">Bélgica</option>
                                                                            <option value="Belice">Belice</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermudas">Bermudas</option>
                                                                            <option value="Bielorrusia">Bielorrusia</option>
                                                                            <option value="Birmania">Birmania</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Brasil">Brasil</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Bután">Bután</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Camboya">Camboya</option>
                                                                            <option value="Camerún">Camerún</option>
                                                                            <option value="Canadá">Canadá</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Chipre">Chipre</option>
                                                                            <option value="Ciudad del Vaticano (Santa Sede)">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comores">Comores</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, República Democrática del">Congo, República Democrática del</option>
                                                                            <option value="Corea">Corea</option>
                                                                            <option value="Corea del Norte">Corea del Norte</option>
                                                                            <option value="Costa de Marfíl">Costa de Marfíl</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Dinamarca">Dinamarca</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egipto">Egipto</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Eslovenia">Eslovenia</option>
                                                                            <option value="España">España</option>
                                                                            <option value="Estados Unidos">Estados Unidos</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Etiopía">Etiopía</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Filipinas">Filipinas</option>
                                                                            <option value="Finlandia">Finlandia</option>
                                                                            <option value="Francia">Francia</option>
                                                                            <option value="Gabón">Gabón</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Granada">Granada</option>
                                                                            <option value="Grecia">Grecia</option>
                                                                            <option value="Groenlandia">Groenlandia</option>
                                                                            <option value="Guadalupe">Guadalupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guayana">Guayana</option>
                                                                            <option value="Guayana Francesa">Guayana Francesa</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                            <option value="Haití">Haití</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hungría">Hungría</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Irak">Irak</option>
                                                                            <option value="Irán">Irán</option>
                                                                            <option value="Irlanda">Irlanda</option>
                                                                            <option value="Isla Bouvet">Isla Bouvet</option>
                                                                            <option value="Isla de Christmas">Isla de Christmas</option>
                                                                            <option value="Islandia">Islandia</option>
                                                                            <option value="Islas Caimán">Islas Caimán</option>
                                                                            <option value="Islas Cook">Islas Cook</option>
                                                                            <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                                                                            <option value="Islas Faroe">Islas Faroe</option>
                                                                            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                                                            <option value="Islas Malvinas">Islas Malvinas</option>
                                                                            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                                                            <option value="Islas Marshall">Islas Marshall</option>
                                                                            <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                                                                            <option value="Islas Palau">Islas Palau</option>
                                                                            <option value="Islas Salomón">Islas Salomón</option>
                                                                            <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="Islas Tokelau">Islas Tokelau</option>
                                                                            <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                                                                            <option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
                                                                            <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
                                                                            <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italia">Italia</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japón">Japón</option>
                                                                            <option value="Jordania">Jordania</option>
                                                                            <option value="Kazajistán">Kazajistán</option>
                                                                            <option value="Kenia">Kenia</option>
                                                                            <option value="Kirguizistán">Kirguizistán</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Laos">Laos</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Letonia">Letonia</option>
                                                                            <option value="Líbano">Líbano</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libia">Libia</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lituania">Lituania</option>
                                                                            <option value="Luxemburgo">Luxemburgo</option>
                                                                            <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malasia">Malasia</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Maldivas">Maldivas</option>
                                                                            <option value="Malí">Malí</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marruecos">Marruecos</option>
                                                                            <option value="Martinica">Martinica</option>
                                                                            <option value="Mauricio">Mauricio</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="México">México</option>
                                                                            <option value="Micronesia">Micronesia</option>
                                                                            <option value="Moldavia">Moldavia</option>
                                                                            <option value="Mónaco">Mónaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Níger">Níger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk">Norfolk</option>
                                                                            <option value="Noruega">Noruega</option>
                                                                            <option value="Nueva Caledonia">Nueva Caledonia</option>
                                                                            <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                                            <option value="Omán">Omán</option>
                                                                            <option value="Países Bajos">Países Bajos</option>
                                                                            <option value="Panamá">Panamá</option>
                                                                            <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                                                            <option value="Paquistán">Paquistán</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Perú">Perú</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Polinesia Francesa">Polinesia Francesa</option>
                                                                            <option value="Polonia">Polonia</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reino Unido">Reino Unido</option>
                                                                            <option value="República Centroafricana">República Centroafricana</option>
                                                                            <option value="República Checa">República Checa</option>
                                                                            <option value="República de Sudáfrica">República de Sudáfrica</option>
                                                                            <option value="República Dominicana">República Dominicana</option>
                                                                            <option value="República Eslovaca">República Eslovaca</option>
                                                                            <option value="Reunión">Reunión</option>
                                                                            <option value="Ruanda">Ruanda</option>
                                                                            <option value="Rumania">Rumania</option>
                                                                            <option value="Rusia">Rusia</option>
                                                                            <option value="Sahara Occidental">Sahara Occidental</option>
                                                                            <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="Samoa Americana">Samoa Americana</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                                                            <option value="Santa Helena">Santa Helena</option>
                                                                            <option value="Santa Lucía">Santa Lucía</option>
                                                                            <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leona">Sierra Leona</option>
                                                                            <option value="Singapur">Singapur</option>
                                                                            <option value="Siria">Siria</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                                                            <option value="Suazilandia">Suazilandia</option>
                                                                            <option value="Sudán">Sudán</option>
                                                                            <option value="Suecia">Suecia</option>
                                                                            <option value="Suiza">Suiza</option>
                                                                            <option value="Surinam">Surinam</option>
                                                                            <option value="Tailandia">Tailandia</option>
                                                                            <option value="Taiwán">Taiwán</option>
                                                                            <option value="Tanzania">Tanzania</option>
                                                                            <option value="Tayikistán">Tayikistán</option>
                                                                            <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                                                            <option value="Timor Oriental">Timor Oriental</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                                                            <option value="Túnez">Túnez</option>
                                                                            <option value="Turkmenistán">Turkmenistán</option>
                                                                            <option value="Turquía">Turquía</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Ucrania">Ucrania</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistán">Uzbekistán</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Vietnam">Vietnam</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabue">Zimbabue</option>
                 </select>
               </div>
				  													<div class="form-group">
                 <label for="estado_residencia">Estado de residencia</label>
                 <select name="estado_residencia" class="form-control custom-select" required>
                   <option selected>Seleccione...</option>
                   <option value="aguascalientes">Aguascalientes</option>
                   <option value="Baja California">Baja California</option>
                   <option value="Baja California Sur">Baja California Sur</option>
                   <option value="Campeche">Campeche</option>
                   <option value="Chiapas">Chiapas</option>
                   <option value="Chihuahua">Chihuahua</option>
                   <option value="coahuila de Zaragoza">Coahuila de Zaragoza</option>
                   <option value="Colima">Colima</option>
                   <option value="Durango">Durango</option>
                   <option value="Estado de México">Estado de México</option>
                   <option value="Guanajuato">Guanajuato</option>
                   <option value="Guerrero">Guerrero</option>
                   <option value="Hidalgo">Hidalgo</option>
                   <option value="Jalisco">Jalisco</option>
                   <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                   <option value="Morelos">Morelos</option>
                   <option value="Nayarit">Nayarit</option>
                   <option value="Nuevo León">Nuevo León</option>
                   <option value="Oaxaca">Oaxaca</option>
                   <option value="Puebla">Puebla</option>
                   <option value="Querétaro">Querétaro</option>
                   <option value="Quintana Roo">Quintana Roo</option>
                   <option value="San Luis Potosí">San Luis Potosí</option>
                   <option value="Sinaloa">Sinaloa</option>
                   <option value="Sonora">Sonora</option>
                   <option value="Tabasco">Tabasco</option>
                   <option value="Tamaulipas">Tamaulipas</option>
                   <option value="Tlaxcala">Tlaxcala</option>
                   <option value="Veracruz de Ignacio de la Llave">Veracruzde la Llave</option> 
                   <option value="Yucatán">Yucatán</option>
                   <option value="Zacatecas">Zacatecas</option>
                 </select>
               </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Ciudad de residencia</label>
				    <input type="text" class="form-control" name="ciudad_residencia" placeholder="San Pedro Garza García" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Código postal</label>
				    <input type="text" class="form-control" name="codigo_postal" placeholder="60908" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">IES de Adscripción</label>
				    <input type="text" class="form-control" name="ies_adscripcion" placeholder="Facultad de Ingeniería Mecánica y Eléctrica" required="true">
				  </div>


				  <br><hr><br>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Título Universitario</label>
				    <input type="text" class="form-control" name="titulo" placeholder="Ingeniero en Electrónica" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Clave Única de Registro de Población (CURP)</label>
				    <input type="text" class="form-control" name="curp" placeholder="LOPR670423HNLXXXXX" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Registro Federal del Contribuyente (RFC)</label>
				    <input type="text" class="form-control" name="rfc" placeholder="LOPR670423XXXXXX" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número de CVU (Currículum Vitae Único)</label>
				    <input type="text" class="form-control" name="cvu" placeholder="123456" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Identificador ORCID</label>
				    <input type="text" class="form-control" name="orcid" placeholder="123456" required="true">
				  </div>

				  <br>
                    <center><input class="btn btn-dark btn-lg" type="submit" value="Listo"></center>
                    <br>
				</form>
        	</div>
        </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "yy/mm/dd",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha_nacimiento').val(dateText);
            }
        });
</script>
	
</body>
</html>