 <div class="modal-header">
    <h4 class="modal-title">Nuevo libro</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/produccion/libro_prodep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Autores: <em>(Si existe más de una, separlas por ";")</em></label>
   <input type="text" class="form-control inst_certi" name="autores_libro_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Título: </label>
   <input type="text" class="form-control inst_certi" name="título_libro_prodep" placeholder="" required>
   </div>     

<div class="form-group">
    <label for="descripcion" required> Tipo de participación: </label>
   <input type="text" class="form-control inst_certi" name="participacion_libro_prodep" placeholder="" required>
   </div>                                                            

 <div class="form-group">
   <label for="descripcion" required>Estado actual:</label>
   <input type="text" class="form-control inst_certi" name="estado_libro_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> País: </label>
   <input type="text" class="form-control inst_certi" name="pais_libro_prodep" placeholder="" required>
   </div>          
   

   <div class="form-group">
   <label for="descripcion" required> Nombre de la editorial: </label>
   <input type="text" class="form-control inst_certi" name="editorial_libro_prodep" placeholder="" required>
   </div>                                                               

<div class="form-group">
   <label for="descripcion" required> Número de ediciones: </label>
   <input type="text" class="form-control inst_certi" name="ediciones_libro_prodep" placeholder="" required>
   </div> 

   <div class="form-group">
   <label for="descripcion" required> Número de ejemplares: </label>
   <input type="text" class="form-control inst_certi" name="ejemplares_libro_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> ISBN: </label>
   <input type="text" class="form-control inst_certi" name="isbn_libro_prodep" placeholder="" required>
   </div>       

    <div class="form-group">
   <label for="descripcion" required>Año de publicación: </label>
   <input type="text" class="form-control inst_certi" name="año_libro_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> Propósito: </label>
   <input type="text" class="form-control inst_certi" name="proposito_libro_prodep" placeholder="" required>
   </div>  

<div class="form-group">
  <label for="cuerpo_libro_prodep" required>Para considerar en el currículum de cuerpo académico:</label>
  <select name="cuerpo_libro_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="Sí">Sí</option>
  <option value="No">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion">Miembros: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" name="miembros_libros_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion">LGACs: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" name="LGAC_libros_prodep"placeholder="">
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