<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$institucion = $_POST["institucion"];
$nom_estanc = $_POST["nom_estanc"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$tipo_estanc = $_POST["tipo_estanc"];
$area = $_POST["area"];
$campo = $_POST["campo"];
$disciplina = $_POST["disciplina"];
$subdisciplina = $_POST["subdisciplina"];

$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_estancias_investigacion SET 

    tipo_estancia='$tipo_estanc',
    nombre_institucion='$institucion',
    nombre_estancia='$nom_estanc',
    fecha_inicio='$fecha_inicio',
    fecha_fin='$fecha_fin',
    area_conocimiento_estancia='$area',
    campo_estancia='$campo',
    disciplina_estancia='$disciplina',
    subdisciplina_estancia='$subdisciplina'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../sni.php");
}

?>                                  