<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
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
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_tesis_diplomados /* tabla de destino */
(institucion,tipo_institucion,institucion_publica_privada,pais_institucion,clasificacion_institucion,programa_pnpc,titulo_tesis,estado_tesis,fecha_aprobacion_tesis,fecha_obtencion_grado,area_conocimiento_tesis,campo_conocimiento_tesis,disciplina_conocimiento_tesis,subdisciplina_conocimiento_tesis,pais_tesis,grado_academico_tesis,nombre_diplomado,nombre_curso_asignatura,ano_diplomado,horas_diplomado,area_conocimiento_diplomado,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$institucion','$tip_inst','$pub_priv','$pais_inst','$clasificacion','$ayuda_innova','$tit_tesis','$estado_tesis','$fecha_aproba_tesis','$fecha_obten_grado','$area_tesis','$campo_tesis','$disciplina_tesis','$subdisciplina_tesis','$pais_tesis','$grado_tesis','$nom_diplomado','$nom_curso_asig','$ano_diplo','$horas_tot_diplomado','$area_diplo','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>