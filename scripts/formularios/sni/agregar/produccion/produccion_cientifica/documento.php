<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulo_documento = $_POST["titulo_documento"];
$titulo_obra = $_POST["titulo_obra"];
$titulo_publi = $_POST["titulo_publi"];
$pag_ini_doc = $_POST["pag_ini_doc"];
$pag_fin_doc = $_POST["pag_fin_doc"];
$ano_publi_doc = $_POST["ano_publi_doc"];
$pais_doc = $_POST["pais_doc"];
$palab_clave = $_POST["palab_clave"];
$area_doc = $_POST["area_doc"];
$campo_doc = $_POST["campo_doc"];
$disciplina_doc = $_POST["disciplina_doc"];
$subdisciplina_doc = $_POST["subdisciplina_doc"];
$idthomson_doc = $_POST["idthomson_doc"];
$idarxiv_doc = $_POST["idarxiv_doc"];
$idpubmed_doc = $_POST["idpubmed_doc"];
$idopen_doc = $_POST["idopen_doc"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_documentos_de_trabajo /* tabla de destino */
(
    titulo_documento,
    titulo_obra,
    titulo_publicacion,
    de_pagina,
    a_pagina,
    ano_publicacion,
    pais,
    palabras_clave,
    area_conocimiento_doc,
    campo_doc,
    disciplina_doc,
    subdisciplina_doc,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$titulo_documento',
    '$titulo_obra',
    '$titulo_publi',
    '$pag_ini_doc',
    '$pag_fin_doc',
    '$ano_publi_doc',
    '$pais_doc',
    '$palab_clave',
    '$area_doc',
    '$campo_doc',
    '$disciplina_doc',
    '$subdisciplina_doc',
    '$idthomson_doc',
    '$idarxiv_doc',
    '$idpubmed_doc',
    '$idopen_doc',

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