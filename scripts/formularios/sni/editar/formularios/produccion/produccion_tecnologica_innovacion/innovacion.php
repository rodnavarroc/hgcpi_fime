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
$sql="SELECT * FROM detalle_usuario_innovacion WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/sql/produccion/produccion_tecnologica_innovacion/innovacion.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="tip_innova_oslo" required>Tipo de innovación OSLO:</label>
                                                                          <input type="text" class="form-control tip_innova_oslo" name="tip_innova_oslo" placeholder="" required value="<?php echo $mostrar['innovacion_oslo']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="tip_innova" required>Tipo de innovación:</label>
                                                                          <input type="text" class="form-control tip_innova" name="tip_innova" placeholder="" required value="<?php echo $mostrar['tipo_innovacion']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="apli_innova" required>Aplicación de la innovación:</label>
                                                                          <input type="text" class="form-control apli_innova" name="apli_innova" placeholder="" required value="<?php echo $mostrar['aplicacion']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="pot_cobertura" required>Potencial de cobertura:</label>
                                                                          <input type="text" class="form-control pot_cobertura" name="pot_cobertura" placeholder="" required value="<?php echo $mostrar['potencial_cobertura']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="mecanismo_protec" required>Mecanismo de protección de propiedad intelectual:</label>
                                                                          <input type="text" class="form-control mecanismo_protec" name="mecanismo_protec" placeholder="" required value="<?php echo $mostrar['mecanismo_proteccion_propiedad_intelectual']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="ayuda_innova">¿Recibió ayuda del CONACYT?:</label>
                                                                          <select name="ayuda_innova" class="form-control custom-select" required>
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
                                                                          <label for="area_innova" required>Área de conocimiento:</label>
                                                                          <input type="text" class="form-control area_innova" name="area_innova" placeholder="" required value="<?php echo $mostrar['area_conocimiento_inn']?>">
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_innova" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_innova" name="campo_innova" placeholder="" required value="<?php echo $mostrar['campo_inn']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_innova" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_innova" name="disciplina_innova" placeholder="" required value="<?php echo $mostrar['disciplina_inn']?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_innova" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_innova" name="subdisciplina_innova" placeholder="" required value="<?php echo $mostrar['subdisciplina_inn']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="monto_anual" required>Monto de venta anuales:</label>
                                                                        <input type="text" class="form-control monto_anual" name="monto_anual" placeholder="" required value="<?php echo $mostrar['monto_venta_anuales']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="volumen_anual" required>Volumen de producciones anuales:</label>
                                                                        <input type="text" class="form-control volumen_anual" name="volumen_anual" placeholder="" required value="<?php echo $mostrar['volumen_prod_anuales']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="empleados_directos_anual" required>Número de empleados directos anuales:</label>
                                                                        <input type="text" class="form-control empleados_directos_anual" name="empleados_directos_anual" placeholder="" required value="<?php echo $mostrar['no_empleos_directos_anuales']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="empleados_indirectos_anual" required>Número de empleados indirectos anuales:</label>
                                                                        <input type="text" class="form-control empleados_indirectos_anual" name="empleados_indirectos_anual" placeholder="" required value="<?php echo $mostrar['no_empleos_indirectos_anuales']?>">
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