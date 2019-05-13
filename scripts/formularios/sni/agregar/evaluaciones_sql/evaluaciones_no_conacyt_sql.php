<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$evaluacion_no_conacyt = $_POST["evaluacion_no_conacyt"];
$nom_inst = $_POST["nom_inst"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$cargo_no_conacyt = $_POST["cargo_no_conacyt"];
$producto_no_conacyt = $_POST["producto_no_conacyt"];
$nom_producto_no_conacyt = $_POST["nom_producto_no_conacyt"];
$dictamen_no_conacyt = $_POST["dictamen_no_conacyt"];
$descripcion_act = $_POST["descripcion_act"];
$area_evaluaciones_no_conacyt = $_POST["area_evaluaciones_no_conacyt"];
$campo_evaluaciones_no_conacyt = $_POST["campo_evaluaciones_no_conacyt"];
$disciplina_evaluaciones_no_conacyt = $_POST["disciplina_evaluaciones_no_conacyt"];
$subdisciplina_evaluaciones_no_conacyt = $_POST["subdisciplina_evaluaciones_no_conacyt"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_evaluaciones_no_conacyt /* tabla de destino */
(tipo_evaluacion,nombre_institucion,fecha_inicio,fecha_fin,cargo_desempenado,producto_evaluado,nombre_producto_evaluado,dictamen,descripcion_actividad,area_conocimiento_ev_no,campo_ev_no,disciplina_ev_no,subdisciplina_ev_no,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$evaluacion_no_conacyt','$nom_inst','$fecha_inicio','$fecha_fin','$cargo_no_conacyt','$producto_no_conacyt','$nom_producto_no_conacyt','$dictamen_no_conacyt','$descripcion_act','$area_evaluaciones_no_conacyt','$campo_evaluaciones_no_conacyt','$disciplina_evaluaciones_no_conacyt','$subdisciplina_evaluaciones_no_conacyt','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos

