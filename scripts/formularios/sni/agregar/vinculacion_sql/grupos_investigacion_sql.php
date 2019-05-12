<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_grupo = $_POST["nom_grupo"];
$fecha_creacion = $_POST["fecha_creacion"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$nom_respo_grupo = $_POST["nom_respo_grupo"];
$prim_ap_respo_grupo = $_POST["prim_ap_respo_grupo"];
$seg_ap_respo_grupo = $_POST["seg_ap_respo_grupo"];
$inst_adscrip = $_POST["inst_adscrip"];
$tot_invest = $_POST["tot_invest"];
$impacto = $_POST["impacto"];
$colab = $_POST["colab"];
$area_grupo = $_POST["area_grupo"];
$campo_grupo = $_POST["campo_grupo"];
$disciplina_grupo = $_POST["disciplina_grupo"];
$subdisciplina_grupo = $_POST["subdisciplina_grupo"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_grupos_investigacion /* tabla de destino */
(nombre_grupo,fecha_creacion,fecha_ingreso,nombre_lider,primer_apellido_lider,segundo_apellido_lider,institucion_adscripcion_lider,total_investigadores,impacto,colaboracion,area_conocimiento_grupo,campo_grupo,disciplina_grupo,subdisciplina_grupo,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nom_grupo','$fecha_creacion','$fecha_ingreso','$nom_respo_grupo','$prim_ap_respo_grupo','$seg_ap_respo_grupo','$inst_adscrip','$tot_invest','$impacto','$colab','$area_grupo','$campo_grupo','$disciplina_grupo','$subdisciplina_grupo','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>