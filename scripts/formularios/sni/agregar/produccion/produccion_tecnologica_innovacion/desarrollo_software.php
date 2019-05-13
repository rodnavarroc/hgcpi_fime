<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulo_soft = $_POST["titulo_soft"];
$tip_soft = $_POST["tip_soft"];
$derechos_autor = $_POST["derechos_autor"];
$pais_soft = $_POST["pais_soft"];
$hrs_hombre = $_POST["hrs_hombre"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$costo = $_POST["costo"];
$beneficiario = $_POST["beneficiario"];
$objetivo = $_POST["objetivo"];
$resumen = $_POST["resumen"];
$contribucion = $_POST["contribucion"];
$gen_valor = $_POST["gen_valor"];
$form_recur = $_POST["form_recur"];
$ayuda_innova = $_POST["ayuda_innova"];
$logros = $_POST["logros"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_desarrollo_software /* tabla de destino */
(
    tipo_desarrollo,
    titulo,
    derechos_autor,
    pais,
    horas_hombre,
    fecha_inicio,
    fecha_fin,
    costo,
    beneficiario,
    objetivo,
    resumen,
    contribucion,
    generacion_de_valor,
    formacion_rh,
    recibio_apoyo_conacyt,
    logros,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tip_soft',
    '$titulo_soft',
    '$derechos_autor',
    '$pais_soft',
    '$hrs_hombre',
    '$fecha_inicio',
    '$fecha_fin',
    '$costo',
    '$beneficiario',
    '$objetivo',
    '$resumen',
    '$contribucion',
    '$gen_valor',
    '$form_recur',
    '$ayuda_innova',
    '$logros',

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