<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_red = $_POST["nom_red"];
$fecha_creacion = $_POST["fecha_creacion"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$nom_respo_red = $_POST["nom_respo_red"];
$prim_ap_respo_red = $_POST["prim_ap_respo_red"];
$seg_ap_respo_red = $_POST["seg_ap_respo_red"];
$inst_respo_red = $_POST["inst_respo_red"];
$tot_integra = $_POST["tot_integra"];
$area_red_invest = $_POST["area_red_invest"];
$campo_red_invest = $_POST["campo_red_invest"];
$disciplina_red_invest = $_POST["disciplina_red_invest"];
$subdisciplina_red_invest = $_POST["subdisciplina_red_invest"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_redes_investigacion /* tabla de destino */
(nombre_red,fecha_creacion,fecha_ingreso,nombre_responsable_red,primer_apellido_responsable_red,segundo_apellido_responsable_red,institucion_responsable_red,total_integrantes,area_conocimiento_red,campo_red,disciplina_red,subdisciplina_red,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nom_red','$fecha_creacion','$fecha_ingreso','$nom_respo_red','$prim_ap_respo_red','$seg_ap_respo_red','$inst_respo_red','$tot_integra','$area_red_invest','$campo_red_invest','$disciplina_red_invest','$subdisciplina_red_invest','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>