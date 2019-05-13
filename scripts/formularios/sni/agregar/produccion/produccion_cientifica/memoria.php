<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulo_memoria = $_POST["titulo_memoria"];
$titulo_obra = $_POST["titulo_obra"];
$titulo_publi = $_POST["titulo_publi"];
$pag_ini_mem = $_POST["pag_ini_mem"];
$pag_fin_mem = $_POST["pag_fin_mem"];
$ano_publi_mem = $_POST["ano_publi_mem"];
$pais_lib = $_POST["pais_lib"];
$palab_clave = $_POST["palab_clave"];
$area_mem = $_POST["area_mem"];
$campo_mem = $_POST["campo_mem"];
$disciplina_mem = $_POST["disciplina_mem"];
$subdisciplina_mem = $_POST["subdisciplina_mem"];
$idthomson_mem = $_POST["idthomson_mem"];
$idarxiv_mem = $_POST["idarxiv_mem"];
$idpubmed_mem = $_POST["idpubmed_mem"];
$idopen_mem = $_POST["idopen_mem"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_memorias /* tabla de destino */
(
    titulo,
    titulo_de_obra,
    titulo_publicacion,
    de_pagina,
    a_pagina,
    ano_publicacion,
    pais,
    palabras_clave,
    area_conocimiento_mem,
    campo_mem,
    disciplina_mem,
    subdisciplina_mem,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$titulo_memoria',
    '$titulo_obra',
    '$titulo_publi',
    '$pag_ini_mem',
    '$pag_fin_mem',
    '$ano_publi_mem',
    '$pais_lib',
    '$palab_clave',
    '$area_mem',
    '$campo_mem',
    '$disciplina_mem',
    '$subdisciplina_mem',
    '$idthomson_mem',
    '$idarxiv_mem',
    '$idpubmed_mem',
    '$idopen_mem',

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