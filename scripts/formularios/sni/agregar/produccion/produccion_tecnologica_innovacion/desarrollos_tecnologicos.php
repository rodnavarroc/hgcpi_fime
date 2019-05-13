<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_des = $_POST["nom_des"];
$tipo_des = $_POST["tipo_des"];
$obj_des = $_POST["obj_des"];
$resumen_des = $_POST["resumen_des"];
$ayuda_destec = $_POST["ayuda_destec"];
$sec_scian = $_POST["sec_scian"];
$subrama_scian = $_POST["subrama_scian"];
$subsec_scian = $_POST["subsec_scian"];
$rama_scian = $_POST["rama_scian"];
$clase_scian = $_POST["clase_scian"];
$sec_ocde = $_POST["sec_ocde"];
$div_ocde = $_POST["div_ocde"];
$grupo_ocde = $_POST["grupo_ocde"];
$clase_ocde = $_POST["clase_ocde"];
$area_des = $_POST["area_des"];
$campo_des = $_POST["campo_des"];
$disciplina_des = $_POST["disciplina_des"];
$subdisciplina_des = $_POST["subdisciplina_des"];
$gen_valor = $_POST["gen_valor"];
$form_recur = $_POST["form_recur"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_desarollos_tecnologicos /* tabla de destino */
(
    tipo_desarrollo,
    nombre_desarrollo,
    objetivos,
    resumen,
    recibio_apoyo_conacyt,
    sector_industrial_scian,
    subrama_scian,
    subsector_scian,
    rama_scian,
    clase_scian,
    sector_industrial_ocde,
    division_ocde,
    grupo_ocde,
    clase_ocde,
    campo_conocimiento_desarrollo,
    area_conocimiento_desarrollo,
    disciplina_desarrollo,
    subdisciplina_desarrollo,
    generacion_de_valor,
    formacion_de_recursos,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tipo_des',
    '$nom_des',
    '$obj_des',
    '$resumen_des',
    '$ayuda_destec',
    '$sec_scian',
    '$subrama_scian',
    '$subsec_scian',
    '$rama_scian',
    '$clase_scian',
    '$sec_ocde',
    '$div_ocde',
    '$grupo_ocde',
    '$clase_ocde',
    '$area_des',
    '$campo_des',
    '$disciplina_des',
    '$subdisciplina_des',
    '$gen_valor',
    '$form_recur',

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