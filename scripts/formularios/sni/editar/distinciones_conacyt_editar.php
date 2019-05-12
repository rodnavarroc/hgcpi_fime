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
$ano_distinciones = $_POST["ano_distinciones"]; 
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_distinciones_conacyt SET nombre_dist='$nom_fondo',ano='$ano_distinciones' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>