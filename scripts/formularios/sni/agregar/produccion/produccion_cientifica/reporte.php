<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$insti_presenta = $_POST["insti_presenta"];
$fecha_public = $_POST["fecha_public"];
$num_pag = $_POST["num_pag"];
$origen_reptec = $_POST["origen_reptec"];
$descripcion = $_POST["descripcion"];
$objetivos = $_POST["objetivos"];
$palab_clave = $_POST["palab_clave"];
$ayuda_reptec = $_POST["ayuda_reptec"];
$area_reptec = $_POST["area_reptec"];
$campo_reptec = $_POST["campo_reptec"];
$disciplina_reptec = $_POST["disciplina_reptec"];
$subdisciplina_reptec = $_POST["subdisciplina_reptec"];
$idthomson_reptec = $_POST["idthomson_reptec"];
$idarxiv_reptec = $_POST["idarxiv_reptec"];
$idpubmed_reptec = $_POST["idpubmed_reptec"];
$idopen_reptec = $_POST["idopen_reptec"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_reportes_tecnicos /* tabla de destino */
(
    institucion,
    fecha_publicacion,
    numero_paginas,
    origen_reporte,
    descripcion,
    objetivos,
    palabras_clave,
    recibio_apoyo_conacyt,
    area_conocimiento_reporte,
    campo_reporte,
    disciplina_reporte,
    subdisciplina_reporte,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$insti_presenta',
    '$fecha_public',
    '$num_pag',
    '$origen_reptec',
    '$descripcion',
    '$objetivos',
    '$palab_clave',
    '$ayuda_reptec',
    '$area_reptec',
    '$campo_reptec',
    '$disciplina_reptec',
    '$subdisciplina_reptec',
    '$idthomson_reptec',
    '$idarxiv_reptec',
    '$idpubmed_reptec',
    '$idopen_reptec',

    '$idusuario'
)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>