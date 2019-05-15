																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nuevo servicio</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/tutorias/produccion_academica_tutorias_servicios.php" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="">Servicio prestado:</label>
	                                                                          <input type="text" class="form-control" name="servicio_prestado" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de servicio:</label>
	                                                                          <input type="text" class="form-control" name="tipo_servicio" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Institución solicitante:</label>
	                                                                          <input type="text" class="form-control" name="institucion_solicitante" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de servicio:</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" name="fecha_servicio" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                    	<br>
	                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
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