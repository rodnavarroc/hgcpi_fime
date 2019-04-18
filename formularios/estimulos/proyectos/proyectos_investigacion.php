																	<div class="modal-header">
                                                                        <h4 class="modal-title">Proyecto de investigación nuevo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="#" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="">Título del proyecto</label>
	                                                                          <input type="text" class="form-control" id="titulo_proyecto" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de proyecto</label>
	                                                                          <input type="text" class="form-control" id="tipo_proyecto" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de participación</label>
	                                                                          <input type="text" class="form-control" id="tipo_participacion" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de inicio</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" id="fecha_inicio" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                            <label for="datepicker" class="control-label">Fecha de fin</label>
	                                                                            <div class="controls">
	                                                                                <input type="text" id="fecha_fin" class="tuiker form-control" required>
	                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Tipo de patrocinador</label>
	                                                                          <input type="text" class="form-control" id="tipo_patrocinador" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Nombre de patrocinador</label>
	                                                                          <input type="text" class="form-control" id="nombre_patrocinador" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Monto de apoyo</label>
	                                                                          <input type="text" class="form-control" id="monto_apoyo" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="">Investigadores participantes</label>
	                                                                          <textarea class="form-control" id="investigadores_participantes" rows="3" required></textarea>
	                                                                        </div>
	                                                                    	<br>
	                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
	                                                                        <br>
	                                                                    </form>
                                                                	</div>
<script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
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