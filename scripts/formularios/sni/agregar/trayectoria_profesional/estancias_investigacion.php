<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$institucion = $_POST["institucion"];
$nom_estanc = $_POST["nom_estanc"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$tipo_estanc = $_POST["tipo_estanc"];
$area = $_POST["area"];
$campo = $_POST["campo"];
$disciplina = $_POST["disciplina"];
$subdisciplina = $_POST["subdisciplina"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_estancias_investigacion /* tabla de destino */
(
    tipo_estancia,
    nombre_institucion,
    nombre_estancia,
    fecha_inicio,
    fecha_fin,
    area_conocimiento_estancia,
    campo_estancia,
    disciplina_estancia,
    subdisciplina_estancia,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tipo_estanc',
    '$institucion',
    '$nom_estanc',
    '$fecha_inicio',
    '$fecha_fin',
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