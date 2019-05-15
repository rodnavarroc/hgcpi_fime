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
$sql="SELECT * FROM detalle_usuario_produccion_capitulos WHERE id='$ident' AND usuario_idusuario='$idusuario'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>      															<div class="modal-header">
                                                                        <h4 class="modal-title">Editar registro</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/sql/produccion/produccion_cientifica/capitulo.php?ident=<?php echo($ident)?>" method="POST">



                                                                    <div class="form-group">
                                                                          <label for="isbn_cap" required>ISBN:</label>
                                                                          <input type="text" class="form-control isbn_cap" name="isbn_cap" placeholder="" required value="<?php echo $mostrar['isbn']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="titulo_cap" required>Título del libro:</label>
                                                                          <input type="text" class="form-control titulo_cap" name="titulo_lib" placeholder="" required value="<?php echo $mostrar['titulo']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="editorial_cap" required>Editorial:</label>
                                                                          <input type="text" class="form-control editorial_cap" name="editorial_cap" placeholder="" required value="<?php echo $mostrar['editorial']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="edicion_cap" required>Número de edición:</label>
                                                                          <input type="text" class="form-control edicion_cap" name="edicion_cap" placeholder="" required value="<?php echo $mostrar['numero_edicion']?>">
                                                                    </div>


                                                                    <div class="form-group">
                                                                          <label for="ano_edic_cap">Año de edición:</label>
                                                                          <select name="ano_edic_cap" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['ano_edicion']?>">"<?php echo $mostrar['ano_edicion']?>"</option>
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
                                                                          <label for="titulo_cap" required>Título del capítulo:</label>
                                                                          <input type="text" class="form-control titulo_cap" name="titulo_cap" placeholder="" required value="<?php echo $mostrar['titulo']?>">
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                          <label for="num_cap" required>Número de capítulo:</label>
                                                                          <input type="text" class="form-control num_cap" name="num_cap" placeholder="" required value="<?php echo $mostrar['numero_capitulo']?>">
                                                                    </div>


                                                                    <div class="form-group">
                                                                          <label for="pag_ini_cap" required>De la página:</label>
                                                                          <input type="text" class="form-control pag_ini_cap" name="pag_ini_cap" placeholder="" required value="<?php echo $mostrar['de_pagina']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="pag_fin_cap" required>A la página:</label>
                                                                          <input type="text" class="form-control pag_fin_cap" name="pag_fin_cap" placeholder="" required value="<?php echo $mostrar['a_pagina']?>">
                                                                    </div>


                                                                    <div class="form-group">
                                                                          <label for="resumen_cap" required>Resumen:</label>
                                                                          <input type="text" class="form-control resumen_cap" name="resumen_cap" placeholder="" required value="<?php echo $mostrar['resumen']?>">
                                                                         </div>

                                                                    <div class="form-group">
                                                                          <label for="area_cap" required>Área del capítulo:</label>
                                                                          <input type="text" class="form-control area_cap" name="area_cap" placeholder="" required value="<?php echo $mostrar['area_conocimiento_cap']?>">
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_cap" required>Campo del capítulo:</label>
                                                                            <input type="text" class="form-control campo_cap" name="campo_cap" placeholder="" required value="<?php echo $mostrar['campo_cap']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_cap" required>Disciplina del capítulo:</label>
                                                                            <input type="text" class="form-control disciplina_cap" name="disciplina_cap" placeholder="" required value="<?php echo $mostrar['disciplina_cap']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_cap" required>Subdisciplina del capítulo:</label>
                                                                            <input type="text" class="form-control subdisciplina_cap" name="subdisciplina_cap" placeholder="" required value="<?php echo $mostrar['subdisciplina_cap']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idthomson_cap" required>Researcher ID Thomson:</label>
                                                                            <input type="text" class="form-control idthomson_cap" name="idthomson_cap" placeholder="" required value="<?php echo $mostrar['researcher_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idarxiv_cap" required>arXiv ID:</label>
                                                                            <input type="text" class="form-control idarxiv_cap" name="idarxiv_cap" placeholder="" required value="<?php echo $mostrar['arxiv_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idpubmed_cap" required>PubMed ID:</label>
                                                                            <input type="text" class="form-control idpubmed" name="idpubmed_cap" placeholder="" required value="<?php echo $mostrar['pubmed_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idopen_cap" required>Open ID:</label>
                                                                            <input type="text" class="form-control idopen_cap" name="idopen_cap" placeholder="" required value="<?php echo $mostrar['open_id_autor']?>">
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