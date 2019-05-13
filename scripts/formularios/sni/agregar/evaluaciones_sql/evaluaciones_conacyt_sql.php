<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_fondo = $_POST["nom_fondo"];
$fecha_asignacion = $_POST["fecha_asignacion"];
$fecha_aceptacion = $_POST["fecha_aceptacion"];
$fecha_evaluacion = $_POST["fecha_evaluacion"];
$dictamen_conacyt = $_POST["dictamen_conacyt"];
$descripcion_conacyt = $_POST["descripcion_conacyt"];
$area_evaluaciones_conacyt = $_POST["area_evaluaciones_conacyt"];
$campo_evaluaciones_conacyt = $_POST["campo_evaluaciones_conacyt"];
$disciplina_evaluaciones_conacyt = $_POST["disciplina_evaluaciones_conacyt"];
$subdisciplina_evaluaciones_conacyt = $_POST["subdisciplina_evaluaciones_conacyt"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_evaluaciones_conacyt /* tabla de destino */
(nombre_del_fondo,fecha_asignacion,fecha_aceptacion,fecha_evaluacion,dictamen,descripcion,area_conocimiento_ev,campo_ev,disciplina_ev,subdisciplina_ev,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nom_fondo','$fecha_asignacion','$fecha_aceptacion','$fecha_evaluacion','$dictamen_conacyt','$descripcion_conacyt','$area_evaluaciones_conacyt','$campo_evaluaciones_conacyt','$disciplina_evaluaciones_conacyt','$subdisciplina_evaluaciones_conacyt','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>