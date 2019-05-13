<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
$evaluacion_no_conacyt = $_POST["evaluacion_no_conacyt"];
$nom_inst = $_POST["nom_inst"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$cargo_no_conacyt = $_POST["cargo_no_conacyt"];
$producto_no_conacyt = $_POST["producto_no_conacyt"];
$nom_producto_no_conacyt = $_POST["nom_producto_no_conacyt"];
$dictamen_no_conacyt = $_POST["dictamen_no_conacyt"];
$descripcion_act = $_POST["descripcion_act"];
$area_evaluaciones_no_conacyt = $_POST["area_evaluaciones_no_conacyt"];
$campo_evaluaciones_no_conacyt = $_POST["campo_evaluaciones_no_conacyt"];
$disciplina_evaluaciones_no_conacyt = $_POST["disciplina_evaluaciones_no_conacyt"];
$subdisciplina_evaluaciones_no_conacyt = $_POST["subdisciplina_evaluaciones_no_conacyt"];
session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_evaluaciones_no_conacyt SET tipo_evaluacion='$evaluacion_no_conacyt',nombre_institucion='$nom_inst',fecha_inicio='$fecha_inicio',fecha_fin='$fecha_fin',cargo_desempenado='$cargo_no_conacyt',producto_evaluado='$producto_no_conacyt',nombre_producto_evaluado='$nom_producto_no_conacyt',dictamen='$dictamen_no_conacyt',descripcion_actividad='$descripcion_act',area_conocimiento_ev_no='$area_evaluaciones_no_conacyt',campo_ev_no='$campo_evaluaciones_no_conacyt',disciplina_ev_no='$disciplina_evaluaciones_no_conacyt',subdisciplina_ev_no='$subdisciplina_evaluaciones_no_conacyt' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>