<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$tipo_reconocimiento = $_POST["tipo_reconocimiento"];
$nivel_prem_dist = $_POST["nivel_prem_dist"];
$nom_prem_dist = $_POST["nom_prem_dist"];
$inst_otorgo_premio = $_POST["inst_otorgo_premio"];
$tip_inst_prem_dist = $_POST["tip_inst_prem_dist"];
$pub_priv_prem_dist = $_POST["pub_priv_prem_dist"];
$motivo_premio = $_POST["motivo_premio"];
$inst_otorga_no_considera = $_POST["inst_otorga_no_considera"];
$pais_inst_prem_dist = $_POST["pais_inst_prem_dist"];
$fecha = $_POST["fecha"];
$ano_prem_dist = $_POST["ano_prem_dist"];
$monto_mensual = $_POST["monto_mensual"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_premios_y_distinciones SET tipo_distincion='$tipo_reconocimiento',nivel='$nivel_prem_dist',nombre_distincion='$nom_prem_dist',institucion_que_otorga='$inst_otorgo_premio',tipo_institucion='$tip_inst_prem_dist',institucion_publica_privada='$pub_priv_prem_dist',motivo='$motivo_premio',institucion_otorgante_no_considerada='$inst_otorga_no_considera',pais_institucion='$pais_inst_prem_dist',fecha='$fecha',ano='$ano_prem_dist',monto_mensual='$monto_mensual' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>