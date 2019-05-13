<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_tit = $_POST["nom_tit"];
$tip_pat = $_POST["tip_pat"];
$estado_pat = $_POST["estado_pat"];
$num_tramite = $_POST["num_tramite"];
$fecha_solicitud = $_POST["fecha_solicitud"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$expediente = $_POST["expediente"];
$clasif_patente = $_POST["clasif_patente"];
$resumen = $_POST["resumen"];
$explo_indus = $_POST["explo_indus"];
$ano_publi = $_POST["ano_publi"];
$pais = $_POST["pais"];
$ano_edicion = $_POST["ano_edicion"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_patentes /* tabla de destino */
(
    tipo_patente,
    nombre,
    estado,
    numero_tramite,
    fecha_solicitud,
    fecha_registro,
    expediente,
    clasificacion_internacional,
    resumen,
    explotacion_industrial,
    ano_publicacion,
    pais,
    ano_edicion,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tip_pat',
    '$nom_tit',
    '$estado_pat',
    '$num_tramite',
    '$fecha_solicitud',
    '$fecha_ingreso',
    '$expediente',
    '$clasif_patente',
    '$resumen',
    '$explo_indus',
    '$ano_publi',
    '$pais',
    '$ano_edicion',

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