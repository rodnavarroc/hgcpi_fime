<?php 
 
$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident']; 
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE id='$ident' AND usuario_idusuario='$idusuario'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>  
																	<div class="modal-header">
                                                                        <h4 class="modal-title">Editar registro</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/premios_distinciones_editar.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="tipo_reconocimiento" required>Tipo de distinción o reconocimiento:</label>
                                                                          <input type="text" class="form-control tipo_reconocimiento" name="tipo_reconocimiento" placeholder="" value="<?php echo $mostrar['tipo_distincion'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="nivel_prem_dist" required>Nivel:</label>
                                                                          <input type="text" class="form-control nivel_prem_dist" name="nivel_prem_dist" placeholder="" value="<?php echo $mostrar['nivel'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="nom_prem_dist" required>Nombre de las distinción:</label>
                                                                          <input type="text" class="form-control nom_prem_dist" name="nom_prem_dist" placeholder="" value="<?php echo $mostrar['nombre_distincion'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="inst_otorgo_premio" required>Institución que otorgó el premio o distinción:</label>
                                                                          <input type="text" class="form-control inst_otorgo_premio" name="inst_otorgo_premio" placeholder="" value="<?php echo $mostrar['institucion_que_otorga'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="inst_otorga_no_considera" required>Institución otorgante no considerada:</label>
                                                                          <input type="text" class="form-control inst_otorga_no_considera" name="inst_otorga_no_considera" placeholder="" value="<?php echo $mostrar['institucion_otorgante_no_considerada'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tip_inst_prem_dist">Tipo de institución:</label>
                                                                          <select name="tip_inst_prem_dist" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['tipo_institucion']?>">"<?php echo $mostrar['tipo_institucion']?>"</option>  
                                                                            <option value="Nacional">Nacional</option>
                                                                            <option value="Extranjera">Extranjera</option>
                                                                           
                                                                             </select>
                                                                    </div>

                                                                    
                                                                    <div class="form-group">
                                                                          <label for="pub_priv_prem_dist">Pública / Privada:</label>
                                                                          <select name="pub_priv_prem_dist" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['institucion_publica_privada']?>">"<?php echo $mostrar['institucion_publica_privada']?>"</option>  
                                                                            <option value="Pública">Pública</option>
                                                                            <option value="Privada">Privada</option>
                                                                           
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha" value="<?php echo $mostrar['fecha'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="motivo_premio" required>Motivo:</label>
                                                                          <input type="text" class="form-control motivo_premio" name="motivo_premio" placeholder="" value="<?php echo $mostrar['motivo'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="pais_inst_prem_dist">País donde reside la institución:</label>
                                                                          <select name="pais_inst_prem_dist" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['pais_institucion']?>">"<?php echo $mostrar['pais_institucion']?>"</option>  
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
                                                                          <label for="ano_prem_dist">Año:</label>
                                                                          <select name="ano_prem_dist" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['ano']?>">"<?php echo $mostrar['ano']?>"</option>  
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1960">1960</option>
                                                                             </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="monto_mensual" required>Monto mensual:</label>
                                                                          <input type="text" class="form-control monto_mensual" name="monto_mensual" placeholder="" value="<?php echo $mostrar['monto_mensual'] ?>" required>
                                                                    </div>

                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar cambios"></center>
                                                                        <br>
                                                                    </form>
                                                                    </div>
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
                $('#fecha').val(dateText);
            }
        });
</script>