<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$isbn_cap = $_POST["isbn_cap"];
$titulo_lib = $_POST["titulo_lib"];
$editorial_cap = $_POST["editorial_cap"];
$edicion_cap = $_POST["edicion_cap"];
$ano_edic_cap = $_POST["ano_edic_cap"];
$titulo_cap = $_POST["titulo_cap"];
$num_cap = $_POST["num_cap"];
$pag_ini_cap = $_POST["pag_ini_cap"];
$pag_fin_cap = $_POST["pag_fin_cap"];
$resumen_cap = $_POST["resumen_cap"];
$area_cap = $_POST["area_cap"];
$campo_cap = $_POST["campo_cap"];
$disciplina_cap = $_POST["disciplina_cap"];
$subdisciplina_cap = $_POST["subdisciplina_cap"];
$idthomson_cap = $_POST["idthomson_cap"];
$idarxiv_cap = $_POST["idarxiv_cap"];
$idpubmed_cap = $_POST["idpubmed_cap"];
$idopen_cap = $_POST["idopen_cap"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_produccion_capitulos /* tabla de destino */
(
    titulo,
    isbn,
    editorial,
    numero_edicion,
    ano_edicion,
    titulo_capitulo,
    numero_capitulo,
    de_pagina,
    a_pagina,
    resumen,
    area_conocimiento_cap,
    campo_cap,
    disciplina_cap,
    subdisciplina_cap,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$titulo_lib',
    '$isbn_cap',
    '$editorial_cap',
    '$edicion_cap',
    '$ano_edic_cap',
    '$titulo_cap',
    '$num_cap',
    '$pag_ini_cap',
    '$pag_fin_cap',
    '$resumen_cap',
    '$area_cap',
    '$campo_cap',
    '$disciplina_cap',
    '$subdisciplina_cap',
    '$idthomson_cap',
    '$idarxiv_cap',
    '$idpubmed_cap',
    '$idopen_cap',

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