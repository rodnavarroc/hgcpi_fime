  																	<div class="modal-header">
                                                                        <h4 class="modal-title">Artículo nuevo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="#" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="tipo_gest_aca">Tipo Gestión Acad:</label>
                                                                          <select id="tipo_gest_aca" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="dimension_social ">Dimensión social</option>
                                                                            <option value="dimension_politico-institucional">Dimensión político-institucional</option>
                                                                            <option value="dimension_administrativa">Dimensión administrativa</option>
                                                                            <option value="dimension_tecnico-pedagogica">Dimensión técnico-pedagógica</option>
                                                                            <option value="dimension_directiva">Dimensión directiva</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="clasificacion" required>Clasificación</label>
                                                                          <select id="clasificacion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                <option value=""></option>    
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="evento">Evento:</label>
                                                                          <input type="text" class="form-control" id="evento" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_evento" required>Tipo de evento:</label>
                                                                          <select id="tipo_evento" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_participacion" required>Tipo de participación:</label>
                                                                          <select id="tipo_participacion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="tipo_alcance" required>Tipo Alcance:</label>
                                                                          <select id="tipo_alcance" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                <option value="local">Local</option>
                                                                                <option value="regional">Regional</option>
                                                                                <option value="estatal">Estatal</option>
                                                                                <option value="nacional">Nacional</option>
                                                                                <option value="internacional">Internacional</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="estado_gestion" required>Estado de la gestión:</label>
                                                                          <select id="estado_gestion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="ies_re_gestion" required>IES Realiza Gestión:</label>
                                                                          <select id="ies_re_gestion" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                                
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