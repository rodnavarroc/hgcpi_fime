																	<div class="modal-header">
                                                                        <h4 class="modal-title">Dirección nueva</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
	                                                                    <form enctype="multipart/form-data" action="#" method="POST">
	                                                                    	 <div class="form-group">
	                                                                          <label for="issn">Tipo de dirección</label>
	                                                                          <input type="text" class="form-control" id="tipo_dir" required>
	                                                                        </div>	
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Título del proyecto dirigido</label>
	                                                                          <textarea class="form-control" id="titulo_proyecto" rows="3" required></textarea>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Nivel académico</label>
	                                                                          <input type="text" class="form-control" id="nivel_acad" required>
	                                                                        </div>	
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Grado académico</label>
	                                                                          <input type="text" class="form-control" id="grado_acad" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="issn">IES realiza gestión</label>
	                                                                          <input type="text" class="form-control" id="ies_realiza_gestion" required>
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
	                                                                          <label for="issn">Número de alumnos</label>
	                                                                          <input type="text" class="form-control" id="num_horas" required>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Estado de la dirección</label>
	                                                                          <select name="estado_direccion" id="estado_direccion" class="custom-select" required>
					                                                              <option value="Concluida" selected>Concluida</option>
					                                                              <option value="En proceso">En proceso</option>
					                                                          </select>
	                                                                        </div>
	                                                                        <div class="form-group">
	                                                                          <label for="issn">Considera C.V. de C.A.</label>
	                                                                          <select name="considera_cv_ca" id="considera_cv_ca" class="custom-select" required>
					                                                              <option value="Si" selected>Si</option>
					                                                              <option value="No">No</option>
					                                                          </select>
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