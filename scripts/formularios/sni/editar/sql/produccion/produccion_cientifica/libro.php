<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$isbn_lib = $_POST["isbn_lib"];
$titulo_lib = $_POST["titulo_lib"];
$pais_lib = $_POST["pais_lib"];
$idioma_lib = $_POST["idioma_lib"];
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

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_produccion_libros SET 

    isbn='$isbn_lib',
    titulo='$titulo_lib',
    pais='$pais_lib',
    idioma='$idioma_lib',
    ano_publicacion='$ano_publi_lib',
    volumen='$volumen',
    tomo='$tomo',
    tiraje='$tiraje',
    numero_paginas='$num_pag',
    palabras_clave='$palabras_clave',
    editorial='$editorial',
    edicion='$edicion',
    lugar_edicion='$lug_edicion',
    ano_edicion='$ano_edic_lib',
    area_conocimiento_libro='$area_lib',
    campo_libro='$campo_lib',
    disciplina_libro='$disciplina_lib',
    subdisciplina_libro='$subdisciplina_lib',
    researcher_id_autor='$idthomson_lib',
    arxiv_id_autor='$idarxiv_lib',
    pubmed_id_autor='$idpubmed_lib',
    open_id_autor='$idopen_lib'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  