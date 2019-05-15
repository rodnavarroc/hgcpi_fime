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
$sql="SELECT * FROM detalle_usuario_desarollos_tecnologicos WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/sql/produccion/produccion_tecnologica_innovacion/desarrollos_tecnologicos.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="nom_des" required>Nombre del desarrollo:</label>
                                                                          <input type="text" class="form-control nom_des" name="nom_des" placeholder="" required value="<?php echo $mostrar['nombre_desarrollo']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tipo_des" required>Tipo de desarrollo:</label>
                                                                          <input type="text" class="form-control tipo_des" name="tipo_des" placeholder="" required value="<?php echo $mostrar['tipo_desarrollo']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="doc_resp" required>Documento de respaldo:</label>
                                                                              <input type="file" name="adjunto" class="form-control doc_resp"placeholder="" accept=".pdf">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="obj_des" required>Objetivos de desarrollo:</label>
                                                                          <input type="text" class="form-control obj_des" name="obj_des" placeholder="" required value="<?php echo $mostrar['objetivos']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="resumen_des" required>Resumen de desarrollo:</label>
                                                                          <input type="text" class="form-control resumen_des" name="resumen_des" placeholder="" required value="<?php echo $mostrar['resumen']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="ayuda_destec">¿Recibió ayuda del CONACYT?:</label>
                                                                          <select name="ayuda_destec" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['recibio_apoyo_conacyt']?>">"<?php echo $mostrar['recibio_apoyo_conacyt']?>"</option>
                                                                            <option value="Sí">Sí</option>
                                                                            <option value="No">No</option>
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="sec_scian" required>Sector industrial del SCIAN:</label>
                                                                          <input type="text" class="form-control sec_scian" name="sec_scian" placeholder="" required value="<?php echo $mostrar['sector_industrial_scian']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="subrama_scian" required>Subrama del SCIAN:</label>
                                                                          <input type="text" class="form-control subrama_scian" name="subrama_scian" placeholder="" required value="<?php echo $mostrar['subrama_scian']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="subsec_scian" required>Subsector del SCIAN:</label>
                                                                          <input type="text" class="form-control subsec_scian" name="subsec_scian" placeholder="" required value="<?php echo $mostrar['subsector_scian']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="rama_scian" required>Rama del SCIAN:</label>
                                                                          <input type="text" class="form-control rama_scian" name="rama_scian" placeholder="" required value="<?php echo $mostrar['rama_scian']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="clase_scian" required>Clase del SCIAN:</label>
                                                                          <input type="text" class="form-control clase_scian" name="clase_scian" placeholder="" required value="<?php echo $mostrar['clase_scian']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="sec_ocde" required>Sector industrial del OCDE:</label>
                                                                          <input type="text" class="form-control sec_ocde" name="sec_ocde" placeholder="" required value="<?php echo $mostrar['sector_industrial_ocde']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="div_ocde" required>División del OCDE:</label>
                                                                          <input type="text" class="form-control div_ocde" name="div_ocde" placeholder="" required value="<?php echo $mostrar['division_ocde']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="grupo_ocde" required>Grupo del OCDE:</label>
                                                                          <input type="text" class="form-control grupo_ocde" name="grupo_ocde" placeholder="" required value="<?php echo $mostrar['grupo_ocde']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="clase_ocde" required>Clase del OCDE:</label>
                                                                          <input type="text" class="form-control clase_ocde" name="clase_ocde" placeholder="" required value="<?php echo $mostrar['clase_ocde']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_des" required>Área de conocimiento:</label>
                                                                          <input type="text" class="form-control area_des" name="area_des" placeholder="" required value="<?php echo $mostrar['area_conocimiento_desarrollo']?>">
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_des" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_des" name="campo_des" placeholder="" required value="<?php echo $mostrar['campo_conocimiento_desarrollo']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_des" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_des" name="disciplina_des" placeholder="" required value="<?php echo $mostrar['disciplina_desarrollo']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_des" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_des" name="subdisciplina_des" placeholder="" required value="<?php echo $mostrar['subdisciplina_desarrollo']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="gen_valor" required>Generación de valor y/o impacto para el beneficiario:</label>
                                                                        <input type="text" class="form-control gen_valor" name="gen_valor" placeholder="" required value="<?php echo $mostrar['generacion_de_valor']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="form_recur" required>Formación de recursos u otros resultados:</label>
                                                                        <input type="text" class="form-control form_recur" name="form_recur" placeholder="" required value="<?php echo $mostrar['formacion_de_recursos']?>">
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