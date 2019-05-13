<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$nom_proy = $_POST["nom_proy"];
$tipo_proy = $_POST["tipo_proy"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$insti_proy = $_POST["insti_proy"];
$area_proy = $_POST["area_proy"];
$campo_proy = $_POST["campo_proy"];
$disciplina_proy = $_POST["disciplina_proy"];
$subdisciplina_proy = $_POST["subdisciplina_proy"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_prod_proyectos_academicos SET 

    tipo_proyecto='$tipo_proy',
    nombre_proyecto='$nom_proy',
    fecha_inicio='$fecha_inicio',
    fecha_fin='$fecha_fin',
    institucion='$insti_proy',
    area_conocimiento_proyecto='$area_proy',
    campo_proyecto='$campo_proy',
    disciplina_proyecto='$disciplina_proy',
    subdisciplina_proyecto='$subdisciplina_proy'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  