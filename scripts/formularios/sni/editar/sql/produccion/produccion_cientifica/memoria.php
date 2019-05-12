    <?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

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
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_memorias SET 

    titulo='$titulo_memoria',
    titulo_de_obra='$titulo_obra',
    titulo_publicacion='$titulo_publi',
    de_pagina='$pag_ini_mem',
    a_pagina='$pag_fin_mem',
    ano_publicacion='$ano_publi_mem',
    pais='$pais_lib',
    palabras_clave='$palab_clave',
    area_conocimiento_mem='$area_mem',
    campo_mem='$campo_mem',
    disciplina_mem='$disciplina_mem',
    subdisciplina_mem='$subdisciplina_mem',
    researcher_id_autor='$idthomson_mem',
    arxiv_id_autor='$idarxiv_mem',
    pubmed_id_autor='$idpubmed_mem',
    open_id_autor='$idopen_mem'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  