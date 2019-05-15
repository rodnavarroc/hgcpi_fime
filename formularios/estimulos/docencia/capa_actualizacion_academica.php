																	<div class="modal-header">
                                                                        <h4 class="modal-title">Nueva capacitación y actualización académica</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/estimulos/agregar/docencia/produccion_academica_docencia_capa_actualizacion_academica" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="tipo_cap">Tipo:</label>
                                                                          <select id="tipo_cap" class="form-control custom-select" required>
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="Curso de actualización disciplinaria">Curso de actualización disciplinaria</option>
                                                                            <option value="Curso de actualización pedagógica">Curso de actualización pedagógica</option>
                                                                            <option value="Diplomado de actualizción disciplinaria">Diplomado de actualizción disciplinaria</option>
                                                                            <option value="Diplomado de actualización pedagógica">Diplomado de actualización pedagógica</option>
                                                                            <option value="Diplomado en formación básica de tutores">Diplomado en formación básica de tutores</option>
                                                                            <option value="Diplomado básico en docencia universitaria">Diplomado básico en docencia universitaria</option>
                                                                            <option value="Curso en área administrativa">Curso en área administrativa</option>
                                                                            <option value="Diplomado en área administrativa">Diplomado en área administrativa</option>

                                                                           </select>
                                                                        </div>
                                                                        
                                                                          <div class="form-group">
                                                                          <label for="descripcion" required>Descripción:</label>
                                                                          <input type="text" class="form-control inst_certi" id="descripcion" placeholder="" required>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha_inicio" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                     
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha fin:</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha_fin" class="tuiker form-control" required>
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                            
                                                                        <div class="form-group">
                                                                          <label for="nom_inst" required>Nombre de la institución:</label>
                                                                          <input type="text" class="form-control num_hrs" id="nom_inst" placeholder="" required>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                          <label for="num_hrs" required>Número de horas:</label>
                                                                          <input type="text" class="form-control num_hrs" id="num_hrs" placeholder="" required>
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