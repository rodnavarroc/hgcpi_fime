<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$tip_part = $_POST["tip_part"];
$nom_congre = $_POST["nom_congre"];
$tit_trab = $_POST["tit_trab"];
$pais_congre = $_POST["pais_congre"];
$fecha = $_POST["fecha"];
$palab_clave = $_POST["palab_clave"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_participacion_congresos SET tipo_participacion='$tip_part',nombre_congreso='$nom_congre',titulo_trabajo='$tit_trab',pais='$pais_congre',fecha='$fecha',palabras_clave='$palab_clave' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>