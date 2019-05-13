<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$nom_red = $_POST["nom_red"];
$fecha_creacion = $_POST["fecha_creacion"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$nom_respo_red = $_POST["nom_respo_red"];
$prim_ap_respo_red = $_POST["prim_ap_respo_red"];
$seg_ap_respo_red = $_POST["seg_ap_respo_red"];
$inst_respo_red = $_POST["inst_respo_red"];
$tot_integra = $_POST["tot_integra"];
$area_red_invest = $_POST["area_red_invest"];
$campo_red_invest = $_POST["campo_red_invest"];
$disciplina_red_invest = $_POST["disciplina_red_invest"];
$subdisciplina_red_invest = $_POST["subdisciplina_red_invest"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_redes_investigacion SET nombre_red='$nom_red',fecha_creacion='$fecha_creacion',fecha_ingreso='$fecha_ingreso',nombre_responsable_red='$nom_respo_red',primer_apellido_responsable_red='$prim_ap_respo_red',segundo_apellido_responsable_red='$seg_ap_respo_red',institucion_responsable_red='$inst_respo_red',total_integrantes='$tot_integra',area_conocimiento_red='$area_red_invest',campo_red='$campo_red_invest',disciplina_red='$disciplina_red_invest',subdisciplina_red='$subdisciplina_red_invest' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>