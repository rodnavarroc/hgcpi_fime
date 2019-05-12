<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_experiencia_laboral WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>                                          												<div class="modal-header">
                                                                        <h4 class="modal-title">Editar experiencia laboral</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form enctype="multipart/form-data" action="scripts/formularios/sni/editar/sql/trayectoria_profesional/experiencia_laboral.php?ident=<?php echo($ident)?>" method="POST">

                                                                    <div class="form-group">
                                                                          <label for="empleo_act">¿Es su empleo actual?:</label>
                                                                          <select name="empleo_act" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['empleo_actual']?>">"<?php echo $mostrar['empleo_actual']?>"</option>
                                                                            <option value="Sí">Sí</option>
                                                                            <option value="No">No</option>
                                                                             </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="puesto">Puesto:</label>
                                                                          <select name="puesto" class="form-control custom-select" required>
                                                                            <option value="<?php echo $mostrar['puesto']?>">"<?php echo $mostrar['puesto']?>"</option>
                                                                            <option value="Catedrático CONACYT">Catedrático CONACYT</option>
                                                                            <option value="Investigador">Investigador</option>
                                                                            <option value="Otro">Otro</option>
                                                                            </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="institucion" required>Institución:</label>
                                                                          <input type="text" class="form-control institucion" name="institucion" placeholder="" required value="<?php echo $mostrar['institucion']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha de inicio:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="fecha_inicio" class="tuiker form-control" required value="<?php echo $mostrar['fecha_inicio']?>">
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="logros" required>Logros:</label>
                                                                          <input type="text" class="form-control logros" name="logros" placeholder="" required value="<?php echo $mostrar['logros']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="area" required>Área del puesto:</label>
                                                                          <input type="text" class="form-control area" name="area" placeholder="" required value="<?php echo $mostrar['area_conocimiento_puesto']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="campo" required>Campo del puesto:</label>
                                                                          <input type="text" class="form-control campo" name="campo" placeholder="" required value="<?php echo $mostrar['campo_puesto']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="disciplina" required>Disciplina del puesto:</label>
                                                                          <input type="text" class="form-control disciplina" name="disciplina" placeholder="" required value="<?php echo $mostrar['disciplina_puesto']?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                          <label for="subdisciplina" required>Subdisciplina del puesto:</label>
                                                                          <input type="text" class="form-control subdisciplina" name="subdisciplina" placeholder="" required value="<?php echo $mostrar['subdisciplina_puesto']?>">
                                                                    </div>

                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Guardar Cambios"></center>
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