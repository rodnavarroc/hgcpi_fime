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
$sql="SELECT * FROM detalle_usuario_gestion_academica WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
    <form enctype="multipart/form-data"  action="scripts/formularios/prodep/editar/docencia/gestion_prodep.php?ident=<?php echo($ident)?>" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Tipo de gestión:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['tipo_gestion']?>" name="tipo_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Cargo dentro de la comisión o cuerpo colegiado: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['cargo_comision']?>" name="cargo_gestion_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Función encomendada:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['funcion_encomendada']?>" name="funcion_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required>Órgano colegiado al que fue presentado: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['organo_colegiado']?>" name="organo_gestion_prodep" placeholder="" required>
   </div>                                                           



<div class="form-group">
  <label for="aprobado_gestion_prodep" required>¿Aprobado?:</label>
  <select name="aprobado_gestion_prodep" class="form-control custom-select" required>
  <option value="<?php echo $mostrar['aprobado']?>">"<?php echo $mostrar['aprobado']?>"</option>
   <option value="Sí">Sí</option>
  <option value="No">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" >Resultados obtenidos: <em>(El campo puede quedarse vacío)</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['resultados_obtenidos']?>" name="resultados_gestion_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" >Estado: <em>(El campo puede quedarse vacío)</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['estado_gestion']?>" name="estado_gestion_prodep"placeholder="">
   </div>
<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_inicio']?>" name="fecha_ini_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_fin']?>" name="fecha_fin_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha del último informe presentado:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_ultimo_informe']?>" name="fecha_ultimo_informe_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="descripcion" required> Horas dedicadas a la semana a la gestión: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['horas_dedicadas_semana']?>" name="horas_semana_gestion_prodep"placeholder="" required>
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