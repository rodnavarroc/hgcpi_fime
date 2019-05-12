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
$sql="SELECT * FROM detalle_usuario_evaluaciones_conacyt WHERE id='$ident' AND usuario_idusuario='1815906'";
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
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/evaluaciones_conacyt_editar.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="nom_fondo" required>Nombre del fondo:</label>
                                                                          <input type="text" class="form-control nom_fondo" name="nom_fondo" placeholder="" value="<?php echo $mostrar['nombre_del_fondo'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="dictamen_conacyt" required>Dictamen:</label>
                                                                          <input type="text" class="form-control dictamen_conacyt" name="dictamen_conacyt" placeholder="" value="<?php echo $mostrar['dictamen'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="descripcion_conacyt" required>Descripción:</label>
                                                                          <input type="text" class="form-control descripcion_conacyt" name="descripcion_conacyt" placeholder="" value="<?php echo $mostrar['descripcion'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de asignación:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_asignacion" value="<?php echo $mostrar['fecha_asignacion'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>
                                                                     
                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de aceptación:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_aceptacion" value="<?php echo $mostrar['fecha_aceptacion'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de evaluación:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_evaluacion" value="<?php echo $mostrar['fecha_evaluacion'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_evaluaciones_conacyt" required>Área:</label>
                                                                          <input type="text" class="form-control area_evaluaciones_conacyt" name="area_evaluaciones_conacyt" placeholder="" value="<?php echo $mostrar['area_conocimiento_ev'] ?>" required>
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_evaluaciones_conacyt" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_evaluaciones_conacyt" name="campo_evaluaciones_conacyt" placeholder="" value="<?php echo $mostrar['campo_ev'] ?>" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_evaluaciones_conacyt" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_evaluaciones_conacyt" name="disciplina_evaluaciones_conacyt" placeholder="" value="<?php echo $mostrar['disciplina_ev'] ?>" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_evaluaciones_conacyt" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_evaluaciones_conacyt" name="subdisciplina_evaluaciones_conacyt" placeholder="" value="<?php echo $mostrar['subdisciplina_ev'] ?>" required>
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