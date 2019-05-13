<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tip_innova_oslo = $_POST["tip_innova_oslo"];
$tip_innova = $_POST["tip_innova"];
$apli_innova = $_POST["apli_innova"];
$pot_cobertura = $_POST["pot_cobertura"];
$mecanismo_protec = $_POST["mecanismo_protec"];
$ayuda_innova = $_POST["ayuda_innova"];
$sec_scian = $_POST["sec_scian"];
$subrama_scian = $_POST["subrama_scian"];
$subsec_scian = $_POST["subsec_scian"];
$rama_scian = $_POST["rama_scian"];
$clase_scian = $_POST["clase_scian"];
$sec_ocde = $_POST["sec_ocde"];
$div_ocde = $_POST["div_ocde"];
$grupo_ocde = $_POST["grupo_ocde"];
$clase_ocde = $_POST["clase_ocde"];
$area_innova = $_POST["area_innova"];
$campo_innova = $_POST["campo_innova"];
$disciplina_innova = $_POST["disciplina_innova"];
$subdisciplina_innova = $_POST["subdisciplina_innova"];
$monto_anual = $_POST["monto_anual"];
$volumen_anual = $_POST["volumen_anual"];
$empleados_directos_anual = $_POST["empleados_directos_anual"];
$empleados_indirectos_anual = $_POST["empleados_indirectos_anual"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_innovacion /* tabla de destino */
(
    innovacion_oslo,
    tipo_innovacion,
    aplicacion,
    potencial_cobertura,
    mecanismo_proteccion_propiedad_intelectual,
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
    area_conocimiento_inn,
    campo_inn,
    disciplina_inn,
    subdisciplina_inn,
    monto_venta_anuales,
    volumen_prod_anuales,
    no_empleos_directos_anuales,
    no_empleos_indirectos_anuales,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$tip_innova_oslo',
    '$tip_innova',
    '$apli_innova',
    '$pot_cobertura',
    '$mecanismo_protec',
    '$ayuda_innova',
    '$sec_scian',
    '$subrama_scian',
    '$subsec_scian',
    '$rama_scian',
    '$clase_scian',
    '$sec_ocde',
    '$div_ocde',
    '$grupo_ocde',
    '$clase_ocde',
    '$area_innova',
    '$campo_innova',
    '$disciplina_innova',
    '$subdisciplina_innova',
    '$monto_anual',
    '$volumen_anual',
    '$empleados_directos_anual',
    '$empleados_indirectos_anual',

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