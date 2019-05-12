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
$tip_inst = $_POST["tip_inst"];
$pub_priv = $_POST["pub_priv"];
$pais_inst = $_POST["pais_inst"];
$clasificacion = $_POST["clasificacion"];
$ayuda_innova = $_POST["ayuda_innova"];
$tit_tesis = $_POST["tit_tesis"];
$estado_tesis = $_POST["estado_tesis"];
$fecha_aproba_tesis = $_POST["fecha_aproba_tesis"];
$fecha_obten_grado = $_POST["fecha_obten_grado"];
$area_tesis = $_POST["area_tesis"];
$campo_tesis = $_POST["campo_tesis"];
$disciplina_tesis = $_POST["disciplina_tesis"];
$subdisciplina_tesis = $_POST["subdisciplina_tesis"];
$pais_tesis = $_POST["pais_tesis"];
$grado_tesis = $_POST["grado_tesis"];
$nom_diplomado = $_POST["nom_diplomado"];
$nom_curso_asig = $_POST["nom_curso_asig"];
$ano_diplo = $_POST["ano_diplo"];
$horas_tot_diplomado = $_POST["horas_tot_diplomado"];
$area_diplo = $_POST["area_diplo"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_tesis_diplomados SET institucion='$institucion',tipo_institucion='$tip_inst',institucion_publica_privada='$pub_priv',pais_institucion='$pais_inst',clasificacion_institucion='$clasificacion',programa_pnpc='$ayuda_innova',titulo_tesis='$tit_tesis',estado_tesis='$estado_tesis',fecha_aprobacion_tesis='$fecha_aproba_tesis',fecha_obtencion_grado='$fecha_obten_grado',area_conocimiento_tesis='$area_tesis',campo_conocimiento_tesis='$campo_tesis',disciplina_conocimiento_tesis='$disciplina_tesis',subdisciplina_conocimiento_tesis='$subdisciplina_tesis',pais_tesis='$pais_tesis',grado_academico_tesis='$grado_tesis',nombre_diplomado='$nom_diplomado',nombre_curso_asignatura='$nom_curso_asig',ano_diplomado='$ano_diplo',horas_diplomado='$horas_tot_diplomado',area_conocimiento_diplomado='$area_diplo' WHERE id='$ident' AND usuario_idusuario='$idusuario'";


if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../sni.php");
}

?>