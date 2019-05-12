<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$idioma = $_POST["idioma"];
$grad_domin = $_POST["grad_domin"];
$niv_domin = $_POST["niv_domin"];
$niv_conf = $_POST["niv_conf"];
$niv_lect = $_POST["niv_lect"];
$inst_otor = $_POST["inst_otor"];
$puntos = $_POST["puntos"];
$vig_inicio = $_POST["vig_inicio"];
$vig_fin = $_POST["vig_fin"];
$fecha_evaluacion = $_POST["fecha_evaluacion"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_lenguas_e_idiomas /* tabla de destino */
(
    idioma,
    institucion_que_otorga,
    grado_de_dominio,
    puntos,
    nivel_conferido,
    nivel_lectura,
    fecha_evaluacion,
    vigencia_de,
    vigencia_a,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$idioma',
    '$inst_otor',
    '$grad_domin',
    '$puntos',
    '$niv_conf',
    '$niv_lect',
    '$fecha_evaluacion',
    '$vig_inicio',
    '$vig_fin',
    
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