<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

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

$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_innovacion SET 

    innovacion_oslo='$tip_innova_oslo',
    tipo_innovacion='$tip_innova',
    aplicacion='$apli_innova',
    potencial_cobertura='$pot_cobertura',
    mecanismo_proteccion_propiedad_intelectual='$mecanismo_protec',
    recibio_apoyo_conacyt='$ayuda_innova',
    sector_industrial_scian='$sec_scian',
    subrama_scian='$subrama_scian',
    subsector_scian='$subsec_scian',
    rama_scian='$rama_scian',
    clase_scian='$clase_scian',
    sector_industrial_ocde='$sec_ocde',
    division_ocde='$div_ocde',
    grupo_ocde='$grupo_ocde',
    clase_ocde='$clase_ocde',
    area_conocimiento_inn='$area_innova',
    campo_inn='$campo_innova',
    disciplina_inn='$disciplina_innova',
    subdisciplina_inn='$subdisciplina_innova',
    monto_venta_anuales='$monto_anual',
    volumen_prod_anuales='$volumen_anual',
    no_empleos_directos_anuales='$empleados_directos_anual',
    no_empleos_indirectos_anuales='$empleados_indirectos_anual'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  