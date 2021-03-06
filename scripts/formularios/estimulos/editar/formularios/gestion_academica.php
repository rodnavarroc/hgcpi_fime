  																	
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
$sql="SELECT * FROM detalle_usuario_gestion_academica  WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/editar/gestion_academica.php?ident=<?php echo($ident)?>" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="tipo_gestion">Tipo de gestión:</label>
	                                                                          <input type="text" class="form-control" name="tipo_gestion" required value="<?php echo $mostrar['tipo_gestion'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="evento">Evento:</label>
	                                                                          <input type="text" class="form-control" name="evento" required value="<?php echo $mostrar['evento'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="tipo_evento">Tipo de evento:</label>
	                                                                          <input type="text" class="form-control" name="tipo_evento" required value="<?php echo $mostrar['tipo_evento'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="tipo_participacion">Tipo de participación:</label>
	                                                                          <input type="text" class="form-control" name="tipo_participacion" required value="<?php echo $mostrar['tipo_participacion'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="tipo_alcance">Tipo de alcance:</label>
	                                                                          <input type="text" class="form-control" name="tipo_alcance" required value="<?php echo $mostrar['tipo_alcance'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="ies_realiza_gestion">IES realiza gestión:</label>
	                                                                          <input type="text" class="form-control" name="ies_realiza_gestion" required value="<?php echo $mostrar['ies_realiza_gestion'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de inicio:</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required value="<?php echo $mostrar['fecha_inicio'] ?>">
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de fin:</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_fin" class="tuiker form-control" required value="<?php echo $mostrar['fecha_fin'] ?>">
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="estado_gestion">Estado gestión:</label>
	                                                                          <input type="text" class="form-control" name="estado_gestion" required value="<?php echo $mostrar['estado_gestion'] ?>">
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="calificacion">Calificación:</label>
	                                                                          <input type="text" class="form-control" name="calificacion" required value="<?php echo $mostrar['calificacion'] ?>">
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
</script>