<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$nom_fondo = $_POST["nom_fondo"];
$insti_otorgo = $_POST["insti_otorgo"];
$ano_no_distinciones = $_POST["ano_no_distinciones"];
$pais_no_distinciones = $_POST["pais_no_distinciones"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_distinciones_no_conacyt SET nombre_dist='$nom_fondo',institucion_otorga='$insti_otorgo',ano='$ano_no_distinciones',pais='$pais_no_distinciones' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>