<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$nom_grupo = $_POST["nom_grupo"];
$fecha_creacion = $_POST["fecha_creacion"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$nom_respo_grupo = $_POST["nom_respo_grupo"];
$prim_ap_respo_grupo = $_POST["prim_ap_respo_grupo"];
$seg_ap_respo_grupo = $_POST["seg_ap_respo_grupo"];
$inst_adscrip = $_POST["inst_adscrip"];
$tot_invest = $_POST["tot_invest"];
$impacto = $_POST["impacto"];
$colab = $_POST["colab"];
$area_grupo = $_POST["area_grupo"];
$campo_grupo = $_POST["campo_grupo"];
$disciplina_grupo = $_POST["disciplina_grupo"];
$subdisciplina_grupo = $_POST["subdisciplina_grupo"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_grupos_investigacion SET nombre_grupo='$nom_grupo',fecha_creacion='$fecha_creacion',fecha_ingreso='$fecha_ingreso',nombre_lider='$nom_respo_grupo',primer_apellido_lider='$prim_ap_respo_grupo',segundo_apellido_lider='$seg_ap_respo_grupo',institucion_adscripcion_lider='$inst_adscrip',total_investigadores='$tot_invest',impacto='$impacto',colaboracion='$colab',area_conocimiento_grupo='$area_grupo',campo_grupo='$campo_grupo',disciplina_grupo='$disciplina_grupo',subdisciplina_grupo='$subdisciplina_grupo' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>