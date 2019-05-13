<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$nom_tit = $_POST["nom_tit"];
$tip_pat = $_POST["tip_pat"];
$estado_pat = $_POST["estado_pat"];
$num_tramite = $_POST["num_tramite"];
$fecha_solicitud = $_POST["fecha_solicitud"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$expediente = $_POST["expediente"];
$clasif_patente = $_POST["clasif_patente"];
$resumen = $_POST["resumen"];
$explo_indus = $_POST["explo_indus"];
$ano_publi = $_POST["ano_publi"];
$pais = $_POST["pais"];
$ano_edicion = $_POST["ano_edicion"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_patentes SET 

    tipo_patente='$tip_pat',
    nombre='$nom_tit',
    estado='$estado_pat',
    numero_tramite='$num_tramite',
    fecha_solicitud='$fecha_solicitud',
    fecha_registro='$fecha_ingreso',
    expediente='$expediente',
    clasificacion_internacional='$clasif_patente',
    resumen='$resumen',
    explotacion_industrial='$explo_indus',
    ano_publicacion='$ano_publi',
    pais='$pais',
    ano_edicion='$ano_edicion'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  