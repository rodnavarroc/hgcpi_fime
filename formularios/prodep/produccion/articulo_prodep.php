 <div class="modal-header">
    <h4 class="modal-title">Nuevo artículo</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/produccion/articulo_prodep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Autores: <em>(Si existe más de una, separlos por ";")</em></label>
   <input type="text" class="form-control inst_certi" name="autores_articulo_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required>Título:</label>
   <input type="text" class="form-control inst_certi" name="título_articulo_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Estado actual:</label>
   <input type="text" class="form-control inst_certi" name="estado_articulo_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required>País:</label>
   <input type="text" class="form-control inst_certi" name="pais_articulo_prodep" placeholder="" required>
   </div>          

   <div class="form-group">
   <label for="descripcion" required>Nombre de la revista:</label>
   <input type="text" class="form-control inst_certi" name="revista_articulo_prodep" placeholder="" required>
   </div>   

   <div class="form-group">
   <label for="descripcion" required> Nombre de la editorial: </label>
   <input type="text" class="form-control inst_certi" name="editorial_articulo_prodep" placeholder="" required>
   </div>                                                               

<div class="form-group">
   <label for="descripcion" required> Volumen: </label>
   <input type="text" class="form-control inst_certi" name="volumen_articulo_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> ISSN: </label>
   <input type="text" class="form-control inst_certi" name="ISSN_articulo_prodep" placeholder="" required>
   </div>       

    <div class="form-group">
   <label for="descripcion" required>Año de publicación: </label>
   <input type="text" class="form-control inst_certi" name="año_articulo_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> Propósito: </label>
   <input type="text" class="form-control inst_certi" name="proposito_articulo_prodep" placeholder="" required>
   </div>  

<div class="form-group">
  <label for="cuerpo_articulo_prodep" required>Para considerar en el currículum de cuerpo académico:</label>
  <select name="cuerpo_articulo_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="Sí">Sí</option>
  <option value="No">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion">Miembros: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" name="miembros_articulos_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion">LGACs: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" name="LGAC_articulos_prodep"placeholder="">
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