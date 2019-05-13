<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$tit_trabajo = $_POST["tit_trabajo"];
$tip_part = $_POST["tip_part"];
$tip_evento = $_POST["tip_evento"];
$inst_organi = $_POST["inst_organi"];
$dirig_a = $_POST["dirig_a"];
$fecha = $_POST["fecha"];
$pais_div = $_POST["pais_div"];
$tip_med = $_POST["tip_med"];
$palab_clave = $_POST["palab_clave"];
$not_periodis = $_POST["not_periodis"];
$prod_obten = $_POST["prod_obten"];
$area_div = $_POST["area_div"];
$campo_div = $_POST["campo_div"];
$disciplina_div = $_POST["disciplina_div"];
$subdisciplina_div = $_POST["subdisciplina_div"];
$sec_scian = $_POST["sec_scian"];
$subrama_scian = $_POST["subrama_scian"];
$subsec_scian = $_POST["subsec_scian"];
$rama_scian = $_POST["rama_scian"];
$clase_scian = $_POST["clase_scian"];
$sec_ocde = $_POST["sec_ocde"];
$div_ocde = $_POST["div_ocde"];
$grupo_ocde = $_POST["grupo_ocde"];
$clase_ocde = $_POST["clase_ocde"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_divulgacion SET divulgacion_titulo='$tit_trabajo',tipo_participacion='$tip_part',tipo_evento='$tip_evento',institucion_organizadora='$inst_organi',dirigido_a='$dirig_a',fecha='$fecha',pais='$pais_div',tipo_de_medio='$tip_med',palabras_clave='$palab_clave',notas_periodisticas='$not_periodis',producto_obtenido='$prod_obten',area_conocimiento_divulgacion='$area_div',campo_divulgacion='$campo_div',disciplina_divulgacion='$disciplina_div',subdisciplina_divulgacion = '$subdisciplina_div',sector_industrial_scian='$sec_scian',subrama_scian='$subrama_scian',subsector_scian='$subsec_scian',rama_scian='$rama_scian',clase_scian='$clase_scian',sector_industrial_ocde='$sec_ocde',division_ocde='$div_ocde',grupo_ocde='$grupo_ocde',clase_ocde='$clase_ocde' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>