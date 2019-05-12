<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$nom_prog_educ = $_POST["nom_prog_educ"];
$nom_curso = $_POST["nom_curso"];
$nom_inst = $_POST["nom_inst"];
$tip_inst = $_POST["tip_inst"];
$pub_priv = $_POST["pub_priv"];
$pais = $_POST["pais"];
$clasificacion = $_POST["clasificacion"];
$horas_tot = $_POST["horas_tot"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];

$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_docencia SET 

    nombre_programa_educativo='$nom_prog_educ',
    nombre_curso='$nom_curso',
    nombre_institucion_ies='$nom_inst',
    tipo_institucion='$tip_inst',
    institucion_publica_privada='$pub_priv',
    pais_institucion='$pais',
    clasificacion_institucion='$clasificacion',
    horas_totales_curso='$horas_tot',
    fecha_inicio='$fecha_inicio',
    fecha_fin='$fecha_fin'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../sni.php");
}

?>                                  