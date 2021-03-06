
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
$sql="SELECT * FROM detalle_usuario_tutoria WHERE id='$ident' AND usuario_idusuario='$idusuario'";
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
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/docencia/tutoria_individual_prodep.php?ident=<?php echo($ident)?>" method="POST">
                                                                      
                                                                        
   

<div class="form-group">
    
   <label for="descripcion" required> Nivel:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nivel_academico']?>"  name="nivel_academico" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Programa educativo:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['programa_educativo']?>"  name="programa_educativo" placeholder="" required>
   </div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" name="fecha_inicio" value="<?php echo $mostrar['fecha_de_inicio']?>" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>                                                      
                                                   

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" name="fecha_fin" value="<?php echo $mostrar['fecha_de_fin']?>" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>                                                                

<div class="form-group">
   <label for="descripcion">Tipo de tutelaje: <em>(El campo puede quedarse vacío)</em></label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['tipo_de_tutelaje']?>"  name="tipo_tutelaje" placeholder="">
   </div>

<div class="form-group">
   <label for="descripcion" required> Estado de tutelaje: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['estado_tutoria']?>"  name="estado_tutoria_individual_prodep" placeholder="" required>
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