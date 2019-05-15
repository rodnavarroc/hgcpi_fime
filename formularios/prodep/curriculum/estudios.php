<div class="modal-header">
    <h4 class="modal-title">Nuevo estudio realizado</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/curriculum/estudios.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Nivel de Estudios:</label>
   <input type="text" class="form-control inst_certi" name="nivel_estudios" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required>Estudios en:</label>
   <input type="text" class="form-control inst_certi" name="estudios_en" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Área -> Diciplina:</label>
   <input type="text" class="form-control inst_certi" name="area" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required>Institución otorgante:</label>
   <input type="text" class="form-control inst_certi" name="institucion_otorgante" placeholder="" required>
   </div>                                                           



<div class="form-group">
   <label for="descripcion" required>País:</label>
   <input type="text" class="form-control inst_certi" name="pais_estudios" placeholder="" required>
   </div>    

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha inicial de estudios:</label>
   <div class="controls">
   <input type="text" name="fecha_ini_estudios" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
                                                            

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha final de estudios:</label>
   <div class="controls">
   <input type="text" name="fecha_fin_estudios" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
              

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha obtención del título:</label>
   <div class="controls">
   <input type="text" name="fecha_titulo" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
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