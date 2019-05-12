<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tit_trabajo = $_POST["tit_trabajo"];
$tip_part = $_POST["tip_part"];
$tip_evento = $_POST["tip_evento"];
$inst_organi = $_POST["inst_organi"];
$dirig_a = $_POST["dirig_a"];
$fecha = $_POST["fecha"];
$pais_div = $_POST["pais_div"];
$tip_med = $_POST["tip_med"];
$palab_clave = $_POST["palab_clave"];
$not_periodis = $_POST["not_periodis"];
$prod_obten = $_POST["prod_obten"];
$area_div = $_POST["area_div"];
$campo_div = $_POST["campo_div"];
$disciplina_div = $_POST["disciplina_div"];
$subdisciplina_div = $_POST["subdisciplina_div"];
$sec_scian = $_POST["sec_scian"];
$subrama_scian = $_POST["subrama_scian"];
$subsec_scian = $_POST["subsec_scian"];
$rama_scian = $_POST["rama_scian"];
$clase_scian = $_POST["clase_scian"];
$sec_ocde = $_POST["sec_ocde"];
$div_ocde = $_POST["div_ocde"];
$grupo_ocde = $_POST["grupo_ocde"];
$clase_ocde = $_POST["clase_ocde"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_divulgacion /* tabla de destino */
(divulgacion_titulo,tipo_participacion,tipo_evento,institucion_organizadora,dirigido_a,fecha,pais,tipo_de_medio,palabras_clave,notas_periodisticas,producto_obtenido,area_conocimiento_divulgacion,campo_divulgacion,disciplina_divulgacion,subdisciplina_divulgacion,sector_industrial_scian,subrama_scian,subsector_scian,rama_scian,clase_scian,sector_industrial_ocde,division_ocde,grupo_ocde,clase_ocde,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tit_trabajo','$tip_part','$tip_evento','$inst_organi','$dirig_a','$fecha','$pais_div','$tip_med','$palab_clave','$not_periodis','$prod_obten','$area_div','$campo_div','$disciplina_div','$subdisciplina_div','$sec_scian','$subrama_scian','$subsec_scian','$rama_scian','$clase_scian','$sec_ocde','$div_ocde','$grupo_ocde','$clase_ocde','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>