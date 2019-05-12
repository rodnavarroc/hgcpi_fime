<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

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

$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_desarollos_tecnologicos SET 

    tipo_desarrollo='$tipo_des',
    nombre_desarrollo='$nom_des',
    objetivos='$obj_des',
    resumen='$resumen_des',
    recibio_apoyo_conacyt='$ayuda_destec',
    sector_industrial_scian='$sec_scian',
    subrama_scian='$subrama_scian',
    subsector_scian='$subsec_scian',
    rama_scian='$rama_scian',
    clase_scian='$clase_scian',
    sector_industrial_ocde='$sec_ocde',
    division_ocde='$div_ocde',
    grupo_ocde='$grupo_ocde',
    clase_ocde='$clase_ocde',
    campo_conocimiento_desarrollo='$campo_des',
    area_conocimiento_desarrollo='$area_des',
    disciplina_desarrollo='$disciplina_des',
    subdisciplina_desarrollo='$subdisciplina_des',
    generacion_de_valor='$gen_valor',
    formacion_de_recursos='$form_recur'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  