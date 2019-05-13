<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$red_conacyt = $_POST["red_conacyt"];
$fecha_ingreso = $_POST["fecha_ingreso"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_redes_tematicas_conacyt SET red_tematica_conacyt='$red_conacyt',fecha_ingreso='$fecha_ingreso' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>