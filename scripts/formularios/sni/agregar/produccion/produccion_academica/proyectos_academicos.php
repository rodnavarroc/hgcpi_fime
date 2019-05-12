<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_proy = $_POST["nom_proy"];
$tipo_proy = $_POST["tipo_proy"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$insti_proy = $_POST["insti_proy"];
$area_proy = $_POST["area_proy"];
$campo_proy = $_POST["campo_proy"];
$disciplina_proy = $_POST["disciplina_proy"];
$subdisciplina_proy = $_POST["subdisciplina_proy"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_prod_proyectos_academicos /* tabla de destino */
(
    tipo_proyecto,
    nombre_proyecto,
    fecha_inicio,
    fecha_fin,
    institucion,
    area_conocimiento_proyecto,
    campo_proyecto,
    disciplina_proyecto,
    subdisciplina_proyecto,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tipo_proy',
    '$nom_proy',
    '$fecha_inicio',
    '$fecha_fin',
    '$insti_proy',
    '$area_proy',
    '$campo_proy',
    '$disciplina_proy',
    '$subdisciplina_proy',

    '$idusuario'
)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>