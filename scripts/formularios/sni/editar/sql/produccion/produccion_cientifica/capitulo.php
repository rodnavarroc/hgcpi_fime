<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

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
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_produccion_capitulos SET 

    titulo='$titulo_lib',
    isbn='$isbn_cap',
    editorial='$editorial_cap',
    numero_edicion='$edicion_cap',
    ano_edicion='$ano_edic_cap',
    titulo_capitulo='$titulo_cap',
    numero_capitulo='$num_cap',
    de_pagina='$pag_ini_cap',
    a_pagina='$pag_fin_cap',
    resumen='$resumen_cap',
    area_conocimiento_cap='$area_cap',
    campo_cap='$campo_cap',
    disciplina_cap='$disciplina_cap',
    subdisciplina_cap='$subdisciplina_cap',
    researcher_id_autor='$idthomson_cap',
    arxiv_id_autor='$idarxiv_cap',
    pubmed_id_autor='$idpubmed_cap',
    open_id_autor='$idopen_cap'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  