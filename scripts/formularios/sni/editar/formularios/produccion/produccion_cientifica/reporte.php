<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_reportes_tecnicos WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>    																<div class="modal-header">
                                                                        <h4 class="modal-title">Editar reporte técnico</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/sql/produccion/produccion_cientifica/reporte.php?ident=<?php echo($ident)?>" method="POST">
                                                                    
                                                                    <div class="form-group">
                                                                          <label for="insti_presenta" required>Institución a la que se presenta el reporte:</label>
                                                                          <input type="text" class="form-control insti_presenta" name="insti_presenta" placeholder="" required value="<?php echo $mostrar['institucion']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de publicación:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_public" class="tuiker form-control" required value="<?php echo $mostrar['fecha_publicacion']?>">
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="num_pag" required>Número de páginas:</label>
                                                                          <input type="text" class="form-control num_pag" name="num_pag" placeholder="" required value="<?php echo $mostrar['numero_paginas']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="origen_reptec" required>Origen del reporte técnico:</label>
                                                                          <input type="text" class="form-control origen_reptec" name="origen_reptec" placeholder="" required value="<?php echo $mostrar['origen_reporte']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="descripcion" required>Descripción:</label>
                                                                          <input type="text" class="form-control descripcion" name="descripcion" placeholder="" required value="<?php echo $mostrar['descripcion']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="objetivos" required>Objetivos:</label>
                                                                          <input type="text" class="form-control objetivos" name="objetivos" placeholder="" required value="<?php echo $mostrar['objetivos']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="palab_clave" required>Palabras clave:</label>
                                                                          <input type="text" class="form-control palab_clave" name="palab_clave" placeholder="" required value="<?php echo $mostrar['palabras_clave']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="ayuda_reptec">¿Recibió ayuda del CONACYT?:</label>
                                                                          <select name="ayuda_reptec" class="form-control custom-select" required>
                                                                          <option value="<?php echo $mostrar['recibio_apoyo_conacyt']?>">"<?php echo $mostrar['recibio_apoyo_conacyt']?>"</option>
                                                                            <option value="Sí">Sí</option>
                                                                            <option value="No">No</option>
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_reptec" required>Área del reporte técnico:</label>
                                                                          <input type="text" class="form-control area_reptec" name="area_reptec" placeholder="" required value="<?php echo $mostrar['area_conocimiento_reporte']?>">
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_reptec" required>Campo del reporte técnico:</label>
                                                                            <input type="text" class="form-control campo_reptec" name="campo_reptec" placeholder="" required value="<?php echo $mostrar['campo_reporte']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_reptec" required>Disciplina del reporte técnico:</label>
                                                                            <input type="text" class="form-control disciplina_reptec" name="disciplina_reptec" placeholder="" required value="<?php echo $mostrar['disciplina_reporte']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_reptec" required>Subdisciplina del reporte técnico:</label>
                                                                            <input type="text" class="form-control subdisciplina_reptec" name="subdisciplina_reptec" placeholder="" required value="<?php echo $mostrar['subdisciplina_reporte']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idthomson_reptec" required>Researcher ID Thomson:</label>
                                                                            <input type="text" class="form-control idthomson_reptec" name="idthomson_reptec" placeholder="" required value="<?php echo $mostrar['researcher_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idarxiv_reptec" required>arXiv ID:</label>
                                                                            <input type="text" class="form-control idarxiv_reptec" name="idarxiv_reptec" placeholder="" required value="<?php echo $mostrar['arxiv_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idpubmed_reptec" required>PubMed ID:</label>
                                                                            <input type="text" class="form-control idpubmed_reptec" name="idpubmed_reptec" placeholder="" required value="<?php echo $mostrar['pubmed_id_autor']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idopen_reptec" required>Open ID:</label>
                                                                            <input type="text" class="form-control idopen_reptec" name="idopen_reptec" placeholder="" required value="<?php echo $mostrar['open_id_autor']?>">
                                                                    </div>



                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar Cambios"></center>
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