<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$isbn_lib = $_POST["isbn_lib"];
$titulo_lib = $_POST["titulo_lib"];
$pais_lib = $_POST["pais_lib"];
$ano_publi_lib = $_POST["ano_publi_lib"];
$volumen = $_POST["volumen"];
$tomo = $_POST["tomo"];
$tiraje = $_POST["tiraje"];
$num_pag = $_POST["num_pag"];
$palabras_clave = $_POST["palabras_clave"];
$editorial = $_POST["editorial"];
$edicion = $_POST["edicion"];
$lug_edicion = $_POST["lug_edicion"];
$ano_edic_lib = $_POST["ano_edic_lib"];
$area_lib = $_POST["area_lib"];
$campo_lib = $_POST["campo_lib"];
$disciplina_lib = $_POST["disciplina_lib"];
$subdisciplina_lib = $_POST["subdisciplina_lib"];
$idthomson_lib = $_POST["idthomson_lib"];
$idarxiv_lib = $_POST["idarxiv_lib"];
$idpubmed_lib = $_POST["idpubmed_lib"];
$idopen_lib = $_POST["idopen_lib"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_produccion_libros /* tabla de destino */
(
    isbn,
    titulo,
    pais,
    ano_publicacion,
    volumen,
    tomo,
    tiraje,
    numero_paginas,
    palabras_clave,
    editorial,
    edicion,
    lugar_edicion,
    ano_edicion,
    area_conocimiento_libro,
    campo_libro,
    disciplina_libro,
    subdisciplina_libro,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$isbn_lib',
    '$titulo_lib',
    '$pais_lib',
    '$ano_publi_lib',
    '$volumen',
    '$tomo',
    '$tiraje',
    '$num_pag',
    '$palabras_clave',
    '$editorial',
    '$edicion',
    '$lugar_edicion',
    '$ano_edic_lib',
    '$area_lib',
    '$campo_lib',
    '$disciplina_lib',
    '$subdisciplina_lib',
    '$idthomson_art',
    '$idarxiv_art',
    '$idpubmed_art',
    '$idopen_art',

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