<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulo = $_POST["titulo"];
$estat_grad = $_POST["estat_grad"];
$titulacion = $_POST["titulacion"];
$inst_otor = $_POST["inst_otor"];
$tip_inst = $_POST["tip_inst"];
$pub_priv = $_POST["pub_priv"];
$clasificacion = $_POST["clasificacion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$fecha_obtencion = $_POST["fecha_obtencion"];
$pais = $_POST["pais"];
$tip_form = $_POST["tip_form"];
$form_conti = $_POST["form_conti"];
$ano_for = $_POST["ano_for"];
$inst_form_conti = $_POST["inst_form_conti"];
$horas_tot = $_POST["horas_tot"];
$area_conti = $_POST["area_conti"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_grados_acad /* tabla de destino */
(
    titulo,
    estatus,
    fecha_inicio,
    fecha_fin,
    opciones_de_titulacion,
    fecha_obtencion_titulo,
    nombre_institucion,
    tipo_institucion,
    institucion_publica_privada,
    pais_institucion,
    clasificacion_institucion,
    tipo_formacion_continua,
    nombre_formacion_continua,
    ano_formacion_continua,
    institucion_formacion_continua,
    horas_totales_formacion_continua,
    area_de_conocimiento_formacion_continua,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$titulo',
    '$estat_grad',
    '$fecha_inicio',
    '$fecha_fin',
    '$titulacion',
    '$fecha_obtencion',
    '$inst_otor',
    '$tip_inst',
    '$pub_priv',
    '$pais',
    '$clasificacion',
    '$tip_form',
    '$form_conti',
    '$ano_for',
    '$inst_form_conti',
    '$horas_tot',
    '$area_conti',

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