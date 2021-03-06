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
$sql="SELECT * FROM detalle_usuario_evaluaciones_no_conacyt WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/evaluaciones_no_conacyt_editar.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="nom_inst" required>Nombre de la institución:</label>
                                                                          <input type="text" class="form-control nom_inst" name="nom_inst" placeholder="" value="<?php echo $mostrar['nombre_institucion'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_inicio" value="<?php echo $mostrar['fecha_inicio'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_fin" value="<?php echo $mostrar['fecha_fin'] ?>" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="cargo_no_conacyt" required>Cargo desempeñado:</label>
                                                                          <input type="text" class="form-control cargo_no_conacyt" name="cargo_no_conacyt" placeholder="" value="<?php echo $mostrar['cargo_desempenado'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                          <label for="evaluacion_no_conacyt" required>Tipo de evaluación:</label>
                                                                          <input type="text" class="form-control evaluacion_no_conacyt" name="evaluacion_no_conacyt" placeholder="" value="<?php echo $mostrar['tipo_evaluacion'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                          <label for="producto_no_conacyt" required>Producto evaluado:</label>
                                                                          <input type="text" class="form-control producto_no_conacyt" name="producto_no_conacyt" placeholder="" value="<?php echo $mostrar['producto_evaluado'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                          <label for="nom_producto_no_conacyt" required>Nombre del producto evaluado:</label>
                                                                          <input type="text" class="form-control nom_producto_no_conacyt" name="nom_producto_no_conacyt" placeholder="" value="<?php echo $mostrar['nombre_producto_evaluado'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="dictamen_no_conacyt" required>Dictamen:</label>
                                                                          <input type="text" class="form-control dictamen_no_conacyt" name="dictamen_no_conacyt" placeholder="" value="<?php echo $mostrar['dictamen'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="descripcion_act" required>Descripción de la actividad:</label>
                                                                          <input type="text" class="form-control descripcion_act" name="descripcion_act" placeholder="" value="<?php echo $mostrar['descripcion_actividad'] ?>" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area_evaluaciones_no_conacyt" required>Área:</label>
                                                                          <input type="text" class="form-control area_evaluaciones_no_conacyt" name="area_evaluaciones_no_conacyt" placeholder="" value="<?php echo $mostrar['area_conocimiento_ev_no'] ?>" required>
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_evaluaciones_no_conacyt" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_evaluaciones_no_conacyt" name="campo_evaluaciones_no_conacyt" placeholder="" value="<?php echo $mostrar['campo_ev_no'] ?>" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_evaluaciones_no_conacyt" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_evaluaciones_no_conacyt" name="disciplina_evaluaciones_no_conacyt" placeholder="" value="<?php echo $mostrar['disciplina_ev_no'] ?>" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_evaluaciones_no_conacyt" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_evaluaciones_no_conacyt" name="subdisciplina_evaluaciones_no_conacyt" placeholder="" value="<?php echo $mostrar['subdisciplina_ev_no'] ?>" required>
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