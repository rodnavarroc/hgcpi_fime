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
$fecha_asignacion = $_POST["fecha_asignacion"];
$fecha_aceptacion = $_POST["fecha_aceptacion"];
$fecha_evaluacion = $_POST["fecha_evaluacion"];
$dictamen_conacyt = $_POST["dictamen_conacyt"];
$descripcion_conacyt = $_POST["descripcion_conacyt"];
$area_evaluaciones_conacyt = $_POST["area_evaluaciones_conacyt"];
$campo_evaluaciones_conacyt = $_POST["campo_evaluaciones_conacyt"];
$disciplina_evaluaciones_conacyt = $_POST["disciplina_evaluaciones_conacyt"];
$subdisciplina_evaluaciones_conacyt = $_POST["subdisciplina_evaluaciones_conacyt"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_evaluaciones_conacyt SET nombre_del_fondo='$nom_fondo',fecha_asignacion='$fecha_asignacion',fecha_aceptacion='$fecha_aceptacion',fecha_evaluacion='$fecha_evaluacion',dictamen='$dictamen_conacyt',descripcion='$descripcion_conacyt',area_conocimiento_ev='$area_evaluaciones_conacyt',campo_ev='$campo_evaluaciones_conacyt',disciplina_ev='$disciplina_evaluaciones_conacyt',subdisciplina_ev='$subdisciplina_evaluaciones_conacyt' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>