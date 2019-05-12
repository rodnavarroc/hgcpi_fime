<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$empleo_act = $_POST["empleo_act"];
$puesto = $_POST["puesto"];
$institucion = $_POST["institucion"];
$fecha_inicio = $_POST["fecha_inicio"];
$logros = $_POST["logros"];
$area = $_POST["area"];
$campo = $_POST["campo"];
$disciplina = $_POST["disciplina"];
$subdisciplina = $_POST["subdisciplina"];

$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_experiencia_laboral SET 

    empleo_actual='$empleo_act',
    puesto='$puesto',
    institucion='$institucion',
    fecha_inicio='$fecha_inicio',
    logros='$logros',
    area_conocimiento_puesto='$area',
    campo_puesto='$campo',
    disciplina_puesto='$disciplina',
    subdisciplina_puesto='$subdisciplina'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../sni.php");
}

?>                                  