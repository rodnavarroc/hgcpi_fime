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
$sql="SELECT * FROM detalle_usuario_proyectos_investigacion WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/produccion/proyectos_investigacion_prodep.php?ident=<?php echo($ident)?>" method="POST">
                                                                      


<div class="form-group">
    
   <label for="descripcion" required> Título: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['titulo']?>" name="título_proyecto_investigacion_prodep" placeholder="" required>
   </div>     

<div class="form-group">
    <label for="descripcion" required> Nombre del patrocinador: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_patrocinador']?>" name="patrocinador_proyecto_investigacion_prodep" placeholder="" required>
   </div>                  

   <div class="form-group">
   <label for="descripcion">Alumnos participantes: <em>(Si existe más de una, separlas por ";" y el campo puede quedarse vacío)</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_alumnos_participantes']?>" name="alumnos_proyecto_investigacion_prodep" placeholder="">
   </div>                                          

 <div class="form-group">
   <label for="descripcion" required>Actividades realizadas:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['actividades_realizadas']?>" name="actividades_proyecto_investigacion_prodep" placeholder="" required>
   </div>



<div class="form-group">
  <label for="cuerpo_proyecto_investigacion_prodep" required>Para considerar en el currículum de cuerpo académico:</label>
  <select name="cuerpo_proyecto_investigacion_prodep" class="form-control custom-select" required>
  <option value="<?php echo $mostrar['considerar_curriculum']?>">"<?php echo $mostrar['considerar_curriculum']?>"</option>
  <option value="Sí">Sí</option>
  <option value="No">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" >Miembros: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['miembros']?>" name="miembros_proyecto_investigacions_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" >LGACs: <em>(En caso de no existir se escribe "0")</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['lgacs']?>" name="LGAC_proyecto_investigacion_prodep"placeholder="">
   </div>



   <div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_inicio']?>" name="fecha_inicio" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_fin']?>" name="fecha_fin" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

   <div class="form-group">
   <label for="descripcion" required> Tipo de patrocinador: </label>
   <input type="text" class="form-control inst_certi"value="<?php echo $mostrar['tipo_patrocinador']?>"  name="tipo_patrocinador_proyecto_investigacion_prodep" placeholder="" required>
   </div>  


    <div class="form-group">
   <label for="descripcion" required>Investigadores participantes: <em>(Si existe más de una, separlos por ";")</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['investigadores_participantes']?>" name="investigadores_proyecto_investigacion_prodep" placeholder="" required>
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