<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$idioma = $_POST["idioma"];
$grad_domin = $_POST["grad_domin"];
$niv_conf = $_POST["niv_conf"];
$niv_lect = $_POST["niv_lect"];
$inst_otor = $_POST["inst_otor"];
$puntos = $_POST["puntos"];
$vig_inicio = $_POST["vig_inicio"];
$vig_fin = $_POST["vig_fin"];
$fecha_evaluacion = $_POST["fecha_evaluacion"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_lenguas_e_idiomas SET 

idioma='$idioma',
institucion_que_otorga='$inst_otor',
grado_de_dominio='$grad_domin',
puntos='$puntos',
nivel_conferido='$niv_conf',
nivel_lectura='$niv_lect',
fecha_evaluacion='$fecha_evaluacion',
vigencia_de='$vig_inicio', 
vigencia_a='$vig_fin'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../sni.php");
}

?>																	