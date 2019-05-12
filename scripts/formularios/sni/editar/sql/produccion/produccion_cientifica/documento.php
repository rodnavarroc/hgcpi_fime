<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

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
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_documentos_de_trabajo SET 

    titulo_documento='$titulo_documento',
    titulo_obra='$titulo_obra',
    titulo_publicacion='$titulo_publi',
    de_pagina='$pag_ini_doc',
    a_pagina='$pag_fin_doc',
    ano_publicacion='$ano_publi_doc',
    pais='$pais_doc',
    palabras_clave='$palab_clave',
    area_conocimiento_doc='$area_doc',
    campo_doc='$campo_doc',
    disciplina_doc='$disciplina_doc',
    subdisciplina_doc='$subdisciplina_doc',
    researcher_id_autor='$idthomson_doc',
    arxiv_id_autor='$idarxiv_doc',
    pubmed_id_autor='$idpubmed_doc',
    open_id_autor='$idopen_doc'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  