<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$empleo_act = $_POST["empleo_act"];
$puesto = $_POST["puesto"];
$institucion = $_POST["institucion"];
$fecha_inicio = $_POST["fecha_inicio"];
$logros = $_POST["logros"];
$area = $_POST["area"];
$campo = $_POST["campo"];
$disciplina = $_POST["disciplina"];
$subdisciplina = $_POST["subdisciplina"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_experiencia_laboral /* tabla de destino */
(
    empleo_actual,
    puesto,
    institucion,
    fecha_inicio,
    logros,
    area_conocimiento_puesto,
    campo_puesto,
    disciplina_puesto,
    subdisciplina_puesto,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$empleo_act',
    '$puesto',
    '$institucion',
    '$fecha_inicio',
    '$logros',
    '$area',
    '$campo',
    '$disciplina',
    '$subdisciplina',
    
    '$idusuario'
)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>