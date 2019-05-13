<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$titulo = $_POST["titulo"];
$estat_grad = $_POST["estat_grad"];
$titulacion = $_POST["titulacion"];
$inst_otor = $_POST["inst_otor"];
$tip_inst = $_POST["tip_inst"];
$pub_priv = $_POST["pub_priv"];
$clasificacion = $_POST["clasificacion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$fecha_obtencion = $_POST["fecha_obtencion"];
$pais = $_POST["pais"];
$tip_form = $_POST["tip_form"];
$form_conti = $_POST["form_conti"];
$ano_for = $_POST["ano_for"];
$inst_form_conti = $_POST["inst_form_conti"];
$horas_tot = $_POST["horas_tot"];
$area_conti = $_POST["area_conti"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_grados_acad SET 

titulo='$titulo',
estatus='$estat_grad',
opciones_de_titulacion='$titulacion',
nombre_institucion='$inst_otor',
fecha_inicio='$fecha_inicio',
fecha_fin='$fecha_fin',
fecha_obtencion_titulo='$fecha_obtencion', 
tipo_formacion_continua='$tip_form',
nombre_formacion_continua='$form_conti', 
ano_formacion_continua='$ano_for',
institucion_formacion_continua='$inst_form_conti',
horas_totales_formacion_continua='$horas_tot',
area_de_conocimiento_formacion_continua='$area_conti' 

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../sni.php");
}

?>